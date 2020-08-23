
<?php $this->load->view('frontend/header.php') ?>

<!--================Home Banner Area =================-->
<section class="banner_area ">
		<div class="banner_inner overlay d-flex align-items-center">
			<div class="container">
				<div class="banner_content">
					<div class="page_link">
						<a href="">Home</a>
						<a href="">Packages</a>
					</div>
					<h2>Trip Packages</h2>
				</div>
			</div>
		</div>
	</section>

<!--================ Start Trip Package Area =================-->
	<section class="package-area section_gap_top">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="ol-lg-12">
					<div class="main_title">
						<p>We’re Offering these Trip Packages</p>
						<h1>Trips Packages</h1>
						<span class="title-widget-bg"></span>
					</div>
				</div>
			</div>
			<div class="cart-view">
            <a href="<?php echo base_url('cart'); ?>" title="View Cart"><i  class="fa fas shopping-cart"></i>></i> (<?php echo ($this->cart->total_items() > 0)?$this->cart->total_items().' Items':'Empty'; ?>)</a>
             </div>

			
			<div class="row">
				 <?php if (!empty($tours)) {



                     foreach ($tours as $t) {?>
				<div class="col-lg-4 col-md-6">
					<div class="single-package">
						<div class="thumb">
							<img class="img-fluid" src="<?php echo base_url('public/uploads/tours/'.$t['image'])?>" alt="image">								
						</div>
						<p class="date"><span><?php echo $t["date"]?></span> <br><?php echo $t["month"]?></p>
						<div class="meta-top d-flex">
							<p><span class="fa fa-location-arrow"></span><?php echo $t["title"]?></p>
							<p class="ml-20"><span class="fa fa-calendar"></span><?php echo $t["day_nights"]?></p>
						</div>
						<h4><?php echo $t["title"]?></h4>
						<p>
							Don't waste time to explore the beauty of Pakistan. Its Just like Heaven On earth.Join With Us to Explore More</p><a href="<?php echo base_url('packagedetail/details/'.$t['id']); ?>" class="primary-btn mb-40">read more</a>
							
						</p>
						
						
						 <a href="<?php echo base_url('packages/add/'.$t['id']); ?>" class="primary-btn mb-40"><strong>Book Now</strong></a>
						 <button style="margin-left: 80px" class="btn btn-primary "><strong>Rs <?php echo $t["price"]?></strong></button>
					</div>
				</div>
				  <?php
                     }
                       }
                       
                    else  { ?>
                 
                  
                    <div class="row">No packages available for now</div>
                      
                    
                    <?php
                } ?>
				
			</div>
			
		</div>	
	</section>
	<!--================ End Trip Package Area =================-->

	<!--================ Start Popular Places Area =================-->

	<!--================ End Popular Places Area =================-->

	<!--================ Start Feature Area =================-->

	<!--================ End Feature Area =================-->

	<!--================ Start CTA Area =================-->
	
	<!--================ End CTA Area =================-->


	
	

	<?php $this->load->view('frontend/footer.php') ?>