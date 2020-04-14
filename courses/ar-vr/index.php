<?php

require_once('../../config.php'); //this assumes your page is in a sub dir.
//require_login();               //make sure user is logged in
$PAGE->set_title("Augmented Reality & Virtual Reality   | LearningBerg");
$PAGE->set_heading("AR & VR"); 
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
            background: url(https://www.learningberg.com/pluginfile.php/867/course/overviewfiles/AR-and-VR.jpg);
            background-size: cover;
            background-position: center;
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
            <h1 class="display-2 pt-3" style="font-weight: 600;">Augmented Reality & Virtual Reality </h1>
         
        </div>
        </section>
        <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-justify">
                    <p>The objective of this course is to provide a detailed understanding of the concepts of Virtual Reality and its applications. </p>
                </div>
            </div>
        </div>
        
    </section>
        <section class="pb-5">
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
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Understand geometric modelling and Virtual environment.</li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Study about Virtual Hardware and Software </li>

                        <ul>
                            </div>
                            <div class="col-md-6">
                            <ul class="fa-ul ">
                            <li><i class=" fa-li fa fa-angle-right" aria-hidden="true"></i>Develop Virtual Reality applications.  </li>
                        <ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                            <div class="p-4 text-justify box-sdw" >
                            <h4 class="gradient-theme" style="left:0">Duration : 45 hours</h4> <br> &nbsp;
                            <p>
                            The objective of this course is to provide a detailed understanding of the concepts of Virtual Reality and its applications. 
                            </p>
                            <a class="btn btn-cta  theme-btn-secondary" href="/course/view.php?id=23"><div class="text_to_html">Enroll Now</div></a>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-5" >
            <div class="container">

                <div class="row pt-3">
                    <div class="col-md-8">
                            <h4 class="mb-4 gradient-theme">Course Contents </h4>
                        <h6 class="mt-2 pt-5">Module 1</h6>
                        
                        Introduction to Virtual Reality (6 hours) <br>
                            <p style="text-align:justify">
                            Virtual Reality and Virtual Environment: Introduction, Computer graphics, Real time computer graphics, Flight Simulation, Virtual environment requirement, benefits of virtual reality, Historical development of VR, Scientific Landmark 3D Computer Graphics: Introduction, The Virtual world space, positioning the virtual observer, the perspective projection, human vision, stereo perspective projection, 3D clipping, Colour theory, Simple 3D modelling, Illumination models, Reflection models, Shading algorithms, Radiosity, Hidden Surface Removal, Realism-Stereographic image.                         </p>
                        <h6 >Module 2</h6>
                        Geometric Modelling (12 hours)<br>
                        <p style="text-align:justify">
                        Geometric Modelling: Introduction, From 2D to 3D, 3D space curves, 3D boundary representation Geometrical Transformations: Introduction, Frames of reference, Modelling transformations, Instances, Picking, Flying, Scaling the VE, Collision detection Generic VR system: Introduction, Virtual environment, Computer environment, VR technology, Model of interaction, VR Systems.                           </p>
                          <h6 >Module 3</h6>
                          Virtual Environment (10 hours) <br>
                          <p style="text-align:justify">
                          Animating the Virtual Environment: Introduction, The dynamics of numbers, Linear and Nonlinear interpolation, the animation of objects, linear and non-linear translation, shape & object inbetweening, free from deformation, particle system. Physical Simulation: Introduction, Objects falling in a gravitational field, Rotating wheels, Elastic collisions, projectiles, simple pendulum, springs, Flight dynamics of an aircraft.                           </p>
                          <h6 >Module 4</h6>
                          VR Hardware and Software (10 hours)  <br/>
                          <p style="text-align:justify">
                          Human factors: Introduction, the eye, the ear, the somatic senses. VR Hardware: Introduction, sensor hardware, Head-coupled displays, Acoustic hardware, Integrated VR systems. VR Software: Introduction, Modelling virtual world, Physical simulation, VR toolkits, Introduction to VRML 
                          
                          </p>
                          <h6 >Module 5</h6>
                          VR Applications (7 hours)   <br/>
                          <p style="text-align:justify">
                          Introduction, Engineering, Entertainment, Science, Training. <br>The Future: Virtual environment, modes of interaction                           
                          </p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="gradient-theme mb-2">List of Practicals </h4>
                        <ol class="pt-5" style="text-align:justify">
                            <li>Developing architecture of a house using Virtual Reality. </li>
                            <li>Perform CRO based experiment using Virtual Reality. </li>
                            <li>Undertaking qualitative analysis in Chemistry using Virtual Reality. </li>
                            <li>Carry out assembly/disassembly of an engine using Virtual Reality. </li>
                            <li>Explore human anatomy using Virtual Reality.</li>
                            <li>Simulation of circulation of blood in heart. </li>
                            <li>Simulation of Fight/ /Space Station. </li>
                            <li>Building Electronic circuit using Virtual Reality, given basic electronic components. </li>
                            <li>Developing concept of Virtual class room with multiplayer</li>
                          </ol>
              
                    </div>
                </div>
            </div>
            
        </section>

        ';

echo $OUTPUT->footer();                 //show the moodle footer.