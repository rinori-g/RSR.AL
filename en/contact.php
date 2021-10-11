<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Contact : Science Labs</title>

		<!-- Loading third party fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
		<link href="../fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<style>
		#map{
			height: 400px;
		}
		</style>
		
		<script>
			let map;
			function initMap() {
                const loc = { lat: 42.654160, lng: 21.171308 } 
                const map = new google.maps.Map(document.getElementById('map'), 
                {
                    zoom: 18,
                    center: loc
                });
                const marker = new google.maps.Marker({position: loc , map: map});
            };
		</script>

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
					$currentpage = 'contact';
					include('navbar.php');
					?>
				</div>
			</header>

			<div class="page-head" data-bg-image="images/header_contact.png">
				<div class="container">
					<h2 class="page-title">Contact</h2>
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<div id="contact" class="row contact-form">
							<h2 class="section-title" style="margin: 10px 15px;">Contact Form</h2>
						<form action="#">
							<div class="col-md-4">
								<p><input type="text" placeholder="Your name..."></p>
								<p><input type="text" placeholder="Email..."></p>
								<p><input type="text" placeholder="Your Phone..."></p>
							</div>
							<div class="col-md-8">
								<p>
									<textarea name="" placeholder="Message"></textarea>
								</p>
								<p class="text-right">
									<input type="submit" value="Send message">
								</p>
							</div>
						</form>
						</div>
						 <div class="row">
						 	<div class="col-md-12 boxed-content">
							 	<div class="col-md-3">
									<div class="">
										<h2 class="section-title">RSR KOSOVA</h2>
										<address>
											<p>Hilmi Rakovica Nr.68</p>
											<p>10000 Prishtinë</p>
											<p><strong>Tel : </strong></p>
											<p><a href="tel:+38349709070">+383 49 70 90 70</a></p>
											<p><strong>E-mail :</strong></p>
											<p><a href="mailto:info@rsr.al"> info@rsr.al </a></p>
										</address>
									</div>
								</div>
								<div class="col-md-9">
									<div id="map">

									</div>
								</div>
						 	</div>
						 	
						 </div>
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

        
		<script async
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDO5fHRNekIj04bT4E_Zy9sB7um2mWA4zw&callback=initMap">
		</script>
		<script src="../js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="../js/plugins.js"></script>
		<script src="../js/app.js"></script>
		
	</body>

</html>