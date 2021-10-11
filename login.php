<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Services : Science Labs</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="./fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="./assets/style/style.css">
		<link rel="stylesheet" href="./assets/style/admin-style.css">
		
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

			<div class="login-container">
                <div class="login-form">
                    <form method="post" id="login">
                        <h2>Sign In to RSR KOSOVA Admin Panel</h2>
                        <label for="username">username</label>
                        <input type="text" name="username" id="username" required>
                        <label for="password">password</label>
                        <input type="password" name="password" id="password" required>
                        <input type="submit" name="login_btn" value="Log in">
                    </form>
                </div>
            </div>

			<?php include('footer.php'); ?>
		</div>

		<script src="../js/jquery-1.11.1.min.js"></script>
		<script src="../js/plugins.js"></script>
		<script src="../js/app.js"></script>
		
	</body>

</html>