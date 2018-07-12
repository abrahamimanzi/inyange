<!DOCTYPE html>
<html lang="en">
<?php
	$page_label = 'products';
?>
<head>
    <?php include 'incl/head_main.php';?>
	<title>Inyange Industries - Welcome </title>
	<style>
		#lightSlider .light_item{
			display: none;
		}
	</style>
	<link type="text/css" rel="stylesheet" href="lightslider/css/lightslider.css" />                  
	<script src="lightslider/js/lightslider.js"></script>
</head>

<body>
    <br>
    <br>
	<div class="full-window" style=" background: #f4f4f4">
		<?php include 'views/nav_main.php';?>
		
		<script type="text/javascript">
		$(document).ready(function(){
			$("#lightSlider").lightSlider({
				item: 1,
				autoWidth: false,
				slideMove: 1, // slidemove will be 1 if loop is true
				slideMargin: 2,
		 
				addClass: '',
				mode: "fadein",
				useCSS: true,
				cssEasing:  'cubic-bezier(0.25, 0, 0.25, 1)',//'ease',
				easing: 'linear', //'for jquery animation',////
		 
				speed: 2000, //ms'
				auto: true,
				loop: true,
				slideEndAnimation: true,
				pause: 5000,
		 
				keyPress: true,
				controls: true,
				prevHtml: '',
				nextHtml: '',
		 
				rtl:false,
				adaptiveHeight:false,
		 
				vertical:false,
				verticalHeight:300,
				vThumbWidth:200,
		 
				thumbItem:8,
				pager: true,
				gallery: false,
				galleryMargin: 0,
				thumbMargin: 0,
				currentPagerPosition: 'middle',
		 
				enableTouch:true,
				enableDrag:true,
				freeMove:true,
				swipeThreshold: 40,
		 
				responsive : [],
		 
				onBeforeStart: function (el) {
					$("#lightSlider .light_item").css({'display': 'block'});},
				onSliderLoad: function (el) {
				},
				onBeforeSlide: function (el) {},
				onAfterSlide: function (el) {},
				onBeforeNextSlide: function (el) {},
				onBeforePrevSlide: function (el) {}
			});
		});
    </script>    
        
    <style>
        #bg_container{
            position: relative;
        }
        #video_bg{
            width: 100%;    
        }
        .over-video{
            position: absolute;
            top: 0px;
            height: 100%;  
            width: 100%;
        }
        .margin_top_div{
            box-shadow: 0 3px 5px rgba(0,0,0,.1)
        }
        .bg_vid_loading{
            width: 80px
        }
    </style>
    <script>
        $(document).ready(function(){
            $('.bg_vid_loading').hide()
        });
    </script>

    <div class=" hidden-xs">
        <div id="bg_container">
            <video id="video_bg" src="VIDEOS/bg/inyange-butter.mp4" autoplay="true" loop="true" muted="true"></video>
            <div class="over-video">
                <h1 class="text-center" style="position: absolute; bottom: 400px; color: #fff; width: 100%; background: rgba(255,255,255,.2); padding: 15px; text-shadow: 0 2px 3px rgba(0,0,0,.3)"> Inyange <img class="bg_vid_loading animated breathing" src="img/icon/logo.png"> Specialities</h1>
                
            </div>
        </div>  
    </div>
        
	<div class="product_main_slider visible-xs" style="margin-top: -15px; padding-top: 0px; ">
            <ul id="lightSlider">
			  <li class="light_item" data-thumb="img/Webslide_Inyange-1.jpg">
					<a href="#">
                        <img class="img-responsive" src="img/Webslide_Inyange-1 2.jpg">
                    </a>
			  </li>
			  <li class="light_item" data-thumb="img/hs_buscuit.png">
					<a href="#">
                        <img class="img-responsive" src="img/Webslide_Inyange-3.jpg">
                    </a>
			  </li>
			  <li  class="light_item" data-thumb="img/hs_schol.png">
					<a href="#">
                        <img class="img-responsive" src="img/Webslide_Inyange-4.jpg">
                    </a>
			  </li>
			  <li class="light_item" data-thumb="img/hs_bis.jpg">
					<a href="#">
                        <img class="img-responsive" src="img/Webslide_Inyange-2 2.jpg">
                    </a>
			  </li>
			</ul>
	</div>
        

		<!-- Page Content -->
    
        <section id="section_home" class="section section_products not_absolute " style="margin-top: -200px;">
            <div class="container margin_top_div" style="background: #fff; padding: 10px 30px;">
                <h2 class="bg_header" style="margin: 15px auto 5px auto;"> INYANGE Products</h2><hr class="hr">
                <br>
                <div class="row">
                    <div class="col-md-3 col-sm-6 portfolio-item">
                        <div class="thumbnail imgzom_div">
                            <a href="#Product-2" class="portfolio-link" data-toggle="modal">
                                <img src="img/products/Inyange-Milk-image-icon-1.png" class="img1 img-responsive" alt="Product 1">
                                <div class="caption">
                                    <p>
                                        <span class=" btn btn-md btn-default">More Info</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 portfolio-item">
                        <div class="thumbnail imgzom_div">
                            <a href="#Product-1" class="portfolio-link" data-toggle="modal">
                                <img src="img/products/Inyange-Juice-image-icon-2.png" class="img1 img-responsive" alt="Product 1">
                                <div class="caption">
                                    <p>
                                        <span class=" btn btn-md btn-default">More Info</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 portfolio-item">
                        <div class="thumbnail imgzom_div">
                            <a href="#Product-3" class="portfolio-link" data-toggle="modal">
                                <img src="img/products/Banners-01.jpg" class="img1 img-responsive" alt="Product 1">
                                <div class="caption">
                                    <p>
                                        <span class=" btn btn-md btn-default">More Info</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 portfolio-item">
                        <div class="thumbnail imgzom_div">
                            <a href="#Product-4" class="portfolio-link" data-toggle="modal">
                                <img src="img/products/Inyange-Water-image-icon-1.png" class="img1 img-responsive" alt="Product 1">
                                <div class="caption">
                                    <p>
                                        <span class=" btn btn-md btn-default">More Info</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-3 col-sm-6 portfolio-item">
                        <div class="thumbnail imgzom_div">
                            <a href="#Product-6" class="portfolio-link" data-toggle="modal">
                                <img src="img/products/Inyange-Flavoured-Milk-image-icon-1.png" class="img1 img-responsive" alt="Product 1">
                                <div class="caption">
                                    <p>
                                        <span class=" btn btn-md btn-default">More Info</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 portfolio-item">
                        <div class="thumbnail imgzom_div">
                            <a href="#Product-9" class="portfolio-link" data-toggle="modal">
                                <img src="img/products/Fresh-Cream.png" class="img1 img-responsive" alt="Product 1">
                                <div class="caption">
                                    <p>
                                        <span class=" btn btn-md btn-default">More Info</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 portfolio-item">
                        <div class="thumbnail imgzom_div">
                            <a href="#Product-8" class="portfolio-link" data-toggle="modal">
                                <img src="img/products/Ghee.png" class="img1 img-responsive" alt="Product 1">
                                <div class="caption">
                                    <p>
                                        <span class=" btn btn-md btn-default">More Info</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 portfolio-item">
                        <div class="thumbnail imgzom_div">
                            <a href="#Product-7" class="portfolio-link" data-toggle="modal">
                                <img src="img/products/yoghurt-copy.png" class="img1 img-responsive" alt="Product 1">
                                <div class="caption">
                                    <p>
                                        <span class=" btn btn-md btn-default">More Info</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
     <!--   <section class="section section_about" style="background: #f3f3f3">
            <br>
            <br>
            <div class="container">
                <div class="row" id="about">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 text-center">
                        <br>
                        <p class="italic man">
                            Now that you have read about our products, it is time for you to go out and try them out! Our products are available in almost every shop in Rwanda, and do not worry you will not be disappointed.
                        </p>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
            <br>
            <br>
            <br>
        </section> -->
    
   <?php include 'views/footer.php';?>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<!-- Script to Activate the Carousel -->

</body>
</html>
    
 
<?php include 'views/modal-1-juice.php'?>
<?php include 'views/modal-2-milk.php'?>
<?php include 'views/modal-3-butter.php'?>
<?php include 'views/modal-4-water.php'?>
<?php include 'views/modal-5-juice.php'?>
<?php include 'views/modal-6-flavoured-milk.php'?>
<?php include 'views/modal-7-yoghurt.php'?>
<?php include 'views/modal-8-ghee.php'?>
<?php include 'views/modal-9-fresh-cream.php'?>

