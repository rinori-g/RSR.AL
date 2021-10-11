<?php 
				
	session_start();

	
	include './classes/autoload.php';
	$news = new News;

	$blogs = $news->indexBlogs();
	
	if(isset($_GET['action']) && ($_GET['action']) == 'category'){
		if(isset($_GET['category'])){
			$_SESSION['category_name'] = $_GET['category'];
		}
		else{
			$errors[] = "Product doesn't exist";
		}
	}

?>

<!DOCTYPE html>
<html lang="bg">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Science Labs</title>

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
					$currentpage = 'home';
					include('navbar.php');
					?>
				</div>
			</header>

			<div class="hero">
				<ul class="slides">
					<li data-bg-image="../images/lab15.jpeg">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Dedicated to Technology. Committed to Care</h2>
								<a href="contact#contact" class="button">Contact</a>
							</div>
						</div>
					</li>
					<li data-bg-image="../images/lab21.png">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Range of medical equipment suited for your needs</h2>
								<a href="contact#contact" class="button">Kontakto</a>
							</div>
						</div>
					</li>
					<li data-bg-image="../images/lab20.png">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title"">Your local partner.</h2>
								<a href="contact#contact" class="button">Contact</a>
							</div>
						</div>
					</li>
				</ul>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-2 col-sm-6">
								<div class="feature">
									<img src="../images/Icon-Diabetes.png" alt="" class="feature-image" width="80px" height="auto">
									<h2>Diabetes</h2>
									<!-- <p>Laborum et dolorum fuga harum quidem rerum facilis et expedita distinctio nam libero tempore.</p> -->
									<a href="allproducts?action=category&category=Diabetes" class="button">Discover</a>
								</div>
							</div>
							<div class="col-md-2 col-sm-6">
								<div class="feature">
									<img src="../images/Icon-Medical.png" alt="" class="feature-image" width="80px" height="auto">
									<h2>Medical</h2>
									<!-- <p>Laborum et dolorum fuga harum quidem rerum facilis et expedita distinctio nam libero tempore.</p> -->
									<a href="allproducts?action=category&category=Medical" class="button">Discover</a>
								</div>
							</div>
							<div class="col-md-2 col-sm-6">
								<div class="feature">
									<img src="../images/Icon-Laboratory.png" alt="" class="feature-image" width="80px" height="auto">
									<h2>Laboratory</h2>
									<!-- <p>Laborum et dolorum fuga harum quidem rerum facilis et expedita distinctio nam libero tempore.</p> -->
									<a href="allproducts?action=category&category=Laboratory" class="button">Discover</a>
								</div>
							</div>
							<div class="col-md-2 col-sm-6">
								<div class="feature">
									<img src="../images/Icon-Opthamology.png" alt="" class="feature-image" width="80px" height="auto">
									<h2>Opthamology</h2>
									<!-- <p>Laborum et dolorum fuga harum quidem rerum facilis et expedita distinctio nam libero tempore.</p> -->
									<a href="allproducts?action=category&category=Opthamology" class="button">Discover</a>
								</div>
							</div>
							<div class="col-md-2 col-sm-6">
								<div class="feature">
									<img src="../images/Icon-Cardiology.png" alt="" class="feature-image" width="80px" height="auto">
									<h2>Cardiology</h2>
									<!-- <p>Laborum et dolorum fuga harum quidem rerum facilis et expedita distinctio nam libero tempore.</p> -->
									<a href="allproducts?action=category&category=Cardiology" class="button">Discover</a>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->

				<div class="fullwidth-block">
					<div class="container">
					    <h1 style="text-align: center; text-decoration: underline;">NEWS</h1>
						<div class="project-list">
							<?php foreach($blogs as $blog): ?>
								<div class="project">
								<div class="project-content">
								    <div class="project-between">
									<div class="blog-image" style="background: url('images/news/<?= $blog['blog_photo'] ?>') no-repeat center center/cover"></div>
									<h3 class="project-title"><strong><?= $blog['title'] ?></strong></h3>
									<p style="font-size: 0.8rem;"><?= $blog['created_at'] ?></p>
									<p><?= substr($blog['description'], 0, 85) . "..." ?></strong></p>
									</div>
								<a href="blog?action=blog_details&blog_name=<?= $blog['title'] ?>" class="button">Shiko më shumë</a>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>

				<!-- <div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<h2 class="section-title">Our mission and vision</h2>
								<p>Consequuntur minima, delectus quia labore sapiente maiores illo enim numquam sint? Molestias odio itaque, recusandae ut quae fuga ea tempore facere facilis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi cupiditate repellat velit quo, fugiat dolores eum corrupti commodi? Deserunt, adipisci sunt voluptas aliquid aliquam eos. Perspiciatis, similique atque deserunt nam.</p>
								<p>Distinctio delectus consequuntur sed quod ipsum a, odio obcaecati neque, aliquam nostrum aliquid reprehenderit ad quae qui autem voluptate omnis quas Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime magnam amet obcaecati dolore omnis consectetur dignissimos iste cupiditate excepturi quae porro fugiat, nemo iure, minima. Fuga hic voluptate ratione, at.ullam.</p>
							</div>
							<div class="col-md-4">
								<h2 class="section-title">Research summaries</h2>
								<ul class="arrow-list has-border">
									<li><a href="#">Praesentium voluptatum deleniti atque dolores</a></li>
									<li><a href="#">Corrupti quos et quas molestias excepturi sint</a></li>
									<li><a href="#">Occaecati cupiditate non provident similique sunt</a></li>
									<li><a href="#">Nam libero tempore, cum soluta nobis est eligendi</a></li>
								</ul>
								<a href="#" class="button">Show more</a>
							</div>
						</div>
					</div>
				</div> -->

				<!-- <div class="fullwidth-block" data-bg-color="#edf2f4">
					<div class="container">
						<div class="subscribe-form">
							<h2>Join our newsletter</h2>
							<form action="#">
								<input type="text" placeholder="Enter your email">
								<input type="submit" value="Subscribe">
							</form>
						</div>
					</div>
				</div> -->

			</main> <!-- .main-content -->

			<?php include('footer.php'); ?>
		</div>

		<script src="../js/jquery-1.11.1.min.js"></script>
		<script src="../js/plugins.js"></script>
		<script src="../js/app.js"></script>
		
	</body>

</html>