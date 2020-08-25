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
	<h1>Openpay Demo Store</h1>
	<h2>Checkout page</h2>
	<div class="breadcrumb">
		<ul>
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Checkout</li>
		</ul>
	</div>
	<div class="section">
		<h3>Order details</h3>
		<div class="order-details">
			<div class="rTable">
				<div class="rTableRow">
					<div class="rTableHead"><strong>Description</strong></div>
					<div class="rTableHead"><strong>Quantity</strong></div>
					<div class="rTableHead"><strong>Unit Price</strong></div>
				</div>
				<div class="rTableRow">
					<div class="rTableCell"><p>Grey T-shirt</p><img src="images/grey-tshirt.jpg" width=80 alt=""></div>
					<div class="rTableCell"><p>1</p></div>
					<div class="rTableCell"><p>50</p></div>
				</div>
				<div class="rTableRow">
					<div class="rTableCell">&nbsp;</div>
					<div class="rTableCell">&nbsp;</div>
					<div class="rTableCell">&nbsp;</div>
				</div>
				<div class="rTableRow">
					<div class="rTableCell">&nbsp;</div>
					<div class="rTableCell">&nbsp;</div>
					<div class="rTableCell"><strong>Total: £50</strong></div>
				</div>				
			</div>
		</div>
		<form method="post" id="payment-form" action="checkout.php">
			<button class="button">Submit Plan</button>
		</form>
	</div>
	<?php include "footer.php"; ?>
</div>
</body>

</html>