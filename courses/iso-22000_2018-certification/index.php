<?php

require_once('../../config.php'); //this assumes your page is in a sub dir.
//require_login();               //make sure user is logged in
$PAGE->set_title("ISO 22000 : 2018 Certification | LearningBerg");
$PAGE->set_heading("ISO 22000 : 2018 Certification"); 
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
            background: url(https://www.learningberg.com/pluginfile.php/955/course/overviewfiles/ISO-22000---2018-Certification.jpg);
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
            <h1 class="display-2 pt-3" style="font-weight: 600;">ISO 22000 : 2018 Certification</h1>
         
        </div>
        </section>
        <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-justify">
                    <p>FOOD SAFETY MANAGEMENT SYSTEM ISO 22000 
                    To Ensure Integrity of Food Supply Chain                              
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
                    <h4 class="gradient-theme">AIM  </h4>
                        <div class="row" style="padding-top:3em">
                            <div class="col-md-6">
                            <ul class="fa-ul ">
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i>Control food safety hazards in order to consistently provide safe end products that meet both requirements agreed with the customer and those of applicable food safety regulation.</li>

                        <ul>
                            </div>
                            <div class="col-md-6">
                            <ul class="fa-ul ">
                            <li><i class=" fa-li fa fa-angle-right" aria-hidden="true"></i> Enhance customer satisfaction through the effective control of food safety hazards.</li>
                        <ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                            <div class="p-4 text-justify box-sdw" >
                            <h4 class="gradient-theme" style="left:0;" >Duration : 45 hours</h4> <br> &nbsp; 
                            <p>
                                    
                            </p>
                            <a class="btn bt n-cta  theme-btn-secondary" href="/course/view.php?id=24"><div class="text_to_html">Enroll Now</div></a>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-5" >
            <div class="container">

                <div class="row pt-3">
                    <div class="col-md-8">
                            <h4 class="mb-4 gradient-theme">APPLICABILITY </h4>
                        <h6 class="mt-3 pt-4"></h6>
                    
                            <p style="text-align:justify">
                            It is developed for the certification of food safety systems of organizations in the food chain that process or manufacture animal products, perishable vegetal products, products with a long shelf life, (other) food ingredients like additives, vitamins, bio-cultures and food packaging material manufacturing.                         
                            </p>
                            All type of organisations within the food chain (Farm to fork) <br>
                            <ul>
                                <li>Feed producers  </li>                                                                      
                                <li>Primary producers</li>
                                <li>Food Manufacturers		</li>				
                                <li>Transport and storage operators</li>
                                <li>Subcontractors</li>
                                <li>Retail and food service outlets (Hotels and caterers)</li>
                                <li>Manufacturers of Equipment, packing material, cleaning agents& Additives, Ingredients.      </li>                      
                            </ul>
                            <h4 class="gradient-theme mb-2">FOOD SAFETY </h4>
                            <p class="mt-3 pt-5">
                            Preventing food borne hazards at the point of consumption
                            </p>
                            <h4 class="gradient-theme mb-2">WHAT IS FSSC 22000? </h4>
                            <p class="mt-3 pt-5">
                            FSSC 22000 contains a complete certification scheme for Food Safety Systems based on existing standards for certification (ISO 22000, ISO 22003 and technical specifications for sector PRPs). The certification will be accredited under the standard ISO guide 17021. Manufacturers that are already certified against ISO 22000 will only need an additional review against technical specifications for sector PRPs to meet this certification scheme. Organizations that want to integrate quality in their management systems follow the requirements of ISO 9001.
                            </p>
                            <p>
                            FSSC 22000 is ready for new scopes at the moment the necessary technical specifications for sector PRPs have been realized and large players in the international food sectors would request FSSC 22000 to cover these sectors.
                            </p>
                            <p>
                            FSSC 22000 has a mission to be the globally leading, independent, non-profit, ISO-based and GFSI-accepted food safety certification scheme for the whole supply chain.
                            </p>

                            <p>
                            The FSSC 22000 certification scheme has been given full recognition by the Global Food Safety Initiative Board of Directors. This follows an extensive benchmarking process using the requirements laid out in the GFSI Guidance Document Version 6.
                            The Foundation for Food Safety Certification retains the ownership and the copyright and the license agreements for certification bodies
                            
                            </p>
                            <h4 class="gradient-theme mb-2">METHODOLOGY </h4>
                        <p class="mt-3 pt-5">
                        Combine HACCP plans and pre requisite programmes (PRPs) to ensure hazard control. PRPs are further divided into infrastructure and maintenance (PRPs) and operational PRPs. Identify the risks evaluate the risks and take action. Keep improving through verification of effectiveness.
                        </p>
                        <ol>
                            <li>Controls on outsourced service processes (like transport, sterilization) to be identified and put in place to ensure food safety.</li>
                            <li>Supervision of employees on following food safety principles </li>
                            <li>All requirements of ISO 22002 part I should be met in the PRPs ( including bio terrorism and food vigilance ) </li>
                            
                        </ol>
                        <h4 class="gradient-theme mb-2">REQUIREMENTS</h4>
                        <p class="mt-3 pt-5">
                        The scheme specifies detailed requirements for:
                        </p>
                        <p> 
                        Scope of certification should be clearly specified 
The food safety system of the food organizations to be certified, the certification system of the CBs and the system of accreditation by the accreditation bodies (ABs).
                        </p>
                        <p>
                        Furthermore it contains regulations for: the CBs which are licensed by the Foundation to provide certification on the basis of this scheme the harmonization process in which the licensed CBs participate to align audit and certification issues the accreditation bodies which accredit the licensed CBs the Board, which is the central Board of Stakeholders and experts of the CBs
                        </p>
                        <h4 class="gradient-theme mb-2">REGULATIONS </h4>
                        <p class="mt-3 pt-5">
                        These requirements and regulations are presented in four separate Parts:
                        </p>
                        <ul>
                            <li>Contains the requirements of the food safety system and guidance on how to apply for certification</li>
                            <li>The requirements for providing certification, including the regulation for the CBs and for the harmonization committee</li>
                            <li>The requirements for providing accreditation including the regulation for the ABs</li>
                            <li>The regulations for the Board of Stakeholders</li>
                        </ul>
                        <h4 class="gradient-theme mb-2">STEPS IN IMPLEMENTATION</h4>
                        <ol class="mt-3 pt-5">
                            <li>Training of top management </li>
                            <li>Identification of FOOD SAFETY POLICY AND OBJECTIVES</li>
                            <li>Formation of inter disciplinary FOOD SAFETY TEAM & appointment of Team Leader.</li>
                            <li>Development of documentation of the Quality Manual, Food Safety Manual and procedures. ( Including the following lower level documents )
                                <ul>
                                    <li>Emergency preparedness and response plan </li>
                                    <li>Product description including raw materials ingredients and food contact materials [also covering statutory & regulatory requirements]</li>
                                    <li>PREREQUISITE PROGRAMMES (PRP)</li>
                                    <li>Quality Plan</li>
                                    <li>Flow diagram, process steps, control measures, traceability system</li>
                                    <li>Hazard assessment</li>
                                    <li>Selection and assessment of control measures</li>
                                    <li>HACCP PLAN </li>
                                    <li>OPERATIONAL PREREQUISITE PROGRAMMES</li>
                                    <li>Withdrawal programme(Product recall procedure)</li>
                                    <li>Formats (including hygiene checklist)</li>
                                </ul>
                            </li>
                            <li>Training of Internal Auditors.</li>
                            <li>Implementation of the system</li>
                            <li>Internal Audits  (Food Safety) as per the system and follow up activities </li>
                            <li>Management Review Meetings</li>
                            <li>Pre-assessment audit by third party auditor</li>
                            <li>Audit of third party auditor and clearance of certification audit in two   phases STAGE I and STAGE II
                                <ul>
                                    <li>Pre assessment</li>
                                    <li>Certification audit and certification (valid for three years)</li>
                                </ul>
                            </li>
                            
                        </ol>

                    </div>
                    <div class="col-md-4">
                        <h4 class="gradient-theme mb-2">BENEFITS</h4>
                        <ul class="mt-3 pt-5">
                            <li>Increased Due Diligence</li>
                            <li>More Efficient And Dynamic Food Safety Hazard Control</li>
                            <li>All Control Measures Subjected To Hazard Analysis<li>
                            <li>Fill The Gap Between ISO 9001:2008 And HACCP.<li>
                            <li>System Approach Rather Than Product Approach.<li>
                            <li>Covers the entire Food chain.<li>
                            <li>Make the organization ready to meet the requirements of new FOOD SAFETY ACT.</li>
                            <li>Easier to meet the new food safety bill requirements</li>
                            <li>Better traceability </li>
                            <li>The name of the company will be added to the website of FSSC and any customer can easily verify the validity of the certificate </li>
                            <li>It is meeting all GFSI requirement of food safety </li>
                        </ul>
                        <h4 class="gradient-theme mb-2">Certification </h4>
                        <p class="mt-3 pt-5">According to the FSSC 22000 certification scheme, organizations are certified upon completion of a satisfactory audit by the auditor(s) of a CB. The CB in turn shall have been assessed and judged as competent by an accreditation body.
                        In order to receive a valid certificate, the organization shall select a CB which is approved and licensed by the Foundation. The Foundation cannot advise on the selection of a specific CB, but provides a list of licensed certification bodies and a list of provisional licensed certification bodies.
                        The FSSC 22000 certificate proves that the organizations food safety system is in full compliance with the requirements.
                        </p>
                    </div>
                </div>
            </div>
            
        </section>

        ';

echo $OUTPUT->footer();                 //show the moodle footer.