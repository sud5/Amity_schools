<?php

require_once('../../config.php'); //this assumes your page is in a sub dir.
//require_login();               //make sure user is logged in
$PAGE->set_title("Artificial Intelligence  | LearningBerg");
$PAGE->set_heading("Artificial Intelligence"); 
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
            background: url(https://www.learningberg.com/pluginfile.php/258/course/overviewfiles/Artificial-Intelligence.jpg);
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
            <h1 class="display-2 pt-3" style="font-weight: 600;">Artificial Intelligence</h1>
         
        </div>
        </section>
        <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-justify">
                    <p>Artificial Intelligence is a major step forward in how computer system adapts, evolves and learns. It has widespread application in almost every industry and is considered to be a big technological shift, similar in scale to past events such as the industrial revolution, the computer age, and the smart phone revolution. This course will give an opportunity to gain expertise in one of the most fascinating and fastest growing areas of Computer Science through classroom program that covers fascinating and compelling  healthcare, agriculture and many other areas. This course will give the students a rigorous, advanced and professional graduate-level foundation in Artificial Intelligence.  </p>
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
                            <div class="col-6">
                            <ul class="fa-ul ">
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Build intelligent agents for search and games.</li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Learning optimization and inference algorithms for model learning.  </li>

                        <ul>
                            </div>
                            <div class="col-md-6">
                            <ul class="fa-ul ">
                            <li><i class=" fa-li fa fa-angle-right" aria-hidden="true"></i> Solve AI problems through programming with Python. </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Design and develop programs for an agent to learn and act in a structured environment.  </li>
                        <ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                            <div class="p-4 text-justify box-sdw" >
                            <h4 class="gradient-theme " style="left:0">Duration : 45 hours</h4> <br> &nbsp;
                            <p>
                            This course will give an opportunity to gain expertise in one of the most fascinating and fastest growing areas of Computer Science.
                            </p>
                            <a class="btn btn-cta  theme-btn-secondary" href="/course/view.php?id=10"><div class="text_to_html">Enroll Now</div></a>
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
                        
                        Introduction (3 Hours)  <br>
                            <p style="text-align:justify">
                            Concept of AI, history, current status, scope, agents, environments, Problem Formulations, Review of tree and graph structures, State space representation, Search graph and Search tree.                         </p>
                        <h6 >Module 2</h6>
                        Search Algorithms (9 Hours) <br>
                        <p style="text-align:justify">
                        Code ARTIFICIAL INTELLIGENCE L T P 3 - 2 Credits 4 <br/>
                        Random search, Search with closed and open list, Depth first and Breadth first search, Heuristic search, Best first search, A* algorithm, Game Search. 
                                                  </p>
                          <h6 >Module 3</h6>
                          Probabilistic Reasoning (12 Hours)   <br>
                          <p style="text-align:justify">
                          Probability, conditional probability, Bayes Rule, Bayesian Networks- representation, construction and inference, temporal model, hidden Markov model. 
                                                    </p>
                          <h6 >Module 4</h6>
                          Markov Decision process (12 Hours)  <br/>
                          <p style="text-align:justify">
                          MDP formulation, utility theory, utility functions, value iteration, policy iteration and partially observable MDPs. 
                                                    </p>
                          <h6 >Module 5</h6>
                          Reinforcement Learning (9 Hours)  <br/>
                          <p style="text-align:justify">
                          Passive reinforcement learning, direct utility estimation, adaptive dynamic programming, temporal difference learning, active reinforcement learning- Q learning. 
                                                    </p>
 
                    </div>
                    <div class="col-md-4">
                        <h4 class="gradient-theme mb-2">List of Practicals </h4>
                        <ol class="pt-5" style="text-align:justify">
                            <li>Write a programme to conduct uninformed and informed search.</li>
                            <li>Write a programme to conduct game search. </li>
                            <li>Write a programme to construct a Bayesian network from given data. </li>
                            <li>Write a programme to infer from the Bayesian network. </li>
                            <li>Write a programme to run value and policy iteration in a grid world.</li>
                            <li>Write a programme to do reinforcement learning in a grid world. </li>
                            <li>Mini Project work.</li>
                          </ol>
              
                    </div>
                </div>
            </div>
            
        </section>

        ';

echo $OUTPUT->footer();                 //show the moodle footer.