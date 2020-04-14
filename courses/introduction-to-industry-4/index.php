<?php

require_once('../../config.php'); //this assumes your page is in a sub dir.
//require_login();               //make sure user is logged in
$PAGE->set_title("Introduction to Industry 4.0  | LearningBerg");
$PAGE->set_heading("Introduction to Industry 4.0"); 
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
            background: url(https://www.learningberg.com/pluginfile.php/433/course/overviewfiles/Introduction-to-Industry-4.0.jpg);
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
            <h1 class="display-2 pt-3" style="font-weight: 600;">Introduction to Industry 4.0</h1>
         
        </div>
        </section>
        <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-justify">
                    <p>This course is in line with Malaysia’s Ministry of International Trade and Industry’s (MITI) Industry4WRD Blueprint, and offers a comprehensive introduction to core concepts, applications and the potential of Industry 4.0. It is designed for online with a social learning approach to ensure you learn in a way that is memorable, engaging and impactful. Industry 4.0 is changing the way we live, work and communicate. If you want to keep up with the pace of change, implement innovative future-ready solutions, and be able to quickly respond to challenges that may arise in your career, business, factory or workplace – then you have come to the right place.</p>
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
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i>Understand what Industry 4.0 means and how the 4th Industrial Revolution transform from 1st, 2nd and 3rd </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i>Understand the various aspect of the new technology enablers which will support the transformation into Industry 4.0 </li>

                        </ul>
                            </div>
                            <div class="col-md-6">
                            <ul class="fa-ul ">
                            <li><i class=" fa-li fa fa-angle-right" aria-hidden="true"></i>Understand the various challenges, risk and possible action plan during transformation and mitigating the risk factors</li>
                        </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                            <div class="p-4 text-justify box-sdw" >
                            <h4 class="gradient-theme " style="left:0" >Duration : 24 hours</h4> <br/> &nbsp;
                            <p>
                                   
                            </p>
                            <a class="btn btn-cta  theme-btn-secondary" href="/course/view.php?id=17"><div class="text_to_html">Enroll Now</div></a>
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
                        
                        Overview <br>
                            <ul>
                                <li>Key objective </li>
                                <li>Industrial revolution road map </li>
                                <li>The key definition of Industry 4.0 </li>
                                <li>Key enablers </li>
                                <li>Why we must adopt and why now? </li>
                            </ul>
                        <h6 >Module 2</h6>
                        Key Technology Pillars <br>
                    <ul>
                        <li>Introduction to the 11 technology pillars </li>
                        <li>Overview of each pillars </li>
                    </ul>
                          <h6 >Module 3</h6>
                          Socio Technology Development & Consequences <br/>
                            <ul>
                                <li>Impact to economy </li>
                                <li>Impact to the way of life </li>
                                <li>Job market and new job creation </li>
                                <li>What if the Future Workforce? </li>
                            </ul>
                            <h6 >Module 4</h6>
                            Industry 4.0 Business Models and Creating New Business Ideas <br/>
                              <ul>
                                  <li>Digitalization of E-Commerce  </li>
                                  <li>Industry 4.0 is beyond improvement, its creates new products and value add services </li>
                              </ul>
                            <h6 >Module 5</h6>
                            Implementation strategies  <br/>
                              <ul>
                                  <li>Start SMALL WIN BIG </li>
                                  <li>Identify pain points </li>
                                  <li>Introduction to MAA Approach </li>
                                  <li>6 basic steps of Industry 4.0 implementation plan  </li>
                              </ul>
                            <h6 >Module 6</h6>
                            Change Management  <br/>
                              <ul>
                                  <li>Embrace Technology Change – Change as the only constant in business </li>
                                  <li>Competency development </li>
                                  <li>Industry 4.0 is just a journey not the end goal</li>
                              </ul>
                            <h6 >Module 7</h6>
                            Demystifying Industry 4.0<br/>
                            <p>In this module, learn from industry experts as they share their definitions of industry 4.0. Then, discover the why, when and how as we look into the development of industry 4.0.</p>
                              <ul>
                                  <li>Welcome to the Digital Era </li>
                                  <li>Fourth Industrial Revolution </li>
                                  <li>Why Transform Toward Industry 4.0?</li>
                              </ul>
                            <h6 >Module 8</h6>
                            Road Towards Smart Factory<br/>
                            <p>In this module, explore the design principles and technology pillars that serve as building blocks for smart factories. You will then explore methods of implementing Industry 4.0 in your own organization.</p>
                              <ul>
                              <li>A Smart Factory</li>
                              <li>11 Core Technological Pillars</li>
                              <li>Implementing the Pillars</li>
                              </ul>
                            <h6 >Module 9</h6>
                            Challenges, Future Workforce and What’s Next<br/>
                            <p>In this module, discuss the new challenges of Industry 4.0 and the impact of this disruption on the workforce. Finally, look at what you can do next and PSDC’s role in your transformation journey.</p>
                              <ul>
                              <li>Key Challenges in Implementing 4.0</li>
                              <li>The workforce of the Future</li>
                              <li>What’s Next for you?</li>
                              </ul>
                            
                    </div>
                    <div class="col-md-4">
                       
              
                    </div>
                </div>
            </div>
            
        </section>

        ';

echo $OUTPUT->footer();                 //show the moodle footer.