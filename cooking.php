<!DOCTYPE html>
<html lang="en">
<?php
	$page_label = 'cooking';
?>
<?php
$file = 'eggs.jpg';
//echo "$file";
// if (file_exists($file)) {
//     header('Content-Description: File Transfer');
//     header('Content-Type: application/octet-stream');
//     header('Content-Disposition: attachment; filename="'.basename($file).'"');
//     header('Expires: 0');
//     header('Cache-Control: must-revalidate');
//     header('Pragma: public');
//     header('Content-Length: ' . filesize($file));
//     readfile("http://localhost/inyange/img/".$file);
//     exit;
// }
?>

<?php
$filename = "eggs.jpg";
echo $_SERVER['SERVER_NAME'];

// header("Content-Length: " . filesize($filename));
// header('Content-Type: application/octet-stream');
// header('Content-Disposition: attachment; filename=eggs.jpg');

// readfile("http://localhost/inyange/img/".$filename);
?>
<?php
 
// ignore_user_abort(true);
// set_time_limit(0); // disable the time limit for this script
 
// $path = "http://localhost/inyange/img/"; // change the path to fit your websites document structure
// $filename = "eggs.jpg";
 
// $dl_file = preg_replace("([^\w\s\d\-_~,;:\[\]\(\).]|[\.]{2,})", '', $_GET['download_file']); // simple file name validation
// $dl_file = filter_var($dl_file, FILTER_SANITIZE_URL); // Remove (more) invalid characters
// $fullPath = $path.$dl_file;
 
// if ($fd = fopen ($fullPath, "r")) {
//     $fsize = filesize($fullPath);
//     $path_parts = pathinfo($fullPath);
//     $ext = strtolower($path_parts["extension"]);
//     switch ($ext) {
//         case "pdf":
//         header("Content-type: application/pdf");
//         header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use 'attachment' to force a file download
//         break;
//         case "jpg":
//         header("Content-type: application/jpg");
//         header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use 'attachment' to force a file download
//         break;
//         // add more headers for other content types here
//         default;
//         header("Content-type: application/octet-stream");
//         header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
//         break;
//     }
//     header("Content-length: $fsize");
//     header("Cache-control: private"); //use this to open files directly
//     while(!feof($fd)) {
//         $buffer = fread($fd, 2048);
//         echo $buffer;
//     }
// }
// fclose ($fd);
// exit;
?>
<head>
    <?php include 'incl/head_main.php';?>
	<title>Inyange Industries - Recipes </title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="http://inyange.kadibra.com/cooking" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Inyange Industries Recipes" />
    <meta property="og:description"   content="There are more than 1000 ways to use Inyange products. Get out your pots and start the journey of ultimate deliciousness with our Made in Rwanda range of products." />
    <meta property="og:image"         content="http://inyange.kadibra.com/img/Recipes-web2.jpg" />
	<style>
		#lightSlider .light_item{
			display: none;
		}
	</style>
	<link type="text/css" rel="stylesheet" href="lightslider/css/lightslider.css" />                  
	<script src="lightslider/js/lightslider.js"></script>
    <style>
        #underHomeCarousel{
            /*height: 550px!important*/
            height: 1110px !important
        }
        #underHomeCarousel .light_item{
            display: none;
            position: relative;
            height: 100%;
        }
        #underHomeCarousel .slide_dish .dish_row{
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            var slider = $("#underHomeCarousel").lightSlider({
                item: 1,
                autoWidth: false,
                slideMove: 1, // slidemove will be 1 if loop is true
                slideMargin: 2,

                addClass: '',
                mode: "slide",
                useCSS: true,
                cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
                easing: 'linear', //'for jquery animation',////

                speed: 1000, //ms'
                auto: true,
                loop: true,
                slideEndAnimation: true,
                pause: 7000,

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
                            $("#underHomeCarousel .light_item").css({'display': 'block'});
                },
                onSliderLoad: function (el) {},
                onBeforeSlide: function (el) {},
                onAfterSlide: function (el) {},
                onBeforeNextSlide: function (el) {},
                onBeforePrevSlide: function (el) {}
            });
            
            $('.recipies_arrow.right').click(function(){
                slider.goToNextSlide();
            });
            $('.recipies_arrow.left').click(function(){
                slider.goToPrevSlide();
            });
        });
    </script>
</head>

<body><!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <br>
    <br>
    <br>
	<div class="full-window" style="background: url('img/slider/Inyange-Milk-bg-2.png'); background-size: 100% 100%;">
		
		<?php include 'views/nav_main.php';?>
		<br/>
		<br/>
		<!-- Page Content -->
        
        
        <section id="section_recipes" class="section section_recipes">
            <div class="container two-full-window">
                <?php include 'views/home_slider1.php';?>
                <br>
            </div>
        </section>
          
       <section class="section section_about" style="background: #f3f3f3">
            <div class="container">
                <h2 class="bg_header"> Inyange for you</h2>
                <hr class="hr">
                <div class="row" id="about">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 text-center">
                        <br>
                        <p class="italic man">
                             There are more than 1000 ways to use Inyange products. Get out your pots  and start the journey of ultimate deliciousness with our Made in Rwanda range of products.
                        </p>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
            <br>
        </section>
        <section class="background_white" style="background: #fff; margin-bottom: -30px">
			<div class="container">
            <br>
				<div class="row">
					
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
					<div class="col-md-6">
						<div class="uparallax_block">
							<img class="img img-responsive center-block" src="img/footers/SLIDE_2.jpg">
							<div class="caption">
								<header>
									<h2>Inyange Products</h2>
								</header>
								<p>
									Inyange juices give you the energy required to start your day..
								</p>
								<footer>
                                    <a class="btn btn-default" href="distributors">More</a>
								</footer>
							</div>
						</div>
					</div>
				</div>
			</div> 
            <br>
            <br>
            <br>
            <br>
		</section>
        
		<!-- /.container -->
	</div>
   <?php include 'views/footer.php';?>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
