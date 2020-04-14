<?php

require_once('../../config.php'); //this assumes your page is in a sub dir.
//require_login();               //make sure user is logged in
$PAGE->set_title("DevOps: CI/CD  | LearningBerg");
$PAGE->set_heading("DevOps: CI/CD"); 
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
            background: url(https://www.learningberg.com/pluginfile.php/80/course/overviewfiles/DevOps.jpg);
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
            <h1 class="display-2 pt-3" style="font-weight: 600;">DevOps: CI/CD</h1>
         
        </div>
        </section>
        <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-justify">
                    <p>This course has been designed on,  how to build sophisticated continuous integration and continuous delivery pipelines using Jenkins and many of its plugins, especially using  the pipeline plugins. </p>
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
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i>Continuous integration (CI) and Why continuous integration is important in fast paced agile environment</li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> How to build an automated continuous integration (CI) pipeline with Jenkins and its various plugins </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i>How to maintain and version control database schema in an automated fashion via RoundHousE </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i>Build CI and CD pipelines using Jenkins, Gradle, Maven, Artifactory and corresponding plugins </li>

                        <ul>
                            </div>
                            <div class="col-md-6">
                            <ul class="fa-ul ">
                            <li><i class=" fa-li fa fa-angle-right" aria-hidden="true"></i>How to configure, secure and extend Jenkins</li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Continuous integration (CI) pipeline will integrate the automated builds with Git repositories hosted in GitHub </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> How to manage the build artifacts which are produced by the continuous integration (CI) builds </li>
                        <ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                            <div class="p-4 text-justify box-sdw" >
                            <h4 class="gradient-theme " style="left:0">Duration : 45 hours</h4> <br> &nbsp;
                            <p>
                            This course has been designed on,  how to build sophisticated continuous integration and continuous delivery pipelines using Jenkins and many of its plugins, especially using  the pipeline plugins. 
                            </p>
                            <a class="btn btn-cta  theme-btn-secondary" href="/course/view.php?id=3"><div class="text_to_html">Enroll Now</div></a>
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
                            <ul>
                                <li>Introduction to Jenkins</li>
                                <li>SDLC and DevOps culture</li>
                                <li>Jenkins features and architecture</li>
                            </ul>

                   
                        <h6 >Module 2</h6>
                        <ul>
                            <li>Jenkins How to  Install Jenkins </li>
                            <li>Configure Jenkins</li>
                            <li>Setup Jenkins job</li>
                            <li>Jenkins pipeline view</li>
                            <li>Install Artifactory</li>
                            <li>Explore Artifactory</li>
                            <li>Online Test</li>
                        </ul>
                          <h6 >Module 3</h6>
                                <ul>
                                    <li>CI and CD pipeline with Jenkins, Gradle and Artifactory</li>
                                    <li>Build CI and CD pipeline with Jenkins and Gradle</li>
                                    <li>Configure Artifactory</li>
                                </ul>
                          <h6 >Module 4</h6>
                            <ul>
                                <li>CI & CD Pipeline With Jenkins & Maven</li>
                                <li>Review Java web application project</li>
                                <li>Start building CI and CD pipeline with Jenkins and Maven</li>
                                <li>Online Test</li>
                            </ul>
                          <h6 >Module 5</h6>
                            <ul>
                                <li>Manage Relational Database Schema With Jenkins And Sqitch</li>
                                <li>Introduction to Sqitch</li>
                                <li>Build database schema deployment pipeline with Jenkins and Sqitch</li>
                                <li>Online Test</li>
                            </ul>
                          <h6 >Module 6</h6>
                            <ul>
                                <li>Operational Considerations For Jenkins</li>
                                <li>Jenkins security</li>
                                <li>Scaling Jenkins</li>
                                <li>Jenkins tips and tricks</li>
                                <li>JOnline Test</li>
                            </ul>
                            <h6 >Module 7</h6>
                            Conclusion <br/>

                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
            
        </section>

        ';

echo $OUTPUT->footer();                 //show the moodle footer.