<div class="nav_container_div <?php if(@$margin_top){ echo 'margin_top'; }?>">
	<div class="top_space"></div>
	<div class="container">
		<!-- Navigation -->
        <div class="navbar-brand-2 logo_main pageloaded"><a href="./" style="display"><img src="img/icon/logo.png" style=""></a></div>
		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-collapse-1">
			  
				<ul class="nav navbar-nav navbar-left">
                    <li class="<?php if($page_label == "index"){ echo "active";}?>"><a href="index"><i class="fa fa-home"></i> HOME</a></li>
					<li class="<?php if($page_label == "products"){ echo "active";}?>"><a href="products"><i class="fa fa-gift"></i> PRODUCTS</a></li>
					<li class="<?php if($page_label == "cooking"){ echo "active";}?>"><a href="cooking"><i class="fa fa-tint"></i> COOKING WITH INYANGE</a></li>
					<li class="<?php if($page_label == "about"){ echo "active";}?>"><a href="about"><i class="fa fa-info"></i> ABOUT US</a></li>
					
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<!--<li><a href="flavours">FLAVOURS</a></li>-->
					<!--<li class="<?php if($page_label == "retailers"){ echo "active";}?>"><a href="retailers">RETAILERS</a></li>-->
					<li class="<?php if($page_label == "distributors"){ echo "active";}?>"><a href="distributors"><i class="fa fa-map-marker"></i> DISTRIBUTORS</a></li>
					<li class="<?php if($page_label == "contact"){ echo "active";}?>"><a href="contact-us"><i class="fa fa-phone"></i> CONTACT US</a></li>
					<li class="<?php if($page_label == "media"){ echo "active";}?>"><a href="media"><i class="fa fa-picture-o"></i> MEDIA</a></li>
<!--						<li><a href="media">MEDIA</a></li>-->
					<li class="social facebook"><a href="https://www.facebook.com/InyangeIndustryLimited" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
					<li class="social twitter"><a href="https://twitter.com/AlwaysInyange" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	</div>
</div>
