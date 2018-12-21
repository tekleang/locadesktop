<?php 
	include_once('../header-desktop.php');
 ?>

<div id="wrapper">
	<div id="content">
<style type="text/css">
	.text h1{padding: 0 39% !important;}
</style>
		<!-- sub-banner -->
		<div class="container-fluid sub-banner">
		    <div id="myCarousel" class="carousel slide" data-ride="carousel">	
		    	<div class="item banner-img">
		    		<div class="gradientb" ></div>
		        	<img src="<?php echo $BATH_URL;?>assets/images/Condo-option31-galleries-banner-01.jpg" alt="Location-banner">
		        	<div class="img">
		         		<a href="<?php echo $BATH_URL;?>"><img src="<?php echo $BATH_URL;?>assets/images/Loca-Resident-logo.svg"></a>
		         	</div>
		         	<div class="text">
		         		<h1>MANY PICTURES OF OUR LOCA RESIDENT</h1>
		         		<p>OUR GALLERIES</p>
		         	</div>
				        
			    </div>
		    </div>
		</div>
<style type="text/css">
	#content .gallery{}
	#content .gallery .group-gallery{padding-top: 80px;padding-bottom: 80px;}
	#content .gallery .group-gallery h2{margin: 0;padding: 0 30%;text-align: center;font-size: 35px;padding-bottom: 20px;}
	#content .gallery .row{display: flex;justify-content: center;flex-wrap: wrap;}
	#content .gallery .items{padding-top: 30px;}
	#content .gallery .items .img{width: 100%;height: 100%;overflow: hidden;}
	#content .gallery .items .img img{width: 100%;height: 240px;object-fit: cover;}

#content .gallery .zoom-out{overflow: hidden;}
#content .gallery .zoom-out img{transition: 0.7s;}
#content .gallery .zoom-out:hover img{-moz-transform: scale(1);-webkit-transform: scale(1.1);transform: scale(1.1);}
</style>
		<!-- LOCA RESIDENT’S GALLERIES -->
		<div class="container-fluid gallery">
			<div class="container group-gallery">
				<h2>LOCA RESIDENT’S GALLERIES</h2>
				<div class="row">
					<div class="col-sm-4">
						<div class="items zoom-out">
							<div class="img">
								<img src="<?php echo $BATH_URL;?>assets/images/Condo-option31-GALLERIES-01.jpg">
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="items zoom-out">
							<div class="img">
								<img src="<?php echo $BATH_URL;?>assets/images/Condo-option31-GALLERIES-02.jpg">
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="items zoom-out">
							<div class="img">
								<img src="<?php echo $BATH_URL;?>assets/images/Condo-option31-GALLERIES-03.jpg">
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="items zoom-out">
							<div class="img">
								<img src="<?php echo $BATH_URL;?>assets/images/Condo-option31-GALLERIES-04.jpg">
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="items zoom-out">
							<div class="img">
								<img src="<?php echo $BATH_URL;?>assets/images/Condo-option31-GALLERIES-05.jpg">
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="items zoom-out">
							<div class="img">
								<img src="<?php echo $BATH_URL;?>assets/images/Condo-option31-GALLERIES-06.jpg">
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="items zoom-out">
							<div class="img">
								<img src="<?php echo $BATH_URL;?>assets/images/Condo-option31-GALLERIES-07.jpg">
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="items zoom-out">
							<div class="img">
								<img src="<?php echo $BATH_URL;?>assets/images/Condo-option31-GALLERIES-08.jpg">
							</div>
						</div>
					</div>
				</div>

				<!-- pagination	 -->
				<div class="pagination">
					<div class="page">
						<ul>
							<li><a href="#" class="icon prev-disabled" style="border: 1px solid #333;">
								<img src="<?php echo $BATH_URL;?>assets/images/left-arrow.svg">
							</a></li>
							<li><a href="#" class="current">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#" class="icon next" style="border: 1px solid #333;">
								<img src="<?php echo $BATH_URL;?>assets/images/right-arrow.svg">
							</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

 <?php 
	include_once('../footer-desktop.php');
 ?>