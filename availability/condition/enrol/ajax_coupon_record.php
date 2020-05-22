<?php

require_once('../../../config.php');
global $USER, $DB;
$coupon_code = required_param('coupon_code', PARAM_RAW);
$userid = required_param('userid', PARAM_INT);
$courseid = required_param('courseid', PARAM_INT);
$configs = get_config('availability_enrol');
$match = false;
foreach ($configs as $config => $configvalue) {
  if($configvalue == '') continue;
  if (trim($coupon_code) == trim($configvalue)) {
    $match = true;
  }
}

if(!$match){
  echo json_encode(array("statusCode" => 202));
}
else{
$data = new stdClass();
$data->userid = $userid;
$data->courseid = $courseid;
$data->timecreated = time();

if ($DB->insert_record('availability_coupon', $data)) {
  echo json_encode(array(
    "statusCode" => 200,
  ));
}
else {
  echo json_encode(array("statusCode" => 201));
}
}
?>