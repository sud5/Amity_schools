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
 * Signup event handlers
 *
 * @package    enrol_signup
 * @copyright  2011 Qontori Pte Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();
require_once(dirname(__FILE__) . '/../../config.php');
require_once($CFG->libdir . '/formslib.php');
require_once(dirname(__FILE__) . '/../../blocks/iomad_company_admin/lib.php');

/**
 * Event handler for signup enrol plugin.
 */
class local_signup_handler {

    public static function user_created (\core\event\user_created $event) {
        global $CFG, $DB;





    $user = $event->get_record_snapshot('user', $event->objectid);
    $fieldid = $DB->get_field('user_info_field', 'id', array('shortname' => 'school_name'));
    $schoolname = $DB->get_field('user_info_data', 'data', array('fieldid' => $fieldid, 'userid' => $user->id));
    $short_name_fieldid = $DB->get_field('user_info_field', 'id', array('shortname' => 'school_short_name'));
    $school_short_name = $DB->get_field('user_info_data', 'data', array('fieldid' => $short_name_fieldid, 'userid' => $user->id));
    $country = isset($user->country) ? $user->country : 'IN';
    $city = isset($user->city) ? $user->city : 'Noida';
        // echo "$schoolname, $school_short_name, $country, $city";        
        // print_object($user);die;
 if(!empty($schoolname) && !empty($school_short_name)){
    $data = new stdClass();
   
    $data->companyid = 0;
    $data->currentparentid = 0;
    $data->companyterminated = 0;
    $data->name = $schoolname;
    $data->shortname = $school_short_name;
    $data->previousroletemplateid = 0;
    $data->city = $city;
    $data->country = $country;
    $data->managernotify = 0;
    $data->managerdigestday = 0;
    $data->emailtemplate = 0;
    $data->emailprofileid = 0;
    $data->companydomains = '';
    $data->maxusers = 0;
    $data->hostname = '';
    $data->roletemplate = 0;
    $data->templates = Array();
    $data->parentid = 0;
    $data->ecommerce = 0;
    $data->validto = 0;
    $data->suspendafter = 0;
    $data->autocourses = 0;
    $data->maildisplay = 2;
    $data->mailformat = 1;
    $data->maildigest = 0;
    $data->autosubscribe = 1;
    $data->trackforums = 0;
    $data->htmleditor = 1;
    $data->timezone = 99;
    $data->lang = 'en';
    $data->theme = 'moove';
    $data->companylogo = 981946439;
    $data->customcss = '';
    $data->headingcolor = '';
    $data->maincolor = '';
    $data->linkcolor = '';
    $data->custommenuitems = '';
    $data->uselogo = 1;
    $data->companycertificateseal = 772932331;
    $data->usesignature = 1;
    $data->companycertificatesignature = 166155310;
    $data->useborder = 1;
    $data->companycertificateborder = 6377342;
    $data->usewatermark = 1;
    $data->companycertificatewatermark = 131465737;
    $data->showgrade = 1;
    $data->createnew = 1;
    $data->submitbutton = 'Save new company';
    $data->title = '';
    $data->description =''; 
    $data->phone = $user->phone1;

        // print_object($data);die;
    self::create_company_data($data,$user->id,$schoolname);
}
    }

