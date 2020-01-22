<?php $this->load->view('css-links'); ?>

<?php $this->load->view('header1'); ?>



<section class="contact-area section-bg p-top-100 p-bottom-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="widget atbd_widget widget-card contact-block">
					<div class="atbd_widget_title">
						<h4><span class="la la-envelope"></span> Contact Form</h4>
					</div><!-- ends: .atbd_widget_title -->
					<div class="atbdp-widget-listing-contact contact-form">
						<form id="atbdp-contact-form" class="form-vertical" role="form">
							<div class="form-group">
								<input type="text" class="form-control" id="atbdp-contact-name" placeholder="Name" required="">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="atbdp-contact-email" placeholder="Email" required="">
							</div>
							<div class="form-group">
								<textarea class="form-control" id="atbdp-contact-message" rows="6" placeholder="Message" required=""></textarea>
							</div>
							<button type="submit" class="btn btn-gradient btn-gradient-one btn-block">Send Message</button>
						</form>
					</div><!-- ends: .atbdp-widget-listing-contact -->
				</div><!-- ends: .widget -->
			</div><!-- ends: .col-lg-8 -->
			<div class="col-lg-4">
				<div class="widget atbd_widget widget-card">
					<div class="atbd_widget_title">
						<h4><span class="la la-phone"></span>Contact Info</h4>
					</div><!-- ends: .atbd_widget_title -->
					<div class="widget-body atbd_author_info_widget">


						<div class="atbd_widget_contact_info">
							<ul>
								<li>
									<span class="la la-map-marker"></span>
									<span class="atbd_info">4105 blacksmith dr.<br>
Garland Tx. 75044</span>
								</li>
								<li>
									<span class="la la-phone"></span>
									<span class="atbd_info">(123) 456-7890</span>
								</li>
								<li>
									<span class="la la-envelope"></span>
									<span class="atbd_info">support@match2marry.com</span>
								</li>
								<li>
									<span class="la la-globe"></span>
									<a href="#" class="atbd_info">www.match2marry.com</a>
								</li>
							</ul>
						</div><!-- ends: .atbd_widget_contact_info -->


						<div class="atbd_social_wrap">
							<p><a href="#"><span class="fab fa-facebook-f"></span></a></p>
							<p><a href="#"><span class="fab fa-twitter"></span></a></p>
							<p><a href="#"><span class="fab fa-google-plus-g"></span></a></p>
							<p><a href="#"><span class="fab fa-linkedin-in"></span></a></p>
							<p><a href="#"><span class="fab fa-dribbble"></span></a></p>
						</div><!-- ends: .atbd_social_wrap -->
					</div><!-- ends: .widget-body -->
				</div><!-- ends: .widget -->
			</div><!-- ends: .col-lg-4 -->
		</div>
	</div>
</section><!-- ends: .contact-area -->



<?php $this->load->view('footer'); ?>

<?php $this->load->view('js-links'); ?>

