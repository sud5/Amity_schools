<?php

require_once('../../config.php'); //this assumes your page is in a sub dir.
//require_login();               //make sure user is logged in
$PAGE->set_title("Big data Analytics | LearningBerg");
$PAGE->set_heading("Big data Analytics"); 
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
            background: url(https://www.learningberg.com/pluginfile.php/720/course/overviewfiles/Bigdata.jpg);
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
            <h1 class="display-2 pt-3" style="font-weight: 600;">Big Data Analytics</h1>
         
        </div>
        </section>
        <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-justify">
                    <p>Big Data and Hadoop course is essential to understand the importance of Big Data in the in the real world scenario. The  course introduces about Hadoop, MapReduce, and Hadoop Distributed File system (HDFS). It will take you through the process of developing distributed processing of large data sets across clusters of computers and administering Hadoop environment.</p>
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
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> The importance of  Hadoop  in the current scenario</li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Role of Relational Database Management System (RDBMS) and Grid computing. </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Using Hadoop I/O to write MapReduce programs </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Develop MapReduce applications to solve the problems  </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Installation and group membership in ZooKeeper </li>

                        <ul>
                            </div>
                            <div class="col-md-6">
                            <ul class="fa-ul ">
                            <li><i class=" fa-li fa fa-angle-right" aria-hidden="true"></i> Set up Hadoop cluster and administer </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Pig for creating MapReduce programs     </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Hive, a data warehouse software, for querying and managing large datasets residing in distributed storage </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Hbase implementation, installation, and services </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> * Use of Sqoop in controlling the import and consistency </li>
                        <ul>
                            </div>
                        </div>
                        <h4 class="gradient-theme mt-2">Duration : 45 hours</h4>
                    </div>
                    <div class="col-md-4">
                            <div class="p-4 text-justify box-sdw" >
                            <h4 class="gradient-theme" style="left:0">Duration : 45 hours</h4> <br> &nbsp;
                            <p>
                            Big Data career opportunities are on the rise, and Hadoop is quickly becoming a must-know technology 
                            </p>
                            <a class="btn btn-cta  theme-btn-secondary" href="/course/view.php?id=22"><div class="text_to_html">Enroll Now</div></a>
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
                            <ul>
                            <li>Hadoop Architecture</li>
                            <li>Introduction to Hadoop</li>
                            <li>Parallel Computer vs. Distributed Computing</li>
                            <li>How to install Hadoop on your system</li>
                            <li>How to install Hadoop cluster on multiple machines</li>
                            </ul>
                            Hadoop Daemons introduction:<br/>
                            <ul>
                            <li>NameNode, DataNode, JobTracker, TaskTracker</li>
                            <li>Exploring HDFS (Hadoop Distributed File System)</li>
                            <li>Exploring the HDFS Apache Web UI</li>
                            <li>NameNode architecture(EditLog, FsImage, location of replicas)</li>
                            <li>Secondary NameNode architecture</li>
                            <li>DataNode architecture</li>
                            </ul>
                        <h6 >Module 2</h6>
                        <ul>
                            <li>MapReduce Architecture</li>
                            <li>Exploring JobTracker/TaskTracker</li>
                            <li>How to run a Map-Reduce job</li>
                            <li>Exploring Mapper/Reducer/Combiner</li>
                            <li>Shuffle: Sort & Partition</li>
                            <li>Input/output formats</li>
                            <li>Exploring the Apache MapReduce Web UI</li>
                        </ul>
                          <h6 >Module 3</h6>
                                <ul>
                                <li>Hadoop Developer Tasks</li>
                                <li>Writting a Map-Reduce programme</li>
                                <li>Reading and writing data using Java</li>
                                <li>Hadoop Eclipse integration</li>
                                <li>Mapper in details</li>
                                <li>Reducer in details</li>
                                <li>Using Combiners</li>
                                <li>Reducing Intermediate Data with Combiners</li>
                                <li>Writing Partitioners for Better Load Balancing</li>
                                <li>Sorting in HDFS</li>
                                <li>Searching in HDFS</li>
                                <li>Hands-On Exercise </li>
                                </ul>
                          <h6 >Module 4</h6>
                          <ul>
                            <li>Hadoop Administrative Tasks</li>
                            <li>Writting a Map-Reduce programme</li>
                            <li>Reading and writing data using Java</li>
                            <li>Hadoop Eclipse integration</li>
                            <li>Mapper in details</li>
                            <li>Reducer in details</li>
                            <li>Using Combiners</li>
                            <li>Reducing Intermediate Data with Combiners</li>
                            <li>Writing Partitioners for Better Load Balancing</li>
                            <li>Sorting in HDFS</li>
                            <li>Searching in HDFS</li>
                            <li>Hands-On Exercise</li>
                          </ul>
                          <h6 >Module 5</h6>
                          <ul>
                          
                            <li>HBase Architecture</li>
                            <li>Routine Administrative Procedures</li>
                            <li>Understanding dfsadmin and mradmin</li>
                            <li>Block Scanner, Balancer</li>
                            <li>Health Check & Safe mode</li>
                            <li>Monitoring and Debugging on a production cluster</li>
                            <li>NameNode Back up and Recovery</li>
                            <li>DataNode commissioning/decommissioning</li>
                            <li>ACL (Access control list)</li>
                            <li>Upgrading Hadoop</li>
                            
                          </ul>
                          <h6 >Module 6</h6>
                          <ul>
                          <li>Hive Architecture</li>
                          <li>Introduction to Hive</li>
                          <li>HBase vs Hive</li>
                          <li>Installation of Hive on your system</li>
                          <li>HQL (Hive query language )</li>
                          <li>Basic Hive commands</li>
                          <li>Hands-on-Exercise</li>
                          
                          </ul>
                          <h6 >Module 7</h6>
                          <ul>
                          <li>PIG Architecture hadoop</li>
                          <li>Introduction to Pig</li>
                          <li>Installation of Pig on your system</li>
                          <li>IBasic Pig commands</li>
                          <li>Hands-On Exercise</li>
                          
                          </ul>
                          <h6 >Module 8</h6>
                          <ul>
                          
                          <li>Sqoop Architecture</li>
                          <li>Introduction to Sqoop</li>
                          <li>Installation of Sqoop on your system</li>
                          <li>Import/Export data from RDBMS to HDFS</li>
                          <li>Import/Export data from RDBMS to HBase</li>
                          <li>Import/Export data from RDBMS to Hive</li>
                          <li>Hands-On Exercise</li>

                          </ul>
                    </div>
                    <div class="col-4">
   
              
                    </div>
                </div>
            </div>
            
        </section>

        ';

echo $OUTPUT->footer();                 //show the moodle footer.