    public static function create_company_data($data, $userid, $schoolname){
            $data->userid = $userid;
            $context = context_system::instance();
    $isadding = true;
            global $CFG, $DB;
    if ($isadding) {
        // Set up a profiles field category for this company.
        $catdata = new stdclass();
        $catdata->sortorder = $DB->count_records('user_info_category') + 1;
        $catdata->name = $data->shortname;
        $data->profileid = $DB->insert_record('user_info_category', $catdata);

        // Deal with leading/trailing spaces
        $data->name = trim($data->name);
        $data->shortname = trim($data->shortname);
        $data->city = trim($data->city);

        $companyid = $DB->insert_record('company', $data);
        $company = new company($companyid);

        $eventother = array('companyid' => $companyid);

        $event = \block_iomad_company_admin\event\company_created::create(array('context' => context_system::instance(),
                                                                                'userid' => $userid,
                                                                                'objectid' => $companyid,
                                                                                'other' => $eventother));
        $event->trigger();

        // Set up default department.
        company::initialise_departments($companyid);
        $data->id = $companyid;

        // Set up course category for company.
        $coursecat = new stdclass();
        $coursecat->name = $data->name;
        $coursecat->sortorder = 999;
        $coursecat->id = $DB->insert_record('course_categories', $coursecat);
        $coursecat->context = context_coursecat::instance($coursecat->id);
        $categorycontext = $coursecat->context;
        $categorycontext->mark_dirty();
        $DB->update_record('course_categories', $coursecat);
        fix_course_sortorder();
        $companydetails = $DB->get_record('company', array('id' => $companyid));
        $companydetails->category = $coursecat->id;
        $DB->update_record('company', $companydetails);
        $redirectmessage = get_string('companycreatedok', 'block_iomad_company_admin');

        // Deal with any parent company assignments.
        if (!empty($companydetails->parentid)) {
            $company = new company($companydetails->id);
            $company->assign_parent_managers($companydetails->parentid);
            $companylist = $linkurl;
            $redirectmessage = "";
        }

        // Deal with any assigned templates.
        if (!empty($data->templates)) {
            $company->assign_role_templates($data->templates);
        }

        // Deal with certificate info.
        $certificateinforec = array('companyid' => $companyid,
                                    'uselogo' => $data->uselogo,
                                    'usesignature' => $data->usesignature,
                                    'useborder' => $data->useborder,
                                    'usewatermark' => $data->usewatermark,
                                    'showgrade' => $data->showgrade);
        $DB->insert_record('companycertificate', $certificateinforec);

    } else {
        $data->id = $companyid;

        $company = new company($companyid);
        $oldcompany = $DB->get_record('company', array('id' => $companyid));
        $oldtheme = $company->get_theme();
        $themechanged = $oldtheme != $data->theme;

        // Check if we have a new expiration date.
        if (!empty($data->validto)) {
            if (!empty($oldcompany->companyterminated) && $data->validto > $oldcompany->validto) {
                $data->companyterminated = 0;
            }
        }

        if ($themechanged) {
            $company->update_theme($data->theme);
        }

        //  Has the company name changed?
        if ($topdepartment = $company->get_company_parentnode($companyid)) {
            if ($topdepartment->name != $data->name) {
                $topdepartment->name = $data->name;
                $topdepartment->shorname = $data->shortname;
                $DB->update_record('department', $topdepartment);
            }
        }

        $redirectmessage = get_string('companysavedok', 'block_iomad_company_admin');

        // Has the company parentid changed?
        $companyparent = $company->get_parentid();
        if ($companyparent != $data->parentid) {
            // Is there currently a company parent set?
            if (!empty($companyparent)) {
                // Clear the old ones.
                $company->unassign_parent_managers($companyparent);
            }

            // Update the company record.
            $DB->update_record('company', $data);

            if (!empty($data->parentid)) {
                // Assign the new ones.
                $company->assign_parent_managers($data->parentid);
            }

            // We only want to change the parent, not submit the form.
            $companylist = $linkurl;
            $redirectmessage = "";
        }

        // Did we apply a template?
        if (!empty($data->roletemplate)) {
            if ($data->roletemplate != 'i') {
                $data->previousroletemplateid = $data->roletemplate;
            } else {
                $data->previousroletemplateid = -1;
            }
        }

        $DB->update_record('company', $data);
        // Fire an event for this.
        $eventother = array('companyid' => $companyid,
                            'oldcompany' => json_encode($oldcompany));

        $event = \block_iomad_company_admin\event\company_updated::create(array('context' => context_system::instance(),
                                                                                'userid' => $userid,
                                                                                'objectid' => $companyid,
                                                                                'other' => $eventother));
        $event->trigger();

        // Deal with certificate info.
        $certificateinforec = (array) $DB->get_record('companycertificate', array('companyid' => $companyid));
            if (!empty($certificateinforec['id'])) {
            $certificateinforec['uselogo'] = $data->uselogo;
            $certificateinforec['usesignature'] = $data->usesignature;
            $certificateinforec['useborder'] = $data->useborder;
            $certificateinforec['usewatermark'] = $data->usewatermark;
            $certificateinforec['showgrade'] = $data->showgrade;
            $DB->update_record('companycertificate', $certificateinforec);
        } else {
            $certificateinforec = array('companyid' => $companyid,
                                        'uselogo' => $data->uselogo,
                                        'usesignature' => $data->usesignature,
                                        'useborder' => $data->useborder,
                                        'usewatermark' => $data->usewatermark,
                                        'showgrade' => $data->showgrade);
            $DB->insert_record('companycertificate', $certificateinforec);
        }

        if (company_user::is_company_user()) {
            company_user::reload_company();
        }
    }

    $company = new company($data->id);

    // Deal with role templates.
    if (!empty($data->roletemplate)) {
        // We need to do something with the roles.
        if ($data->roletemplate == 'i') {
            if (!empty($data->parentid)) {
                // Apply the same roles as per the parent company.
                $company->apply_role_templates();
            }
        } else {
            $company->apply_role_templates($data->roletemplate);
        }
    }

    // Deal with email templates.
    if (!empty($data->emailtemplate) && iomad::has_capability('local/email:edit', $context)) {
        // We need to do something with the email templates.
        $company->apply_email_templates($data->emailtemplate);
    }

    // Deal with any assigned templates.
    if (empty($data->templates)) {
        $data->templates = array();
    }
    $company->assign_role_templates($data->templates, true);

    // if (!empty($data->companylogo)) {
    //     file_save_draft_area_files($data->companylogo,
    //                                $context->id,
    //                                'theme_iomad',
    //                                'companylogo',
    //                                $data->id,
    //                                array('subdirs' => 0, 'maxbytes' => 150 * 1024, 'maxfiles' => 1));
    // }
    // if (!empty($data->companycertificateseal)) {
    //     file_save_draft_area_files($data->companycertificateseal,
    //                                $context->id,
    //                                'local_iomad',
    //                                'companycertificateseal',
    //                                $data->id,
    //                                array('subdirs' => 0, 'maxbytes' => 150 * 1024, 'maxfiles' => 1));
    // }
    // if (!empty($data->companycertificatesignature)) {
    //     file_save_draft_area_files($data->companycertificatesignature,
    //                                $context->id,
    //                                'local_iomad',
    //                                'companycertificatesignature',
    //                                $data->id,
    //                                array('subdirs' => 0, 'maxbytes' => 150 * 1024, 'maxfiles' => 1));
    // }
    // if (!empty($data->companycertificateborder)) {
    //     file_save_draft_area_files($data->companycertificateborder,
    //                                $context->id,
    //                                'local_iomad',
    //                                'companycertificateborder',
    //                                $data->id,
    //                                array('subdirs' => 0, 'maxbytes' => 150 * 1024, 'maxfiles' => 1));
    // }
    // if (!empty($data->companycertificatewatermark)) {
    //     file_save_draft_area_files($data->companycertificatewatermark,
    //                                $context->id,
    //                                'local_iomad',
    //                                'companycertificatewatermark',
    //                                $data->id,
    //                                array('subdirs' => 0, 'maxbytes' => 150 * 1024, 'maxfiles' => 1));
    // }
    // if (!empty($data->companydomains)) {
    //     $domainsarray = preg_split('/[\r\n]+/', $data->companydomains, -1, PREG_SPLIT_NO_EMPTY);
    //     // Delete any recorded domains for this company.
    //     $DB->delete_records('company_domains', array('companyid' => $companyid));
    //     foreach ($domainsarray as $domain) {
    //         if (!empty($domain)) {
    //             $DB->insert_record('company_domains', array('companyid' => $companyid, 'domain' => $domain));
    //         }
    //     }
    // }

    // Deal with autoenrol courses.
    // $DB->set_field('company_course', 'autoenrol', false, array('companyid' => $companyid));
    // if (!empty($data->autocourses)) {
    //     foreach ($data->autocourses as $autoid) {
    //         $DB->set_field('company_course', 'autoenrol', true, array('companyid' => $companyid, 'courseid' => $autoid));
    //     }
    // }
require_once(dirname(__FILE__) . '/../iomad/lib/company.php');
   $selectedcompany = $companyid;
   $departmentid = $DB->get_field('department', 'id', array('name' => $schoolname)); //department id 
   $userdata = new stdClass();
   $userdata->companyid = $companyid;
   $userdata->userid = $userid; 
   $userdata->managertype = 0; 
   $userdata->departmentid = $departmentid; 
   $userdata->suspended = 0;  
   $userdata->educator = 0; 
   
   $roletype = 0;
   $educator = false;
   // $DB->insert_record('company_users',$userdata);
   company::upsert_company_user($userid, $selectedcompany, $departmentid, $roletype, $educator);

   $roletype = 1;
   $educator = true;
   company::upsert_company_user($userid, $selectedcompany, $departmentid, $roletype, $educator);
    }

}
