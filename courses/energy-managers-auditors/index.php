<?php

require_once('../../config.php'); //this assumes your page is in a sub dir.
//require_login();               //make sure user is logged in
$PAGE->set_title("Energy Managers & Auditors  | LearningBerg");
$PAGE->set_heading("Energy Managers & Auditors"); 
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
            background: url(https://www.learningberg.com/pluginfile.php/957/course/overviewfiles/Energy-pic.jpg);
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
            <h1 class="display-2 pt-3" style="font-weight: 600;">National Certification Exam for <br />Energy Managers & Auditors</h1>
         
        </div>
        </section>
        <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-justify">
                    <p>National Certification Examination for Energy Managers and Energry Auditors aims to develop qualified professionals in the field of energy conversation in India.</p>
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
                    <h4 class="gradient-theme">Importance of CEM and CEA</h4>
                        <div class="row pb-3" style="padding-top:3em">
                            <div class="col-md-12">
                                <p>The exams permit individuals to be accredited as a Certified Energy Manager(CEM)/Certified Energy Auditor(CEA) and be qualified to provide the relevant services to the industry. In the case of accreditation as an Energy Auditor, you need to be a certified Energy Manager, passing the relevant exam conducted by BEE in addition to meeting the requisite criteria.</p>
                            </div>
                        </div>
                        <h4 class="gradient-theme">Eligibility Requirements CEA exam </h4> <br/> &nbsp; 
                        <div class="row pb-3" >
                            <div class="col-md-12">
                                <p>You must be a Graduate engineer, as on the closing date of the application, with B.E. or B.Tech. qualification or have an equivalent qualification. Additionally, you must have a minimum of three year`s work experience which includes the use of energy in operation, maintenance, planning, etc.</p>
                                <p>Alternate acceptable qualifications: You must be a Post Graduate engineer as on the closing date of the application with an M.E. or M.Tech. qualification or have an equivalent qualification with the same work experience as mentioned above of at least two years. A Graduate engineer with a Post Graduate degree in Management or equivalent with the same work experience as mentioned above of at least two years can also apply.</p>
                            </div>
                        </div>
                        <h4 class="gradient-theme">Eligibility Requirements CEM exam </h4><br/> &nbsp; 
                        <div class="row" >
                            <div class="col-md-12">
                                <p>You should have the same qualification of graduate/postgraduate engineer as per the eligibility criteria for CEA. Alternate acceptable qualifications: You should be a Diploma Engineer or equivalent with a work experience of six years which includes the use of energy in operation, maintenance, planning, etc. Those having a Post Graduate qualification in Physics or Electronics or Chemistry (with Physics and Mathematics at the graduation level) with a similar work experience of three years are also eligible to apply.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                            <div class="p-4 text-justify box-sdw" >
                            <h4 class="gradient-theme " style="left:0">Duration : 200 hours</h4> <br> &nbsp;
                            <p class="">
                                National Certification Examination for Energy Managers and Energry Auditors aims to develop qualified professionals in the field of energy conversation in India.
                            </p>
                            <a class="btn btn-cta  theme-btn-secondary" href="/course/view.php?id=38"><div class="text_to_html">Enroll Now</div></a>
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
                        <h6 class="mt-2 pt-5"><b>Paper 1</b></h6>
                        
                        General aspects of energy management and energy audit<br>
                            <ol>
                                <li>Scenario</li>
                                <li>Energy conservation act-2001 and related policies</li>
                                <li>Basics of energy and its various forms</li>
                                <li>Energy management and audit</li>
                                <li>Material and energy balance</li>
                                <li>Energy action planning</li>
                                <li>Financial management</li>
                                <li>Project management</li>
                                <li>Energy monitoring and targeting</li>
                                <li>Energy efficiency and climate change</li>
                                <li>New and renewable energy sources (NRES)</li>
                            </ol>
                        <h6 ><b>Paper 2</b></h6>
                        Energy efficiencies in thermal utilities
                                <ol>
                                    <li>Fuels and combination</li>
                                    <li>Stream system</li>
                                    <li>Furnaces</li>
                                    <li>Insulations and Refractories</li>
                                    <li>FBC Boilers</li>
                                    <li>Cogeneration</li>
                                    <li>Waste heat recovery</li>
                                    <li>Heat exchangers</li>
                                    
                                </ol>
                          <h6 ><b>Paper 3</b></h6>
                          Energy efficiency in electrical utilities<br>
                                <ol>
                                    <li>Electrical systems</li>
                                    <li> Electrical motors</li>
                                    <li>Compressed air system</li>
                                    <li>HVAC and Refrigeration system</li>
                                    <li>Fans and blowers</li>
                                    <li>Pumps and Pumping system</li>
                                    <li>Cooling Towers</li>
                                    <li>Lighting system</li>
                                    <li>Diesel / Natural gas power generating system</li>
                                    <li>Energy conservation in buildings and ECBC</li>
                                </ol>
                          <h6 ><b>Paper 4</b></h6>
                          Energy performance assessment for equipment and utility systems <br/>

                          <ol>
                              <li>Boilers</li>
                              <li>Furnaces</li>
                              <li>Cogeneration systems</li>
                              <li>Heat exchangers</li>
                              <li>Electric motors and variable speed drives</li>
                              <li>Fans and blowers</li>
                              <li>Pumps</li>
                              <li>Compressors</li>
                              <li>HVAC systems</li>
                              <li>Financial analysis</li>
                              <li>Thermal power station</li>
                              <li>Steel industry</li>
                              <li>Cement industry</li>
                              <li>Buildings and commercial establishments</li>
                              <li>Textile industry</li>
                              <li>Pulp and paper industry</li>
                              <li>Fertiliser industry</li>
                          </ol>

                    </div>
                    <div class="col-md-4">
                        <h4 class="mb-4 gradient-theme">Exam Format  </h4> <br/> &nbsp;
              <p>The CEA  will have to pass 3 of the following papers and CEM exam will have to pass 4 of the  following papers and for each the passing score requirement is 50% minimum. </p>
              <b>Following are the four papers  of CEA & CEM: </b>
              <ul>
                  <li><b>Paper 1 of 150 marks (three hours):</b> General aspects of Energy Management & Energy Audit, with objective and descriptive type questions.</li>
                  <li><b>Paper 2 of 150 marks (three hours):</b> Energy Efficiency in Thermal Utilities, with objective and descriptive type questions.</li>
                  <li><b>Paper 3 of 150 marks (three hours): </b>Energy Efficiency in Electrical Utilities, objective and descriptive type questions.</li>
                  <li><b>Paper 4:</b> Energy Performance Assessment for Equipment & Utility Systems. This exam is only for CEA and has both descriptive and numerical questions. It is an open book exam, that is, you can refer to the Guide Book supplied at the time of registration, but other reference books and written material will not be allowed.</li>
              </ul>
                    </div>
                </div>
            </div>
            
        </section>

        ';

echo $OUTPUT->footer();                 //show the moodle footer.