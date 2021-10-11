<?php
    include '../classes/autoload.php';
    $p = new Products;

    $product = $p->get($_GET['product']);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Services : Science Labs</title>

		<!-- Loading third party fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
		<link href="../fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="../../assets/style/admin-style.css">
		<link rel="stylesheet" href="../../assets/style/style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div class="site-content">
			<header class="site-header" data-bg-image="">
				<div class="container">
					<?php 
					$currentpage = 'products';
					include('navbar-p.php'); 
					?>
				</div>
			</header>

			<div class="container">
				<section id="product">
					<div class="product-container">
						<div class="image-contact">
							<div class="img">
								<img src="../images/products/<?= $product['image'] ?>" alt="">
							</div>
							<div class="contact">
								<p><strong>Phones: </strong> <a href="tel:0895200174"> 0895 200 174</a>, <a href="tel:0895200109"> 0895 200 109</a></p>
								<p><strong>Email: </strong> <a href="mailto:lab@rsr-bg.com">lab@rsr-bg.com</a></p>
							</div>
						</div>
						<div class="info-form">
							<h1 id="product-name"><?= $product['name'] ?></h1>
							<h3 id="use-for"><?= $product['usefor'] ?></h3>
							<p><strong>Manufacturer: <a href=""><?= $product['manufacturer'] ?></a></strong></p>
							<p><strong>Category: </strong> <a href=""><?= $product['category'] ?></a></p>
							<form method="post">
								<h2>Ask for an offer</h2>
								<label for="company">Company/Organization <span>(required)</span></label>
								<input type="text" name="company" placeholder="" required>
								<label for="company">Your Email <span>(required)</span></label>
								<input type="text" name="company" placeholder="info@example.com" required>
								<label for="company">Your Phone <span>(required)</span></label>
								<input type="text" name="company" placeholder="" required>
								<label for="company">Your Request</label>
								<textarea name="request"></textarea>
								<input type="submit" value="Send">
							</form>
						</div>
					</div>
				</section>
			</div>

			<div class="container">
				<section id="description">
					<div class="description-container">
						<div>
							<h2>Description</h2>
						</div>
						<div class="text-container">
							<p>
<pre><?= $product['description'] ?></pre>
							</p>
						</div>
					</div>
				</section>
			</div>

			<?php include('footer.php'); ?>
		</div>

		<script src="../../js/jquery-1.11.1.min.js"></script>
		<script src="../../js/plugins.js"></script>
		<script src="../../js/app.js"></script>
		
	</body>

</html>