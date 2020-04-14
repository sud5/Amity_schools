<?php

require_once('../../config.php'); //this assumes your page is in a sub dir.
//require_login();               //make sure user is logged in
$PAGE->set_title("Quantum Computing  | LearningBerg");
$PAGE->set_heading("Quantum Computing"); 
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
            background: url(https://www.learningberg.com/pluginfile.php/57/course/overviewfiles/Quantum-Computing.jpg);
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
            <h1 class="display-2 pt-3" style="font-weight: 600;">Quantum Computing</h1>
         
        </div>
        </section>
        <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-justify">
                    <p>The objective of this course is to impart necessary knowledge to the learner so that he/she can develop and implement algorithm and write programs using these algorithm. </p>
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
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i>Explain the working of a Quantum Computing program, its architecture and program model </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Develop quantum logic gate circuits.  </li>

                        <ul>
                            </div>
                            <div class="col-md-6">
                            <ul class="fa-ul ">
                            <li><i class=" fa-li fa fa-angle-right" aria-hidden="true"></i>Develop quantum algorithm  </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Program quantum algorithm on major toolkits  </li>
                        <ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                            <div class="p-4 text-justify box-sdw text-center" >
                            <h4 class="gradient-theme " style="left:0">Duration : 45 hours</h4> <br> &nbsp;
                            <p>
                          
                            </p>
                            <a class="btn btn-cta  theme-btn-secondary" href="/course/view.php?id=2"><div class="text_to_html">Enroll Now</div></a>
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
                        
                         Introduction to Quantum Computing (6 Hours)  <br>
                            <p style="text-align:justify">
                            Motivation for studying Quantum Computing <br>
                            Major players in the industry (IBM, Microsoft, Rigetti, D-Wave etc.) <br>
                            Origin of Quantum Computing <br>
                            Overview of major concepts in Quantum Computing 
                            <ul>
                                <li>Qubits and multi-qubits states, Bra-ket notation</li>
                                <li>Bloch Sphere representation </li>
                                <li>Quantum Superposition </li>
                                <li>Quantum Entanglement </li>
                            </ul>
                        </p>
                        <h6 >Module 2</h6>
                        Math Foundation for Quantum Computing (9 Hours)  <br>
                        <p style="text-align:justify">
                        Matrix Algebra: basis vectors and orthogonality<br>
                        <ul>
                        <li> Inner product and Hilbert spaces</li>
                        <li>Matrices and tensors</li>
                        <li>Unitary operators and projectors</li>
                        <li>Dirac notation</li>
                        <li>Eigen values and Eigen vectors</li>
                            </ul>
                        </p>
                          <h6 >Module 3</h6>
                          Building Blocks for Quantum Program (8 Hours)  <br>
                          <p style="text-align:justify">
                          Architecture of a Quantum Computing platform <br>
                          Details of q-bit system of information representation: 
                            <ul>
                                <li>Block Sphere </li>
                                <li>Multi-qubits States </li>
                                <li>Quantum superposition of qubits (valid and invalid superposition) </li>
                                <li>Quantum Entanglement </li>
                                <li>Useful states from quantum algorithmic perceptive e.g. Bell State</li>
                                <li>Operation on qubits: Measuring and transforming using gates. </li>
                                <li>Quantum Logic gates and Circuit: Pauli, Hadamard, phase shift, 
                                controlled gates, Ising, Deutsch, swap etc.</li>
                            </ul>
                            Programming model for a Quantum Computing Program <br>
                            <ul>
                            <li>Steps performed on classical computer </li>
                            <li>Steps performed on Quantum Computer </li>
                            <li>Moving data between bits and qubits. </li>
                            </ul>
                          </p>
                          <h6 >Module 4</h6>
                          Quantum Algorithms (22 Hours) <br/>
                          <p style="text-align:justify">
                          Basic techniques exploited by quantum algorithms. 
                          <ul>
                          <li>Amplitude amplification </li>
                          <li>Quantum Fourier   Transform </li>
                          <li>Phase Kick-back </li>
                          <li>Quantum Phase estimation </li>
                          <li>Quantum Walks </li>
                          
                          </ul>
                          Major Algorithms 
                          <ul>
                            <li>Shor’s Algorithm </li>
                            <li>Grover’s Algorithm </li>
                            <li>Deutsch’s Algorithm </li>
                            <li>Deutsch -Jozsa Algorithm </li>
                          </ul>
                          OSS Toolkits for implementing Quantum program 
                          <ul>
                          <li>IBM quantum experience </li>
                          <li>Microsoft Q  </li>
                          <li>Rigetti PyQuil (QPU/QVM) </li>
                          </ul>
                         </p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="gradient-theme mb-2">List of Practicals </h4>
                        <ol class="pt-5" style="text-align:justify">
                            <li>Building Quantum dice </li>
                            <li>Building Quantum Random No. Generation </li>
                            <li>Composing simple quantum circuits with q-gates and measuring the output into classical bits. </li>
                            <li>Implementation of Shor’s Algorithms </li>
                            <li>Implementation of Grover’s Algorithm </li>
                            <li>Implementation of Deutsch’s Algorithm </li>
                            <li>Implementation of Deutsch-Jozsa’s Algorithm </li>
                            <li>Mini Project such as implementing an API for efficient search using Grover’s Algorithms or Integer factorization using Shor’s Algorithm</li>

                          </ol>
              
                    </div>
                </div>
            </div>
            
        </section>

        ';

echo $OUTPUT->footer();                 //show the moodle footer.