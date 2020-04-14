<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Course renderer.
 *
 * @package    theme_maker
 * @copyright  2017 Willian Mano - conecti.me
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace theme_maker\output\core;

defined('MOODLE_INTERNAL') || die();

use moodle_url;
use html_writer;
use coursecat;
use coursecat_helper;
use stdClass;
//use course_in_list; 
//require_once($CFG->libdir. '/coursecatlib.php');
//$course = new course_in_list($course);
/* Moodle 3.6+ Class coursecat is now alias to autoloaded class core_course_category, course_in_list is an alias to core_course_list_element. Class coursecat_sortable_records is deprecated without replacement. Do not include coursecatlib.php */
use core_course_list_element;

/**
 * Renderers to align maker's course elements to what is expect
 *
 * @package    theme_maker
 * @copyright  2017 Willian Mano - http://conecti.me
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class course_renderer extends \core_course_renderer {

    /**
     * Renders the list of courses
     *
     * This is internal function, please use {@link core_course_renderer::courses_list()} or another public
     * method from outside of the class
     *
     * If list of courses is specified in $courses; the argument $chelper is only used
     * to retrieve display options and attributes, only methods get_show_courses(),
     * get_courses_display_option() and get_and_erase_attributes() are called.
     *
     * @param coursecat_helper $chelper various display options
     * @param array $courses the list of courses to display
     * @param int|null $totalcount total number of courses (affects display mode if it is AUTO or pagination if applicable),
     *     defaulted to count($courses)
     * @return string
     */
    protected function coursecat_courses(coursecat_helper $chelper, $courses, $totalcount = null) {
        global $CFG, $PAGE;
        if ($totalcount === null) {
            $totalcount = count($courses);
        }

        if (!$totalcount) {
            // Courses count is cached during courses retrieval.
            return '';
        }

        if ($chelper->get_show_courses() == self::COURSECAT_SHOW_COURSES_AUTO) {
            // In 'auto' course display mode we analyse if number of courses is more or less than $CFG->courseswithsummarieslimit.
            if ($totalcount <= $CFG->courseswithsummarieslimit) {
                $chelper->set_show_courses(self::COURSECAT_SHOW_COURSES_EXPANDED);
            } else {
                $chelper->set_show_courses(self::COURSECAT_SHOW_COURSES_COLLAPSED);
            }
        }

        // Prepare content of paging bar if it is needed.
        $paginationurl = $chelper->get_courses_display_option('paginationurl');
        $paginationallowall = $chelper->get_courses_display_option('paginationallowall');
        if ($totalcount > count($courses)) {
            // There are more results that can fit on one page.
            if ($paginationurl) {
                // The option paginationurl was specified, display pagingbar.
                $perpage = $chelper->get_courses_display_option('limit', $CFG->coursesperpage);
                $page = $chelper->get_courses_display_option('offset') / $perpage;
                $pagingbar = $this->paging_bar($totalcount, $page, $perpage,
                        $paginationurl->out(false, array('perpage' => $perpage)));
                if ($paginationallowall) {
                    $pagingbar .= html_writer::tag('div', html_writer::link($paginationurl->out(false, array('perpage' => 'all')),
                            get_string('showall', '', $totalcount)), array('class' => 'paging paging-showall'));
                }
            } else if ($viewmoreurl = $chelper->get_courses_display_option('viewmoreurl')) {
                // The option for 'View more' link was specified, display more link.
                $viewmoretext = $chelper->get_courses_display_option('viewmoretext', new \lang_string('viewmore'));
                $morelink = html_writer::tag('div', html_writer::link($viewmoreurl, $viewmoretext),
                        array('class' => 'paging paging-morelink'));
            }
        } else if (($totalcount > $CFG->coursesperpage) && $paginationurl && $paginationallowall) {
            // There are more than one page of results and we are in 'view all' mode, suggest to go back to paginated view mode.
            $pagingbar = html_writer::tag(
                'div',
                html_writer::link(
                    $paginationurl->out(
                        false,
                        array('perpage' => $CFG->coursesperpage)
                    ),
                    get_string('showperpage', '', $CFG->coursesperpage)
                ),
                array('class' => 'paging paging-showperpage')
            );
        }

        // Display list of courses.
        $attributes = $chelper->get_and_erase_attributes('courses');        
        $content = html_writer::start_tag('div', $attributes);

        if (!empty($pagingbar)) {
            $content .= $pagingbar;
        }

        $coursecount = 1;

        if ($PAGE->theme->settings->coursedisplaystyle == 1) {
	         $content .= html_writer::start_tag('div', array('class' => 'courses-wrapper')); 
        } elseif ($PAGE->theme->settings->coursedisplaystyle == 2) {
	         $content .= html_writer::start_tag('div', array('class' => 'courses-wrapper style-cards row'));
        } else {
	         $content .= html_writer::start_tag('div', array('class' => 'courses-wrapper style-masonry'));
        }
        
        $courseboxclass = 'theme-course-item';
        
        if ($PAGE->theme->settings->coursedisplaystyle == 2) {
	        $courseboxclass .= ' col-12 col-md-6 col-lg-4';
        }
        
        foreach ($courses as $course) {
            $content .= $this->coursecat_coursebox($chelper, $course, $courseboxclass);
            

            $coursecount ++;
        }

        $content .= html_writer::end_tag('div');

        if (!empty($pagingbar)) {
            $content .= $pagingbar;
        }

        if (!empty($morelink)) {
            $content .= $morelink;
        }

        $content .= html_writer::end_tag('div'); // End courses.
        return $content;
    }

    /**
     * Displays one course in the list of courses.
     *
     * This is an internal function, to display an information about just one course
     * please use {@link core_course_renderer::course_info_box()}
     *
     * @param coursecat_helper $chelper various display options
     * @param core_course_list_element|stdClass $course
     * @param string $additionalclasses additional classes to add to the main <div> tag (usually
     *    depend on the course position in list - first/last/even/odd)
     * @return string
     */
    protected function coursecat_coursebox(coursecat_helper $chelper, $course, $additionalclasses = '') {
        global $CFG;
        if (!isset($this->strings->summary)) {
            $this->strings->summary = get_string('summary');
        }
        if ($chelper->get_show_courses() <= self::COURSECAT_SHOW_COURSES_COUNT) {
            return '';
        }
        
        if ($course instanceof stdClass) {
            //require_once($CFG->libdir. '/coursecatlib.php');
            //$course = new course_in_list($course);
            /* Moodle 3.6+ Class coursecat is now alias to autoloaded class core_course_category, course_in_list is an alias to core_course_list_element. Class coursecat_sortable_records is deprecated without replacement. Do not include coursecatlib.php */
            $course = new core_course_list_element($course);
        }
        
        $content = html_writer::start_tag('div', array('class' => $additionalclasses));

        $classes = trim('course-item-inner inner');
        if ($chelper->get_show_courses() >= self::COURSECAT_SHOW_COURSES_EXPANDED) {
            $nametag = 'h3';
        } else {
            $classes .= ' collapsed';
            $nametag = 'div';
        }

        // End coursebox.
        $content .= html_writer::start_tag('div', array(
            'class' => $classes,
            'data-courseid' => $course->id,
            'data-type' => self::COURSECAT_TYPE_COURSE,
        ));

        $content .= $this->coursecat_coursebox_content($chelper, $course);

        $content .= html_writer::end_tag('div'); // End coursebox.

        $content .= html_writer::end_tag('div'); // End courses-wrapper

        return $content;
    }

    /**
     * Returns HTML to display course content (summary, course contacts and optionally category name)
     *
     * This method is called from coursecat_coursebox() and may be re-used in AJAX
     *
     * @param coursecat_helper $chelper various display options
     * @param stdClass|core_course_list_element $course
     * @return string
     */
    protected function coursecat_coursebox_content(coursecat_helper $chelper, $course) {
        global $CFG, $PAGE;

        if ($course instanceof stdClass) {
            //require_once($CFG->libdir. '/coursecatlib.php');
            //$course = new course_in_list($course);
            /* Moodle 3.6+ Class coursecat is now alias to autoloaded class core_course_category, course_in_list is an alias to core_course_list_element. Class coursecat_sortable_records is deprecated without replacement. Do not include coursecatlib.php */
            $course = new core_course_list_element($course);
        }
        
        /* Course summary */
        //$coursesummary = $chelper->get_course_formatted_summary($course);
        $coursesummary = format_text($course->summary); //Support Moodle's content filter for multilang via format_text()
        $coursesummarylength = $PAGE->theme->settings->coursesummarylength;
        $cleancoursesummary = theme_maker_strip_html_tags($coursesummary);//Clean course summary - strip html tags (function defined in lib.php)
        $cleancoursesummarytrim = theme_maker_course_trim_char($cleancoursesummary, $coursesummarylength);//Trim course summary (function defined in lib.php)
   
        // Course name.
        $coursename = $chelper->get_course_formatted_name($course);

    //Added additional custom pages for courses
        if($PAGE->pagetype=="site-index"){
            $coursenamelink = html_writer::link(new moodle_url('/courses/view.php', array('id' => $course->id)),
            $coursename, array('class' => $course->visible ? '' : 'dimmed')); 
        }else{
            $coursenamelink = html_writer::link(new moodle_url('/course/view.php', array('id' => $course->id)),
            $coursename, array('class' => $course->visible ? '' : 'dimmed')); 
        }
   
                                        
        $content = $this->get_course_summary_image($course);        
        $content .= html_writer::start_tag('div', array('class' => 'course-content-wrapper'));
        $content .= html_writer::start_tag('div', array('class' => 'course-content'));
        $content .= "<h4 data='".$PAGE->pagetype."'  class='course-title'>". $coursenamelink ."</h4>";
        
        

        // Display course summary.
        if ($course->has_summary()) {
            $content .= html_writer::start_tag('div', array('class' => 'course-summary'));
           // removed course trim in course page
           if ($PAGE->theme->settings->usecoursesummarytrim == 1 && $PAGE->pagetype != 'enrol-index') {
	           $content .= $cleancoursesummarytrim;
           } else {
	           $content .= $coursesummary;
           }
           
           
 
           $content .= html_writer::end_tag('div'); // End summary.
        }

        $content .= html_writer::end_tag('div');

        $content .= html_writer::start_tag('div', array('class' => 'course-meta'));

        // Print enrolmenticons.
        if ($icons = enrol_get_course_info_icons($course)) {
            foreach ($icons as $pixicon) {
                $content .= $this->render($pixicon);
            }
        }


        $content .= html_writer::end_tag('div'); // End course-meta
        

        // Display course contacts. See course_in_list::get_course_contacts().
        if ($course->has_course_contacts()) {
            $content .= html_writer::start_tag('ul', array('class' => 'teachers list-inline'));
            foreach ($course->get_course_contacts() as $userid => $coursecontact) {
                $name = $coursecontact['rolename'].': '.
                        html_writer::link(new moodle_url('/user/view.php',
                                array('id' => $userid, 'course' => SITEID)),
                            $coursecontact['username']);
                $content .= html_writer::tag('li', $name, array('class' => 'coursecat'));
            }
            $content .= html_writer::end_tag('ul'); // End teachers.
        }
        
        

        // Display course category if necessary (for example in search results).
        if ($chelper->get_show_courses() == self::COURSECAT_SHOW_COURSES_EXPANDED_WITH_CAT) {
            require_once($CFG->libdir. '/coursecatlib.php');
            if ($cat = coursecat::get($course->category, IGNORE_MISSING)) {
                $content .= html_writer::start_tag('div', array('class' => 'coursecat'));
                $content .= get_string('category').': '.
                        html_writer::link(new moodle_url('/course/index.php', array('categoryid' => $cat->id)),
                                $cat->get_formatted_name(), array('class' => $cat->visible ? '' : 'dimmed'));
                $content .= html_writer::end_tag('div'); // End coursecat.
            }
        }
        
        $content .= html_writer::end_tag('div'); // End course-content-wrapper

        return $content;
    }

    /**
     * Returns the first course's summary issue
     *
     * @param stdClass $course the course object
     * @return string
     */
    protected function get_course_summary_image($course) {
        global $CFG, $PAGE;

        $contentimage = '';
        foreach ($course->get_course_overviewfiles() as $file) {
            $isimage = $file->is_valid_image();
            $url = file_encode_url("$CFG->wwwroot/pluginfile.php",
                    '/'. $file->get_contextid(). '/'. $file->get_component(). '/'.
                    $file->get_filearea(). $file->get_filepath(). $file->get_filename(), !$isimage);
            if ($isimage) {
	                $contentimage = html_writer::start_tag('div', array('class' => 'course-thumb-holder hasimage'));
                    $contentimage .= html_writer::empty_tag('img', array('src' => $url, 'alt' => 'Course Image '. $course->fullname,
                        'class' => 'course-thumb'));

                    $contentimage .= html_writer::end_tag('div'); 
                    break;
            }
        }

        if (empty($contentimage)) {
       
            $contentimage = html_writer::start_tag('div', array('class' => 'course-thumb-holder noimage'));    
            //Use material icons if has internet otherwise use fontawesome
            if ($PAGE->theme->settings->hasinternet == 1) {       
                $contentimage .= html_writer::start_tag('i', array('class' => 'material-icons'));
                $contentimage .= "&#xE80C;";
            } else {
	            $contentimage .= html_writer::start_tag('i', array('class' => 'fa fa-graduation-cap'));
            }
            
            $contentimage .= html_writer::end_tag('i'); 
            $contentimage .= html_writer::end_tag('div'); 
            
        }

        return $contentimage;
    }
    
    
   
    
    
}
