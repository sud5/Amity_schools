<?php

require_once('../../config.php'); //this assumes your page is in a sub dir.
//require_login();               //make sure user is logged in
$PAGE->set_title("3D Printing  | LearningBerg");
$PAGE->set_heading("Artificial Intelligence for \n Executives"); 
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
            background: url(https://www.learningberg.com/pluginfile.php/473/course/overviewfiles/3D-Printing.jpg);
            background-size: cover;
            background-position: bottom;
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
            <h1 class="display-2 pt-3" style="font-weight: 600;">3D Printing</h1>
         
        </div>
        </section>
        <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-justify">
                    <p>The course is designed to impart knowledge and skills related to 3D printing technologies, selection of material and equipment and develop a product using this technique in Industry 4.0 environment.  </p>
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
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Develop CAD models for 3D printing. </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Import and Export CAD data and generate .stl file.</li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Produce a product using 3D Printing or Additive Manufacturing (AM). </li>

                        <ul>
                            </div>
                            <div class="col-md-6">
                            <ul class="fa-ul ">
                            <li><i class=" fa-li fa fa-angle-right" aria-hidden="true"></i> Select a specific material for the given application </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Select a 3D printing process for an application. </li>
                        <ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                            <div class="p-4 text-justify box-sdw" >
                            <h4 class="gradient-theme" style="left:0">Duration : 33 hours</h4> <br> &nbsp;
                            <p>
                            The course is designed to impart knowledge and skills related to 3D printing technologies
                            </p>
                            <a class="btn btn-cta  theme-btn-secondary" href="/course/view.php?id=18"><div class="text_to_html">Enroll Now</div></a>
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
                        
                        3D Printing (Additive Manufacturing) (3 Hours)  <br>
                            <p style="text-align:justify">
                            Introduction, Process, Classification, Advantages, Additive V/s Conventional Manufacturing processes, Applications. 
                            
                            </p>
                        <h6 >Module 2</h6>
                        <p>CAD for Additive Manufacturing (4 Hours)  <br>
                        CAD Data formats, Data translation, Data loss, STL format. </p>

                          <h6 >Module 3</h6>
                          Additive Manufacturing Techniques (12 Hours)  <br>
                          <ul>
                          <li>Stereo- Lithography, LOM, FDM, SLS, SLM, Binder Jet technology. </li>
                          <li>Process, Process parameter, Process Selection for various applications. </li>
                          <li>Additive Manufacturing Application Domains: Aerospace, Electronics, Health Care, Defence, Automotive, Construction, Food Processing, Machine Tools </li>
                      </ul>
                          <h6 >Module 4</h6>
                          Materials (8 Hours) <br/>
                            <ul>
                            <li>Polymers, Metals, Non-Metals, Ceramics </li>
                            <li>Various forms of raw material- Liquid, Solid, Wire, Powder; Powder Preparation and their desired properties, Polymers and their properties. </li>
                            <li>Support Materials </li>
                            </ul>
                            <h6 >Module 5</h6>
                            Additive Manufacturing Equipment (10 Hours)  <br/>
                              <ul>
                              <li>Process Equipment- Design and process parameters  </li>
                              <li>Governing Bonding Mechanism  </li>
                              <li>Common faults and troubleshooting </li>
                              <li>Process Design </li>
                              </ul>
                              <h6 >Module 6</h6>
                              <p>Post Processing: Requirement and Techniques (4 Hours) </p>
                              <h6 >Module 7</h6>
                              Product Quality (4 Hours)  <br/>
                                <ul>
                                <li>Inspection and testing   </li>
                                <li>Defects and their causes </li>
                                </ul>

                    </div>
                    <div class="col-md-4">
                        <h4 class="gradient-theme mb-2">List of Practicals </h4>
                        <ol class="pt-5" style="text-align:justify">
                            <li>3D Modelling of a single component. </li>
                            <li>Assembly of CAD modelled Components </li>
                            <li>Exercise on CAD Data Exchange. </li>
                            <li>Generation of .stl files. </li>
                            <li>Identification of a product for Additive Manufacturing and its AM process plan.  </li>
                            <li>Printing of identified product on an available AM machine. </li>
                            <li>Post processing of additively manufactured product. </li>
                            <li>Inspection and defect analysis of the additively manufactured product. </li>
                            <li>Comparison of Additively manufactured product with conventional manufactured counterpart</li>
                          </ol>
              
                    </div>
                </div>
            </div>
            
        </section>

        ';

echo $OUTPUT->footer();                 //show the moodle footer.