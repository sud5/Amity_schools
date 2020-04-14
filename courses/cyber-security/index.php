<?php

require_once('../../config.php'); //this assumes your page is in a sub dir.
//require_login();               //make sure user is logged in
$PAGE->set_title("Cyber Security  | LearningBerg");
$PAGE->set_heading("Cyber Security"); 
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
            background: url(https://www.learningberg.com/pluginfile.php/282/course/overviewfiles/Cyber-Security.jpg);
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
            <h1 class="display-2 pt-3" style="font-weight: 600;">Cyber Security</h1>
         
        </div>
        </section>
        <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-justify">
                    <p>The course has been designed to give students an extensive overview of cyber security issues, tools and techniques that are critical in solving problems in cyber security domains. The course aims at providing students with concepts of computer security, cryptography, digital money, secure protocols, detection and other security techniques. The course will help students to gauge understanding in essential techniques in protecting Information Systems, IT infrastructure, analysing and monitoring potential threats and attacks, devising security architecture and implementing security solutions. The students will also have a wider perspective to information security from national security perspective from both technology and legal perspective.</p>
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
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Understand, appreciate, employ, design and implement appropriate security technologies and policies to protect computers and digital information.</li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i>Identify & Evaluate Information Security threats and vulnerabilities in Information  Systems and apply security measures to real time scenarios  </li>

                        <ul>
                            </div>
                            <div class="col-6">
                            <ul class="fa-ul ">
                            <li><i class=" fa-li fa fa-angle-right" aria-hidden="true"></i> Identify common trade-offs and compromises that are made in the design and development process of Information Systems </li>
                            <li><i class="fa-li fa fa-angle-right" aria-hidden="true"></i> Demonstrate the use of standards and cyber laws to enhance information security in the development process and infrastructure protection  </li>
                        <ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-4">
                            <div class="p-4 text-justify box-sdw" >
                            <h4 class="gradient-theme " style="left:0">Duration : 45 hours</h4> <br> &nbsp;
                            <p class="">
                            The course aims at providing students with concepts of computer security, cryptography, digital money, secure protocols, detection and other security techniques. 
                            </p>
                            <a class="btn btn-cta  theme-btn-secondary" href="/course/view.php?id=18"><div class="text_to_html">Enroll Now</div></a>
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
                        
                         Cyber Security Concepts : (2 hours)<br>
                            <p style="text-align:justify">
                            Essential Terminologies: Introduction about CS, CIA, Risks, Breaches, Threats,   Attacks, Exploits. Information Gathering (Social Engineering, Foot Printing & Scanning). Open Source/ Free/ Trial Tools: nmap, zenmap, Port Scanners, Network scanners.
                                                    </p>
                        <h6 >Module 2</h6>
                        Cryptography and Cryptanalysis: (4 hours) <br>
                        <p style="text-align:justify">
                        Introduction to Cryptography, Symmetric key Cryptography, Asymmetric key Cryptography, Message Authentication, Digital Signatures, Applications of Cryptography. Overview of Firewalls- Types of Firewalls, User Management, VPN Security, Security Protocols: - security at the Application Layer- PGP and S/MIME, Security at Transport Layer- SSL and TLS, Security at Network Layer-IPSec.
                        Open Source/ Free/ Trial Tools: Implementation of Cryptographic techniques, OpenSSL, Hash Values Calculations MD5, SHA1, SHA256, SHA 512, Steganography (Stools)
                                                  </p>
                          <h6 >Module 3</h6>
                          Infrastructure and Network Security  : (6 hours) <br>
                          <p style="text-align:justify">
                          Introduction to System Security, Server Security, OS Security, Physical Security, Introduction to Networks, Network packet Sniffing, Network Design Simulation. DOS/ DDOS attacks. Asset Management and Audits, Vulnerabilities and Attacks. Intrusion detection and Prevention Techniques, Host based Intrusion prevention Systems, Security Information Management, Network Session Analysis, System Integrity Validation. Open Source/ Free/ Trial Tools: DOS Attacks, DDOS attacks, Wireshark, Cain & abel, iptables/ Windows Firewall, snort, suricata, fail2ban
                                                    </p>
                          <h6 >Module 4</h6>
                          Cyber Security Vulnerabilities& Safe Guards :  (8 hours) <br/>
                          <p style="text-align:justify">
                          Internet Security, Cloud Computing &Security, Social Network sites security, Cyber Security Vulnerabilities-Overview, vulnerabilities in software, System administration, Complex Network Architectures, Open Access to Organizational Data, Weak Authentication, Authorization, Unprotected Broadband communications, Poor Cyber Security Awareness. Cyber Security Safeguards- Overview, Access control, IT Audit, Authentication. Open Web Application Security Project (OWASP), Web Site Audit and Vulnerabilities assessment. Open Source/ Free/ Trial Tools: WinAudit, Zap proxy (OWASP), burp suite, DVWA kit.
                                                    </p>
                        <h6 >Module 5</h6>
                        Malware  : (8 hours)<br/>
                        <p style="text-align:justify">
                        Explanation of Malware, Types of Malware: Virus, Worms, Trojans, Rootkits, Robots, Adware’s, Spywares, Ransom wares, Zombies etc., OS Hardening (Process Management, Memory Management, Task Management, Windows Registry/ services another configuration), Malware Analysis. Open Source/ Free/ Trial Tools: Antivirus Protection, Anti Spywares, System tuning tools, Anti Phishing.
                                                </p>
                        <h6 >Module 6</h6>
                        Security in Evolving Technology : (8 hours)<br/>
                        <p style="text-align:justify">
                        Biometrics, Mobile Computing and Hardening on android and ios, IOT Security, Web server  configuration and Security. Introduction, Basic security for HTTP Applications and Services, Basic Security for Web Services like SOAP, REST etc., Identity Management and Web Services, Authorization Patterns, Security Considerations, Challenges. Open Source/ Free/ Trial Tools: adb for android, xcode for ios, Implementation of REST/ SOAP web services and Security implementations.
                        </p>
                        <h6 >Module 7</h6>
                        Cyber Laws and Forensics: (9 hours)<br/>
                        <p style="text-align:justify">
                        Introduction, Cyber Security Regulations, Roles of International Law, the state and Private Sector in Cyberspace, Cyber Security Standards. The INDIAN Cyberspace, National Cyber Security Policy 2013. Introduction to Cyber Forensics, Need of Cyber Forensics, Cyber Evidence, Documentation and Management of Crime Sense, Image Capturing and its importance, Partial Volume Image, Web Attack Investigations, Denial of Service Investigations, Internet Crime Investigations, Internet Forensics, Steps for Investigating Internet Crime, Email Crime Investigations.  Open Source/ Free/ Trial Tools: Case Studies related to Cyber Law, Common Forensic Tools like
                        dd, md5sum, sha1sum, Ram dump analysis, USB device
                                                </p>
                    </div>
                    <div class="col-4">
                        <h4 class="gradient-theme mb-2">List of Practicals </h4>
                        <ol class="pt-5" style="text-align:justify">
                                <li>Implementation to gather information from any PC’s connected to the LAN using whois, port scanners, network scanning, Angry IP scanners etc.</li>
                                <li> Implementation of Symmetric and Asymmetric cryptography.</li>
                                <li>Implementation of Steganography.</li>
                                <li>Implementation of MITM- attack using wireshark/ network sniffers</li>
                                <li>Implementation of Windows security using firewall and other tools</li>
                                <li>Implementation to identify web vulnerabilities, using OWASP project</li>
                                <li>Implementation of IT Audit, malware analysis and Vulnerability assessment and    generate the report.</li>
                                <li>Implementation of OS hardening and RAM dump analysis to collect the Artifacts and other information’s.</li>
                                <li>Implementation of Mobile Audit and generate the report of the existing Artiacts.</li>
                                <li>Implementation of Cyber Forensics tools for Disk Imaging, Data acquisition, Data extraction and Data Analysis and recovery. </li>
                          </ol>
              
                    </div>
                </div>
            </div>
            
        </section>

        ';

echo $OUTPUT->footer();                 //show the moodle footer.