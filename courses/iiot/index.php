<?php

require_once('../../config.php'); //this assumes your page is in a sub dir.
//require_login();               //make sure user is logged in
$PAGE->set_title("Industrial Internet of Things  | LearningBerg");
$PAGE->set_heading("Industrial Internet of Things"); 
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
            background: url(https://www.learningberg.com/pluginfile.php/75/course/overviewfiles/IIOT.jpg);
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
            <h1 class="display-2 pt-3" style="font-weight: 600;">Industrial Internet of Things</h1>
         
        </div>
        </section>
        <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-justify">
                    <p>The objective of this course is to impart necessary and practical knowledge of components of Internet of Things and develop skills required to build real-life IoT based projects. </p>
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
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i>Understand internet of Things and its hardware and software components .</li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Interface I/O devices, sensors & communication modules.  </li>

                        <ul>
                            </div>
                            <div class="col-md-6">
                            <ul class="fa-ul ">
                            <li><i class=" fa-li fa fa-angle-right" aria-hidden="true"></i> Remotely monitor data and control device. </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Develop real life IoT based Projects.  </li>
                        <ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                            <div class="p-4 text-justify box-sdw" >
                            <h4 class="gradient-theme" style="left:0;">Duration : 45 hours</h4> <br> &nbsp; 
                            <p>
                            Develop skills required to build real-life IoT based projects.
                            </p>
                            <a class="btn btn-cta  theme-btn-secondary" href="/course/view.php?id=11"><div class="text_to_html">Enroll Now</div></a>
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
                        
                        Introduction to IoT (8 Hours)<br>
                            <p style="text-align:justify">
                            Architectural Overview <br>
                            Design principles and needed capabilities<br>
                            IoT Applications, Sensing, Actuation<br>
                            Basics of Networking    <br>
                            M2M and IoT Technology Fundamentals- Devices and gateways <br>
                            Data management, Business processes in IoT<br>
                            Everything as a Service(XaaS)   <br>
                            Role of Cloud in IoT    <br>
                            Security aspects in IoT    

                                                    </p>
                        <h6 >Module 2</h6>
                        Elements of IoT (9 Hours) <br>
                        <p style="text-align:justify">
                        Hardware Components- Computing (Arduino, Raspberry Pi) <br>
                        Communication <br>
                        Sensing, Actuation<br> 
                        I/O interfaces<br>
                        Software Components- Programming API’s (using Python/Node.js/Arduino) for Communication Protocols-MQTT, ZigBee, Bluetooth, CoAP, UDP, TCP
                          </p>
                          <h6 >Module 3</h6>
                          IoT Application Development (18 Hours)<br>
                          <p style="text-align:justify">
                          Solution framework for IoT applications- Implementation of Device integration <br>
                            Data acquisition and integration<br>
                            Device data storage- Unstructured data storage on cloud/local server <br>
                            Authentication<br>
                            Authorization of devices 

                          </p>
                          <h6 >Module 4</h6>
                          IoT Case Studies  (10 Hours) <br/>
                          <p style="text-align:justify">
                          IoT case studies and mini projects based on Industrial automation <br>
                            Transportation<br>
                            Agriculture<br>
                            Healthcare <br>
                            Home Automation <br>

                          </p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="gradient-theme mb-2">List of Practicals </h4>
                        <ol class="pt-5" style="text-align:justify">
                            <li>Familiarization with Arduino/Raspberry Pi and perform necessary software installation. </li>
                            <li>To interface LED/Buzzer with Arduino/Raspberry Pi and write a program to turn ON LED for 1 sec after every 2 seconds. </li>
                            <li>To interface Push button/Digital sensor (IR/LDR) with Arduino/Raspberry Pi and write a program to turn ON LED when push button is pressed or at sensor detection. </li>
                            <li>To interface DHT11 sensor with Arduino/Raspberry Pi and write a program to print temperature and humidity readings. </li>
                            <li>To interface motor using relay with Arduino/Raspberry Pi and write a program to turn ON motor when push button is pressed. </li>
                            <li>To interface OLED with Arduino/Raspberry Pi and write a program to print temperature and humidity readings on it. </li>
                            <li>To interface Bluetooth with Arduino/Raspberry Pi and write a program to send sensor data to smartphone using Bluetooth. </li>
                            <li>To interface Bluetooth with Arduino/Raspberry Pi and write a program to turn LED ON/OFF when ‘1’/’0’ is received from smartphone using Bluetooth. </li>
                            <li>Write a program on Arduino/Raspberry Pi to upload temperature and humidity data to thingspeak cloud. </li>
                            <li>Write a program on Arduino/Raspberry Pi to retrieve temperature and humidity data from thingspeak cloud. </li>
                            <li>To install MySQL database on Raspberry Pi and perform basic SQL queries. </li>
                            <li>Write a program on Arduino/Raspberry Pi to publish temperature data to MQTT broker. </li>
                            <li>Write a program on Arduino/Raspberry Pi to subscribe to MQTT broker for temperature data and print it. </li>
                            <li>Write a program to create TCP server on Arduino/Raspberry Pi and respond with humidity data to TCP client when requested. </li>
                            <li>Write a program to create UDP server on Arduino/Raspberry Pi and respond with humidity data to UDP client when requested</li>
                          </ol>
              
                    </div>
                </div>
            </div>
            
        </section>

        ';

echo $OUTPUT->footer();                 //show the moodle footer.