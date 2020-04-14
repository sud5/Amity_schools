<?php
$id =   $_GET['id'];

switch ($id) {
    case 17:
        $url ="/courses/blockchain/";
        break;
    
        case 35:
        $url ="/courses/artificial-intelligence/";
        break;

        case 34:
        $url ="/courses/quantum-computing/";
        break;

        case 33:
        $url ="/courses/devops-cicd/";
        break;

        case 31:
        $url ="/courses/aws-devops-engineer/";
        break;

        case 30:
        $url ="/courses/aws-devops-architect/";
        break;

        case 29:
        $url ="/courses/aws-beginners/";
        break;

        case 20:
        $url ="/courses/robotics/";
        break;

        case 18:
        $url ="/courses/cyber-security/";
        break;

        case 12:
        $url ="/courses/selenium-automation/";
        break;
    
        case 10:
        $url ="/courses/ar-vr/";
        break;

        case 36:
        $url ="/courses/big-data-analytics/";
        break;

        case 32:
        $url ="/courses/cloud-computing/";
        break;

        case 24:
        $url ="/courses/data-science/";
        break;

        case 11:
        $url ="/courses/iiot/";
        break;

        case 9:
        $url ="/courses/building-ar-application/";
        break;

        case 25:
        $url ="/courses/3d-printing/";
        break;
    
        case 8:
        $url ="/courses/introduction-to-industry-4/";
        break;

        case 7:
        $url ="/courses/ai-marketing-research-data-analytics/";
        break;

        case 6:
        $url ="/courses/ai-deep-learning/";
        break;

        case 5:
        $url ="/courses/artificial-intelligence-for-executives/";
        break;
        case 27:
        $url ="/courses/iso-22000:2018-certification/";
        break;
        case 28:
        $url ="/courses/iso-450001:2018-certification/";
        break;
        case 38:
        $url ="/courses/energy-managers-auditors/";
        break;
    
        default:
        $url ="/";
}

header("Location: ".$url);

?>