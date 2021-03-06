<?php

	session_start();
	
	include '../classes/autoload.php';
	$sc = new Subcategories;

	if(isset($_GET['category_name'])){

		//selected Company
		$subcategories = $sc->getcategory($_GET['category_name']);
	}


	function single_item($subcategory){
		$subcategory = [
			'id' => $subcategory['id'],
			'name' => $subcategory['name'],
			'image' => $subcategories['image'],
			'category' => $subcategory['category'],
			'category_short' => $subcategory['category_short'],
		];
		$_SESSION['singleitem'] = $subcategory;
	}
?>

<?php function typeCompany($type, $categories) { ?>

	<?php if(count($categories)): ?>
	
		<div class="container">
			<h2 class="lead-text"><?= $categories[0]['category'] ?></h2>
			<div class="row allcompanies">
				<?php foreach($categories as $cat): ?>
					<div class="all-box">
						<div class="feature feature-box feature-box-category">
							<div class="feature-container">
							<img src="../images/categories/<?= $cat['image'] ?>" alt="<?= $cat['name'] ?>" class="feature-image" width="80px" height="auto">
							<h2><?= $cat['name'] ?></h2>
							</div>
							<a href="categories?action=category&category_name=<?= $cat['category_short'] ?>" class="button">View Products</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div> <!-- .row -->
		</div> <!-- .container -->
	
	<?php else: ?>

		<?php if(count($type)): ?>

			<div class="container">
				<h2 class="lead-text"><?= $type[0]['category'] ?></h2>
				<div class="row allcompanies">
					<?php foreach($type as $company): ?>
						<div class="all-box">
							<div class="feature feature-box">
								<div class="feature-container">
								<img src="../images/companies/<?= $company['company_image'] ?>" width="auto" height="50px" alt="" class="feature-image">
								<h2><?php echo $company['company_name']; if(!empty($company['country'])) echo " (" . $company['country'] . ")" ?></h2>
								<p><?= substr($company['description'], 0, 40) . " ..." ?></p>
								</div>
								<a href="products?action=company&company_name=<?= $company['company_name'] ?>" class="button">View Products</a>
							</div>
						</div>
					<?php endforeach; ?>
				</div> <!-- .row -->
			</div> <!-- .container -->

		<?php endif ?>

	<?php endif ?>

<?php } ?>

<?php
	function addClass($arr){
		$addClass = true;
		$className = 'feature-box-category';
		$i = 0;

		while($addClass && $i != count($arr)){
			if( strlen($arr[$i]['name']) > 40 ){
				$addClass = false;
			}
			else{ $i++; }
		}

		return $addClass;
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
		<link href="../fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="../assets/style/style.css">
		
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
					<?php if(isset($_GET['category_name'])): ?>
					<div class="container">
						<h2 class="lead-text"><?= $_GET['category_name'] . " subcategories" ?></h2>
						<div class="row allcompanies">
							<?php foreach($subcategories as $scat): ?>
								<div class="all-box">
									<div class="feature feature-box <?php echo ( addClass($subcategories) ? 'feature-box-category' : '' ) ?>">
									    <div class="feature-container">
										<img src="../images/categories/<?= $scat['image'] ?>" alt="<?= $scat['name'] ?>" class="feature-image" width="80px" height="auto">
										<h2><?= $scat['name'] ?></h2>
										</div>
										<a href="products?action=company&subcategory_name=<?= $scat['category_short'] ?>" class="button">View Products</a>
									</div>
								</div>
							<?php endforeach; ?>
						</div> <!-- .row -->
					</div> <!-- .container -->
					<?php endif ?>
				</div>
			</main>

			<?php include('footer.php'); ?>
		</div>

		<script src="../js/jquery-1.11.1.min.js"></script>
		<script src="../js/plugins.js"></script>
		<script src="../js/app.js"></script>
		
	</body>

</html>