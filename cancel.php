<?php 
$status = $_GET['status'];
$planid = $_GET['planid'];
$orderid = $_GET['orderid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Openpay Integration</title>
	<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
	<link rel="stylesheet" href="css/styles.css">
	<!-- Remove this block -->
	<link rel="shortcut icon" href="icons/favicon.png" type="image/png">
	<link rel="shortcut icon" href="icons/favicon-16x16.png" type="image/png">
	<link rel="shortcut icon" href="icons/apple-touch-icon.png" type="image/png">	
	<!---------------------->
</head>
<body>
	<div class="container">
		<!--		
		<div class="logo"><img src="images/logo.png" alt=""></div>
		-->
		<h1><a href="index.php">Openpay Demo Store</a></h1>

		<div class="breadcrumb">
			<ul>
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Order Cancelled</li>
			</ul>
		</div>
		<div class="section">
			<h2>Order Cancelled</h2>
			<ul>
				<li>Plan id: <?php echo $planid; ?></li>
				<li>Order id: <?php echo $orderid; ?></li>
			</ul>

			<a href="index.php">Buy again</a>
		</div>
		<?php include "footer.php"; ?>
	</div>
</body>
</html>