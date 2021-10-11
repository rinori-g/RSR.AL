<?php
        include '../classes/autoload.php';
        $p = new Products;

		if(isset($_GET['subcategory_name'])){

			$products = $p->getItemsByCategory($_GET['subcategory_name']);

		}

        function single_item($products){
            $products = [
                'id' => $products['id'],
                'name' => $products['name'],
                'image' => $products['image'],
                'description' => $products['description'],
				'category' => $products['category'],
                'manufacturer' => $products['manufacturer'],
                'manufacturer_link' => $products['manufacturer_link'],
            ];
            $_SESSION['singleitem'] = $products;
		}

		// function single_item($category){
        //     $category = [
        //         'id' => $category['id'],
        //         'name' => $category['name'],
        //         'category' => $category['category'],
        //         'category_short' => $category['category_short'],
        //     ];
        //     $_SESSION['singleitem'] = $category;
		// }

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
		<link href="../../fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="../assets/style/admin-style.css">
		<link rel="stylesheet" href="../assets/style/style.css">
		<link rel="stylesheet" href="../assets/style/newproduct.css">
		
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
					    <h2>Products : </h2>
						<?php if(!count($products)) echo "<h2 class=" . '"feature-title" style	' . "=" . '"text-align: center"' . ">" . "no items found on selected company</h2>"  ?>
						<div class="row allproducts">
							<?php if(count($products)): ?>

								<!-- ======================================================== -->
								
								<?php foreach($products as $product): ?>
										<div class="all-box">
											<div class="feature">
												<div class="img-container" style="background: #333 url('../images/products/<?= $product['image'] ?>') no-repeat center center/cover">
											</div>
											<div class="info-product">
												<div class="info">
													<h2 class="low-padding"><?= $product['name'] ?></h2>
													<h2><?= $product['manufacturer'] ?></h2>
													<pre><?= $product['description'] ?></pre>
												</div>
												<a href="<?= $product['manufacturer_link'] ?>" class="button prod-btn" target="_blank">View Details <i class="fas fa-arrow-right"></i></a>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							<?php endif ?>

						</div> <!-- .row -->
					</div> <!-- .container -->
				</div>
			</main>

			<?php include('footer.php'); ?>
			
		</div>

		<script src="../js/jquery-1.11.1.min.js"></script>
		<script src="../js/plugins.js"></script>
		<script src="../js/app.js"></script>
		
	</body>

</html>