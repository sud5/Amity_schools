<?php
require_once('../../../config.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Prints a particular instance of paypal
 *
 * You can have a rather longer description of the file as well,
 * if you like, and it can span multiple lines.
 *
 * @package    availability_paypal
 * @copyright  2015 Daniel Neis Araujo <danielneis@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

global $USER, $COURSE;
$contextid = required_param('contextid', PARAM_INT);

$context = context::instance_by_id($contextid);
$instanceid = $context->instanceid;
if ($context instanceof context_module) {
    $availability = $DB->get_field('course_modules', 'availability', array('id' => $instanceid), MUST_EXIST);
    $availability = json_decode($availability);
    foreach ($availability->c as $condition) {
        if ($condition->type == 'paypal') {
            // TODO: handle more than one paypal for this context.
            $paypal = $condition;
            break;
        } else {
            print_error('no paypal condition for this context.');
        }
    }
} else {
    // TODO: handle sections.
    print_error('support to sections not yet implemented.');
}
$coursecontext = $context->get_course_context();
$course = $DB->get_record('course', array('id' => $coursecontext->instanceid));

require_login($course);

if ($paymenttnx = $DB->get_record('availability_paypal_tnx', array('userid' => $USER->id, 'contextid' => $contextid))) {

    if ($paymenttnx->payment_status == 'Completed') {
        redirect($context->get_url(), get_string('paymentcompleted', 'availability_paypal'));
    }
}

$PAGE->set_url('/availability/condition/paypal/view.php', array('contextid' => $contextid));
$PAGE->set_title($course->fullname);
$PAGE->set_heading($course->fullname);

$PAGE->navbar->add($paypal->itemname);

echo $OUTPUT->header();

?>
<aside class="col-sm-6">



    <div class="col-12">
        <?php

        echo $OUTPUT->heading($paypal->itemname);
        if (!isguestuser()){
	        $localisedcost = format_float($paypal->cost, 2, true);
	        $cost = format_float($paypal->cost, 2, false);
            ?>
            <h5><?php print_string("paymentrequired", 'availability_paypal') ?></h5>
            <h3 class="font-weight-bold"><?php echo get_string("cost").": {$paypal->currency} {$localisedcost}"; ?></h3>
        <?php }  ?>
    </div>

    <article class="card mb-5 my-4">
        <div class="card-body p-5">

            <ul class="nav bg-light nav-pills rounded nav-fill mb-5" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#nav-tab-paypal">
                        <i class="fa fa-paypal"></i>  Paypal</a></li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#nav-tab-bank">
                        <i class="fa fa-gift"></i>  Promocode</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active bg-white border-0" id="nav-tab-paypal">
	                <?php
	                if ($paymenttnx && ($paymenttnx->payment_status == 'Pending')) {
		                echo get_string('paymentpending', 'availability_paypal');
	                } else {

		                // Calculate localised and "." cost, make sure we send PayPal the same value,
		                // please note PayPal expects amount with 2 decimal places and "." separator.
		                $localisedcost = format_float($paypal->cost, 2, true);
		                $cost = format_float($paypal->cost, 2, false);

		                if (isguestuser()) { // Force login only for guest user, not real users with guest role.
			                if (empty($CFG->loginhttps)) {
				                $wwwroot = $CFG->wwwroot;
			                } else {
				                // This actually is not so secure ;-), 'cause we're in unencrypted connection...
				                $wwwroot = str_replace("http://", "https://", $CFG->wwwroot);
			                }
			                echo '<div class="mdl-align"><p>'.get_string('paymentrequired', 'availability_paypal').'</p>';
			                echo '<div class="mdl-align"><p>'.get_string('paymentwaitremider', 'availability_paypal').'</p>';
			                echo '<p><b>'.get_string('cost').": $instance->currency $localisedcost".'</b></p>';
			                echo '<p><a href="'.$wwwroot.'/login/">'.get_string('loginsite').'</a></p>';
			                echo '</div>';
		                } else {
			                // Sanitise some fields before building the PayPal form.
			                $userfullname    = fullname($USER);
			                $userfirstname   = $USER->firstname;
			                $userlastname    = $USER->lastname;
			                $useraddress     = $USER->address;
			                $usercity        = $USER->city;
			                ?>

                           <!-- <p><img alt="<?php /*print_string('paypalaccepted', 'availability_paypal') */?>"
                                    title="<?php /*print_string('paypalaccepted', 'availability_paypal') */?>"
                                    src="https://www.paypal.com/en_US/i/logo/PayPal_mark_60x38.gif" /></p>-->
                            <!--<h6 class="font-weight-bold"><?php /*print_string("paymentinstant", 'availability_paypal') */?></h6>-->
			                <?php
			                if (empty($CFG->usepaypalsandbox)) {
				                $paypalurl = 'https://www.paypal.com/cgi-bin/webscr';
			                } else {
				                $paypalurl = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
			                }
			                ?>
                            <form action="<?php echo $paypalurl ?>" method="post">

                                <input type="hidden" name="cmd" value="_xclick" />
                                <input type="hidden" name="charset" value="utf-8" />
                                <input type="hidden" name="business" value="<?php p($paypal->businessemail)?>" />
                                <input type="hidden" name="item_name" value="<?php p($paypal->itemname) ?>" />
                                <input type="hidden" name="item_number" value="<?php p($paypal->itemnumber) ?>" />
                                <input type="hidden" name="quantity" value="1" />
                                <input type="hidden" name="on0" value="<?php print_string("user") ?>" />
                                <input type="hidden" name="os0" value="<?php p($userfullname) ?>" />
                                <input type="hidden" name="custom" value="<?php echo "{$USER->id}-{$contextid}" ?>" />

                                <input type="hidden" name="currency_code" value="<?php p($paypal->currency) ?>" />
                                <input type="hidden" name="amount" value="<?php p($cost) ?>" />

                                <input type="hidden" name="for_auction" value="false" />
                                <input type="hidden" name="no_note" value="1" />
                                <input type="hidden" name="no_shipping" value="1" />
                                <input type="hidden" name="notify_url" value="<?php echo "{$CFG->wwwroot}/availability/condition/paypal/ipn.php" ?>" />
				                <?php $returnurl = $CFG->wwwroot . '/availability/condition/paypal/view.php?contextid=' . $contextid; ?>
                                <input type="hidden" name="return" value="<?php echo $returnurl; ?>" />
                                <input type="hidden" name="cancel_return" value="<?php echo $returnurl; ?>" />
                                <input type="hidden" name="rm" value="2" />
                                <input type="hidden" name="cbt" value="<?php print_string("continue", 'availability_paypal') ?>" />

                                <input type="hidden" name="first_name" value="<?php p($userfirstname) ?>" />
                                <input type="hidden" name="last_name" value="<?php p($userlastname) ?>" />
                                <input type="hidden" name="address" value="<?php p($useraddress) ?>" />
                                <input type="hidden" name="city" value="<?php p($usercity) ?>" />
                                <input type="hidden" name="email" value="<?php p($USER->email) ?>" />
                                <input type="hidden" name="country" value="<?php p($USER->country) ?>" />

                               <!-- <input type="submit" value="<?php /*print_string("sendpaymentbutton", "availability_paypal") */?>" />-->
                                <button type="submit" class="btn btn-paypal font-weight-bold" >
                                    <img width="60" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjQsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMjM1cHgiIGhlaWdodD0iNjBweCIgdmlld0JveD0iMCAwIDIzNSA2MCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMjM1IDYwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8Zz4NCgkJCTxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0xNzkuMjU1LDE0Ljc2NWgtMTMuMjFjLTAuOTAzLDAtMS42NzEsMC42NTMtMS44MSwxLjU0NWwtNS4zMzksMzMuODU5DQoJCQkJYy0wLjEwMywwLjY2NSwwLjQwOSwxLjI3NiwxLjA5LDEuMjc2aDYuNzdjMC42MzEsMCwxLjE3Mi0wLjQ2NywxLjI3LTEuMDg5bDEuNTEyLTkuNTk4YzAuMTQ0LTAuODg2LDAuOTExLTEuNTQ3LDEuODE0LTEuNTQ3DQoJCQkJaDQuMTc3YzguNjk2LDAsMTMuNzE1LTQuMjA5LDE1LjAyOC0xMi41NThjMC41ODgtMy42NDIsMC4wMTktNi41MTItMS42ODUtOC41MTlDMTg2Ljk5OCwxNS45MywxODMuNjY0LDE0Ljc2NSwxNzkuMjU1LDE0Ljc2NXoNCgkJCQkgTTE4MC43NzYsMjcuMTI3Yy0wLjcyMSw0Ljc0LTQuMzQ2LDQuNzQtNy44NDYsNC43NGgtMS45OTFsMS40LTguODQ5YzAuMDgyLTAuNTMxLDAuNTQ4LTAuOTI0LDEuMDg0LTAuOTI0aDAuOTEyDQoJCQkJYzIuMzg1LDAsNC42NCwwLDUuODAzLDEuMzQ4QzE4MC44MjYsMjQuMjU5LDE4MS4wNCwyNS40NjQsMTgwLjc3NiwyNy4xMjd6Ii8+DQoJCQk8cGF0aCBmaWxsPSIjRkZGRkZGIiBkPSJNODUuMDc3LDE0Ljc2NUg3MS44NjhjLTAuOTAzLDAtMS42NzEsMC42NTMtMS44MSwxLjU0NWwtNS4zMzUsMzMuODU5DQoJCQkJYy0wLjExMSwwLjY2NSwwLjQwNSwxLjI3NiwxLjA4NiwxLjI3Nmg2LjMwNGMwLjg5NiwwLDEuNjY3LTAuNjYxLDEuODExLTEuNTU1bDEuNDQzLTkuMTMyYzAuMTM4LTAuODg2LDAuOTA1LTEuNTQ3LDEuODA5LTEuNTQ3DQoJCQkJaDQuMThjOC42OTgsMCwxMy43MTUtNC4yMDksMTUuMDI3LTEyLjU1OGMwLjU4NC0zLjY0MiwwLjAyNS02LjUxMi0xLjY4MS04LjUxOUM5Mi44MjMsMTUuOTMsODkuNDksMTQuNzY1LDg1LjA3NywxNC43NjV6DQoJCQkJIE04Ni42MDEsMjcuMTI3Yy0wLjcyNCw0Ljc0LTQuMzQ2LDQuNzQtNy44NDEsNC43NGgtMS45OThsMS40MDItOC44NDljMC4wODItMC41MzEsMC41MzktMC45MjQsMS4wODMtMC45MjRoMC45MTUNCgkJCQljMi4zODMsMCw0LjYzOCwwLDUuNzksMS4zNDhDODYuNjQ3LDI0LjI1OSw4Ni44NTUsMjUuNDY0LDg2LjYwMSwyNy4xMjd6Ii8+DQoJCQk8cGF0aCBmaWxsPSIjRkZGRkZGIiBkPSJNMTI0LjU0LDI2Ljk3N2gtNi4zMTdjLTAuNTQ2LDAtMS4wMDgsMC4zOTYtMS4wOSwwLjkzMmwtMC4yODEsMS43NjZsLTAuNDQzLTAuNjM5DQoJCQkJYy0xLjM2OC0xLjk4Ni00LjQxOS0yLjY1My03LjQ2Ny0yLjY1M2MtNi45ODMsMC0xMi45NTEsNS4yOS0xNC4xMTIsMTIuNzIzYy0wLjYwOSwzLjY5OCwwLjI1Miw3LjI0MSwyLjM1Myw5LjcwOQ0KCQkJCWMxLjkyOSwyLjI3Miw0LjY4NiwzLjIxMiw3Ljk2MywzLjIxMmM1LjYzMywwLDguNzUyLTMuNjEzLDguNzUyLTMuNjEzbC0wLjI3OSwxLjc1N2MtMC4xMDgsMC42NjUsMC40MDksMS4yNzYsMS4wODMsMS4yNzZoNS42OTcNCgkJCQljMC45MDEsMCwxLjY2Ny0wLjY2MSwxLjgxMi0xLjU1NWwzLjQyLTIxLjY0NEMxMjUuNzMzLDI3LjU4LDEyNS4yMjIsMjYuOTc3LDEyNC41NCwyNi45Nzd6IE0xMTUuNzMsMzkuMjg0DQoJCQkJYy0wLjYxMywzLjYxMy0zLjQ4MSw2LjAzOC03LjE0LDYuMDM4Yy0xLjgyNywwLTMuMjk4LTAuNTg4LTQuMjQ1LTEuNzA3Yy0wLjkzNi0xLjEwNS0xLjI4My0yLjY4NS0wLjk5My00LjQ0MQ0KCQkJCWMwLjU3MS0zLjU3OCwzLjQ4NS02LjA4OCw3LjA4OC02LjA4OGMxLjgwMSwwLDMuMjU2LDAuNTk2LDQuMjExLDEuNzI5QzExNS42MjUsMzUuOTQ3LDExNi4wMDUsMzcuNTMxLDExNS43MywzOS4yODR6Ii8+DQoJCQk8cGF0aCBmaWxsPSIjRkZGRkZGIiBkPSJNMjE4LjcxNywyNi45NzdoLTYuMzI0Yy0wLjU0MywwLTEuMDAxLDAuMzk2LTEuMDg5LDAuOTMybC0wLjI3NSwxLjc2NmwtMC40NDItMC42MzkNCgkJCQljLTEuMzcxLTEuOTg2LTQuNDE5LTIuNjUzLTcuNDY3LTIuNjUzYy02Ljk4NSwwLTEyLjk1MSw1LjI5LTE0LjExMiwxMi43MjNjLTAuNjA0LDMuNjk4LDAuMjU2LDcuMjQxLDIuMzUzLDkuNzA5DQoJCQkJYzEuOTI5LDIuMjcyLDQuNjgzLDMuMjEyLDcuOTU5LDMuMjEyYzUuNjM0LDAsOC43NTgtMy42MTMsOC43NTgtMy42MTNsLTAuMjgyLDEuNzU3Yy0wLjEwNywwLjY2NSwwLjQwOCwxLjI3NiwxLjA4NSwxLjI3Nmg1LjY5OA0KCQkJCWMwLjkwMSwwLDEuNjY1LTAuNjYxLDEuODEtMS41NTVsMy40MjMtMjEuNjQ0QzIxOS45MTIsMjcuNTgsMjE5LjM5NiwyNi45NzcsMjE4LjcxNywyNi45Nzd6IE0yMDkuOTA2LDM5LjI4NA0KCQkJCWMtMC42MTEsMy42MTMtMy40NzYsNi4wMzgtNy4xMzksNi4wMzhjLTEuODMzLDAtMy4zLTAuNTg4LTQuMjQzLTEuNzA3Yy0wLjkzOS0xLjEwNS0xLjI4Ny0yLjY4NS0wLjk4OS00LjQ0MQ0KCQkJCWMwLjU2OS0zLjU3OCwzLjQ3Ni02LjA4OCw3LjA4MS02LjA4OGMxLjgwMywwLDMuMjU4LDAuNTk2LDQuMjIxLDEuNzI5QzIwOS44MDMsMzUuOTQ3LDIxMC4xODEsMzcuNTMxLDIwOS45MDYsMzkuMjg0eiIvPg0KCQkJPHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTE1OC4yMTYsMjYuOTc3aC02LjM1N2MtMC42MDcsMC0xLjE3MiwwLjMwMi0xLjUxNCwwLjgwNGwtOC43NjksMTIuOTEzbC0zLjcxNi0xMi40MQ0KCQkJCWMtMC4yMzMtMC43NzUtMC45NDUtMS4zMDctMS43NTMtMS4zMDdoLTYuMjUyYy0wLjc1NCwwLTEuMjc4LDAuNzM5LTEuMDQxLDEuNDU2bDYuOTk5LDIwLjUzN2wtNi41NzksOS4yODkNCgkJCQljLTAuNTE5LDAuNzI5LDAsMS43NDEsMC44OTIsMS43NDFoNi4zNTJjMC41OTgsMCwxLjE2NS0wLjMwMiwxLjUwOC0wLjc5MWwyMS4xMzQtMzAuNTA0DQoJCQkJQzE1OS42MjcsMjcuOTc0LDE1OS4xMDQsMjYuOTc3LDE1OC4yMTYsMjYuOTc3eiIvPg0KCQkJPHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTIyNi4xNjgsMTUuNjg5bC01LjQxOSwzNC40OGMtMC4xMDQsMC42NjUsMC40MTMsMS4yNzYsMS4wODgsMS4yNzZoNS40NQ0KCQkJCWMwLjkwNSwwLDEuNjczLTAuNjYxLDEuODExLTEuNTU1bDUuMzUxLTMzLjg1NmMwLjEwNC0wLjY2OC0wLjQxNi0xLjI3LTEuMDkyLTEuMjdoLTYuMQ0KCQkJCUMyMjYuNzE1LDE0Ljc2NSwyMjYuMjU2LDE1LjE2LDIyNi4xNjgsMTUuNjg5eiIvPg0KCQk8L2c+DQoJPC9nPg0KCTxnPg0KCQk8cGF0aCBmaWxsPSIjRkZGRkZGIiBkPSJNMzkuMjE4LDIwLjQ2NWMwLjYyOC0zLjk5My0wLjAwNi02LjcxLTIuMTY2LTkuMTcxYy0yLjM4LTIuNzEtNi42NzYtMy44NzItMTIuMTc2LTMuODcySDguOTINCgkJCWMtMS4xMjYsMC0yLjA4LDAuODE3LTIuMjU4LDEuOTI5TDAuMDE3LDUxLjQ4N2MtMC4xMzIsMC44MzIsMC41MTQsMS41ODUsMS4zNTIsMS41ODVoOS44NTRsLTAuNjgyLDQuMzEyDQoJCQljLTAuMTE0LDAuNzI5LDAuNDUzLDEuMzgzLDEuMTg0LDEuMzgzaDguMzA3YzAuOTgzLDAsMS44MTgtMC43MTEsMS45NzMtMS42ODVsMC4wODItMC40MjRsMS41NjQtOS45MTlsMC4wOTktMC41NDINCgkJCWMwLjE1MS0wLjk3LDAuOTkzLTEuNjg4LDEuOTczLTEuNjg4aDEuMjQ3YzguMDQsMCwxNC4zNDMtMy4yNjksMTYuMTc4LTEyLjcyNmMwLjc3NS0zLjk1MywwLjM3My03LjI0NS0xLjY1NS05LjU2Mg0KCQkJQzQwLjg3NSwyMS41MTksNDAuMTA3LDIwLjkzOCwzOS4yMTgsMjAuNDY1TDM5LjIxOCwyMC40NjUiLz4NCgkJPHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTM5LjIxOCwyMC40NjVjMC42MjgtMy45OTMtMC4wMDYtNi43MS0yLjE2Ni05LjE3MWMtMi4zOC0yLjcxLTYuNjc2LTMuODcyLTEyLjE3Ni0zLjg3Mkg4LjkyDQoJCQljLTEuMTI2LDAtMi4wOCwwLjgxNy0yLjI1OCwxLjkyOUwwLjAxNyw1MS40ODdjLTAuMTMyLDAuODMyLDAuNTE0LDEuNTg1LDEuMzUyLDEuNTg1aDkuODU0bDIuNDczLTE1LjY4OWwtMC4wNzksMC40ODgNCgkJCWMwLjE3OS0xLjExMSwxLjEyNi0xLjkyOSwyLjI1MS0xLjkyOWg0LjY4M2M5LjE5NCwwLDE2LjM5NC0zLjczOSwxOC41MDItMTQuNTQzQzM5LjExMSwyMS4wODIsMzkuMTY0LDIwLjc3MSwzOS4yMTgsMjAuNDY1Ii8+DQoJCTxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0xNi4zNTcsMjAuNTIxYzAuMTAzLTAuNjcyLDAuNTMzLTEuMjE3LDEuMTExLTEuNDkyYzAuMjYyLTAuMTIyLDAuNTUyLTAuMTksMC44NTktMC4xOWgxMi41MQ0KCQkJYzEuNDgyLDAsMi44NjcsMC4wOTQsNC4xMjcsMC4yOThjMC4zNTgsMC4wNTQsMC43MSwwLjEyNiwxLjA1NSwwLjE5N2MwLjM0MSwwLjA3OCwwLjY3NCwwLjE2MywwLjk5LDAuMjU4DQoJCQljMC4xNjQsMC4wNDQsMC4zMjMsMC4wOTQsMC40NzUsMC4xNDNjMC42MjEsMC4yMDgsMS4xOTksMC40NTMsMS43MzIsMC43MzFjMC42MjgtMy45OTMtMC4wMDYtNi43MS0yLjE2Ni05LjE3MQ0KCQkJYy0yLjM4LTIuNzEtNi42NzYtMy44NzItMTIuMTc2LTMuODcySDguOTJjLTEuMTI2LDAtMi4wOCwwLjgxNy0yLjI1OCwxLjkyOUwwLjAxNyw1MS40ODdjLTAuMTMyLDAuODMyLDAuNTE0LDEuNTg1LDEuMzUyLDEuNTg1DQoJCQloOS44NTRsMi40NzMtMTUuNjg5TDE2LjM1NywyMC41MjF6Ii8+DQoJPC9nPg0KCTxnPg0KCQk8cGF0aCBmaWxsPSIjMDA5Q0RFIiBkPSJNMTc5LjI1NSwxMS4wOTJoLTEzLjIxYy0wLjkwMywwLTEuNjcxLDAuNjUzLTEuODEsMS41NDdsLTUuMzM5LDMzLjg1Ng0KCQkJYy0wLjEwMywwLjY2OCwwLjQwOSwxLjI3OSwxLjA5LDEuMjc5aDYuNzdjMC42MzEsMCwxLjE3Mi0wLjQ2NiwxLjI3LTEuMDkybDEuNTEyLTkuNTk1YzAuMTQ0LTAuODksMC45MTEtMS41NSwxLjgxNC0xLjU1aDQuMTc3DQoJCQljOC42OTYsMCwxMy43MTUtNC4yMSwxNS4wMjgtMTIuNTU1YzAuNTg4LTMuNjQzLDAuMDE5LTYuNTExLTEuNjg1LTguNTIxQzE4Ni45OTgsMTIuMjU5LDE4My42NjQsMTEuMDkyLDE3OS4yNTUsMTEuMDkyeg0KCQkJIE0xODAuNzc2LDIzLjQ1NmMtMC43MjEsNC43NDItNC4zNDYsNC43NDItNy44NDYsNC43NDJoLTEuOTkxbDEuNC04Ljg0N2MwLjA4Mi0wLjUzNCwwLjU0OC0wLjkyOSwxLjA4NC0wLjkyOWgwLjkxMg0KCQkJYzIuMzg1LDAsNC42NCwwLDUuODAzLDEuMzUyQzE4MC44MjYsMjAuNTg3LDE4MS4wNCwyMS43OTIsMTgwLjc3NiwyMy40NTZ6Ii8+DQoJCTxwYXRoIGZpbGw9IiMwMDMwODciIGQ9Ik04NS4wNzcsMTEuMDkySDcxLjg2OGMtMC45MDMsMC0xLjY3MSwwLjY1My0xLjgxLDEuNTQ3bC01LjMzNSwzMy44NTYNCgkJCWMtMC4xMTEsMC42NjgsMC40MDUsMS4yNzksMS4wODYsMS4yNzloNi4zMDRjMC44OTYsMCwxLjY2Ny0wLjY2LDEuODExLTEuNTU5bDEuNDQzLTkuMTI4YzAuMTM4LTAuODksMC45MDUtMS41NSwxLjgwOS0xLjU1aDQuMTgNCgkJCWM4LjY5OCwwLDEzLjcxNS00LjIxLDE1LjAyNy0xMi41NTVjMC41ODQtMy42NDMsMC4wMjUtNi41MTEtMS42ODEtOC41MjFDOTIuODIzLDEyLjI1OSw4OS40OSwxMS4wOTIsODUuMDc3LDExLjA5MnoNCgkJCSBNODYuNjAxLDIzLjQ1NmMtMC43MjQsNC43NDItNC4zNDYsNC43NDItNy44NDEsNC43NDJoLTEuOTk4bDEuNDAyLTguODQ3YzAuMDgyLTAuNTM0LDAuNTM5LTAuOTI5LDEuMDgzLTAuOTI5aDAuOTE1DQoJCQljMi4zODMsMCw0LjYzOCwwLDUuNzksMS4zNTJDODYuNjQ3LDIwLjU4Nyw4Ni44NTUsMjEuNzkyLDg2LjYwMSwyMy40NTZ6Ii8+DQoJCTxwYXRoIGZpbGw9IiMwMDMwODciIGQ9Ik0xMjQuNTQsMjMuMzA2aC02LjMxN2MtMC41NDYsMC0xLjAwOCwwLjM5NC0xLjA5LDAuOTMzbC0wLjI4MSwxLjc2M2wtMC40NDMtMC42MzgNCgkJCWMtMS4zNjgtMS45ODYtNC40MTktMi42NTItNy40NjctMi42NTJjLTYuOTgzLDAtMTIuOTUxLDUuMjkyLTE0LjExMiwxMi43MmMtMC42MDksMy43MDEsMC4yNTIsNy4yNDUsMi4zNTMsOS43MTMNCgkJCWMxLjkyOSwyLjI3Miw0LjY4NiwzLjIxMiw3Ljk2MywzLjIxMmM1LjYzMywwLDguNzUyLTMuNjE3LDguNzUyLTMuNjE3bC0wLjI3OSwxLjc1N2MtMC4xMDgsMC42NjgsMC40MDksMS4yNzksMS4wODMsMS4yNzloNS42OTcNCgkJCWMwLjkwMSwwLDEuNjY3LTAuNjYsMS44MTItMS41NTlsMy40Mi0yMS42NDFDMTI1LjczMywyMy45MDgsMTI1LjIyMiwyMy4zMDYsMTI0LjU0LDIzLjMwNnogTTExNS43MywzNS42MQ0KCQkJYy0wLjYxMywzLjYxNy0zLjQ4MSw2LjAzOC03LjE0LDYuMDM4Yy0xLjgyNywwLTMuMjk4LTAuNTg4LTQuMjQ1LTEuNzA3Yy0wLjkzNi0xLjEwNC0xLjI4My0yLjY4Mi0wLjk5My00LjQzOA0KCQkJYzAuNTcxLTMuNTc4LDMuNDg1LTYuMDg3LDcuMDg4LTYuMDg3YzEuODAxLDAsMy4yNTYsMC41OTYsNC4yMTEsMS43MjdDMTE1LjYyNSwzMi4yNzUsMTE2LjAwNSwzMy44NjEsMTE1LjczLDM1LjYxeiIvPg0KCQk8cGF0aCBmaWxsPSIjMDA5Q0RFIiBkPSJNMjE4LjcxNywyMy4zMDZoLTYuMzI0Yy0wLjU0MywwLTEuMDAxLDAuMzk0LTEuMDg5LDAuOTMzbC0wLjI3NSwxLjc2M2wtMC40NDItMC42MzgNCgkJCWMtMS4zNzEtMS45ODYtNC40MTktMi42NTItNy40NjctMi42NTJjLTYuOTg1LDAtMTIuOTUxLDUuMjkyLTE0LjExMiwxMi43MmMtMC42MDQsMy43MDEsMC4yNTYsNy4yNDUsMi4zNTMsOS43MTMNCgkJCWMxLjkyOSwyLjI3Miw0LjY4MywzLjIxMiw3Ljk1OSwzLjIxMmM1LjYzNCwwLDguNzU4LTMuNjE3LDguNzU4LTMuNjE3bC0wLjI4MiwxLjc1N2MtMC4xMDcsMC42NjgsMC40MDgsMS4yNzksMS4wODUsMS4yNzloNS42OTgNCgkJCWMwLjkwMSwwLDEuNjY1LTAuNjYsMS44MS0xLjU1OWwzLjQyMy0yMS42NDFDMjE5LjkxMiwyMy45MDgsMjE5LjM5NiwyMy4zMDYsMjE4LjcxNywyMy4zMDZ6IE0yMDkuOTA2LDM1LjYxDQoJCQljLTAuNjExLDMuNjE3LTMuNDc2LDYuMDM4LTcuMTM5LDYuMDM4Yy0xLjgzMywwLTMuMy0wLjU4OC00LjI0My0xLjcwN2MtMC45MzktMS4xMDQtMS4yODctMi42ODItMC45ODktNC40MzgNCgkJCWMwLjU2OS0zLjU3OCwzLjQ3Ni02LjA4Nyw3LjA4MS02LjA4N2MxLjgwMywwLDMuMjU4LDAuNTk2LDQuMjIxLDEuNzI3QzIwOS44MDMsMzIuMjc1LDIxMC4xODEsMzMuODYxLDIwOS45MDYsMzUuNjF6Ii8+DQoJCTxwYXRoIGZpbGw9IiMwMDMwODciIGQ9Ik0xNTguMjE2LDIzLjMwNmgtNi4zNTdjLTAuNjA3LDAtMS4xNzIsMC4zMDEtMS41MTQsMC44MDNsLTguNzY5LDEyLjkxNWwtMy43MTYtMTIuNDEzDQoJCQljLTAuMjMzLTAuNzc1LTAuOTQ1LTEuMzA1LTEuNzUzLTEuMzA1aC02LjI1MmMtMC43NTQsMC0xLjI3OCwwLjczOC0xLjA0MSwxLjQ1Nmw2Ljk5OSwyMC41MzhsLTYuNTc5LDkuMjg0DQoJCQljLTAuNTE5LDAuNzMzLDAsMS43NDYsMC44OTIsMS43NDZoNi4zNTJjMC41OTgsMCwxLjE2NS0wLjMwMiwxLjUwOC0wLjc5MWwyMS4xMzQtMzAuNTA1DQoJCQlDMTU5LjYyNywyNC4zMDIsMTU5LjEwNCwyMy4zMDYsMTU4LjIxNiwyMy4zMDZ6Ii8+DQoJCTxwYXRoIGZpbGw9IiMwMDlDREUiIGQ9Ik0yMjYuMTY4LDEyLjAxOWwtNS40MTksMzQuNDc3Yy0wLjEwNCwwLjY2OCwwLjQxMywxLjI3OSwxLjA4OCwxLjI3OWg1LjQ1YzAuOTA1LDAsMS42NzMtMC42NiwxLjgxMS0xLjU1OQ0KCQkJbDUuMzUxLTMzLjg1NGMwLjEwNC0wLjY2Ny0wLjQxNi0xLjI3LTEuMDkyLTEuMjdoLTYuMUMyMjYuNzE1LDExLjA5MiwyMjYuMjU2LDExLjQ4OCwyMjYuMTY4LDEyLjAxOXoiLz4NCgk8L2c+DQoJPHBhdGggZmlsbD0iIzAwOUNERSIgZD0iTTM5LjIxOCwxNi43OTVjMC42MjgtMy45OTUtMC4wMDYtNi43MTItMi4xNjYtOS4xNzJjLTIuMzgtMi43MTEtNi42NzYtMy44NzMtMTIuMTc2LTMuODczSDguOTINCgkJYy0xLjEyNiwwLTIuMDgsMC44MTctMi4yNTgsMS45MjlMMC4wMTcsNDcuODE2Yy0wLjEzMiwwLjgzMywwLjUxNCwxLjU4NSwxLjM1MiwxLjU4NWg5Ljg1NGwtMC42ODIsNC4zMDkNCgkJYy0wLjExNCwwLjczMywwLjQ1MywxLjM4NiwxLjE4NCwxLjM4Nmg4LjMwN2MwLjk4MywwLDEuODE4LTAuNzEsMS45NzMtMS42ODhsMC4wODItMC40MmwxLjU2NC05LjkxOWwwLjA5OS0wLjU0Ng0KCQljMC4xNTEtMC45NjcsMC45OTMtMS42ODUsMS45NzMtMS42ODVoMS4yNDdjOC4wNCwwLDE0LjM0My0zLjI3LDE2LjE3OC0xMi43MjljMC43NzUtMy45NTIsMC4zNzMtNy4yNDMtMS42NTUtOS41NTkNCgkJQzQwLjg3NSwxNy44NDksNDAuMTA3LDE3LjI2OCwzOS4yMTgsMTYuNzk1TDM5LjIxOCwxNi43OTUiLz4NCgk8cGF0aCBmaWxsPSIjMDEyMTY5IiBkPSJNMzkuMjE4LDE2Ljc5NWMwLjYyOC0zLjk5NS0wLjAwNi02LjcxMi0yLjE2Ni05LjE3MmMtMi4zOC0yLjcxMS02LjY3Ni0zLjg3My0xMi4xNzYtMy44NzNIOC45Mg0KCQljLTEuMTI2LDAtMi4wOCwwLjgxNy0yLjI1OCwxLjkyOUwwLjAxNyw0Ny44MTZjLTAuMTMyLDAuODMzLDAuNTE0LDEuNTg1LDEuMzUyLDEuNTg1aDkuODU0bDIuNDczLTE1LjY4OWwtMC4wNzksMC40ODUNCgkJYzAuMTc5LTEuMTExLDEuMTI2LTEuOTI5LDIuMjUxLTEuOTI5aDQuNjgzYzkuMTk0LDAsMTYuMzk0LTMuNzM1LDE4LjUwMi0xNC41NDJDMzkuMTExLDE3LjQxMiwzOS4xNjQsMTcuMDk4LDM5LjIxOCwxNi43OTUiLz4NCgk8cGF0aCBmaWxsPSIjMDAzMDg3IiBkPSJNMTYuMzU3LDE2Ljg0OGMwLjEwMy0wLjY3LDAuNTMzLTEuMjE2LDEuMTExLTEuNDkxYzAuMjYyLTAuMTIzLDAuNTUyLTAuMTkxLDAuODU5LTAuMTkxaDEyLjUxDQoJCWMxLjQ4MiwwLDIuODY3LDAuMDk0LDQuMTI3LDAuMjk4YzAuMzU4LDAuMDUzLDAuNzEsMC4xMjYsMS4wNTUsMC4xOTZjMC4zNDEsMC4wODEsMC42NzQsMC4xNjMsMC45OSwwLjI2DQoJCWMwLjE2NCwwLjA0MiwwLjMyMywwLjA5MiwwLjQ3NSwwLjE0NGMwLjYyMSwwLjIwOCwxLjE5OSwwLjQ1MSwxLjczMiwwLjczMWMwLjYyOC0zLjk5NS0wLjAwNi02LjcxMi0yLjE2Ni05LjE3Mg0KCQljLTIuMzgtMi43MTEtNi42NzYtMy44NzMtMTIuMTc2LTMuODczSDguOTJjLTEuMTI2LDAtMi4wOCwwLjgxNy0yLjI1OCwxLjkyOUwwLjAxNyw0Ny44MTZjLTAuMTMyLDAuODMzLDAuNTE0LDEuNTg1LDEuMzUyLDEuNTg1DQoJCWg5Ljg1NGwyLjQ3My0xNS42ODlMMTYuMzU3LDE2Ljg0OHoiLz4NCjwvZz4NCjwvc3ZnPg0K" alt="PayPal">
                                    <span class="ml-2 border-left px-2"> <?php print_string("sendpaymentbutton", "availability_paypal") ?></span>
                                </button>
                                <p class="small mt-1">
                                    <i class="fa fa-lock"></i> Secure PayPal Checkout
                                </p>
                            </form>

			                <?php
		                }
	                }
	                ?>
                </div>
                <div class="tab-pane fade bg-white border-0" id="nav-tab-bank">
                    <div class="form-group">
                        <label for="promo_code"  class="font-weight-bold">Apply Promocode:</label>
                        <ul class="list-unstyled d-flex">
                            <li class="w-75">
                                <input type="text" class="form-control" id="coupon_code" placeholder="Apply Promocode" name="coupon_code">
                                <span id="message" class="small bg-white alert-success"></span>
                            </li>
                            <li class="w-25">
                                <button id="apply" class="btn btn-danger btn-block">Apply</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </article>


</aside>


 <?php
// Finish the page.
echo $OUTPUT->footer();
$link  = "$CFG->wwwroot/course/view.php?id=$COURSE->id";
$module_id = $DB->get_field('modules', 'id', array('name' => 'customcert'));
$records = $DB->get_records('course_modules', array('module' => $module_id, 'course' => $COURSE->id, 'visible' => 1,
  'deletioninprogress' => 0), '', 'id,availability');
foreach ($records as $record => $recordvalue) {
  if (strpos($recordvalue->availability, 'enrol') > 0) {
    $link = "$CFG->wwwroot/mod/customcert/view.php?id=$recordvalue->id";
  }
}
?>
<script>
	$("#apply").click(function(){
    $('#message').html("");
		if($('#coupon_code').val() !== ''){
			$.ajax({
        		url: '<?php echo $CFG->wwwroot; ?>/availability/condition/enrol/ajax_coupon_record.php',
						type: "POST",
						data:{
							coupon_code: $('#coupon_code').val(),
              userid : <?php echo $USER->id; ?>,
              courseid : <?php echo $COURSE->id; ?>
						},
						success: function(dataResult){
							var dataResult = JSON.parse(dataResult);
							if(dataResult.statusCode==200){
                $('#message').html("Promocode applied successfully, we are redirecting you to your certificate");
                window.location.href = "<?php echo $link; ?>";
							}
							else if(dataResult.statusCode==202){
								$('#message').html("Invalid promocode!");
							} else {
                $('#message').html("Something is wrong, please try again after some time!");
              }
						}
			});
		}
		else{
			$('#message').html("Promocode can not be blank .Enter a Valid Promocode !");
		}
	});
	$("#edit").click(function(){
		$('#coupon_code').val("");
		$('#apply').show();
		$('#edit').hide();
		location.reload();
	});
</script>

<style>
    .btn-paypal{
        background: #ffc439;
        color: #000;
        text-shadow: 0px 1px 0 #ffdc88;
    }
</style>