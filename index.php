<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style> 
	/* @media only screen and (min-width:320px)  { .body1 {
	max-width: 100%;
	height: auto !important;
  } }
	@media only screen and (min-width:481px)  { .body1 {
	max-width: 100%;
	height: auto;
  }}
	@media only screen and (min-width:641px)  {.body1 {
	max-width: 100%;
	height: auto;
  }}
	@media only screen and (min-width:961px)  {.body1 {
	max-width: 100%;
	height: auto;
  } }
	@media only screen and (min-width:1025px) { .body1 {
	max-width: 100%;
	height: auto;
  }}
	@media only screen and (min-width:1281px) { .body1 {
	max-width: 100%;
	height: auto;
  } } */
	</style>
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
	<script language="javascript"> 
   		function getSelectedProductGet( params) {
			path = "product.php";
			method = "get"; // Set method to post by default if not specified.

			var form = document.createElement("form");
			form.setAttribute("method", method);
			form.setAttribute("action", path);

			for(var key in params) {
				if(params.hasOwnProperty(key)) {
					var hiddenField = document.createElement("input");
					hiddenField.setAttribute("type", "hidden");
					hiddenField.setAttribute("name", key);
					hiddenField.setAttribute("value", params[key]);

					form.appendChild(hiddenField);
				}
			}

			document.body.appendChild(form);
			form.submit();
		}
	</script>
</head>

