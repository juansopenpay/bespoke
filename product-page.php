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
		<h2>Product page</h2>

		<div class="breadcrumb">
			<ul>
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Mens Fashion</a></li>
				<li class="breadcrumb-item active" aria-current="page">Grey T-shirt</li>
			</ul>
		</div>

		<div class="section">
			<div class="image">
				<div class="col-md">
					<img src="images/grey-tshirt.jpg" class="img-fluid" alt="Responsive image">
				</div>			
			</div>			
			<div class="description">
				<h3>Grey T-shirt</h3>
				<h4>Price: £50</h4>
				<p>The Spreadshirt Collection stands for best-possible print results on top-quality products. A huge range of sizes makes sure that our gear fits everyone, big and small alike. What’s more, the Premium T-shirt offers an sheer infinite choice of combination opportunity with other items.</p>

				<ul>
					<li>Comes highly recommended! Top quality and supreme print results with all print methods.</li>
					<li>Consistent colours in all sizes for men, women and children.</li>
					<li>Fair and sustainable.</li>
					<li>Durable fabrics. 150 g/m².</li>
					<li>Material: 100% cotton (charcoal: 50% cotton, 50% polyester; heather blue: 50% cotton, 50% polyester; heather grey: 85% cotton, 15% viscose; heather burgundy: 65% cotton, 35% polyester).</li>
				</ul>  

				<p>[PDP widgest]</p>
				<form method="post" id="payment-form" action="checkout-page.php">
				<button class="button">Add to bag</button>
			</form>
			</div>

		</div>

		<?php include "footer.php"; ?>

	</div>
</body>

</html>