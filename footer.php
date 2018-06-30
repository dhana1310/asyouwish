<?php 
// $string = file_get_contents("string_constant.json");
//  $option = json_decode($string);

 define("MOBILE", $option->MOBILE);
 define("GOAL", $option->GOAL);
 $PRODUCT_LIST_FOOTER_1 = $option->PRODUCT_LIST_FOOTER_1;
 $PRODUCT_LIST_FOOTER_2 = $option->PRODUCT_LIST_FOOTER_2;
 $HELP_LIST = $option->HELP_LIST;
 ?>

<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
	<div class="flex-w p-b-90">
		<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
			<h4 class="s-text12 p-b-30">
				GET IN TOUCH
			</h4>

			<div>
				<p class="s-text7 w-size27">
					Any questions? Let us know at
					<b><?php echo AS_YOU_WISH_MAIL; ?></b> or call us on
					<b><?php echo MOBILE; ?></b>
				</p>

				<div class="flex-m p-t-30">
					<a href="<?php echo FB_LINK; ?>" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
					<a href="<?php echo INSTA_LINK; ?>" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
					<!-- <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
					<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
					<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a> -->
				</div>
			</div>
		</div>

		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30">
				Products-1
			</h4>

			<ul>

			<?php 
				for($i=0; $i < sizeof($PRODUCT_LIST_FOOTER_1); $i++){
				?>
				<li class="p-b-9">
					<a href="<?php echo $PRODUCT_LIST_FOOTER_1[$i]->link; ?>" class="s-text7">
					<?php echo $PRODUCT_LIST_FOOTER_1[$i]->product; ?>
					</a>
				</li>
				<?php }
				?>
			</ul>
		</div>

		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30">
				Products-2
			</h4>

			<ul>
			<?php 
				for($i=0; $i < sizeof($PRODUCT_LIST_FOOTER_2); $i++){
								?>
				<li class="p-b-9">
					<a href="<?php echo $PRODUCT_LIST_FOOTER_2[$i]->link; ?>" class="s-text7">
					<?php echo $PRODUCT_LIST_FOOTER_2[$i]->product; ?>
					</a>
				</li>
				<?php }
				?>
			</ul>
		</div>

		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30">
				Help
			</h4>

			<ul>
			<?php 
				for($i=0; $i < sizeof($HELP_LIST); $i++){
			?>
				<li class="p-b-9">
					<a href="<?php echo $HELP_LIST[$i]->link; ?>" class="s-text7" <?php 
						if(strcmp($HELP_LIST[$i]->type,"FAQs") == 0){
							echo 'download';
					} ?> >
					<?php echo $HELP_LIST[$i]->type; ?>
					</a>
				</li>
				<?php }
				?>
			</ul>
		</div>

		<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
			<h4 class="s-text12 p-b-30">
				Our Goal
			</h4>
			<div class="effect1 w-size9">
				<!-- <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
					<span class="effect1-line"></span> -->
				<?php echo GOAL; ?>
			</div>
		</div>
	</div>
</footer>



<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
	<span class="symbol-btn-back-to-top">
		<i class="fa fa-angle-double-up" aria-hidden="true"></i>
	</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>