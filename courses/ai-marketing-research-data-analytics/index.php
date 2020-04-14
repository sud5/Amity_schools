<?php

require_once('../../config.php'); //this assumes your page is in a sub dir.
//require_login();               //make sure user is logged in
$PAGE->set_title("AI: Marketing Research Data Analytics  | LearningBerg");
$PAGE->set_heading("AI: Marketing Research Data Analytics"); 
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
            background: url(https://www.learningberg.com/pluginfile.php/425/course/overviewfiles/AI--Marketing-Research-Data-Analytics.jpg);
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
            <h1 class="display-2 pt-3" style="font-weight: 600;">AI: Marketing Research<br> Data Analytics</h1>
         
        </div>
        </section>
        <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-justify">
                    <p>The objective of this course is to provide conceptual understanding of how block chain technology can be used to innovate and improve business processes. The course covers the technological underpinning of block Chain operations in both theoretical and practical implementation of solutions using block Chain technology. </p>
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
                    <div class="col-8">
                    <h4 class="gradient-theme">Learning Outcomes </h4>
                        <div class="row" style="padding-top:3em">
                            <div class="col-6">
                            <ul class="fa-ul ">
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Understand block chain technology.</li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Develop block chain based solutions and write smart contract using Hyperledger Fabric and Ethereum frameworks.  </li>

                        <ul>
                            </div>
                            <div class="col-6">
                            <ul class="fa-ul ">
                            <li><i class=" fa-li fa fa-angle-right" aria-hidden="true"></i> Build and deploy block chain application for on premise and cloud based architecture. </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Integrate ideas from various domains and implement them using block chain technology in different perspectives.  </li>
                        <ul>
                            </div>
                        </div>
                        <h4 class="gradient-theme mt-2">Duration : 45 hours</h4>
                    </div>
                    <div class="col-4">
                            <div class="p-4 text-justify box-sdw" >
                            <p>
                                    How block chain technology can be used to innovate and improve business processes.
                            </p>
                            <a class="btn btn-cta  theme-btn-secondary" href="/course/view.php?id=16"><div class="text_to_html">Enroll Now</div></a>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-5" >
            <div class="container">

                <div class="row pt-3">
                    <div class="col-8">
                            <h4 class="mb-4 gradient-theme">Course Contents </h4>
                        <h6 class="mt-2 pt-5">Module 1</h6>
                        
                            Introduction (6 Hours) <br>
                            <p style="text-align:justify">
                                Overview of Block chain, Public Ledgers, Bitcoin, Smart Contracts, Block in a Block chain, Transactions, Distributed Consensus, Public vs Private Block chain, Understanding Crypto currency to Block chain, Permissioned Model of Block chain, Overview of Security aspects of Block chain Basic Crypto Primitives: Cryptographic Hash Function, Properties of a hash function, Hash pointer and Merkle tree, Digital Signature, Public Key Cryptography, A basic cryptocurrency. 
                        </p>
                        <h6 >Module 2</h6>
                        Understanding Block chain with Crypto currency (9 Hours) <br>
                        <p style="text-align:justify">
                            Bitcoin and Block chain: Creation of coins, Payments and double spending, Bitcoin Scripts, Bitcoin P2P Network, Transaction in Bitcoin Network, Block Mining, Block propagation and block relay. Working with Consensus in Bitcoin: Distributed consensus in open environments, Consensus in a Bitcoin network, Proof of Work (PoW) – basic introduction, Hashcash PoW, Bitcoin PoW, Attacks on PoW and the monopoly problem, Proof of Stake, Proof of Burn and Proof of Elapsed Time, The life of a Bitcoin Miner, Mining Difficulty, Mining Pool.                     
                          </p>
                          <h6 >Module 3</h6>
                          Understanding Block chain for Enterprises (12 Hours)  <br>
                          <p style="text-align:justify">
                              Permissioned Block chain: Permissioned model and use cases, Design issues for Permissioned block chains, Execute contracts, State machine replication, Overview of Consensus models for permissioned block chain- Distributed consensus in closed environment, Paxos, RAFT Consensus, Byzantine general problem, Byzantine fault tolerant system, Lamport-Shostak-Pease BFT Algorithm, BFT over Asynchronous systems. Enterprise application of Block chain: Cross border payments, Know Your Customer (KYC), Food Security, Mortgage over Block chain, Block chain enabled Trade, We Trade – Trade Finance Network, Supply Chain Financing, Identity on Block chain 
                          </p>
                          <h6 >Module 4</h6>
                          Block chain application development (18 Hours) <br/>
                          <p style="text-align:justify">
                              Hyperledger Fabric- Architecture, Identities and Policies, Membership and Access Control, Channels, Transaction Validation, Writing smart contract using Hyperledger Fabric, Writing smart contract using Ethereum, Overview of Ripple and Corda 
                          </p>
 
                            <h4 class="gradient-theme mb-5 mt-2">Mini projects such as </h4>
                            <ol class="pt-5" style="text-align:justify">
                              <li>Block chain for telecom roaming, fraud, and overage management. See how communication service providers use block chain to enhance their value chains. </li>
                              <li>Use IoT dashboards to analyze data sent from a Block chain network. Build an IoT app and IoT dashboards with Watson IoT Platform and Node-RED to analyze IoT data sent from a Block chain network </li>
                              <li>Create an Android app with Block chain integration. Build a Block chain enabled health and fitness app with Android and Kubernetes </li>
                              <li>Create a global finance block chain application with IBM Block chain Platform Extension for VS Code. Develop a Node.js smart contract and web app for a Global Finance with block chain use case </li>
                              <li>Develop a voting application using Hyperledger and Ethereum. Build a decentralized app that combines Ethereum`s Web3 and Solidity smart contracts with Hyperledger`s hosting Fabric and Chaincode EVM </li>
                              <li>Create a block chain app for loyalty points with Hyperledger Fabric Ethereum Virtual Machine. Deploy Fabric locally with EVM and create a proxy for interacting with a smart contract through a Node.js web app </li>
                              
                            </ol>
                    </div>
                    <div class="col-4">
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