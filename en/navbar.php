<div class="header-bar">
	<a href="./" class="branding">
		<img src="../images/RSRKosova-Logo.png" alt="" class="logo" width="171px" height="auto" />
	</a>

	<nav class="main-navigation">
		<button class="menu-toggle"><i class="fa fa-bars"></i></button>
		<ul class="menu">
			<li class="home menu-item <?php ($currentpage=='home') ? print('current-menu-item') : '' ?>"><a href="./"><img src="images/home-icon.png" alt="Home"></a></li>
			<li class="menu-item <?php ($currentpage=='about') ? print('current-menu-item') : '' ?>"><a href="about">About</a></li>
			<li class="menu-item menu-dropdown <?php ($currentpage=='products') ? print('current-menu-item') : '' ?>"><a href="allproducts">Products</a>
				<ul class="dropdown">
					<li><a href="allproducts?action=category&category=Diabet">Diabet</a></li>
					<li><a href="allproducts?action=category&category=Medical">Mjekësore</a></li>
					<li><a href="allproducts?action=category&category=Laboratory">Laborator</a></li>
					<li><a href="allproducts?action=category&category=Opthamology">Okulistikë</a></li>
					<li><a href="allproducts?action=category&category=Cardiology">Kardiologji</a></li>
				</ul>
			</li>
			<li class="menu-item <?php ($currentpage=='projects') ? print('current-menu-item') : '' ?>"><a href="news">News</a></li>
			<li class="menu-item <?php ($currentpage=='contact') ? print('current-menu-item') : '' ?>"><a href="contact">Contact</a></li>
			<li class="menu-item <?php ($currentpage=='en') ? print('current-menu-item') : '' ?>"><a href="../">SHQ</a></li>
		</ul>
	</nav>

	<div class="mobile-navigation"></div>
</div>