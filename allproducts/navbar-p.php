<div class="header-bar">
	<a href="../" class="branding">
		<img src="../images/RSRKosova-Logo.png" alt="" class="logo" width="171px" height="auto" />
	</a>

	<nav class="main-navigation">
		<button class="menu-toggle"><i class="fa fa-bars"></i></button>
		<ul class="menu">
		<li class="home menu-item <?php if($currentpage=='home'): ?> current-menu-item <?php else: ?> '' <?php endif ?>"><a href="../"><img src="../images/home-icon.png" alt="Home"></a></li>
			<li class="menu-item <?php if($currentpage=='about'): ?> current-menu-item <?php else: ?> '' <?php endif ?>"><a href="../about">About</a></li>
			<li class="menu-item menu-dropdown <?php ($currentpage=='products') ? print('current-menu-item') : '' ?>"><a>Products</a>
				<ul class="dropdown">
					<li><a href="./?action=category&category=Diabet">Diabet</a></li>
					<li><a href="./?action=category&category=Medical">Mjekësore</a></li>
					<li><a href="./?action=category&category=Laboratory">Laborator</a></li>
					<li><a href="./?action=category&category=Opthamology">Okulistikë</a></li>
					<li><a href="./?action=category&category=Cardiology">Kardiologji</a></li>
				</ul>
			</li>
			<li class="menu-item <?php if($currentpage == 'projects'): ?> current-menu-item <?php else: ?> '' <?php endif ?>"><a href="../news">News</a></li>
			<li class="menu-item <?php if($currentpage == 'contact'): ?> current-menu-item <?php else: ?> '' <?php endif ?>"><a href="../contact">Contact</a></li>
			<li class="menu-item <?php if($currentpage == 'en'): ?> current-menu-item <?php else: ?> '' <?php endif ?>"><a href="../en">EN</a></li>
		</ul>
	</nav>

	<div class="mobile-navigation"></div>
</div>