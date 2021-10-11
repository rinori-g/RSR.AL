<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Services : Science Labs</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="assets/style/style.css">
		
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
					include('navbar.php');
					?>
				</div>
			</header>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="feature">
									<img src="images/recommend_1.png" alt="" class="feature-image">
									<h2 class="feature-title">Diabetes</h2>
									<p>Laborum et dolorum fuga harum quidem rerum facilis et expedita distinctio nam libero tempore.</p>
									<a href="" class="button">Learn more</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="feature">
									<img src="images/recommend_2.png" alt="" class="feature-image">
									<h2 class="feature-title">Medical</h2>
									<p>Laborum et dolorum fuga harum quidem rerum facilis et expedita distinctio nam libero tempore.</p>
									<a href="" class="button">Learn more</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="feature">
									<img src="images/recommend_3.png" alt="" class="feature-image">
									<h2 class="feature-title">Laboratory</h2>
									<p>Laborum et dolorum fuga harum quidem rerum facilis et expedita distinctio nam libero tempore.</p>
									<a href="" class="button">Learn more</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="feature">
									<img src="images/recommend_4.png" alt="" class="feature-image">
									<h2 class="feature-title">Opthamology</h2>
									<p>Laborum et dolorum fuga harum quidem rerum facilis et expedita distinctio nam libero tempore.</p>
									<a href="" class="button">Learn more</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="feature">
									<img src="images/recommend_4.png" alt="" class="feature-image">
									<h2 class="feature-title">Cardiology</h2>
									<p>Laborum et dolorum fuga harum quidem rerum facilis et expedita distinctio nam libero tempore.</p>
									<a href="" class="button">Learn more</a>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div>

			

			<?php include('footer.php'); ?>
		</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>