<?php

require_once('../../config.php'); //this assumes your page is in a sub dir.
//require_login();               //make sure user is logged in
$PAGE->set_title("Selenium Automation  | LearningBerg");
$PAGE->set_heading("Selenium Automation"); 
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
            background: url(https://www.learningberg.com/pluginfile.php/1/theme_maker/slide1image/1571819812/LB-Slider.jpg);
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
            <h1 class="display-2 pt-3" style="font-weight: 600;">Selenium Automation</h1>
         
        </div>
        </section>
        <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-justify">
                    <p>This course curriculum is created and designed for any software  professionals or testers having  manual testing knowledge and test automation exposure is required.  Learner will  get a thorough understanding on all the techniques of writing effective automated testing using Selenium tool.</p>
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
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Understand block chain technology.</li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Develop block chain based solutions and write smart contract using Hyperledger Fabric and Ethereum frameworks.  </li>

                        <ul>
                            </div>
                            <div class="col-md-6">
                            <ul class="fa-ul ">
                            <li><i class=" fa-li fa fa-angle-right" aria-hidden="true"></i> Build and deploy block chain application for on premise and cloud based architecture. </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Integrate ideas from various domains and implement them using block chain technology in different perspectives.  </li>
                        <ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                            <div class="p-4 text-justify box-sdw" >
                            <h4 class="gradient-theme" style="left:0;">Duration : 45 hours</h4> <br> &nbsp;
                            <p>
                            Learner will  get a thorough understanding on all the techniques of writing effective automated testing using Selenium tool.
                            </p>
                            <a class="btn btn-cta  theme-btn-secondary" href="/course/view.php?id=12"><div class="text_to_html">Enroll Now</div></a>
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
                        
                        Selenium Introduction<br>
                            <ul>
                            <li>Selenium History</li>
                            <li>Migrating to Webdriver latest Version</li>
                            <li>Selenium 2.0 Webdriver Architecture </li>                      
                            </ul>
                        <h6 >Module 2</h6>
                            Installations and Configurations with Java basics <br>
                            <ul>
                            <li>Java Installation</li>
                            <li>Eclipse Installation, configuration</li>
                            <li>Selenium Jars download/Configuration</li>
                            <li>Brush up basic java concepts</li>
                            </ul>
                          <h6 >Module 3</h6>
                          Java OOPS Basics for Selenium<br>
                          <ul>
                         <li> Java first program basics</li>
                         <li>Java program principles</li>
                         <li>Classes, objects in Java</li>
                         <li>Strings in Java</li>
                         <li>Coding Basics</li>
                         <li>Inheritance Concepts</li>
                         <li>Practical usage of Inheritance</li>
                         <li>Interface Concepts</li>
                         <li>Practical Usage of Interface</li>
                         <li>Runtime Polymorphisim</li>
                          </ul>
                          <h6 >Module 4</h6>
                          Basic Concepts for first Webdriver program<br/>
                            <ul>
                                <li>Webdriver Interface explanation and Invoking Browser</li>
                                <li>Basic Methods of Webdriver</li>
                                <li>How to run tests in Google Chrome</li>
                                <li>How to run tests in Internet Explorer</li>

                            </ul>
                            <h6 >Module 5</h6>
                            Locator Techniques & Tools used<br/>
                              <ul>
                              <li> Preview Browser Addons overview to identify elements</li>
                              <li> Preview Installing Firebug & Firepath Addons</li>
                              <li> Locator Techniques: Xpath identification using Firepath, Name ,ID, ClassName, LinkText, Handling links  
                              </ul>
                              <h6 >Module 6</h6>
                              Advanced Ways-Locating objects<br/>
                                <ul>
                                <li> Writing Customized xpath Using Attributes</li> 
                                <li> Writing cutomized xpath Using Tagnames Traversing</li> 
                                <li> CSS Selectors locators</li> 
                                </ul>
                                <h6 >Module 7</h6>
                                Techniques to Automate Web UI<br/>
                                <ul>
                                <li>Handle Dynamic dropdowns with Webdriver API</li> 
                                <li>Handling Static dropdowns with Select webdriver API</li> 
                                <li>Handling Checkboxes with webdriver API</li> 
                                <li>Handling Radiobuttons with Customized xpath</li> 
                                <li>Handling Radiobutton dynamically- real time examples</li> 
                                <li>Types of Alerts present and Methods to handle them</li> 
                                <li>Handling Java Alerts using Webdriver API</li> 
                                <li>Web Elements Validation</li> 
                                <li>End to End Practise Exercise</li> 
                            
                                </ul>
                                <h6 >Module 8</h6>
                                Techniques to automate Advanced Web UI<br/>
                                <ul>
                                <li>Handling Ajax/Mouse Interactions</li>
                                <li>Actions class-real time example</li>
                                <li>Handling Multiple Windows</li>
                                <li>Window Handle concepts-real time example</li>
                                <li>Live Example on working with Child windows</li>
                                <li>Handling ul li Tags in Selenium</li>
                                <li>How to handle Frames?</li>
                                <li> Frames Techniques-real time example</li>
                                </ul>
                                <h6 >Module 9</h6>
                                Real Time Exercises (End to End Programming)<br/>
                                <ul>
                                <li> Test Cases- Practise Exercise</li>
                                <li> Exercise 1.1-Limiting Webdriver scope</li>
                                <li> Getting Count of links int the pages,sections</li>
                                <li> Testcases-Practise Exercise-2</li>
                                <li> Exercise 2.1-Dynamic data in Websites</li>
                                <li> Exercise 2.2-Dynamic Links Handling</li>
                                <li> Exercise 2.3-Validations & checkpoints</li>

                                </ul>
                                <h6 >Module 10</h6>
                                Real Time Exercises (End to end Programming)<br/>
                                <ul>
                                <li> How to handle table Grids in webpage</li>
                                <li> Techniques used for table grid-Real time example</li>
                                <li> How to overcome Synchronization problems</li>
                                <li> Maximizing window and deleting cookies</li>
                                <li> Handling HTTPS certifications</li>
                                <li> How to troubleshoot if its not invoking in firefox</li>
                                <li> Killing the Process and Cookies using Selenium</li>
                                <li> How to take Screenshots in Selenium</li>     
                                </ul>
                                <h6 >Module 11</h6>
                                Real Time Exercises (End to end Programming)<br/>
                                <ul>
                                <li>What is Apache POI API & Download Instructions</li>
                                <li>Excel API Methods explanation</li>
                                <li>Program for retrieving data from excel</li>
                                <li>Program for updating data back to excel                 </li>           
                                </ul>
                                <h6 >Module 12</h6>
                                Real Time Exercises (End to end Programming)<br/>
                                <ul>
                                <li>Why TestNG and Its Advantages</li>
                                <li>TestNG Installation and Setup in Eclipse</li>
                                <li>TestNG Annotations Part</li>
                                <li>Prioritizing the tests using TestING</li>
                                <li>Disabling Enabling the Testcases and putting Timeout</li>
                                <li>Importance of TestING xml file</li>
                                <li>Including and excluding the Testcases from Execution with TestING xml file</li>
                                <li>Importance of Groups in TestING</li>
                                <li>Data driving Testing with TestNG</li>
                                <li>DataProvider Annotation - Parameterizing Testcases</li>
                                <li>Parameterizing from TestNG xml file</li>
                                 
                                </ul>
                                <h6 >Module 13</h6>
                                Framework Part -2 -Data driven Framework<br/>
                                <ul>
                                <li>Why we should not hard code the data?</li>
                                <li>How to write Global parameters with java code</li>
                                <li>Data driving parameterization from Properties file</li>
                                <li>How to deal with Reusable Components</li>
                                </ul>
                                <h6 >Module 14</h6>
                                Framework Part 3 – Keyword Driven<br/>
                                <h6 >Module 15</h6>
                                Framework Part 4 – Modular Driven, Hybrid<br/>
                                <h6 >Module 16</h6>
                                Framework Part -2 -Data driven Framework<br/>
                                <ul>
                                <li>What is Build Management tool?</li>
                                <li>Installing & configuring ANT</li>
                                <li>Understanding Build.xml file</li>
                                <li>Different ANT Commands to trigger framework      </li>                          
                                </ul>
                                <h6 >Module 17</h6>
                                Framework Part -6 -Jenkins- CI Tool<br/>
                                <ul>
                                    <li>Why Jenkins? and where it going to help us in Framework design?</li>
                                    <li>Installing & Configuring Jenkins with Java and ANT</li>
                                    <li>Creating Jenkins project and integrating Existing Framework</li>
                                    <li>Running the Framework and Scheduling it from Jenkins</li>
                                </ul>
                                <h6 >Module 18</h6>
                                Framework Part 7 – Page Object Model<br/>
                                <ul>
                                    <li>What is Page object model?</li>
                                    <li>Creating Page object Constructor in classes</li>
                                    <li>Practical Exercise explaining Pageobject Model</li>
                                </ul>
                                <h6 >Module 19</h6>
                                Cross Browser Testing with Selenium Grid<br/>
                                <ul>
                                <li>How to execute Selenium Tests Remotely</li>
                                <li>Grid Concepts & Architecture</li>
                                <li>Configuring Hub and Node</li>
                                <li>Registering Nodes with Hub Server</li>
                                <li>Desired Capabilities-Grid Program</li>
                                <li>Execution Selenium scripts in Remote Machine</li>
                                <li>Code and Commands</li>
                                
                                </ul>
                    </div>
                    <div class="col-4">
              
                    </div>
                </div>
            </div>
            
        </section>

        ';

echo $OUTPUT->footer();                 //show the moodle footer.