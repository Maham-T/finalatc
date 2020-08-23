	<!--================  Start Footer Area =================-->
	<footer class="footer-area">
		<div class="footer_top section_gap_top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h5 class="footer_title">About Agency</h5>
							<p class="about-text">The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point where images and videos are used more to </p>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h5 class="footer_title">Navigation Links</h5>
							<div class="row">
								<div class="col-5">
									<ul class="list">
										<li><a href="#">Home</a></li>
										<li><a href="#">Features</a></li>
										<li><a href="#">Services</a></li>
										<li><a href="#">Portfolio</a></li>
									</ul>
								</div>
								<div class="col-5">
									<ul class="list">
										<li><a href="#">Team</a></li>
										<li><a href="#">Pricing</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">contact</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h5>Newsletter</h5>
							<p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>
							<div class="footer-newsletter" id="mc_embed_signup">	
								<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
								 method="get" class="form-inline">
									
									<div class="info"></div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget mail-chimp">
							<h5 class="mb-20">Instragram Feed</h5>
							<ul class="instafeed d-flex flex-wrap">
								<li><img src="assets/frontend/img/i1.jpg" alt=""></li>
								<li><img src="assets/frontend/img/i2.jpg" alt=""></li>
								<li><img src="assets/frontend/img/i3.jpg" alt=""></li>
								<li><img src="assets/frontend/img/i4.jpg" alt=""></li>
								<li><img src="assets/frontend/img/i5.jpg" alt=""></li>
								<li><img src="assets/frontend/img/i6.jpg" alt=""></li>
								<li><img src="assets/frontend/img/i7.jpg" alt=""></li>
								<li><img src="assets/frontend/img/i8.jpg" alt=""></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
					</div>
					<div class="col-lg-6 col-md-12 text-right">
						<div class="social-icons">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
        
        
<button class="open-button" onclick="openForm()"><i class="fa fa-comments-o fa-5" aria-hidden="true"></i> Chat</button>

<div class="chat-popup" id="myForm" style="z-index: 99999 !important;background:#fff;">
  
  <h3 class="chatlabel">Chat</h3>
  <div id="chatmsg" class="chatmsg"  style="z-index: 99999 !important;"></div>
  <form action="javascript:void();" class="form-container"  style="z-index: 99999 !important;">
    
    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" id="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
  
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

$(document).ready(function() {

	$(".btn").on('click',function(e){
		if($("#msg").val()=="")
		{
			return;
		}
	   $("#chatmsg").append("You:"+$("#msg").val()+"<br>");
	   sendReceive($("#msg").val());
	   $("#msg").val("");
	});
});

function sendReceive(msg)
{
	$.post( "http://localhost/finalatc/chatbotfront/get_chat_data", { msg: msg })
	  .done(function( data ) {
		//alert( "Data Loaded: " + data );
		var len = $("#chatmsg").html().length;
		if(len>400)
		{
		   $("#chatmsg").html( $("#chatmsg").html().substring(len-200, len-1));
		}
		$("#chatmsg").append(data+"<br>");
	  }).fail(function( data ) {
		alert( "Data Loaded Fail");
	  });
}
</script>



	</footer>
	<!--================ End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/frontend/js/jquery-3.2.1.min.js"></script>
	<script src="assets/frontend/js/popper.js"></script>
	<script src="assets/frontend/js/bootstrap.min.js"></script>
	<script src="assets/frontend/js/stellar.js"></script>
	<script src="assets/frontend/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/frontend/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="assets/frontend/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="assets/frontend/js/owl-carousel-thumb.min.js"></script>
	<script src="assets/frontend/js/jquery.ajaxchimp.min.js"></script>
	<script src="assets/frontend/js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	
	<script src="assets/frontend/js/gmaps.min.js"></script>
	<script src="assets/frontend/js/theme.js"></script>
</body>

</html>