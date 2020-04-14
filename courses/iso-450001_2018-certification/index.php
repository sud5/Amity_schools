<?php

require_once('../../config.php'); //this assumes your page is in a sub dir.
//require_login();               //make sure user is logged in
$PAGE->set_title("ISO 450001 : 2018 Certification | LearningBerg");
$PAGE->set_heading("ISO 450001 : 2018 Certification"); 
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
            background: url(https://www.learningberg.com/pluginfile.php/956/course/overviewfiles/ISO-450001---2018-Certification.jpg);
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
            <h1 class="display-2 pt-3" style="font-weight: 600;">ISO 450001 : 2018 Certification</h1>
         
        </div>
        </section>
        <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-justify">
                    <p>ISO 45001:2018
                    Occupational Health and Safety Management Systems
                    <p>
                    The UK implementation of ISO 45001:2018 supersedes BS OHSAS 18001:2007, which is withdrawn. For smaller businesses or those with less complex and/or less hazardous operations, managers and workers may in many cases already have a good sense of their main workplace risks; this standard simply provides a framework for managing them in a more structured way.
Organizations should create documented information to meet the requirements of this standard to the extent necessary for the effective establishment, implementation and maintenance of the OH&S management system and to comply with relevant legislation.
                    </p>
                     </p>
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
                    <h4 class="gradient-theme">AIM</h4>
                        <div class="row" style="padding-top:3em">
                            <div class="col-md-6">
                            <ul class="fa-ul ">
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i>To provide a framework for managing OH&S risks and opportunities</li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i>To prevent work related injury and ill health to workers and to provide safe and healthy workplaces</li>

                        <ul>
                            </div>
                            <div class="col-md-6">
                            <ul class="fa-ul ">
                            <li><i class=" fa-li fa fa-angle-right" aria-hidden="true"></i>To eliminate hazards and minimize OH&S risks by taking effective preventive and protective measures</li>
                        <ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                            <div class="p-4 text-justify box-sdw" >
                            <h4 class="gradient-theme">Duration : 45 hours</h4> <br /> &nbsp;
                            <p>
                                    How block chain technology can be used to innovate and improve business processes.
                            </p>
                            <a class="btn btn-cta  theme-btn-secondary" href="/course/view.php?id=25"><div class="text_to_html">Enroll Now</div></a>
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

                            <p class="mt-3 pt-5">Enables the organization to manage its OH&S risks and improve its OH&S performance.
                            An OH&S management system can assist the organization to fulfil its legal requirements and other requirements.
                            </p>
                        <h6 >Module 1</h6>
                        
                        Documentation of the system <br>
                            <ol>
                                <li>Identification of hazard</li>
                                <li>OH&S policy and objectives</li>
                                <li>Risk assessment and determination of control measures</li>
                                <li>Regulatory requirements</li>
                                <li>Resource requirement</li>
                                <li>Participation and consultation</li>
                                <li>Competence requirement</li>
                                <li>Operational control procedures</li>
                                <li>Monitoring methods</li>
                                <li>Non conformity control</li>
                                <li>Record control</li>
                                <li>Document control</li>
                                <li>Objective achievement programmes</li>
                                
                            </ol>
                        <h6 >Module 2</h6>
                        Implementing the system <br>
                        
                          <h6 >Module 3</h6>
                          Training all employees<br>
                          <h6 >Module 4</h6>
                          Developing an auditor team <br/>
                          <h6 >Module 5</h6>
                          Auditing the implemented System <br/>
                          <h6 >Module 6</h6>
                          Taking action on audit findings <br/>
                          <h6 >Module 7</h6>
                          Conducting management reviews <br/>
                          <h6 >Module 8</h6>
                          Pre assessment audit by third party auditor<br/>
                          <h6 >Module 9</h6>
                          Certification audit<br/>
                          <hr>
                        <p>The certificate is valid for 3 years. Periodic audit will be conducted by third party auditor once in 6 month or 1 year depending on the size of the organisation. At the end of 3 years the certificate is to be renewed.</p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="gradient-theme mb-2">Benefits</h4>
                        <ol class="pt-5" style="text-align:justify">
                            <li>Better employee morale due to safe working practices </li>
                            <li>Better image with public</li>
                            <li>Lesser accidents and injuries </li>
                            <li>Always prepared to meet any emergency situations</li>
                            <li>Disciplined approach to health and safety</li>
                            <li>Appropriate use of personal protective equipment (PPE)</li>
                            <li>Confidence to management regarding avoidance of unsafe practices</li>
                            <li>Reduction of health hazard to employees, visitors, contractors</li>
                          </ol>
              
                    </div>
                </div>
            </div>
            
        </section>

        ';

echo $OUTPUT->footer();                 //show the moodle footer.