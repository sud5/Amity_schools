<?php

require_once('../../config.php'); //this assumes your page is in a sub dir.
//require_login();               //make sure user is logged in
$PAGE->set_title("Building AR Application  | LearningBerg");
$PAGE->set_heading("Building AR Application"); 
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
            background: url(https://www.learningberg.com/pluginfile.php/507/course/overviewfiles/Building-AR-Application.jpg);
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
            <h1 class="display-2 pt-3" style="font-weight: 600;">Building AR Application</h1>
         
        </div>
        </section>
        <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-justify">
                <p>The course is designed to help you understand the fundamentals of AR, start working with using the open source AR tool kit and familiarize with the Unity Engine. This class covers emphasize on step by step order that is simple to follow and interactively fun working together individually and group task, Students shall able to grasp the development quicker and enjoy developing their own application. After the completion of the course learner will have good understanding and practical knowledge on  </p>
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
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Good understanding  and practical knowledge on the  importance and best practices of Augmented Reality (AR)</li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> AR platform and interface.</li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> AR image recognition and modeling</li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Basic Programming of C# for Unity </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Web services and database </li>

                        <ul>
                            </div>
                            <div class="col-md-6">
                            <ul class="fa-ul ">
                            <li><i class=" fa-li fa fa-angle-right" aria-hidden="true"></i>Develop marker-based AR application </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Development of  marker based AR via QR detection </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Building AR projects  </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Cloud Integration using AR </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> AR accessible on internet  </li>
                        <ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                            <div class="p-4 text-justify box-sdw" >
                            <h4 class="gradient-theme" style="left:0">Duration :  30 hours</h4> <br> &nbsp;
                            <p>
                                    How block chain technology can be used to innovate and improve business processes.
                            </p>
                            <a class="btn btn-cta  theme-btn-secondary" href="/course/view.php?id=19"><div class="text_to_html">Enroll Now</div></a>
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
                        
                        Introduction to Augmented Reality (AR) <br>
                            <ul>
                            <li>The importance of AR for Industries</li>
                            <li>Roadmap of AR technologies for today requirements</li>
                            <li>Projection of nect AR deliverable</li>
                            <li>Best practice of AR  </li>                          
                            </ul>
                        <h6 >Module 2</h6>
                        Explore and Get Ready with AR Platform<br>
                            <ul>
                            <li>AR Platform and Interface</li>
                            <li>Technology to develop AR</li>
                            <li>Exploring the AR tool kit</li>
                            </ul>
                            <p>Exercise: Installation of Unity Engine</p>
                            <p>Exercise: Installation of Sketchup</p>

                          <h6 >Module 3</h6>
                          AR Image Recognition and Modeling  <br>
                          <ul>
                            <li>Image Processing Technology</li>
                            <li>Video Recognition through Frame Detection</li>
                            <li>Explore the 3D modelling</li>
                            <li>Tag objects to enable AR</li>
                          </ul>
                          <p>Exercise: Capturing image to be a Marker</p>
                          <p>Exercise: Demo on 2D example</p>
                          <p>Exercise: Making an 2D and 3D object</p>
                          <p>Exercise: Develop your own 3D via Sketchup</p>
                          <h6 >Module 4</h6>
                          Learn the Basic Programming of C# for Unity<br/>
                          <ul>
                          <li>Demonstration on the connected Augmented Reality</li>
                            <li>What is C# programming?</li>
                            <li>Use C# to develop AR Logics</li>
                            <li>Familiar with C# programming ways</li>
                            <li>Walkthrough the Unity Engine</li>

                          </ul>
                            <p>Exercise: Develop the first AR Application</p>
                            <p>Exercise: Work with C# example to interact with 3D object</p>

                            <h6 >Module 5</h6>
                            More details on Marker Based<br/>
                            <ul>
                            <li>Learn the marker-based through bar code detection</li>
                              <li>Calibrating and training the device camera for video capture</li>
                              <li>Develop the marker-based AR application for mobile devices</li>
                            </ul>
                              <p>Exercise: Deploy the Unity application to your mobile devices</p>
                              <p>Exercise: Test example of marker-based demo</p>

                            <h6 >Module 6</h6>
                            Development of AR and Right Process<br/>
                            <p>Develop Marker-based AR via QR detection</p>
                            <p>Walkthrough AR development process</p>

                            <ul>
                            <li>Learn the marker-based through bar code detection</li>
                              <li>Step 1: Marker Planning</li>
                              <li>Step 2: Devices Calibration</li>
                              <li>Step 3: Building Model</li>
                              <li>Step 4: Develop Program</li>
                            </ul>
                              <p>Exercise: Test same steps to release digital content to world</p>
                              <p>Exercise: Enhanced development process</p>

                            <h6 >Module 7</h6>
                            Build your AR Projects through common examples<br/>
                            <ul>
                            <li>Develop marker-based AR via image features</li>
                              <li>Step 1 Capture your marker image</li>
                              <li>Step 2: Configure the devices</li>
                              <li>Step 3: Building Models</li>
                              <li>Step 4: Develop Program</li>
                            </ul>
                              <p>Developing multiple of AR targets</p>
                              <p>Exercise: QR marker testing</p>
                              <p>Exercise: Make more 3D objects to present to AR View</p>
                              <p>Exercise: Deploy AR application to your mobile platform</p>

                            <h6 >Module 8</h6>
                            Enabling AR to everyone to access<br/>
                            <ul>
                              <li>Program the Cloud Integration using AR</li>
                              <li>AR Control and Monitoring solution</li>
                              <li>Making AR accessible on Internet</li>
                              <li>Web Services and Database query</li>
                              <li>Store and Request data</li>
                            </ul>
                              <p>Exercise: Make your datasets on the cloud server</p>
                              <p>Exercise: Query your data from cloud server to Unity</p>
                              <p>Exercise: Develop real-time data view on the models</p>
                              <p>Exercise: Deploy the application on your mobile devices</p>
                              <p>Exercise: Group Project – Developing your AR project.</p>
                              



                    </div>
                    <div class="col-4">

              
                    </div>
                </div>
            </div>
            
        </section>

        ';

echo $OUTPUT->footer();                 //show the moodle footer.