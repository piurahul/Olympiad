<?php

require_once "dbcon.php";

header('Content-Type: application/json');

if(!isset($_GET["number"])) {
    $res["status"] = "400";
    echo json_encode($res);
    die();
}

// number
$number = $_GET["number"];

// create otp, store in db
$otp = rand(10000, 99999);
// TODO, check if existing nymber
$sql2 = mysqli_query($con, "SELECT * FROM resgistration WHERE phone1='".$number."' AND verified='false';");
$count = mysqli_num_rows($sql2);
if($count) {
    mysqli_query($con, "UPDATE resgistration SET otp='".$otp."' WHERE phone1='".$number."';");
    $msg = urlencode("Thanks for regitering in our Olympiad Foundation. Your OTP is ". $otp);
$url = "http://mysms.msg24.in/api/mt/SendSMS?user=srsschoolsms&password=srsschool@321&senderid=SRSCON&channel=Trans&DCS=0&flashsms=0&number=91".$number."&text=".$msg."&route=17";
$ch = curl_init($url);

curl_exec($ch);

$res["status"] = "200";
echo json_encode($res);
die();
}


// register
$query = "INSERT INTO resgistration (phone1,otp,verified) VALUES ('".$number."','".$otp."','false');";
$sql = mysqli_query($con, $query);
if(!$query) {
    $res["status"] = "501";
    echo json_encode($res);
    die();
}
if(!empty($_POST["submit_otp"])) {
	$result = mysqli_query($conn,"SELECT * FROM otp_expiry WHERE otp='" . $_POST["otp"] . "' AND verified=true AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)");
	$count  = mysqli_num_rows($result);
	if(!empty($count)) {
		$result = mysqli_query($conn,"UPDATE otp_expiry SET is_expired = 1 WHERE otp = '" . $_POST["otp"] . "'");
		$success = 2;	
	} else {
		$success =1;
		$error_message = "Invalid OTP!";
	}	

// send otp finally
$msg = urlencode("Thanks for regitering in our Olympiad Foundation. Your OTP is ". $otp);
$url = "http://mysms.msg24.in/api/mt/SendSMS?user=srsschoolsms&password=srsschool@321&senderid=SRSCON&channel=Trans&DCS=0&flashsms=0&number=91".$number."&text=".$msg."&route=17";
$ch = curl_init($url);

curl_exec($ch);

$res["status"] = "200";
echo json_encode($res);

?>