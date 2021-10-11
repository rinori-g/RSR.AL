<?php

		session_start();
		
        include 'classes/autoload.php';
        $n = new News;

		$blogs = $n->all();

        function single_item($blog){
            $blog = [
                'id' => $blog['id'],
                'image' => $blog['blog_photo'],
                'name' => $blog['blog'],
                'category' => $blog['category'],
                'created_at' => $blog['created_at'],
                'description' => $blog['description'],
            ];
            $_SESSION['singleitem'] = $blog;
		}
    ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Projects : Science Labs</title>

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
					$currentpage = 'projects';
					include('navbar.php');
					?>
				</div>
			</header>

			<div class="page-head" data-bg-image="images/header_news.png">
				<div class="container">
					<h2 class="page-title">News</h2>
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
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

			<?php include('footer.php'); ?>
		</div>

		<script src="../js/jquery-1.11.1.min.js"></script>
		<script src="../js/plugins.js"></script>
		<script src="../js/app.js"></script>
		
	</body>

</html>