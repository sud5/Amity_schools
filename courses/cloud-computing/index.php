<?php

require_once('../../config.php'); //this assumes your page is in a sub dir.
//require_login();               //make sure user is logged in
$PAGE->set_title("Cloud Computing  | LearningBerg");
$PAGE->set_heading("Cloud Computing"); 
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
            background: url(https://www.learningberg.com/pluginfile.php/679/course/overviewfiles/Cloud-Computing.jpg);
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
            <h1 class="display-2 pt-3" style="font-weight: 600;">Cloud Computing</h1>
         
        </div>
        </section>
        <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-justify">
                    <p>This will cover Cloud Computing, Planning, Technologies, Architecture, Infrastructure, Cloud Models, IaaS, PaaS, SaaS etc.</p>
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
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Good understanding on cloud computing</li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Deployment models  </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Cloud computing planning   </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Cloud computing technologies  </li>

                        <ul>
                            </div>
                            <div class="col-md-6">
                            <ul class="fa-ul ">
                            <li><i class=" fa-li fa fa-angle-right" aria-hidden="true"></i> Cloud computing architecture </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Cloud computing infrastructure  </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Different cloud models   </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Infrastructure, software, platform as a service.  </li>
                        <ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                            <div class="p-4 text-justify box-sdw" >
                            <h4 class="gradient-theme" style="left:0">Duration : 40 hours</h4> <br> &nbsp;
                            <p>
                            This will cover Cloud Computing, Planning, Technologies, Architecture, Infrastructure, Cloud Models, IaaS, PaaS, SaaS etc.,
                            </p>
                            <a class="btn btn-cta  theme-btn-secondary" href="/course/view.php?id=21"><div class="text_to_html">Enroll Now</div></a>
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
                        
                            Introduction (6 Hours) <br>
                            <ul>
                                <li>Explain about Cloud Computing?</li>
                                <li>Deployment Models</li>
                                <li>Service Models</li>
                                <li>Advantages of Cloud Computing</li>
                                <li>Disadvantages of Cloud Computing</li>
                                <li>Characteristics of Cloud Computing</li>
                            </ul>
                        <h6 >Module 2</h6>
                        Cloud Computing Planning<br>
                            <ul>
                                <li>Strategy Phase</li>
                                <li>Planning Phase </li>							                   
                                <li>Deployment Phase</li>
                            </ul>
                          <h6 >Module 3</h6>
                          Cloud Computing Technologies <br>
                            <ul>
                                <li>What is the Virtualization</li> 	                                            	
                                <li>Service-Oriented Architecture </li> 			                                     	
                                <li>What is Grid Computing </li> 
                            </ul>
                          <h6 >Module 4</h6>
                          Cloud Computing Architecture <br/>
                            <ul>
                                <li>Architecture Overview</li>
                            </ul>
                          <h6 >Module 5</h6>
                          Cloud  Infrastructure <br/>
                            <ul>
                                <li>Cloud Computing Infrastructure 		</li>				
                                <li>Infrastructural Constraints in Cloud Computing</li>
                            </ul>
                            <h6 >Module 6</h6>
                            Public Cloud Model <br/>
                              <ul>
                                  <li>Explain Public Cloud Model 		</li>				
                                  <li>Advantages of Public Cloud Model </li>
                                  <li>Disadvantages of Public Cloud Model</li>
                              </ul>
                              <h6 >Module 7</h6>
                              Private Cloud Model<br/>
                                <ul>
                                    <li>Explain Private Cloud Model 	</li>				
                                    <li>Advantages of Private Cloud Model 	</li>
                                    <li>Disadvantages of Private Cloud Model</li>
                                </ul>
                                <h6 >Module 8</h6>
                                Hybrid Cloud Model<br/>
                                  <ul>
                                      <li>Explain Hybrid Cloud Model </li>				
                                      <li>Advantages of Hybrid Cloud Model 	</li>
                                      <li>Disadvantages of Hybrid Cloud Model</li>
                                  </ul>
                                  <h6 >Module 9</h6>
                                  Community Cloud Model<br/>
                                    <ul>
                                        <li>Explain Community Cloud Model </li>				
                                        <li>Advantages of Community Cloud Model </li>
                                        <li>Disadvantages of Community Cloud Model</li>
                                    </ul>
                                    <h6 >Module 10</h6>
                                    Infrastructure as a Service<br/>
                                      <ul>
                                          <li>Infrastructure as a Service </li>				
                                          <li>Advantages of Infrastructure as a Service  </li>
                                          <li>Disadvantages of Infrastructure as a Service </li>
                                          <li>Characteristics of Infrastructure as a Service </li>
                                      </ul>

                                      <h6 >Module 11</h6>
                                      Conclusion<br/>

                    </div>
                    <div class="col-md-4">

              
                    </div>
                </div>
            </div>
            
        </section>

        ';

echo $OUTPUT->footer();                 //show the moodle footer.