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
			$errors = "Product doesn't exist";
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
		<link rel="stylesheet" href="assets/style/slick.css">
  <link rel="stylesheet" href="assets/style/slick-theme.css">
  <style type="text/css">
.slick-slide {
  margin: 0px 20px;
}

.logo-carousel {
  overflow: inherit;
  border-top: 1px solid #353535;
  width:80%;
  border-bottom: 1px solid #353535;

}

.slick-slide img {
  width: 100%;
}

.slick-track::before,
.slick-track::after {
  display: table;
  content: '';
}

.slick-track::after {
  clear: both;
}

.slick-track {
  padding: 1rem 0;
}

.slick-loading .slick-track {
  visibility: hidden;
}

.slick-slide.dragging img {
  pointer-events: none;
}

.slick-loading .slick-slide {
  visibility: hidden;
}

.slick-arrow {
  position: absolute;
  top: 50%;
  background: url(images/arrow.svg) center no-repeat;
  color: black;
  /* filter: invert(77%) sepia(32%) saturate(1%) hue-rotate(344deg) brightness(105%) contrast(103%); */
  border: none;
  width: 2rem;
  height: 1.5rem;
  text-indent: -10000px;
  margin-top: -16px;
  z-index: 99;
}
.slick-arrow:hover{
	filter:none;
}
.slick-arrow.slick-next {
  right: -40px;
  transform: rotate(180deg);
}

.slick-arrow.slick-prev {
  left: -40px;
  margin-top:0px;
}
.slick-arrow.slick-next:before{
	
	filter: invert(77%) sepia(32%) saturate(1%) hue-rotate(344deg) brightness(105%) contrast(103%);
}
/* Media Queries */

@media (max-width: 768px) {
  .slick-arrow {
    /* width: 1rem; */
    height: 1rem;
  }
}
.aaa{
	display:flex;
  align-items:center;
  justify-content:center;
}

  
.roww {
  overflow: hidden;
}  

