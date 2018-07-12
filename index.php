<!DOCTYPE html>
<html lang="en">
<?php
	$page_label = 'index';
    $margin_top=true;
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
    <style>
        #underHomeCarousel .light_item{
            display: none;
            position: relative;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            var pause_seconds = 5000;
            var initialTime;
            $("#underHomeCarousel").lightSlider({
                item: 1,
                autoWidth: false,
                slideMove: 1, // slidemove will be 1 if loop is true
                slideMargin: 2,

                addClass: '',
                mode: "slide",
                useCSS: true,
                cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
                easing: 'linear', //'for jquery animation',////

                speed: 3000, //ms'
                auto: true,
                loop: true,
                slideEndAnimation: true,
                pause: pause_seconds,

                keyPress: true,
                controls: true,
                prevHtml: '',
                nextHtml: '',

                rtl:false,
                adaptiveHeight:false,

                vertical:true,
                verticalHeight:450,
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

                responsive : [
                    {
                        breakpoint:768,
                        settings: {
                            verticalHeight:300,
                          }
                    }
                ],

                onBeforeStart: function (el) {
                    $("#underHomeCarousel .light_item").css({'display': 'block'});
                },
                onSliderLoad: function (el) {
                },
                onBeforeSlide: function (el) {
                    var bg_img = $('.light_item.active + .light_item').data('bgimg');
                    $('.home_main_section_bg').css('background-image', 'url('+bg_img+')');
                    $('.light_item.active .caption_div').addClass('fadeOut');
                },
                onAfterSlide: function (el) {
                    $('.caption_div').removeClass('animated fadeOut');
                        var cur_src = $('.light_item.active img').attr('src');
                        $('.home_main_section .bg').css('background-image', 'url('+cur_src+')');
                        $('.home_main_section .bg').removeClass('animated fadeOutUp');
                        $('.home_main_section .bg').addClass('animated fadeInUp');
                        window.setTimeout(function() { 
                            $('.light_item.active .img_sld').addClass('animated '); 
                        }, 500);
                        window.setTimeout(function() {
                                $('.light_item.active .img_sld').removeClass('animated ');
                        }, 1500);

                    var bg_img = $('.light_item.active').data('bgimg');
                    $('.home_main_section_bg').css('background-image', 'url('+bg_img+')');
                },
                onBeforeNextSlide: function (el) {
                    $('.light_item.active .caption_div').addClass('fadeOut');
                        $('.home_main_section .bg').removeClass('animated fadeInUp');
                        $('.home_main_section .bg').addClass('animated fadeOutUp');
                },
                onBeforePrevSlide: function (el) {
                    $('.light_item.active .caption_div').addClass('fadeOut');
                }
            });
        });
    </script>
</head>

<body>
	<div class="full-window">
        <div class="home_main_section_bg">
            <?php include 'views/nav_main.php';?>
            <!-- Page Content -->
            <section class="home_main_section animated swing_color">
                <div class="container" >
                    <?php include 'views/home_slider.php';?>
                </div>
            </section>
        </div>
        <div style="background: #00ADEF; 
    /*background-image: linear-gradient(to right, #fff, #e5e5e5, #fff); box-shadow: 0 1px 3px rgba(0,0,0,.08); border-bottom: 1px solid #fff">
            <h2 class="bg_header white" style="padding: 25px 0px 13px 0px; margin: 0px auto 0px auto; */"> Featured Products</h2>
        </div>
        <!-- Page Content -->
        <section id="section_home" class="section section_portrait not_absolute " style="padding: 25px;background: #00ADEF;">
            <div class="container">
                <div class="row">
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
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <img src="img/products/Banners-01.jpg" class="img1 img-responsive" alt="Product 1">
                                    </div>
                                </div>
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
                </div>
                <p class="text-center">
                    <a href="products" class="white">Click here to View more products</a>
                </p>
            </div>
        </section>
        
       
       <section class="section section_about" style="background: #f3f3f3">
            <div class="container">
                <h2 class="bg_header"> Inyange Industries</h2>
                <hr class="hr">
                <div class="row" id="about">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 text-center">
                        <br>
                        <p class="italic man">
                            Inyange industries is engaged in the business of producing &amp; selling a wide
                            variety of fruit products, including fruit juice concentrates, fruit juice drinks &amp;
                            dairy related products. Our products are primarily sold to the local market, as
                            well as regionally via Inyange certified distributors.
                        </p>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
            <br>
            <br>
        </section>
        
        <section class="background_white" style="background: #fff">
            <br>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="uparallax_block">
							<img class="img img-responsive center-block" src="img/map/KIGALI_Map_icon.jpg">
							<div class="caption">
								<header>
									<h2>Inyange Milk zone</h2>
								</header>
								<p>
									Below is an easy way to find the nearest milk zone in your area.
								</p>
								<footer>
									<a class="btn btn-default" href="contact-us.php#Milkzone-map">More</a>
								</footer>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="uparallax_block">
							<img class="img img-responsive center-block" src="img/distributors/inyange-distrib-2.jpg">
							<div class="caption">
								<header>
									<h2>Our Distributors</h2>
								</header>
								<p>
									At Inyange, we value our customers. As such we have established a wide..
								</p>
								<footer>
									<a class="btn btn-default" href="distributors">More</a>
								</footer>
							</div>
						</div>
					</div>
				</div>
                <br>
                <br>
                <br>
			</section>
		</div>
	</div>
    
    
    <div  style="margin-top: -35px;">
        <?php include 'views/footer.php';?>
    </div>
    
    

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>



<?php include 'views/modal-1-feat-juice.php'?>
<?php include 'views/modal-2-feat-milk.php'?>
<?php include 'views/modal-3-feat-butter.php'?>
<?php include 'views/modal-4-feat-water.php'?>