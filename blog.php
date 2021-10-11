<?php
    include 'classes/autoload.php';
    $p = new News;

	$name = 'Veriset';

    $blog = $p->getElementByTitle($_GET['blog_name']);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Blogs : RSR</title>

		<!-- Loading third party fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
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
					<?php include('navbar.php') ?>
				</div>
			</header>

			<div class="page-head" data-bg-image="images/about_header.jpg">
				<div class="container">
					<h2 class="page-title">Our BLOG</h2>
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<a href="news" class="button back"><img src="images/arrow-back.png" alt="">Back to News</a>
						<div class="row blog-header">
						    <div class="col-md-6">
								<ul class="project-info">
									<li><strong>Category:</strong> <?= $blog['category'] ?></li>
									<li><strong>Date:</strong> <?= $blog['created_at'] ?></li>
								</ul>
								<h2 class="section-title"><?= $blog['title'] ?></h2>
							</div>
							<div class="col-md-6">
								<figure>
									<img src="images/news/<?= $blog['blog_photo'] ?>" alt="">
								</figure>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<p><pre><?= $blog['description'] ?></pre></p>
							</div>
						</div>
					</div>
				</div>
			</main> <!-- .main-content -->

			<?php include('footer.php'); ?>
		</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>