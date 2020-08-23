<?php $this->load->view('frontend/header.php') ?>

<section class="banner_area ">
		<div class="banner_inner overlay d-flex align-items-center">
			<div class="container">
				<div class="banner_content">
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="book-trip.html">Customize a Trip</a>
					</div>
					<h2>Customize a Trip</h2>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================ Start Book a Trip Area =================-->
	<section class="trip-area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-10">
					<div class="trip-form-section">
						<h1>Customize Trip <br>
							As You Like</h1>
						<form class="trip-form-area trip-page-form trip-form text-right" id="myForm" action="mail.html" method="post">
							<!--<div class="form-group col-md-12">
								<div class="form-select">
									<select>
										<option value="1">Select Packages</option>
										<option value="1">Package 01</option>
										<option value="1">Package 02</option>
										<option value="1">Package 03</option>
										<option value="1">Package 04</option>
									</select>
								</div>
							</div> -->
							<div class="form-group col-md-12">
								<input type="text" class="form-control" id="name" name="name" placeholder="Your full name" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'To'">
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control" id="name" name="name" placeholder="Your Email" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'To'">
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control" id="name" name="name" placeholder="To" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'To'">
							</div>
							<div class="form-group col-md-12">
								<input type="email" class="form-control" id="email" name="email" placeholder="From" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'From'">
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Return" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Return'">
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Adults" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Adults'">
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Child" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Child'">
							</div>
							<div class="col-lg-12 text-center">
								<button class="primary-btn text-uppercase">Confirm</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</section>
	<?php $this->load->view('frontend/footer.php') ?>