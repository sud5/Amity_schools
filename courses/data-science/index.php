<?php

require_once('../../config.php'); //this assumes your page is in a sub dir.
//require_login();               //make sure user is logged in
$PAGE->set_title("Data Science | LearningBerg");
$PAGE->set_heading("Data Science"); 
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
            background: url(https://www.learningberg.com/pluginfile.php/555/course/overviewfiles/Data-Science.jpg);
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
            <h1 class="display-2 pt-3" style="font-weight: 600;">Data Science</h1>
         
        </div>
        </section>
        <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-justify">
                    <p>The objective of this course is to impart necessary knowledge of the mathematical foundations needed for data science and develop programming skills required to build data science applications. </p>
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
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Demonstrate understanding of the mathematical foundations needed for data science. </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Collect, explore, clean, munge and manipulate data. </li>

                        <ul>
                            </div>
                            <div class="col-md-6">
                            <ul class="fa-ul ">
                            <li><i class=" fa-li fa fa-angle-right" aria-hidden="true"></i> Implement models such as k-nearest Neighbors, Naive Bayes, linear and logistic regression, decision trees, neural networks and clustering.</li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Build data science applications using Python based toolkits.  </li>
                        <ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                            <div class="p-4 text-justify box-sdw" >
                            <h4 class="gradient-theme" style="left:0">Duration : 45 hours</h4> <br /> &nbsp;
                            <p>
                                    
                            </p>
                            <a class="btn btn-cta  theme-btn-secondary" href="/course/view.php?id=20"><div class="text_to_html">Enroll Now</div></a>
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
                        
                        Introduction to Data Science (4 Hours)  <br>
                            <p style="text-align:justify">
                            Concept of Data Science, Traits of Big data, Web Scraping, Analysis vs Reporting                         
                            </p>
                        <h6 >Module 2</h6>
                        Introduction to Programming Tools for Data Science (6 Hours)  <br>
                            <ul>
                                <li>Toolkits using Python: Matplotlib, NumPy, Scikit-learn, NLTK </li>
                                <li>Visualizing Data: Bar Charts, Line Charts, Scatterplots </li>
                                <li>Working with data: Reading Files, Scraping the Web, Using APIs (Example: Using the Twitter APIs), Cleaning and Munging, Manipulating Data, Rescaling, Dimensionality Reduction </li>
                            </ul>
                          <h6 >Module 3</h6>
                          Mathematical Foundations (12 Hours)  <br>
                            <ul>
                                <li>Linear Algebra: Vectors, Matrices, </li>
                                <li>Statistics: Describing a Single Set of Data, Correlation, Simpson’s Paradox, Correlation and Causation </li>
                                <li>Probability: Dependence and Independence, Conditional Probability, Bayes’s Theorem, Random Variables, Continuous Distributions, The Normal Distribution, The Central Limit Theorem </li>
                                <li>Hypothesis and Inference: Statistical Hypothesis Testing, Confidence Intervals, Phacking, Bayesian Inference </li>

                            </ul>
                          <h6 >Module 4</h6>
                          Machine Learning (16 Hours)  <br/>
                          <p style="text-align:justify">
                          Overview of Machine learning concepts – Over fitting and train/test splits, Types of Machine learning – Supervised, Unsupervised, Reinforced learning, Introduction to Bayes Theorem, Linear Regression- model assumptions, regularization (lasso, ridge, elastic net), Classification and Regression algorithms- Naïve Bayes, K-Nearest Neighbors, logistic regression, support vector machines (SVM), decision trees, and random forest, Classification Errors, Analysis of Time Series- Linear Systems Analysis, Nonlinear Dynamics, Rule Induction, Neural NetworksLearning And Generalization, Overview of Deep Learning. 
                          
                          </p>
                          <h6 >Module 5</h6>
                          Case Studies of Data Science Application ( 6 Hours)   <br/>
                          <p style="text-align:justify">Weather forecasting, Stock market prediction, Object recognition, Real Time Sentiment Analysis. </p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="gradient-theme mb-2">List of Practicals </h4>
                        <ol class="pt-5" style="text-align:justify">
                            <li>Write a programme in Python to predict the class of the flower based on available attributes.  </li>
                            <li>Write a programme in Python to predict if a loan will get approved or not. </li>
                            <li>Write a programme in Python to predict the traffic on a new mode of transport.   </li>
                            <li>Write a programme in Python to predict the class of user. </li>
                            <li>Write a programme in Python to indentify the tweets which are hate tweets and which are not. </li>
                            <li>Write a programme in Python to predict the age of the actors.  </li>
                            <li>Mini project to predict the time taken to solve a problem given the current status of the user.</li>
                          </ol>
              
                    </div>
                </div>
            </div>
            
        </section>

        ';

echo $OUTPUT->footer();                 //show the moodle footer.