<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\programs\yanger\MyBlog\fastadmin\public/../application/index\view\index\index.html";i:1546911846;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<!-- Fonts-->
		<link rel="stylesheet" type="text/css" href="assets/fonts/fontawesome/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/fonts/pe-icon/pe-icon.css">
		<!-- Vendors-->
		<link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/grid.css">
		<link rel="stylesheet" type="text/css" href="assets/vendors/magnific-popup/magnific-popup.min.css">
		<link rel="stylesheet" type="text/css" href="assets/vendors/swiper/swiper.css">
		<!-- App & fonts-->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:400,700">
		<link rel="stylesheet" type="text/css" id="app-stylesheet" href="assets/css/main.css">
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<div class="page-wrap" id="root">
			
			<!-- header -->
			<header class="header header--fixed">
				<div class="header__inner">
					<!-- <div class="header__logo"><a href="index.html"><img src="assets/img/logo.png" alt="" style="width: 122px;"/></a></div> -->
					<div class="navbar-toggle" id="fs-button">
						<div class="navbar-icon"><span></span></div>
					</div>
				</div>
				
				<!-- fullscreenmenu__module -->
				<div class="fullscreenmenu__module" trigger="#fs-button">
					
					<!-- overlay-menu -->
					<nav class="overlay-menu">
						
						<!--  -->
						<ul class="wil-menu-list">
							<li class="current-menu-item"><a href="/index">HOME</a>
							</li>
							<li class="current-menu-item"><a href="/notes">NOTES</a>
							</li>
							<li><a href="/materials">MATERIALS</a>
							</li>
							<li><a href="/summary">SUMMARY</a>
							</li>
							<li><a href="/personage">PERSONAGE</a>
							</li>
							<!-- <li><a href="contact.html">Contact</a>
							</li> -->
						</ul><!--  -->
						
					</nav><!-- End / overlay-menu -->
					
				</div><!-- End / fullscreenmenu__module -->
				
			</header><!-- End / header -->
			
			<!-- Content-->
			<div class="wil-content">
				
				<!-- Section -->
				<section class="awe-section">
					<div class="container">
						
						<!-- page-title -->
						<div class="page-title">
							<h2 class="page-title__title">Hello, my name is Yanger.<br>I
								
								<!-- typing__module -->
								<div class="typing__module">
									<div class="typed-strings"><span>'m a web designer</span><span> do creative</span><span>'m a frontend developer</span>
									</div><span class="typed"></span>
								</div><!-- End / typing__module -->
								
							</h2>
							<p class="page-title__text"></p>
							<div class="page-title__divider"></div>
						</div><!-- End / page-title -->
						
					</div>
				</section>
				<!-- End / Section -->
				
				<!-- <div class="tlinks">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div> -->
				
				
				<!-- Section -->
				<section class="awe-section bg-gray">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 ">
								
								<!-- title -->
								<div class="title">
									<h2 class="title__title">我的小栈</h2>
								</div><!-- End / title -->
								
							</div>
						</div>
						<div class="grid-css grid-css--masonry" data-col-lg="3" data-col-md="2" data-col-sm="2" data-col-xs="1" data-gap="30">
							<div class="grid__inner">
								<div class="grid-sizer"></div>
								<?php foreach($data as $vo): ?>
								<div class="grid-item">
									<div class="grid-item__inner">
										<div class="grid-item__content-wrapper">
											
											<!-- work -->
											<div class="work"><a href="detail/<?php echo $vo['id']; ?>">
													
													<!-- hoverbox ef-slide-bottom -->
													<div class="hoverbox ef-slide-bottom light">
														
														<!-- hb_front -->
														<div class="hb_front"><img src="<?php echo $vo['image']; ?>" alt=""/>
														</div><!-- End / hb_front -->
														
														
														<!-- hb_back -->
														<div class="hb_back">
															<h2 class="work__title"><?php echo $vo['title']; ?></h2><span class="work__text">View detail (<?php echo $vo['category']; ?>)</span>
														</div><!-- End / hb_back -->
														
													</div><!-- End / hoverbox ef-slide-bottom -->
													</a>
											</div><!-- End / work -->
											
										</div>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
						<div class="awe-text-center mt-50">
							<!-- <a class="md-btn md-btn--outline-primary" href="#">all work
							</a> -->
						</div>
						
						<!-- <div id="demo" style="text-align: center;"></div> -->
					</div>
				</section>
				<!-- End / Section -->
				
			</div>
			<!-- End / Content-->
			
			<!-- footer -->
			
			<!-- End / footer -->
			
		</div>
		<!-- Vendors-->
		<script type="text/javascript" src="assets/vendors/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="assets/vendors/imagesloaded/imagesloaded.pkgd.js"></script>
		<script type="text/javascript" src="assets/vendors/isotope-layout/isotope.pkgd.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery-one-page/jquery.nav.min.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery.easing/jquery.easing.min.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery.matchHeight/jquery.matchHeight.min.js"></script>
		<script type="text/javascript" src="assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="assets/vendors/masonry-layout/masonry.pkgd.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery.waypoints/jquery.waypoints.min.js"></script>
		<script type="text/javascript" src="assets/vendors/swiper/swiper.jquery.js"></script>
		<script type="text/javascript" src="assets/vendors/menu/menu.js"></script>
		<script type="text/javascript" src="assets/vendors/typed/typed.min.js"></script>
		<!-- App-->
		<script type="text/javascript" src="assets/js/main.js"></script>
	</body>
</html>
