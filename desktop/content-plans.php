<?php 
	include_once('../header-desktop.php');
 ?>

<div id="wrapper">
	<div id="content">

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
		         		<h1>CRAFTED FOR URBAN LIVING</h1>
		         		<p>FLOOR PLANS</p>
		         	</div>
				        
			    </div>
		    </div>
		</div>
<style type="text/css">
	#content .loca-resident{}
	#content .loca-resident .group-loca-resident{padding-top: 80px;padding-bottom: 80px;}
	#content .loca-resident .group-loca-resident h2{text-align: center;margin: 0;padding: 0 32%;font-size: 35px;text-transform: uppercase;}
	#content .loca-resident .items{overflow: hidden;padding-top: 50px;}
	#content .loca-resident .items .img{width: 100%;height: 100%;display: flex;overflow: hidden;justify-content: center;/*border: 1px solid;*/}
	#content .loca-resident .items .img img{width: 100%;height: 340px;object-fit: cover;z-index:-10;}
	#content .loca-resident .items .text{margin-top: -40px;display: flex;flex-wrap: wrap;justify-content: center;z-index:10;}
	#content .loca-resident .items .text button{width: 350px;height: 40px;border: none;background-color: rgba(0,0,0,0.3);color: #fff;}
	#content .loca-resident .items .text h3{margin: 0;text-align: center;padding: 0 26%;padding-top: 20px;font-size: 16px;}
	#content .loca-resident .items .text .price{padding-top: 15px;}
	#content .loca-resident .items .text .price button{width: 168px;height: 40px;background-color: rgba(0,0,0,0.7);color: #fff;}
</style>
		<!-- LOCA RESIDENT’S GALLERIES -->
		<div class="container-fluid loca-resident">
			<div class="container group-loca-resident">
				<h2>LOCA RESIDENT’S GALLERIES</h2>
				<div class="row">
					<div class="col-sm-6">
						<div class="items zoom-out">
							<div class="img">
								<img src="<?php echo $BATH_URL;?>assets/images/Condo-option31-FLOOR-PLAN-01.jpg">
							</div>
							<div class="text">
								<button>65 sqm</button>
								<h3>3 Bedrooms, 1 Bathroom, 1 Kitchen, 1. Waiting Room</h3>
								<div class="price">
									<button>Start from: $ 50K</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="items zoom-out">
							<div class="img">
								<img src="<?php echo $BATH_URL;?>assets/images/Condo-option31-FLOOR-PLAN-02.jpg">
							</div>
							<div class="text">
								<button>65 sqm</button>
								<h3>3 Bedrooms, 1 Bathroom, 1 Kitchen, 1. Waiting Room</h3>
								<div class="price">
									<button>Start from: $ 50K</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="items zoom-out">
							<div class="img">
								<img src="<?php echo $BATH_URL;?>assets/images/Condo-option31-FLOOR-PLAN-03.jpg">
							</div>
							<div class="text">
								<button>65 sqm</button>
								<h3>3 Bedrooms, 1 Bathroom, 1 Kitchen, 1. Waiting Room</h3>
								<div class="price">
									<button>Start from: $ 50K</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="items zoom-out">
							<div class="img">
								<img src="<?php echo $BATH_URL;?>assets/images/Condo-option31-FLOOR-PLAN-04.jpg">
							</div>
							<div class="text">
								<button>65 sqm</button>
								<h3>3 Bedrooms, 1 Bathroom, 1 Kitchen, 1. Waiting Room</h3>
								<div class="price">
									<button>Start from: $ 50K</button>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

 <?php 
	include_once('../footer-desktop.php');
 ?>