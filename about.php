<!DOCTYPE html>
<html lang="en">
<?php
	$page_label = 'about';
?>
<head>
    <?php include 'incl/head_main.php';?>
	<title>Inyange Industries - Welcome </title>
</head>

<body>
    <br>
    <br>
    <br>
	<div class="full-window" >
		<?php include 'views/nav_main.php';?>

		<!-- Page Content -->
        <div class="img-about" style="width: 100%; margin: -15px 0px 0px 0px; text-align: center; background: url(img/AboutInyaBanner1.jpg); height: 450px; background-attachment: fixed; background-repeat: no-repeat; background-position: center top;">
            <div style=" height: 100%;">
                <h1 class="text-center" style="position: absolute; top: 150px; color: #fff; width: 100%; background: rgba(225,225,225,.2); padding: 15px; text-shadow: 0 2px 3px rgba(0,0,0,.3)"> Welcome to Inyange Industries</h1>
            </div>
            
        </div>
    </div>

    <section class="about_section" style=" background-size: 100% 100%; background: #f3f3f3">
        <div class="container">
            
            <br>
            <br>
            <h4 class="big"><span>ABOUT INYANGE INDUSTRIES</span></h4>
            <hr class="hr">
            <div class="row" >
                <div class="text_col col-md-7 col-sm-12 col-xs-12"> 
                    <div class="panel_text">
                        <p>
                            <strong style="font-size: 20px;">Inyange Industries</strong> is a leading food processing company in Rwanda, manufacturing a
                            variety of products under their brand name- “Inyange”. The Inyange brand has been
                            operating since 1997. However, it wasn’t until 1999 when it began operations
                            including processing &amp; selling pasteurized milk &amp; yoghurt. In 2001 the plant
                            introduced mineral water processing &amp; packaging.
                        </p>
                        <p>
                            Realizing that the domestic demand for all <strong>Inyange products</strong> was much higher than
                            the facilities could supply, Inyange’s shareholders embarked on an ambitious
                            expansion project, the construction of a USD 27 Million production plan in Masaka,
                            which has since allowed for Inyange’s production capacity to increase tenfold.
                        </p>
                        <p>
                            This increased capacity more than fulfills local demand &amp; additionally allows for
                            Inyange to expand its market to neighboring countries, taking advantage of Rwanda
                            being part of the East African Community (EAC) &amp; its customs union.
                        </p>
                        <p>
                            In modern &amp; hygienic production facilities; Inyange manufactures a wide range of
                            products &amp; thus has quickly become a household name in the fast moving consumer
                            goods industry in Rwanda known for high quality mineral drinking water, fruit juices,
                            milk &amp; dairy products.
                        </p>
                        <p>
                            <strong>“At Inyange, we take pride in our levels of high quality that we maintain from raw
                            material procurement to delivery of the final product. This has earned the company
                            the market leader position in many of the production lines.”</strong>
                        </p>

                        <br>
                    </div>
                </div>
                <div class="text_col col-md-5 col-sm-12 col-xs-12">
                    <div class="panel_aside">
                    <br>
                        <h4><span>OUR VISION</span></h4>
                    <p>
                        To be the leading Easter and Central African dairy &amp;beverage brand, producing high
                        quality products while enhancing shareholder value.
                    </p>
                        <h4><span>OUR MISSION</span></h4>
                    <p>
                        To secure the highest value for all stakeholders in the food value chain while
                        enriching the lives &amp; health of all consumers with the most nutritious &amp; tasty choices
                        through a wide range of dairy &amp; beverage products.
                    </p>
                        <h4><span>OUR VALUES</span></h4>
                        <ul class="list list-unstyled">
                            <li>
                                <strong><i class="fa fa-angle-right"></i> Results driven:</strong> Our focus is driven by our desire to achieve &amp; exceed intended goals.<br>
                            </li>
                            <li>  
                                <strong><i class="fa fa-angle-right"></i> Integrity:</strong> We are honest, transparent, ethical &amp; objective in everything we do.<br>
                            </li>
                            <li>  
                                <strong><i class="fa fa-angle-right"></i> Innovation:</strong> We are always challenging ourselves &amp; seek new ways of doing things (creativity).<br>
                            </li>
                            <li>  
                                <strong><i class="fa fa-angle-right"></i> Excellence:</strong> We strive to exceed our highest standards in everything we do.<br>
                            </li>
                            <li>  
                                <strong><i class="fa fa-angle-right"></i> Leadership:</strong> We should all take initiative, be proactive, be committed, demonstrate
                                ownership &amp; accountability, be visionaries, lead by example &amp; be team players.
                            </li>
                        </ul> 
                    </div>
                </div>
            </div>
            <br>
            <br>

        </div>
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

</body>

</html>
