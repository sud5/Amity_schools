<?php

require_once('../../config.php'); //this assumes your page is in a sub dir.
//require_login();               //make sure user is logged in
$PAGE->set_title("Amazon Web Services  for Beginners  | LearningBerg");
$PAGE->set_heading("Amazon Web Services  for Beginners"); 
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
            background: url(https://www.learningberg.com/pluginfile.php/154/course/overviewfiles/Amazon-Web-Services-for-Beginners.jpg);
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
            <h1 class="display-2 pt-3" style="font-weight: 600;">Amazon Web Services  for Beginners</h1>
         
        </div>
        </section>
        <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-justify">
                    <p>This course will give you an overview on  AWS, Creating AWS account, Learning key concepts & applying best practices. </p>
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
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Good understanding on Amazon web services </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Setting up AWS account </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Identity and access management</li>

                        <ul>
                            </div>
                            <div class="col-md-6">
                            <ul class="fa-ul ">
                            <li><i class=" fa-li fa fa-angle-right" aria-hidden="true"></i> Elastic compute cloud  </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> AWS Simple storage service(S3)  </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> AWS free tier  </li>
                        <ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                            <div class="p-4 text-justify box-sdw" >
                            <h4 class="gradient-theme" style="left:0;">Duration : 20 hours</h4> <br> &nbsp;
                            <p>
                            This course will give you an overview on  AWS, Creating AWS account, Learning key concepts & applying best practices
                            </p>
                            <a class="btn btn-cta  theme-btn-secondary" href="/course/view.php?id=6"><div class="text_to_html">Enroll Now</div></a>
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
                        
                        <p>Introduction about AWS </p>
                            
                        <h6 >Module 2</h6>
                        <ul>
                            <li>AWS Account Setup</li>
                            <li>Creating new AWS Account</li>

                        </ul>

                          <h6 >Module 3</h6>
                          <ul>
                          <li>Identity and Access Management in AWS</li>
                          <li>Understand Identity & Access Management</li>
                          <li> Settingup IAM users and groups.</li>
                          <li>Apply password policy to IAM users.</li>
                          <li>Understand IAM policy & Apply Manage own  MFA policy to developer & testers.</li>
                          <li>Enable cloud trail to track API usage.</li>
                      
                          </ul>
                          <h6 >Module 4</h6>
                         <ul>
                         <li>Elastic Compute Cloud (EC2)</li>
                         <li>Introduction about EC2.</li>
                         <li>Launching EC2 instance in Linux</li>
                         <li>Terminate EC2 instance in Linux.</li>
                         <li>Launch and Terminate EC2 instance in Windows</li>
                         <li>More about security groups</li>
                      
                         </ul>
                         <h6 >Module 5</h6>
                         <ul>
                         <li>AWS S3 Introduction</li>
                         <li>What is S3 and Why we need to use it?</li>
                         <li>S3 Buckers & Objects Introduction</li>
                         <li>Create First S3 Bucket</li>
                         </ul>
                         <h6 >Module 5</h6>
                         <ul>
                         <li>AWS S3 Introduction</li>
                         <li>What is S3 and Why we need to use it?</li>
                         <li>S3 Buckers & Objects Introduction</li>
                         <li>Create First S3 Bucket</li>
                         <li>Bucket policy & IAM</li>
                         <li>S3 versioning concept</li>
                         <li>Using AWS CLI to upload and download objects</li>
                         <li>S3 Recap</li>
                      
                         </ul>
                         <h6 >Module 6</h6>
                         <ul>
                         <li>AWS Free Tier.</li>
                         </ul>
                         <h6 >Module 7</h6>
                         <ul>
                         <li>Conclusion</li>
                         </ul>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
            
        </section>

        ';

echo $OUTPUT->footer();                 //show the moodle footer.