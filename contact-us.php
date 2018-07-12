<!DOCTYPE html>
<html lang="en">
<?php
	$page_label = 'contact';
?>
<head>
    <?php include 'incl/head_main.php';?>
	<title>Inyange Industries - Welcome </title>
    <style>
        .zoom {
			display:inline-block;
			position: relative;
		}
		/* magnifying glass icon */
		.zoom:after {
			content:'';
			display:block; 
			width:33px; 
			height:33px; 
			position:absolute; 
			top:0;
			right:0;
			background:url(icon.png);
		}

		.zoom img {
			display: block;
		}

		.zoom img::selection { background-color: transparent; }
    </style>
	<script src='js/jquery.zoom.min.js'></script>
</head>

<body>
    <br>
    <br>
    <br>
	<div class="full-window" >
		
		<?php include 'views/nav_main.php';?>

		<!-- Page Content -->         
        <section class="block section_about"  style="background: url('img/slider/Inyange-Milk-bg-2.png'); background-size: 100% 100%;">
            <br>
            <br>  
            <div class="container">
                <h2 class="bg_header">CONTACT US</h2>
                <hr class="hr">
                <br>
                <div class="row min-margin">
                <!--<div class="col-md-4 col-sm-4 col-xs-4 phone-hidden">
                    <img src="img/water.png" class="main-img" alt=""/> 
                </div>-->
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div id="googleMap" style="width:100%;height:380px;"></div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <br>
                                <br>
                                <ul class="list list-unstyled text-left">
                                    <li><b><span class="fa fa-home"></span></b> Inyange Industries Masaka  </li>    
                                    <li><b><span class="fa fa-phone"></span> Telephone:</b> +250 788161900  </li>    
                                    <li><b><span class="fa fa-envelope"></span> Email:</b>  info@inyangeindustries.com</li>
                                    <li><b><span class="fa fa-map-marker"></span> Address:</b> P.O. Box 4584 Kigali, Rwanda </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <br>
        <br>
        </section>
	</div>
       <section class="section section_about" style="background: #f3f3f3; padding-bottom: 120px;">
           <div class="sectionRef"  id="Milkzone-map" style="margin-top: -65px"></div>
            <div class="container">
                <h2 class="bg_header"> Kigali Map Showing Inyange Milk Zone</h2>
                <hr class="hr">
                <div class="row" id="about">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 text-center">
                        <br>
                        <p class="italic man">
                             Below is an easy way to find the nearest milk zone in your area. We wouldn’t want you to miss out on your daily dose of calcium!
                        </p>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
            <br>
        </section>
        <section class="background_white" style="background: #fff; margin-top: -80px; margin-bottom: 10px;">
			<div class="container">
            <br>
				<div class="row">
					<div class="col-md-12">
                        <script>
                        	$(document).ready(function(){
                                $('#ex3').zoom({ on:'click' });			 
                            });
                        </script>
                        <span class='zoom' id='ex3' style="cursor: zoom-in; margin-top: -60px;">
                            <img src="img/map/KIGALI_MILK-ZONE-MAP.jpg" class="img img-responsive" alt='Daisy on the Ohoopee'>
                            <p>Click to zoom</p>
                        </span>
					</div>
				</div>
			</div> 
            <br>
            <br>
		</section>
     
   <?php include 'views/footer.php';?>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
	<!-- map -->
	
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB4644qDR7kIwCsx9lmYw6C68l9eSN342w&callback=initMap"></script>

	<script>
		var myCenter=new google.maps.LatLng(-1.979044, 30.184491);

		function initialize()
		{
		var mapProp = {
		  center:myCenter,
		  zoom:16,
		  mapTypeId:google.maps.MapTypeId.ROADMAP
		  };

		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

		var marker=new google.maps.Marker({
		  position:myCenter,
		  });

		marker.setMap(map);
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</body>

</html>
