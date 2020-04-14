<?php

require_once('../../config.php'); //this assumes your page is in a sub dir.
//require_login();               //make sure user is logged in
$PAGE->set_title("Robotics   | LearningBerg");
$PAGE->set_heading("Robotics"); 
// $previewnode = $PAGE->navigation->add('Contact US', new moodle_url('/pages/contact.php'), navigation_node::TYPE_CONTAINER);
//$previewnode->make_active(); 
$PAGE->set_url($CFG->wwwroot.'/contact');
echo $OUTPUT->header();            //Show the moodle header
echo '
        <style>
        #page-header .card{
            display:none;
            }
            #region-main .card-body{
            padding:0;
            }
        .secondary_header{
            height: 250px;
            background: url(https://www.learningberg.com/pluginfile.php/160/course/overviewfiles/Robotics.jpg);
            background-size: cover;
            }
            .secondary_header h1{
                font-size:2.6em !important;
            }
            #region-main-box{
                padding-right: 0;
                padding-left: 0;
            }
            #region-main>.card{
                padding-bottom: 0px;
                margin-bottom: 0;

            }
            .nav-pills>li>a.btn{
                color: #616161;
                box-shadow: none; 
                border-color:#e8e8e8; 
                background:#fff ;
            }
            .nav-pills>li>a.btn.active,.nav-pills>li>a.btn:hover:active:focus{
                color: #fff;
                box-shadow: none !important; 
                border-color:#267DF4 !important; 
                background:#267DF4 !important;
            }
        .material-icons{
            color: #4a90e2;
        }
            .nav-pills{
                margin-left:5.5em;
            }
            .nav-pills>a.btn-primary:hover, .btn-primary:hover{
                color: #fff!important;
                box-shadow: none !important; 
                border-color:#267DF4 !important; 
                background:#267DF4 !important;
            }