<body class="animsition">

	<?php include 'header.php'; ?>
	<!-- <div class="body1"> hello world</div> -->
	<!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
			<?php 
				for($i=1; $i < sizeof($MASTER_SLIDE); $i++){
			?>
				<div class="item-slick1 item1-slick1" style="background-image: url(images/master_slide/<?php echo $MASTER_SLIDE[$i]->file_name_prefix.$i.$MASTER_SLIDE[$i]->file_name_suffix ?>);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<!-- <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" <?php echo $MASTER_SLIDE[$i]->custom_style_caption1_slide1 ?> data-appear="fadeInDown">
							As you wish presents
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" <?php echo $MASTER_SLIDE[$i]->custom_style_caption2_slide1 ?> data-appear="fadeInDown">
						<?php //echo $MASTER_SLIDE[$i]->product ?>
						</h2> -->

						<div class="wrap-btn-slide1 w-size1 animated visible-false" <?php echo $MASTER_SLIDE[$i]->wrap_btn_slide1 ?> data-appear="fadeInDown">
							<a href="javascript:getSelectedProductGet({product_selected:'<?php echo $MASTER_SLIDE[$i]->product; ?>',type:'<?php echo $MASTER_SLIDE[$i]->type; ?>'})" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								View more								
							</a>
						</div>
					</div>
				</div>
			<?php }
			?>
			</div>
		</div>
	</section>

	<!-- Banner -->
	<section class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/alphabet_cut_out_720_900.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="javascript:getSelectedProductGet({product_selected:'Alphabets'})" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Alphabets
							</a>
						</div>
					</div>

					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/pendant_720_660.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="javascript:getSelectedProductGet({product_selected:'Pendants'})" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Pendants
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/Photo_frame_720_660.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="javascript:getSelectedProductGet({product_selected:'Photo Frames'})" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Photo Frames
							</a>
						</div>
					</div>

					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/printed-key_500x500.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="javascript:getSelectedProductGet({product_selected:'Key chains'})" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Key chains
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/printed_ cushion_720_900.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="javascript:getSelectedProductGet({product_selected:'Cushions'})" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Cushions
							</a>
						</div>
					</div>

					<!-- block2 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/wall_projection_led_720_660.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="javascript:getSelectedProductGet({product_selected:'Shadow Box'})" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Shadow Boxes
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- New Product -->
	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Other Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">

					<?php 
						$SLIDER_2 = $option->SLIDER_2;
						for($i=0; $i < sizeof($SLIDER_2); $i++){
					?>

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<!-- <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew"> New Label  -->
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="images/slider2/<?php echo $SLIDER_2[$i]->file_name; ?>" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<!-- <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a> -->
									<!-- Heart Symbol -->

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<a href="javascript:getSelectedProductGet({product_selected:'<?php echo $SLIDER_2[$i]->product_selected; ?>'})">
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												View more
											</button>
										</a>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="javascript:getSelectedProductGet({product_selected:'<?php echo $SLIDER_2[$i]->product_selected; ?>'})" class="block2-name dis-block s-text3 p-b-5">
								<?php echo $SLIDER_2[$i]->product; ?>
								</a>

								<span class="block2-price m-text6 p-r-5">
								₹<?php echo $SLIDER_2[$i]->cost; ?>
								</span>
							</div>
						</div>
					</div>
						<?php } ?>
				</div>
			</div>

		</div>
	</section>

	<!-- Banner2 -->
	<section class="banner2 bg5 p-t-55 p-b-55">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
					<div class="hov-img-zoom pos-relative">
						<img src="images/personalised_jacket_720_539.jpg" alt="IMG-BANNER">

						<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
							<span class="m-text9 p-t-45 fs-20-sm">
								Get Jackets in Bulk
							</span>

							<h3 class="l-text1 fs-35-sm">
								In stock
							</h3>

							<a href="javascript:getSelectedProductGet({product_selected:'T-shirts'})" class="s-text4 hov2 p-t-20 ">
								View more
							</a>
							<span class="block2-newprice m-text8" style="color:white">
							₹350 - 2000
								</span>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
					<div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm">
						<img src="images/picture_frames_720_539.jpg" alt="IMG-BANNER">

						<div class="ab-t-l sizefull flex-col-c-b p-l-15 p-r-15 p-b-20">
							<div class="t-center">
								<a href="javascript:getSelectedProductGet({product_selected:'Photo Frames'})" class="dis-block m-text9 p-b-5" style="color:yellow">
									Photo Frames
								</a>

								<!-- <span class="block2-oldprice m-text7 p-r-5" style="color:yellow">
								₹600 - 8000
								</span> -->

								<span class="block2-newprice m-text8" style="color:yellow">
								₹200 - 3000
								</span>
							</div>

							<!-- <div class="flex-c-m p-t-44 p-t-30-xl">
								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 days">
										69
									</span>

									<span class="s-text5">
										days
									</span>
								</div>

								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 hours">
										04
									</span>

									<span class="s-text5">
										hrs
									</span>
								</div>

								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 minutes">
										32
									</span>

									<span class="s-text5">
										mins
									</span>
								</div>

								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 seconds">
										05
									</span>

									<span class="s-text5">
										secs
									</span>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Instagram -->
	<section class="instagram p-t-20">
		<div class="sec-title p-b-52 p-l-15 p-r-15">
			<h3 class="m-text5 t-center">
				Our Satisfied Customers
			</h3>
		</div>

		<div class="flex-w">
			<!-- Block1 -->
			<?php 
				$CUSTOMER_REVIEW = $option->CUSTOMER_REVIEW;

				for($i=0; $i < sizeof($CUSTOMER_REVIEW); $i++){
			
			 ?>

			<div class="block4 wrap-pic-w">
				<img src="images/customer/<?php echo $CUSTOMER_REVIEW[$i]->file_name; ?>" alt="IMG-INSTAGRAM">

				<a href="javascript:void(0)" class="block4-overlay sizefull ab-t-l trans-0-4">
					<!-- <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span> -->

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
						<?php echo $CUSTOMER_REVIEW[$i]->comment; ?>
						</p>

						<span class="s-text9">
						<?php echo $CUSTOMER_REVIEW[$i]->name; ?>
						</span>
					</div>
				</a>
			</div>
				<?php } ?>
		</div>
	</section>

	<!-- Shipping -->
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Get Free delivery for your 1st item.
				</h4>

				<!-- <a href="#" class="s-text11 t-center">
					Click here for more info
				</a> -->
				<span class="s-text11 t-center">
					Delivery all over India
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					100% quality
				</h4>

				<span class="s-text11 t-center">
					Adherence to best quality
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					24*7 Opened
				</h4>

				<span class="s-text11 t-center">
					Shop anytime, anywhere.
				</span>
			</div>
		</div>
	</section>


	<?php include 'footer.php'; ?>



	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		// $('.block2-btn-addcart').each(function () {
		// 	var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
		// 	$(this).on('click', function () {
		// 		swal(nameProduct, "is added to cart !", "success");
		// 	});
		// });

		// $('.block2-btn-addwishlist').each(function () {
		// 	var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
		// 	$(this).on('click', function () {
		// 		swal(nameProduct, "is added to wishlist !", "success");
		// 	});
		// });
	</script>

	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>