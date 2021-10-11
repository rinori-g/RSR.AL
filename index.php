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
		<meta property="og:image" content="./images/favico.png">
		
		<title>RSR Kosova</title>

		<!-- Loading third party fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<script src="https://kit.fontawesome.com/258d6cdc2a.js" crossorigin="anonymous"></script>
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
					$currentpage = 'home';
					include('navbar.php');
					?>
				</div>
			</header>

			<div class="hero">
				<ul class="slides">
					<li data-bg-image="images/lab15.jpeg">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Kushtuar teknologjisë. Angazhuar kujdesit.</h2>
								<a href="contact#contact" class="button">Kontakto</a>
							</div>
						</div>
					</li>
					<li data-bg-image="images/lab21.png">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Pajisje mjekësore të përshtatshme për nevojat tuaja</h2>
								<a href="contact#contact" class="button">Kontakto</a>
							</div>
						</div>
					</li>
					<li data-bg-image="images/lab20.png">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Partneri juaj lokal.</h2>
								<a href="contact#contact" class="button">Kontakto</a>
							</div>
						</div>
					</li>
					<!-- <li data-bg-image="images/header_2.jpg">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Konsumatorët, mjetet, aparatet dhe pajisjet - të gjitha me kujdesin për ju!</h2>
								<a href="contact#contact" class="button">Kontakto</a>
							</div>
						</div>
					</li> -->
				</ul>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-2 col-sm-6">
								<div class="feature">
									<img src="images/Icon-Diabetes.png" alt="Diabetes" class="feature-image" width="80px" height="auto">
									<h2>Diabet</h2>
									<a href="allproducts?action=category&category=Diabetes" class="button">Zbulo</a>
								</div>
							</div>
							<div class="col-md-2 col-sm-6">
								<div class="feature">
									<img src="images/Icon-Medical.png" alt="Medical" class="feature-image" width="80px" height="auto">
									<h2>Mjekësore</h2>
									<a href="allproducts?action=category&category=Medical" class="button">Zbulo</a>
								</div>
							</div>
							<div class="col-md-2 col-sm-6">
								<div class="feature">
									<img src="images/Icon-Laboratory.png" alt="Laboratory" class="feature-image" width="80px" height="auto">
									<h2>Laborator</h2>
									<a href="allproducts?action=category&category=Laboratory" class="button">Zbulo</a>
								</div>
							</div>
							<div class="col-md-2 col-sm-6">
								<div class="feature">
									<img src="images/Icon-Opthamology.png" alt="Opthamology" class="feature-image" width="80px" height="auto">
									<h2>Okulistikë</h2>
									<a href="allproducts?action=category&category=Opthamology" class="button">Zbulo</a>
								</div>
							</div>
							<div class="col-md-2 col-sm-6">
								<div class="feature">
									<img src="images/Icon-Cardiology.png" alt="Cardiology" class="feature-image" width="80px" height="auto">
									<h2>Kardiologji</h2>
									<a href="allproducts?action=category&category=Cardiology" class="button">Zbulo</a>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->
	
				<div class="fullwidth-block">
					<div class="container">
					    <h1 style="text-align: center; text-decoration: underline;">TË REJAT</h1>
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

			</main> <!-- .main-content -->
			<div class="newsletter" id="newsletter">
					<div class="container">
						<div class="newslet">
						<div class="head1">
							<!-- <img src="images/newsletter.gif" alt="newsletter"> -->
							<h1><i class="fas fa-paper-plane plane"></i>NEWSLETTER</h1>
							
						</div>	
						<div class="inputi">
						<form method="POST" class="news-form" action="#newsletter" >
								<?php 
								if(isset($_POST['submit'])){
									$to = "info@rsr.al"; // this is your Email address
									$from = $_POST['email']; // this is the sender's Email address
								
									$subject = "New Subscriber";
									$subject2 = "Submission Completed";
									$message =  $from ." has been added to your email list.";
									$message2 = "Thank you for subscribing.";

									$headers = "From:" . $from;
									$headers2 = "From:" . $to;
									mail($to,$subject,$message,$headers);
									mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
								
									// You can also use header('Location: thank_you.php'); to redirect to another page.
									}
								?>
						<input type="email" name="email" id="email"  class="input" required >
						<button  type="submit" name="submit"><i class="fas fa-angle-right"></i></button>
						</form>
						</div>	
						</div>
					</div>
				</div>					
			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<div id="contact" class="row contact-form">
							<h2 class="section-title" style="margin: 10px 15px;">Contact Our Experts</h2>
														<?php
								if (isset($_POST['submitt']))  {
							
									//Email information
									$admin_email = "info@rsr.al";
									$fullname = $_POST['fullname'];
									$emaiil = $_POST['emaiil'];
									$phonee = $_POST['phonee'];
									$messagee = $_POST['messagee'];
									$headerss = "From:" . $fullname . " Email:". $emaiil . " Phone: " . $phonee;
									//send email
									mail($admin_email, "New Message From RSR ", $messagee, $headerss);
									
								}
							?>
						<form  method="POST" class="message-form"  action="#newsletter">
							<div class="col-md-4">
								<p><input type="text"  name="fullname" placeholder="Your Full Name..." required></p>
								<p><input  type="email" name="emaiil" placeholder="Email..." required></p>
								<p><input type="text" name="phonee"  placeholder="Your Phone..." required></p>
								
							</div>
							<div class="col-md-8">
								<p>
									<textarea  name="messagee" id="message" placeholder="Message" required></textarea>
								</p>
								<p class="text-right">
									<input type="submit"  name="submitt" value="Send message">
								</p>
							</div>
						</form>
						</div>
						
				</div>

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

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>