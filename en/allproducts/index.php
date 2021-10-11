<?php

		session_start();
		
        include '../classes/autoload.php';
        $c = new Companies;

		$companies = $c -> all();

		if(isset($_GET['category'])){
			$category = $_GET['category'];
			$companies = $c->getcategory($category);
		}


        function single_item($company){
            $company = [
                'id' => $company['id'],
                'image' => $company['company_image'],
                'name' => $company['company_name'],
                'category' => $company['category'],
                'description' => $company['description'],
            ];
            $_SESSION['singleitem'] = $company;
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
					<?php if(!count($companies)) echo "<h2 class=" . '"feature-title" style	' . "=" . '"text-align: center"' . ">" . "no items found on selected company</h2>"  ?>
						<div class="row allcompanies">
							<?php foreach($companies as $company): ?>
								<div class="all-box">
									<div class="feature feature-box">
										<img src="../../images/companies/<?= $company['company_image'] ?>" width="auto" height="45px" alt="" class="feature-image">
										<h2><?php echo $company['company_name']; if(!empty($company['country'])) echo " (" . $company['country'] . ")" ?></h2>
										<p><?= substr($company['description'], 0, 40) . " ..." ?></p>
										<a href="products?action=company&company_name=<?= $company['company_name'] ?>" class="button">View all</a>
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