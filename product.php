<?php
$string = file_get_contents("string_constant.json");
$option = json_decode($string);

$PRODUCTS_LIST_CATEGORIES = $option->PRODUCTS_LIST_CATEGORIES;
$SEASONALS = $option->SEASONALS;
?>

<!DOCTYPE html>
<html lang="en">

<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122701123-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-122701123-1');
		</script>
	<title>As you wish</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
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

	<!-- Title Page -->
	<!-- <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/heading-pages-02.jpg);">
		<h2 class="l-text2 t-center">
			Women
		</h2>
		<p class="m-text13 t-center">
			New Arrivals Women Collection 2018
		</p>
	</section> -->


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->

						<h4 class="m-text14 p-b-7">
							Seasonals
						</h4>

						<ul class="p-b-15">
							<?php 
							for($i=0; $i < sizeof($SEASONALS); $i++){
								$showActive = "";
								if(isset($_GET['product_selected'])){
									if(strcmp($SEASONALS[$i]->product,$_GET['product_selected']) == 0) {
										$showActive = "color: red";
									}
								}?>
								<li class="p-t-4">
										<a href="javascript:getSelectedProductGet({product_selected:'<?php echo $SEASONALS[$i]->product; ?>',type:'seasonal'})" 
											style="<?php echo $showActive; ?>"	class="s-text13">
											<b><?php echo $SEASONALS[$i]->product; ?></b>
										</a>
								</li>
							<?php }
							?>
						</ul>

						<h4 class="m-text14 p-b-7">
							Categories
						</h4>

						<ul class="p-b-15">
							<?php 
							for($i=0; $i < sizeof($PRODUCTS_LIST_CATEGORIES); $i++){
								$showActive = "";
								if(isset($_GET['product_selected'])){
									if(strcmp($PRODUCTS_LIST_CATEGORIES[$i]->product,$_GET['product_selected']) == 0) {
										$showActive = "color: red";
									}
								}?>
								<li class="p-t-4">
										<a href="javascript:getSelectedProductGet({product_selected:'<?php echo $PRODUCTS_LIST_CATEGORIES[$i]->product; ?>',type:'daily'})" 
											style="<?php echo $showActive; ?>"	class="s-text13">
											<b><?php echo $PRODUCTS_LIST_CATEGORIES[$i]->product; ?></b>
										</a>
								</li>
							<?php }
							?>
						</ul>

						
					
						<!--  -->
						<!-- <h4 class="m-text14 p-b-32">
							Filters
						</h4>

						<div class="filter-price p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-17">
								Price
							</div>

							<div class="wra-filter-bar">
								<div id="filter-bar"></div>
							</div>

							<div class="flex-sb-m flex-w p-t-16">
								<div class="w-size11">
									<button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
										Filter
									</button>
								</div>

								<div class="s-text3 p-t-10 p-b-10">
									Range: $<span id="value-lower">610</span> - $<span id="value-upper">980</span>
								</div>
							</div>
						</div>

						<div class="filter-color p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-12">
								Color
							</div>

							<ul class="flex-w">
								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
									<label class="color-filter color-filter1" for="color-filter1"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
									<label class="color-filter color-filter2" for="color-filter2"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
									<label class="color-filter color-filter3" for="color-filter3"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
									<label class="color-filter color-filter4" for="color-filter4"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
									<label class="color-filter color-filter5" for="color-filter5"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
									<label class="color-filter color-filter6" for="color-filter6"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
									<label class="color-filter color-filter7" for="color-filter7"></label>
								</li>
							</ul>
						</div>

						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div> -->
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					

					<!-- Product -->
					<div class="row">
						<?php 
							if(isset($_GET['type'])){
								if($_GET['type'] === 'seasonal'){
									$PRODUCTS_LIST_CATEGORIES = $SEASONALS;
								}
							}
							for($i = 0; $i < sizeof($PRODUCTS_LIST_CATEGORIES) ; $i++){
								
								if(isset($_GET['product_selected'])){
									if(strcmp($PRODUCTS_LIST_CATEGORIES[$i]->product,$_GET['product_selected']) != 0) {
										continue;
									}
								} else {
									if(strcmp($PRODUCTS_LIST_CATEGORIES[$i]->product,"Mugs") != 0) {
										continue;
									}
								}
								$folder = $PRODUCTS_LIST_CATEGORIES[$i]->folder;
								$prefix = $PRODUCTS_LIST_CATEGORIES[$i]->file_name_prefix;
								$suffix = $PRODUCTS_LIST_CATEGORIES[$i]->file_name_suffix;
								
								for($j = 1; $j <= $PRODUCTS_LIST_CATEGORIES[$i]->number_of_images ; $j++){
									
						?>

						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="images/<?php echo $folder.'/'.$prefix.$j.$suffix; ?>" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<!-- <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
										</div> -->
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<span class="block2-name dis-block s-text3 p-b-5" align="center">
									<b>	<?php 
										if($j < 10){
											echo $PRODUCTS_LIST_CATEGORIES[$i]->product_code.'0'.$j;
										}
										else{
											echo $PRODUCTS_LIST_CATEGORIES[$i]->product_code.$j;
										}
										?></b>
									</span>
								</div>
							</div>
						</div>
							<?php }} ?>
					</div>

					<!-- Pagination -->
					<!-- <div class="pagination flex-m flex-w p-t-26">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div> -->
				</div>
			</div>
		</div>
	</section>

			<?php include 'footer.php'; ?>

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



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

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function () {
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function () {
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function () {
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function () {
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
		var filterBar = document.getElementById('filter-bar');

		noUiSlider.create(filterBar, {
			start: [50, 200],
			connect: true,
			range: {
				'min': 50,
				'max': 200
			}
		});

		var skipValues = [
			document.getElementById('value-lower'),
			document.getElementById('value-upper')
		];

		filterBar.noUiSlider.on('update', function (values, handle) {
			skipValues[handle].innerHTML = Math.round(values[handle]);
		});
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>