.gradient-theme{
    margin-top: 0;
    margin-bottom: 0.375rem;
    position: absolute;
    color: #fff;
    line-height: 1.75rem;
    text-indent: 1.5rem;
    padding-right: 0.75rem;
    padding-top: 2px;
    padding-bottom: 3px;
    background-image: linear-gradient(to right, #02b3e4 0%, #02ccba 100%);
        }
.gradient-theme::after{
    position: absolute;
    content: "";
    top: 0;
    width: 0;
    height: 0;
    right: -1.5rem;
    border-style: solid;
    -webkit-transform: rotate(360deg);
    border-width: 2rem 1.5rem 0 0;
    border-color: #02ccba transparent transparent transparent;
}
.box-sdw{
    position: relative;
    background: #fff;
    box-shadow: 5px 5px 25px 0px rgba(46, 61, 73, 0.2);
    border-radius: 0.375rem;
    transition: all 0.3s ease;
}
.box-sdw:hover{
    box-shadow: 2px 4px 8px 0px rgba(46, 61, 73, 0.2);
}
        </style>
        <section class="secondary_header">
        <div class="container py-5">
            <h1 class="display-2 pt-3" style="font-weight: 600;">Robotics</h1>
         
        </div>
        </section>
        <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-justify">
                    <p>The objective of this course is to impart knowledge about industrial robots for their control and design.  </p>
                </div>
            </div>
        </div>
        
    </section>
        <section class="pb-2">
            <div class="container">
                <div class="row">
                <div class="col">
                    <h2>Program Overview</h2>
                    <hr>
                    </div>
                    
                </div>
                <div class="row mt-4">
                    <div class="col-md-8">
                    <h4 class="gradient-theme">Learning Outcomes </h4>
                        <div class="row" style="padding-top:3em">
                            <div class="col-md-6">
                            <ul class="fa-ul ">
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Perform kinematic and dynamic analyses with simulation. </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Design control laws for a robot.  </li>

                        <ul>
                            </div>
                            <div class="col-md-6">
                            <ul class="fa-ul ">
                            <li><i class=" fa-li fa fa-angle-right" aria-hidden="true"></i>Integrate mechanical and electrical hardware for a real prototype of robotic device.  </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Select a robotic system for given application.  </li>
                        <ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                            <div class="p-4 text-justify box-sdw" >
                            <h4 class="gradient-theme" style="left:0;">Duration : 45 hours</h4> <br> &nbsp;
                            <p>
                            The objective of this course is to impart knowledge about industrial robots for their control and design. 
                            </p>
                            <a class="btn btn-cta  theme-btn-secondary" href="/course/view.php?id=7"><div class="text_to_html">Enroll Now</div></a>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-2" >
            <div class="container">

                <div class="row pt-3">
                    <div class="col-md-8">
                            <h4 class="mb-4 gradient-theme">Course Contents </h4>
                        <h6 class="mt-2 pt-5">Module 1</h6>
                        
                        Introduction to Robotics (3 Hours) <br>
                            <ul>
                                <li>Types and components of a robot, Classification of robots, closed-loop and openloop control systems. </li>
                                <li>Kinematics systems; Definition of mechanisms and manipulators, Social issues and safety</li>
                               
                            </ul>

                        <h6 >Module 2</h6>
                        Understanding Block chain with Crypto currency (9 Hours) <br>
                        Robot Kinematics and Dynamics (7 Hours) 
                        <ul>
                        <li>Kinematic Modelling: Translation and Rotation Representation, Coordinate transformation, DH parameters, Jacobian, Singularity, and Statics </li>
                        <li>Dynamic Modelling: Equations of motion: Euler-Lagrange formulation </li>

                    </ul>
                          <h6 >Module 3</h6>

                          Sensors and Vision System (10 Hours) 
                          <ul>
                          <li>Sensor: Contact and Proximity, Position, Velocity, Force, Tactile etc. </li>
                          <li>Introduction to Cameras, Camera calibration, Geometry of Image formation, Euclidean/Similarity/Affine/Projective transformations </li>
                          <li>Vision applications in robotics. </li>
                      </ul>
                      
                          <h6 >Module 4</h6>
                          Robot Control 	(12 Hours) 
                          <ul>
                          <li>Basics of control: Transfer functions, Control laws: P, PD, PID</li>
                          <li>Non-linear and advanced controls </li>
                      </ul>
                      <h6 >Module 5</h6>
                      Robot Actuation Systems (3 Hours) 
                          <ul>
                          <li>Actuators: Electric, Hydraulic and Pneumatic; </li>
                          <li>Transmission: Gears, Timing Belts and Bearings, Parameters for selection of actuators. </li>
                      </ul>

                      <h6 >Module 6</h6>
                      Control Hardware and Interfacing 	(10 Hours) 
                          <ul>
                          <li>Embedded systems: Architecture and integration with sensors, actuators, components</li>
                          <li>Programming for Robot Applications. </li>
                      </ul>
 
                    </div>
                    <div class="col-md-4">
                        <h4 class="gradient-theme mb-2">List of Practicals </h4>
                        <ol class="pt-5" style="text-align:justify">
                            <li>Study components of a real robot and its DH parameters. </li>
                            <li>Forward kinematics and validate using a software (Robo Analyser or any other free software tool). </li>
                            <li>Inverse kinematics of the real robot and validation using any software. </li>
                            <li> Use of open source computer vision programming tool openCV. </li>
                            <li>Image Processing using openCV. </li>
                            <li>Image Processing for color/shape detection. </li>
                            <li>Positioning and orientation of robot arm. </li>
                            <li>Control experiment using available hardware or software. </li>
                            <li>Integration of assorted sensors (IR, Potentiometer, strain gages etc.), micro controllers and ROS  (Robot Operating System) in a robotic system. 10. Project work</li>
                          </ol>
              
                    </div>
                </div>
            </div>
            
        </section>

        ';

echo $OUTPUT->footer();                 //show the moodle footer.