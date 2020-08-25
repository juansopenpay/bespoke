<?php 
require_once("includes/auth-token.php");
$status = $_GET['status'];
$planid = $_GET['planid'];
$orderid = $_GET['orderid'];
?>
<?php
echo $status . "<br>";
echo $planid . "<br>";
echo $orderid . "<br>"
?>
<?php

$curlOrderStatus = curl_init();

/* Check if the order is pending */

curl_setopt_array($curlOrderStatus, array(
	CURLOPT_URL => "https://api.training.myopenpay.co.uk/v1/merchant/orders/" . $planid,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURL_SETOPT($curlOrderStatus, CURLOPT_USERPWD, $username . ":" . $password),
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"Content-Type: application/json"
	),
));

$responseOrderStatus = curl_exec($curlOrderStatus);

curl_close($curlOrderStatus);
echo $responseOrderStatus;

$jsonOrderStatus = json_decode($responseOrderStatus);
$orderStatus = $jsonOrderStatus->orderStatus;
echo "<p>"."orderStatus: " . $orderStatus."</p>";  

if ($orderStatus == "Pending") {
	echo "es pending";




	$curlCaptureOrder = curl_init();

	curl_setopt_array($curlCaptureOrder, array(
		CURLOPT_URL => "https://api.training.myopenpay.co.uk/v1/merchant/orders/". $planid . "/capture",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURL_SETOPT($curlCaptureOrder, CURLOPT_USERPWD, $username . ":" . $password),
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json"
		),
	));

	$responseCaptureOrder = curl_exec($curlCaptureOrder);

	curl_close($curlCaptureOrder);
	echo $responseCaptureOrder;

	$jsonCaptureStatus = json_decode($responseCaptureStatus);
	$orderStatus2 = $jsonCaptureStatus->orderStatus;

	if ($orderStatus2 == "") {
		//echo "es pending";
		header("Location: success.php?planid=$planid&orderid=$orderid"); 

	} else {

	}
}
?>