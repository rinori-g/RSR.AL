<head>
  
  <meta charset="UTF-8">

  <link rel="stylesheet" href="../assets/style/slick.css">
  <link rel="stylesheet" href="../assets/style/slick-theme.css">
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
  background: url(../images/arrow.svg) center no-repeat;
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
</head>
<?php

	session_start();
	
	include '../classes/autoload.php';
	$c = new Companies;
	$cat = new Categories;

	$diabetesCompanies = $c -> getcategory('Diabetes');
	$medicalCompanies = $c -> getcategory('Medical');
	$laboratoryCompanies = $c -> getcategory('Laboratory');
	$opthamologyCompanies = $c -> getcategory('Opthamology');
	$cardiologyCompanies = $c -> getcategory('Cardiology');

	$diabetesCategories = $cat->getCategory('Diabetes');
	$medicalCategories = $cat->getCategory('Medical');
	$laboratoryCategories = $cat->getCategory('Laboratory');
	$opthamologyCategories = $cat->getCategory('Opthamology');
	$cardiologyCategories = $cat->getCategory('Cardiology');

	if(isset($_GET['category'])){
		unset($diabetesCompanies);
		unset($medicalCompanies);
		unset($laboratoryCompanies);
		unset($opthamologyCompanies);
		unset($cardiologyCompanies);

		//selected Company
		$companies = $c->getcategory($_GET['category']);
		$categories = $cat->getCategory($_GET['category']);
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

<?php function typeCompany($type, $categories) { ?>

	<?php if(count($categories)): ?>
	
		<div class="container">
			<h2 class="lead-text"><?= $categories[0]['category'] ?></h2>
			<div class="row allcompanies">
				<?php foreach($categories as $cat): 
					
					if ($cat['category'] == "Medical" || $cat['category'] == "Opthamology") { // skip even members
						continue;
					}?>
					
					<div class="all-box">
						<div class="feature feature-box feature-box-category">
							<div class="feature-container">
							<img src="../images/categories/<?= $cat['image'] ?>" alt="<?= $cat['name'] ?>" class="feature-image" width="80px" height="auto">
							<h2><?= $cat['name'] ?></h2>
							</div>
							<a href="categories?action=category&category_name=<?= $cat['name'] ?>" class="button">View Products</a>
						</div>
					</div>
					
				<?php endforeach; ?>
			</div> <!-- .row -->
			
			<?php if($cat['category'] == "Medical"){ ?>
				<div class="brendet container">
				<a href="https://www.as-medizintechnik.de/en-US/home/"target="_blank"><img src="../images/zoll.jpg"></a>
				<a href="https://www.zoll.com/"target="_blank"><img src="../images/az.jpg"></a>
				<a href="https://www.rocamed.com/"target="_blank"><img src="../images/rocamed.jpg"></a>
				<a href="https://www.cardinalhealth.com/en.html"target="_blank">	<img src="../images/cardinalhealth.jpg"></a>
				<a href="https://www.convatec.com/"target="_blank">	<img src="../images/conva.jpg"></a>
					</div>
					<br>
	
			<?php } 
			elseif($cat['category'] == "Laboratory"){?>
					<div class="brendet container">
					<a href="https://mec.ohaus.com/en-mec/ "target="_blank"><img src="../images/ohaus.jpg"></a>
					<a href="https://bit.ly/3oSSuKq"target="_blank"><img src="../images/metler.jpg"></a>
					<a href="https://faster-air.com/en/"target="_blank"><img src="../images/faster.jpg"></a>
					<a href="https://www.binder-world.com/us"target="_blank"><img src="../images/binder.jpg"></a>
					<a href="https://www.liebherr.com/en/usa/start/start-page.html"target="_blank"><img src="../images/liebherr.jpg"></a>
					<a href="https://www.evoqua.com/"target="_blank"><img src="../images/evoqua.jpg"></a>
					<a href="https://www.smeg.com/"target="_blank"><img src="../images/smeg.jpg"></a>
					<a href="https://www.micropticsl.com/"target="_blank"><img src="../images/microptic.jpg"></a>
					<a href="https://www.carlroth.com/com/en/"target="_blank"><img src="../images/roth.jpg"></a>
					<a href="https://www.systec-lab.com/"target="_blank"><img src="../images/systec.jpg"></a>
					<a href="http://www.biochrom.co.uk/"target="_blank"><img src="../images/biochrom.jpg"></a>
					<a href="https://www.nabertherm.com/en"target="_blank"><img src="../images/nabertherm.jpg"></a>
					<a href="https://www.spectro.com/"target="_blank"><img src="../images/spectro.jpg"></a>
					<a href="https://www.rossmax.com/en/"target="_blank"><img src="../images/rossmax.jpg"></a>
					<a href="https://www.3bscientific.com/"target="_blank"><img src="../images/3bscientific.jpg"></a>
					<a href="https://www.3dhistech.com/ "target="_blank"><img src="../images/3dhistech.jpg"></a>
					<a href="https://www.as-medizintechnik.de/de-DE/home/"target="_blank"><img src="../images/az.jpg"></a>
					</div>

					
			<?php }elseif($cat['category'] == "Opthamology"){ ?>
				<div class="brendet container">
				<a href="https://www.hoyavision.com/"target="_blank"><img src="../images/ajlo.jpg"></a>
				<a href="https://ajlsa.com/"target="_blank"><img src="../images/hoya.jpg"></a>
				<a href="https://www.teknomek.co.uk/"target="_blank"><img src="../images/teknomek.jpg"></a>
					</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<?php }?>
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
					<?php if(isset($_GET['category'])): ?>
						<?php typeCompany($companies, $categories) ?>
					<?php else: ?>
    					<?php typeCompany($diabetesCompanies, $diabetesCategories) ?>
						<?php typeCompany($medicalCompanies, $medicalCategories) ?>
						<?php typeCompany($laboratoryCompanies, $laboratoryCategories) ?>
						<?php typeCompany($opthamologyCompanies, $opthamologyCategories) ?>
						<?php typeCompany($cardiologyCompanies, $cardiologyCategories) ?>
					<?php endif ?>
				</div>
			</main>

			<?php include('footer.php'); ?>
		</div>

		<script src="../js/jquery-1.11.1.min.js"></script>
		<script src="../js/plugins.js"></script>
		<script src="../js/app.js"></script>
		<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  
		<script src="../js/slick.js"  type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
  $(document).ready(function() {
  $('.logo-carousel').slick({
    slidesToShow: 5,
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