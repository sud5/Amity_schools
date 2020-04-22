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
 * Moodle frontpage.
 *
 * @package    core
 * @copyright  1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

if (!file_exists('./config.php')) {
    header('Location: install.php');
    die;
}

require_once('config.php');
require_once($CFG->dirroot .'/course/lib.php');
require_once($CFG->libdir .'/filelib.php');

redirect_if_major_upgrade_required();

if (!isloggedin()) { ?>
<link rel="stylesheet" href="amigo/vendors/bootstrap/dist/css/bootstrap.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="amigo/assets/dist/css/app.css">
	
	<link rel="stylesheet" href="amigo/assets/dist/css/header-bootstrap.min.css">
	
	<link rel="stylesheet" href="amigo/assets/dist/css/header-slicknav.css">
	
	<link rel="stylesheet" href="amigo/assets/dist/css/header-style.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<body>
<header class="header-bar bg-white shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-light container">

        <a class="navbar-brand" href="index.php">
            <img src="https://amigolms.com/amigo/assets/images/logo.jpg" alt="amigo" height="50px">
        </a>

        <!--Navigation Menu -->
        <ul class="list-unstyled ml-auto d-flex mb-0">
            <li class="nav-item mr-lg-3">
                <a class="nav-link" href="login/index.php">
                    Login
                </a>
            </li>
            <li class="nav-item">
                <a class="btn btn-danger px-4" href="login/signup.php">Sign up</a>
            </li>
        </ul>

    </nav>
</header>

<header>
        <div class="header-area ">

            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_wrap d-flex justify-content-between align-items-center">
                                <div class="header_left">
                                    <div class="logo">
                                        <a href=<?php echo $CFG->wwwroot.'/index.php' ?>>
                                            <img src="amigo/assets/images/logo.jpg" alt="Amigo logo" class="logo-brand">
                                        </a>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    <!--<div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a  href="index.html">home</a></li>
                                                <li><a href="Courses.html">Courses</a></li>
                                                <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.html">blog</a></li>
                                                        <li><a href="single-blog.html">single-blog</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="Event.html">Event</a></li>
                                                        <li><a href="event_details.html">Event Details</a></li>
                                                        <li><a href="Admissions.html">Admissions</a></li>
                                                        <li><a href="elements.html">elements</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>-->
                                    <div class="Appointment">
                                        <div class="press-login">
                                            <a href= <?php echo $CFG->wwwroot.'/login/index.php' ?> >Login </a>
                                        </div>

										<div class="btn btn-danger px-4">
                                            <a href=<?php echo $CFG->wwwroot.'/login/signup.php'?>>Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->


    <section class="hero bg-light-b-3 banner-container position-relative py-5 bg-shapes-section">

        <!-- This is using for bg shapes -->
        <div class="shap one"></div>
        <div class="shap one two"></div>
        <!-- End This is using for bg shapes -->


        <div class="container mt-5 pt-5">
            <div class="row">

                <!-- Hero Banner Heading & Caption -->
                <div class="col-lg-5">
                    <div class="hero-caption">
                        <h1 class="heading-text font-weight-bolder">
                            Taking Student Learning Online With Amigo For School / Institute / University
                        </h1>
                        <p>
                            We’re here to provide FREE access to Amity’s powerful Learning Management System!
                        </p>
                        <div class="w-100 mt-5 d-flex">
                            <a href=<?php echo $CFG->wwwroot.'/login/signup.php'?>><button class="btn btn-danger btn-lg">Get Start!</button></a>
<!--                            <a href="#" class="video-btn ml-lg-5 ml-3 decoration-none btn-animation-line"
                                data-toggle="modal" data-src="https://www.youtube.com/embed/-C9NIoSiohQ"
                                data-target="#myVideo">
                                <span class="btn bg-white shadow mr-2"> <i class="fa fa-play text-danger"></i></span>
                                <span class="apply-animation">Watch Video</span>
                            </a>-->
                        </div>
                    </div>
                </div>
                <!-- End Hero Banner Heading & Caption -->

                <!-- Hero Banner  Image-->
                <div class="col-lg-7">
                    <img src="amigo/dump/banner-1.svg" alt="Hero Banner" class="img-fluid">
                </div>
                <!--End Hero Banner  -->

            </div> <!-- Hero Banner Row -->
        </div> <!-- Hero Banner Container Image-->
    </section>


    <section class="py-5">
        <div class="container my-lg-5">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2 text-center mb-lg-5 mb-3">
                    <h2 class="font-weight-bolder">
                        A Few of the Many Ways You Can Improve Teaching, Learning, and Working
                    </h2>
                    <p>Take your students through an engaging learning journey with our power packed LMS:</p>
                </div><!-- End col with offset -->
                <div class="col-12 col-lg-6 mb-5">
                    <img src="amigo/dump/2.png" alt="img-tab-1" class="img-fluid">
                </div><!-- End col -->
                <div class="col-12 col-lg-6">
                    <h4>
                        Take your students through an engaging learning journey with our power packed LMS:
                    </h4>
                    <ul class="pl-4">
                        <li class="py-2">
                            Bulk course creation and easy backup.
                        </li>
                        <li class="py-2">
                            Collaborative tools and activities.
                        </li>
                        <li class="py-2">
                            Course Authoring tool as per four quadrant approach
                        </li>
                        <li class="py-2">
                            Course delivery using built-in innovative tools & resources
                        </li>
                    </ul>
                    <a href=<?php echo $CFG->wwwroot.'/login/signup.php'?>><button class="btn btn-danger btn-lg">Empower Your Students</button></a>
                </div><!-- End col -->
            </div><!-- End row -->
        </div><!-- End container -->
    </section>

	<section class="offering-online-courses" >
		<div class="container">
			<h1>Quickly begin offering online courses to your students</h1>
            <div class="row ">
				<div class="col-md-4 learning" style="border:1px solid #036;background: linear-gradient(to right,#287a9f,#43a585);padding-bottom: 55px;display: block;border-radius: 50%;">
					<div class="content">
						<h2>K-12</h2>
						<p>Understand and impact student achievement.</p>
					</div>
						<img width="100" height="100" src="amigo/assets/images/k-12.png" class="img-Logo" >
					<div class="cta-wrapper">
						<a href="login/signup.php" class="button-outline learning-button">Explore</a>
						
						</div>
				</div>
				
				<div class="col-md-4 Multi-language" style="border:1px solid #036;background: linear-gradient(to right,#E61E25,#d41b5d);display: block;padding-bottom: 55px;
    border-radius: 50%;">
	
					<div class="content">
						<h2>Higher Ed</h2>
						<p>Help students and faculty succeed in a modern learning environment.</p>
					</div>
						<img width="100" height="100" src="amigo/assets/images/Higher-Education.png" class="img-Logo" >
					<div class="cta-wrapper">
						<a href="login/signup.php" class="button-outline Multi-language-button">Explore</a>
						
					</div>
				</div>
				
				<div class="col-md-4 manage" style="border:1px solid #036;background: linear-gradient(to right,#287a9f,#21A0C1);display: block;padding-bottom: 70px;border-radius: 50%;">
					<div class="content">
						<h2>Corporate Edu</h2>
						<p>Corporate Education refers to a system of professional development activities</p>
					</div>
						<img width="100px" height="100px" src="amigo/assets/images/corporate-education.png" class="img-Logo" >
					<div class="cta-wrapper">
						<a href="login/signup.php" class="button-outline manage-button">Explore</a>
						
					</div>
				</div>
				
				
			</div>
		</div>
	</section>
		
	
    <section class="py-5  bg-shapes-style">
        <div class="container">
            <div class="row my-lg-5">
                <div class="col-12 col-lg-5 text-center text-lg-left mb-5">
                    <h3 class="font-weight-bold h2 mt-lg-5">
                        Who Is AMIGO?
                    </h3>
                    <p>
                        We believe everyone has the power to grow and succeed throughout their lifetime. So our mission
                        is to help people grow from the first day of school to the last day of work. We create intuitive
                        products that simplify learning and personal development, facilitate meaningful relationships,
                        and inspire people to go further in both their educational journeys and their careers.
                    </p>
                    <a href="#!" class="decoration-none btn-animation-line font-weight-bold h6">
                        <span class="apply-animation">Know More <i class="fa fa-arrow-right"></i></span>
                    </a>
                </div><!-- End col -->
                <div class="col-12 col-lg-7">
                    <ul class="mb-0 list-unstyled grid grid-col-lg-2 grid-col-xs-2">
                        <li class="rounded px-2 py-4 text-center row-2-ls">
                            <b>27+ Years</b>
                            <span>of Education Excellence</span>
                        </li>
                        <li class="rounded px-2 py-4 text-center row-2-ls">
                            <b>9</b>
                            <span>Number of Learners</span>
                        </li>
                        <li class="rounded px-2 py-4 text-center row-2-ls">
                            <b>92%</b>
                            <span>Completion Rate</span>
                        </li>
                        <li class="rounded px-2 py-4 text-center row-2-ls">
                            <b>13</b>
                            <span>International Campuses</span>
                        </li>
                        <li class="rounded px-2 py-4 text-center row-2-ls">
                            <b>2.5 Million +</b>
                            <span>Social followers & counting</span>
                        </li>
                        <li class="rounded px-2 py-4 text-center row-2-ls">
                            <b>6000</b>
                            <span>Faculties & Industry experts</span>
                        </li>
                        <li class="rounded px-2 py-4 text-center row-2-ls">
                            <b>A+ Grade</b>
                            <span>NAAC Accredited</span>
                        </li>
                    </ul>
                </div><!-- End col -->
            </div><!-- End row -->
        </div><!-- End container -->
    </section>



    <section class="py-5">
        <div class="container my-lg-5">
            <div class="row">
                <div class="col-12 col-lg-9 offset-lg-2 text-center mb-lg-5 mb-3">
                    <h2 class="font-weight-bolder">
                        Some of the Awesome Client We Work With
                    </h2>
                </div><!-- End col with offset -->
                <div class="col-12">
                    <ul class="grid grid-col-lg-5 grid-col-xs-3  grid-col-md-5 list-unstyled">
                       
                        <li class="d-flex align-items-center">
                            <img src="amigo/assets/images/amity-university.jpg" alt="1" class="img-fluid">
                        </li>
						 <li class="d-flex align-items-center">
                            <img src="amigo/assets/images/amity-university-online.png" alt="1" class="img-fluid">
                        </li>
                        <li class="d-flex align-items-center">
                            <img src="amigo/assets/images/amity-future-acadmy2.png" alt="1" class="img-fluid">
                        </li>
                        <li class="d-flex align-items-center">
                            <img src="amigo/assets/images/amity-opne-learn.jpeg" alt="1" class="img-fluid">
                        </li>
                        <li class="d-flex align-items-center">
                            <img src="amigo/assets/images/amity-school-dubai.png" alt="1" class="img-fluid">
                        </li>
                    </ul>
                </div>

            </div><!-- End row -->
        </div><!-- End container -->
    </section>



    <section class="position-relative bg-light img-style-suffal">
        <div class="container">
            <div class="row my-lg-5">
                <div class="col-12 col-lg-5 mb-5">
                    <h3 class="font-weight-bold h2 mt-lg-5">
                        Are you ready to advance what's possible in education?
                    </h3>
                    <p>
                        Take classes on the go with the AMIGO app. Stream or download to watch on the plane, the
                        subway, or wherever you learn best.
                    </p>
                    <div class="w-100 mt-5 d-flex">
                        <a href=<?php echo $CFG->wwwroot.'/login/signup.php'?>><button class="btn btn-danger btn-lg">Get Start!</button></a>
<!--                        <a href="#!" class="video-btn ml-lg-5 ml-3 decoration-none btn-animation-line"
                            data-toggle="modal" data-src="https://www.youtube.com/embed/-C9NIoSiohQ"
                            data-target="#myVideo">
                            <span class="btn bg-white shadow mr-2" style="border-radius: 38px !important;width: 40px !important"> <i class="fa fa-play text-danger"></i></span>
                            <span class="apply-animation">Watch Video</span>
                        </a>-->
                    </div>
                </div><!-- End col -->
                <div class="col-12 col-lg-7">
                    <!--<div class="app-tab">
                        <img src="amigo/dump/tablet-mockup.png" alt="tab-img">
                    </div>
                    <div class="app-mobile">
                        <img src="amigo/dump/phone-mockup.png" alt="mob-img">
						
                    </div>-->
					<img src="amigo/assets/images/tablet-mockup2.png" alt="mob-img" style="width:80%">
                </div><!-- End col -->
            </div><!-- End row -->
        </div><!-- End container -->
    </section>


<!--<section class="footer-bg">
	<div class="container">
        <div class="row">
			<h3>Train your people. Measure results. Drive growth.</h3>
			<p>AmigoLMS gives you the tools to supercharge every step of your training.</p>
			<div class="col-md-5 domain">
				<div class="row">
					<div class="col-md-8">
					<input type="text" placeholder="Your Doamin Name" class="domain-search" style="border-radius: 20px 0px 3px 20px;">
					</div>
					<div class="col-md-4">
					<p style="border-radius: 0px 20px 20px 0px; background:#5d94d3; color: #fff;margin-left: -25%;padding: 2px 5px 2px 0;">amigolms.com</p>
					</div>
				</div>
				
				<span style="text-align:right">amigolms.amityonline.com/</span>
			</div>
			
			<div class="col-md-5 search-email">
				<input type="text" placeholder="Your Email">
			</div>
			
			<div class="col-md-2 footer-button">
				<button type="button" class="">Get Start </button>
			</div>
			
		</div>
	</div>
</section>-->


<section class="footer-bg2">
	<div class="container">
          
	</div>
</section>


    <footer class="bg-primary py-5 footer-bg2">
        <div class="container">
              <div class="row">
			
				<div class="col-md-3">
					<h4>Product</h4>
					<ul>
						<li>Amigo-LMS</li>
						<li>Amity online</li>
						<li>Amity School</li>
						<li>Amity Future Academy</li>
					</ul>
				</div>
				
				<div class="col-md-3">
					<h4>Other Links</h4>
					<ul>
						<li>About </li>
						<li>Terms of Use</li>
						<li>Privacy Policy</li>
						
					</ul>
				</div>
				
				
				
				<div class="col-md-3 social-icon">
					<h4>Stay in Touch</h4>
					<ul>
						<li><a href="https://www.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>  </li>
						<li><a href="https://twitter.com/login"> <i class="fa fa-twitter-square" aria-hidden="true"></i></a> </li>
						<li><a href="https://www.linkedin.com/login"><i class="fa fa-Linkedin-square" aria-hidden="true"></i></a></li>
						<li><a href="https://www.youtube.com/"><i class="fa fa-Youtube-square" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				
				<div class="col-md-3">
					<h4>Contact Us</h4>
					<p>phone no :7428001444 </p>
					<p>Email id :info@gmail.com </p>
						
				</div>
				
				
			</div>
			
			<!--<div class="row">
                <div class="col-12 text-white text-center">
                    <p>For Technical Support - 7428001444 (Monday to Friday 9 AM - 6 PM).</p>
                    <ul class="list-unstyled mb-0 d-inline-flex flex-wrap mb-3">
                        <li><a href="#!" class="px-3 text-light">Terms of Use</a></li>
                        <li><a href="#!" class="px-3 text-light">Privacy Policy</a></li>
                        <li><a href="#!" class="px-3 text-light">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-12 text-muted text-center small">
                    <hr>
                    2020 Amity Online. All rights reserved.
                </div>
            </div>-->
        </div>
    </footer>


    <script src="amigo/vendors/jquery/jquery.slim.min.js"></script>
    <script src="amigo/vendors/bootstrap/dist/js/popper.min.js"></script>
    <script src="amigo/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="amigo/assets/dist/js/custom.js"></script>
	
	<script src="amigo/assets/dist/js/bootstrap.min.js"></script>
	<script src="amigo/assets/dist/js/jquery-1.12.4.min.js"></script>
	<script src="amigo/assets/dist/js/jquery.slicknav.min.js"></script>
	<script src="amigo/assets/dist/js/main.js"></script>




    <!-- Modal Video -->
    <div class="modal fade  bd-example-modal-lg" id="myVideo" tabindex="-1" role="dialog" aria-labelledby="myVideoLabel"
        aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-dialog modal-lg" role="document">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                    allow="autoplay"></iframe>
            </div>
        </div>
    </div>




</body> 
</html>
<?php
}else{

$urlparams = array();
if (!empty($CFG->defaulthomepage) && ($CFG->defaulthomepage == HOMEPAGE_MY) && optional_param('redirect', 1, PARAM_BOOL) === 0) {
    $urlparams['redirect'] = 0;
}
$PAGE->set_url('/', $urlparams);
$PAGE->set_pagelayout('frontpage');
$PAGE->set_other_editing_capability('moodle/course:update');
$PAGE->set_other_editing_capability('moodle/course:manageactivities');
$PAGE->set_other_editing_capability('moodle/course:activityvisibility');

// Prevent caching of this page to stop confusion when changing page after making AJAX changes.
$PAGE->set_cacheable(false);

require_course_login($SITE);

$hasmaintenanceaccess = has_capability('moodle/site:maintenanceaccess', context_system::instance());

// If the site is currently under maintenance, then print a message.
if (!empty($CFG->maintenance_enabled) and !$hasmaintenanceaccess) {
    print_maintenance_message();
}

$hassiteconfig = has_capability('moodle/site:config', context_system::instance());

if ($hassiteconfig && moodle_needs_upgrading()) {
    redirect($CFG->wwwroot .'/'. $CFG->admin .'/index.php');
}

// If site registration needs updating, redirect.
\core\hub\registration::registration_reminder('/index.php');

if (get_home_page() != HOMEPAGE_SITE) {
    // Redirect logged-in users to My Moodle overview if required.
    $redirect = optional_param('redirect', 1, PARAM_BOOL);
    if (optional_param('setdefaulthome', false, PARAM_BOOL)) {
        set_user_preference('user_home_page_preference', HOMEPAGE_SITE);
    } else if (!empty($CFG->defaulthomepage) && ($CFG->defaulthomepage == HOMEPAGE_MY) && $redirect === 1) {
        redirect($CFG->wwwroot .'/my/');
    } else if (!empty($CFG->defaulthomepage) && ($CFG->defaulthomepage == HOMEPAGE_USER)) {
        $frontpagenode = $PAGE->settingsnav->find('frontpage', null);
        if ($frontpagenode) {
            $frontpagenode->add(
                get_string('makethismyhome'),
                new moodle_url('/', array('setdefaulthome' => true)),
                navigation_node::TYPE_SETTING);
        } else {
            $frontpagenode = $PAGE->settingsnav->add(get_string('frontpagesettings'), null, navigation_node::TYPE_SETTING, null);
            $frontpagenode->force_open();
            $frontpagenode->add(get_string('makethismyhome'),
                new moodle_url('/', array('setdefaulthome' => true)),
                navigation_node::TYPE_SETTING);
        }
    }
}

// Trigger event.
course_view(context_course::instance(SITEID));

// If the hub plugin is installed then we let it take over the homepage here.
if (file_exists($CFG->dirroot.'/local/hub/lib.php') and get_config('local_hub', 'hubenabled')) {
    require_once($CFG->dirroot.'/local/hub/lib.php');
    $hub = new local_hub();
    $continue = $hub->display_homepage();
    // Function display_homepage() returns true if the hub home page is not displayed
    // ...mostly when search form is not displayed for not logged users.
    if (empty($continue)) {
        exit;
    }
}

$PAGE->set_pagetype('site-index');
$PAGE->set_docs_path('');
$editing = $PAGE->user_is_editing();
$PAGE->set_title($SITE->fullname);
$PAGE->set_heading($SITE->fullname);
$courserenderer = $PAGE->get_renderer('core', 'course');
echo $OUTPUT->header();

$siteformatoptions = course_get_format($SITE)->get_format_options();
$modinfo = get_fast_modinfo($SITE);
$modnamesused = $modinfo->get_used_module_names();

// Print Section or custom info.
if (!empty($CFG->customfrontpageinclude)) {
    // Pre-fill some variables that custom front page might use.
    $modnames = get_module_types_names();
    $modnamesplural = get_module_types_names(true);
    $mods = $modinfo->get_cms();

    include($CFG->customfrontpageinclude);

} else if ($siteformatoptions['numsections'] > 0) {
    echo $courserenderer->frontpage_section1();
}
// Include course AJAX.
include_course_ajax($SITE, $modnamesused);

echo $courserenderer->frontpage();

if ($editing && has_capability('moodle/course:create', context_system::instance())) {
    echo $courserenderer->add_new_course_button();
}
echo $OUTPUT->footer();
}