<?php $string = file_get_contents("string_constant.json");
 $option = json_decode($string);

 define("FB_LINK", $option->FB_LINK);
 define("INSTA_LINK", $option->INSTA_LINK);
 define("AS_YOU_WISH_MAIL", $option->AS_YOU_WISH_MAIL);
 define("TAG_LINE", $option->TAG_LINE);

 $TABS = $option->TAB_LIST;
 $MASTER_SLIDE = $option->MASTER_SLIDE;
 ?>

<!-- Header -->
<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="<?php echo FB_LINK; ?>" class="topbar-social-item fa fa-facebook" target="_blank"></a>
					<a href="<?php echo INSTA_LINK; ?>" class="topbar-social-item fa fa-instagram" target="_blank"></a>
					<!-- <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a> -->
				</div>

				<span class="topbar-child1">
					<b><?php echo TAG_LINE; ?></b>
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						<b><?php echo AS_YOU_WISH_MAIL; ?></b>
					</span>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.php" class="logo">
					<img src="images/icons/asyouwish_logo.jpg" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<?php 
							for($i=0; $i < sizeof($TABS); $i++){
								?>
							<li class="sale-noti">
								<a href="<?php echo $TABS[$i]->link; ?>"><b><?php echo $TABS[$i]->tab; ?></b></a>
								<!-- <ul class="sub_menu">
									<li><a href="index.html">Homepage V1</a></li>
									<li><a href="home-02.html">Homepage V2</a></li>
									<li><a href="home-03.html">Homepage V3</a></li>
								</ul> -->
							</li>
						<?php }
						?>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.php" class="logo-mobile">
				<img src="images/icons/asyouwish_logo.jpg" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu">
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
						<?php echo TAG_LINE; ?>
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
							<?php echo AS_YOU_WISH_MAIL; ?>
							</span>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="<?php echo FB_LINK; ?>" class="topbar-social-item fa fa-facebook"></a>
							<a href="<?php echo INSTA_LINK; ?>" class="topbar-social-item fa fa-instagram"></a>
							<!-- <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a> -->
						</div>
					</li>

					<?php 
							for($i=0; $i < sizeof($TABS); $i++){
								?>

					<li class="item-menu-mobile">
						<a href="<?php echo $TABS[$i]->link; ?>"><b><?php echo $TABS[$i]->tab; ?></b></a>
						<!-- <ul class="sub-menu">
							<li><a href="index.html">Homepage V1</a></li>
							<li><a href="home-02.html">Homepage V2</a></li>
							<li><a href="home-03.html">Homepage V3</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i> -->
					</li>
					<?php }
						?>
				</ul>
			</nav>
		</div>
	</header>