<?php
        include '../classes/autoload.php';
        $p = new Products;

		$category = 'Medical';

		$products = $p->all();

		if(isset($_GET['company_name'])){
			$products = $p->getItemsByCompany($_GET['company_name']);
		}

        function single_item($products){
            $products = [
                'id' => $products['id'],
                'image' => $products['image'],
                'name' => $products['name'],
                'category' => $products['category'],
                'description' => $products['description'],
            ];
            $_SESSION['singleitem'] = $products;
		}
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
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

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

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<?php if(!count($products)) echo "<h2 class=" . '"feature-title" style	' . "=" . '"text-align: center"' . ">" . "no items found on selected company</h2>"  ?>
						<div class="row allproducts">
							<?php foreach($products as $product): ?>
								<div class="all-box">
									<div class="feature">
										<img src="../images/products/<?= $product['image'] ?>" alt="" class="feature-image">
										<h2><?= $product['name'] ?></h2>
										<p><?= $product['category'] ?></p>
										<a href="product?action=details&product=<?= $product['name'] ?>" class="button">View Details</a>
									</div>
								</div>
							<?php endforeach; ?>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div>
			</main>

			<?php include('footer.php'); ?>
		</div>

		<script src="../../js/jquery-1.11.1.min.js"></script>
		<script src="../../js/plugins.js"></script>
		<script src="../../js/app.js"></script>
		
	</body>

</html>