/* JsFiddle Example only/don't use */
.logo-carousel {
  margin-top: 32px;
}

  </style>
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
					<li data-bg-image="images/lab24.jpg">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Dedicated to Technology. Committed to care..</h2>
								<a href="contact#contact" class="button">Contact Us</a>
							</div>
						</div>
					</li>
					<li data-bg-image="images/lab21.jpg">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Medical equipment suitable for your needs.</h2>
								<a href="contact#contact" class="button">Contact Us</a>
							</div>
						</div>
					</li>
					<li data-bg-image="images/lab20.png">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Your Local Partner.</h2>
								<a href="contact#contact" class="button">Contact Us</a>
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
									<h2>Diabetes</h2>
									<a href="allproducts?action=category&category=Diabet" class="button">See more</a>
								</div>
							</div>
							<div class="col-md-2 col-sm-6">
								<div class="feature">
									<img src="images/Icon-Medical.png" alt="Medical" class="feature-image" width="80px" height="auto">
									<h2>Medical</h2>
									<a href="allproducts?action=category&category=Medical" class="button">See more</a>
								</div>
							</div>
							<div class="col-md-2 col-sm-6">
								<div class="feature">
									<img src="images/Icon-Laboratory.png" alt="Laboratory" class="feature-image" width="80px" height="auto">
									<h2>Laboratory</h2>
									<a href="allproducts?action=category&category=Laboratory" class="button">See more</a>
								</div>
							</div>
							<div class="col-md-2 col-sm-6">
								<div class="feature">
									<img src="images/Icon-Opthamology.png" alt="Opthamology" class="feature-image" width="80px" height="auto">
									<h2>Ophthalmology</h2>
									<a href="allproducts?action=category&category=Opthamology" class="button">See more</a>
								</div>
							</div>
							<div class="col-md-2 col-sm-6">
								<div class="feature">
									<img src="images/Icon-Cardiology.png" alt="Cardiology" class="feature-image" width="80px" height="auto">
									<h2>Cardiology</h2>
									<a href="allproducts?action=category&category=Cardiology" class="button">See more</a>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->
				<div class="roww container">
				  <div class="aaa">
					<section class="logo-carousel slider" data-arrows="true">
					<div class="slide"><a href="https://www.as-medizintechnik.de/en-US/home/" target="_blank"><img src="images/zoll.jpg"></a></div>
					<div class="slide"><a href="https://www.zoll.com/"target="_blank"><img src="images/az.jpg"></a></div>
					<div class="slide"><a href="https://www.rocamed.com/"target="_blank"><img src="images/rocamed.jpg"></a></div>
					<div class="slide"><a href="https://www.cardinalhealth.com/en.html"target="_blank"><img src="images/cardinalhealth.jpg"></a></div>
					<div class="slide"><a href="https://www.convatec.com/"target="_blank">	<img src="images/conva.jpg"></a></div>
					<div class="slide"><a href="https://mec.ohaus.com/en-mec/ "target="_blank"><img src="images/ohaus.jpg"></a></div>
					<div class="slide"><a href="https://bit.ly/3oSSuKq"target="_blank"><img src="images/metler.jpg"></a></div>
					<div class="slide"><a href="https://faster-air.com/en/"target="_blank"><img src="images/faster.jpg"></a></div>
					<div class="slide"><a href="https://www.binder-world.com/us"target="_blank"><img src="images/binder.jpg"></a></div>
					<div class="slide"><a href="https://www.liebherr.com/en/usa/start/start-page.html"target="_blank"><img src="images/liebherr.jpg"></a></div>
					<div class="slide"><a href="https://www.evoqua.com/"target="_blank"><img src="images/evoqua.jpg"></a></div>
					<div class="slide"><a href="https://www.smeg.com/"target="_blank"><img src="images/smeg.jpg"></a></div>
					<div class="slide"><a href="https://www.micropticsl.com/"target="_blank"><img src="images/microptic.jpg"></a></div>
					<div class="slide"><a href="https://www.carlroth.com/com/en/"target="_blank"><img src="images/roth.jpg"></a></div>
					<div class="slide"><a href="https://www.systec-lab.com/"target="_blank"><img src="images/systec.jpg"></a></div>
					<div class="slide"><a href="http://www.biochrom.co.uk/"target="_blank"><img src="images/biochrom.jpg"></a></div>
					<div class="slide"><a href="https://www.nabertherm.com/en"target="_blank"><img src="images/nabertherm.jpg"></a></div>
					<div class="slide"><a href="https://www.spectro.com/"target="_blank"><img src="images/spectro.jpg"></a></div>
					<div class="slide"><a href="https://www.rossmax.com/en/"target="_blank"><img src="images/rossmax.jpg"></a></div>
					<div class="slide"><a href="https://www.3bscientific.com/"target="_blank"><img src="images/3bscientific.jpg"></a></div>
					<div class="slide"><a href="https://www.3dhistech.com/ "target="_blank"><img src="images/3dhistech.jpg"></a></div>
					<div class="slide"><a href="https://www.hoyavision.com/"target="_blank"><img src="images/ajlo.jpg"></a></div>
					<div class="slide"><a href="https://ajlsa.com/"target="_blank"><img src="images/hoya.jpg"></a></div>
					<div class="slide"><a href="https://www.teknomek.co.uk/"target="_blank"><img src="images/teknomek.jpg"></a></div>
					</section>
				</div>
			</div>
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
								<a href="blog?action=blog_details&blog_name=<?= $blog['title'] ?>" class="button">See more</a>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>

			</main> 
		
			</div><!-- .main-content -->
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
		<script src="js/slick.js"  type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
  $(document).ready(function() {
  $('.logo-carousel').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: true,
    dots: false,
    pauseOnHover: true,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 2
      }
    }]
  });
});

</script>

	</body>

</html>