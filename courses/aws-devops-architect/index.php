<?php

require_once('../../config.php'); //this assumes your page is in a sub dir.
//require_login();               //make sure user is logged in
$PAGE->set_title("AWS Certified Solution Architect  | LearningBerg");
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
            background: url(https://www.learningberg.com/pluginfile.php/144/course/overviewfiles/AWS-Certified-Solution-Architect.jpg);
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
            <h1 class="display-2 pt-3" style="font-weight: 600;">AWS Certified Solution Architect</h1>
         
        </div>
        </section>
        <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-justify">
                    <p>Course will cover about all the various services offered by AWS and  how these services work together to build fault tolerant and highly available applications. </p>
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
                            <div class="col-12">
                            <p>After undergoing this course, the students will have thorough understand on AWS 10000 foot overview, Identity access management & Simple storage service, EC2, Database on AWS, Route 53, Amazon virtual private cloud, AWS high availability architecture, Serverless.</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                            <div class="p-4 text-justify box-sdw" >
                            <h4 class="gradient-theme" style="left:0;">Duration : 45 hours</h4> <br/> &nbsp;
                            <p>
                            Course will cover about all the various services offered by AWS and  how these services work together to build fault tolerant and highly available applications.
                            </p>
                            <a class="btn btn-cta  theme-btn-secondary" href="/course/view.php?id=5"><div class="text_to_html">Enroll Now</div></a>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-2" >
            <div class="container">

                <div class="row pt-3">
                    <div class="col-md-8">
                            <h4 class="mb-4 gradient-theme">Course Contents </h4>
                        <h6 class="mt-2 pt-5">Module 1</h6>
                        
                        AWS - 10000 Foot Overview<br>
                                <ul>
                                <li>The History Of AWS</li>
                                <li>AWS - 10,000 Foot Overview</li>
                                <li>How To Sign Up To AWS.</li>
                                </ul>
                        <h6 >Module 2</h6>
                        Identity Access Management & S3<br>
                        <ul>
                           <li>IAM 101</li>
                           <li>IAM Practical</li>
                           <li>Create A Billing Alarm</li>
                           <li>S3 101</li>
                           <li> Create An S3 Bucket</li>
                           <li>Security And Encryption</li>
                           <li>Version Control</li>
                           <li>Lifecycle Management and Glacier</li>
                           <li>Cross Region Replication</li>
                           <li>Transfer Acceleration</li>
                           <li> CloudFront Overview</li>
                           <li>CloudFront Lab</li>
                           <li> Snowball Overview</li>
                           <li>Snowball Lab</li>
                           <li>Storage Gateway</li>
                           <li> IAM Online Test</li>
                        </ul>
                          <h6 >Module 3</h6>
                          EC2 <br>
                            <ul>
                            <li>EC2 101</li>
                            <li>Our Hands Dirty With EC2 </li>
                            <li>Security Groups Basics</li>
                            <li>EBS 101</li>
                            <li>Volumes & Snapshots</li>
                            <li>AMI Types (EBS vs Instance Store)</li>
                            <li>Encrypted Root Device Volumes & Snapshots</li>
                            <li>AWS This Week</li>
                            <li>CloudWatch 101</li>
                            <li>CloudWatch Lab</li>
                            <li>The AWS Command Line</li>
                            <li>Using IAM Roles With EC2</li>
                            <li>Using Boot Strap Scripts</li>
                            <li>EC2 Instance Meta Data</li>
                            <li>Elastic File System</li>
                            <li>EC2 Placement Groups</li>
                            <li>Online Test</li>
                        
                            </ul>
                          <h6 >Module 4</h6>
                          Database on AWS <br/>
                            <ul>
                                <li>Databases 101</li>
                                <li>Create An RDS Instance</li>
                                <li>RDS Backups, Multi-AZ & Read Replicas</li>
                                <li>RDS Backups, Multi-AZ & Read Replicas - Lab</li>
                                <li>DynamoDB</li>
                                <li>Redshift</li>
                                <li>Aurora</li>
                                <li>Elasticache</li>
                                <li>Databases Summary</li>
                                <li>Online Test</li>

                            </ul>
                            <h6 >Module 5</h6>
                            Route 53<br/>
                              <ul>
                               <li> DNS 101</li>
                               <li>Route53 - Register A Domain Name Lab</li>
                               <li>Route53 Routing Policies Available On AWS</li>
                               <li>Simple Routing Policy Lab</li>
                               <li>Weighted Routing Policy Lab</li>
                               <li>Latency Routing Policy</li>
                               <li>Failover Routing Policy</li>
                               <li>Geolocation Routing Policy</li>
                               <li>Geoproximity Routing Policy (Traffic Flow Only)</li>
                               <li>Multivalue Answer</li>
                               <li>Route53 Summary</li>
                               <li>Route53 Online Test</li>
                              </ul>

                              <h6 >Module 6</h6>
                              VPCs<br/>
                                <ul>
                                <li>Introduciton about VPCs</li>
                                <li>Build a custom VPC</li>
                                <li>Network Address Translation</li>
                                <li>Access Control Lists</li>
                                <li>Custom VPCs and ELBs</li>
                                <li>VPC flow logs</li>
                                <li>Bastons</li>
                                <li>Direct Connect</li>
                                <li>VPC End Points</li>
                                <li>Online Test</li>
                            
                                </ul>
                              <h6 >Module 7</h6>
                              HA Architecture<br>
                              <ul>
                              <li>HA Architecture<br/>
                              <li>Load balancesr theory</li>
                              <li>Health checks lab</li>
                              <li>Advanced load balancer lab</li>
                              <li>HA architecture</li>
                              <li>HA Word Press site</li>
                              <li>Setting up EC2</li>
                              <li>Adding Resillence and Autoscaling</li>
                              <li>Cleaning Up</li>
                              <li>Cloudformation </li>
                              <li>Elastic Beanstalk</li>
                              <li>Online Test</li>
                              <li>Applications</li>
                              <li>SQS</li>
                              <li>SWF</li>
                              <li>SNS</li>
                              <li>Elastic Transcoder</li>
                              <li>API Gateway</li>
                              <li>Kinesis</li>
                              <li>Web Identity Federation</li>
                              <li>Online Test</li>
                              </ul>
                              <h6 >Module 8</h6>
                              Serverless<br>
                              <ul>
                                <li>Lambda Concepts</li>
                                <li>Building Serverless Webpage</li>
                                <li>Building Alex Skill</li>
                                <li>Online Test.</li>
                        
                              </ul>
                              <h6 >Module 9</h6>
                              Conclusion<br>

                    </div>
                    <div class="col-md-4">
                        <h4 class="gradient-theme mb-2">List of Practicals </h4>
                        <ol class="pt-5" style="text-align:justify">
                            <li>Install and understand Docker container, Node.js, Java and Hyperledger Fabric, Ethereum and perform necessary software installation on local machine/create instance on Cloud to run. </li><br/>
                            <li>Create and deploy a block chain network using Hyperledger Fabric SDK for Java Set up and initialize the channel, install and instantiate chaincode, and perform invoke and query on your block chain network</li><br/>
                            <li>Interact with a block chain network. Execute transactions and requests against a block chain network by creating an app to test the network and its rules </li><br/>
                            <li>Deploy an asset-transfer app using block chain. Learn app development within a Hyperledger Fabric network</li><br/>
                            <li>Use block chain to track fitness club rewards Build a web app that uses Hyperledger Fabric to track and trace member rewards </li><br/>
                            <li>Car auction network: A Hello World example with Hyperledger Fabric Node SDK and IBM Block chain Starter Plan. Use Hyperledger Fabric to invoke chaincode while storing results and data in the starter plan </li><br/>
                            <li>Develop an IoT asset tracking app using Block chain. Use an IoT asset tracking device to improve a supply chain by using Block chain, IoT devices, and Node-RED</li><br/>
                            <li>Secure art using block chain digital certificates. Node.js-based auction application can help democratize the art market </li>
                          </ol>
              
                    </div>
                </div>
            </div>
            
        </section>

        ';

echo $OUTPUT->footer();                 //show the moodle footer.