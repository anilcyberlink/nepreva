<!-- Footer -->
<footer class="footer" style="background-image:url('{{asset('themes-assets/img/map.png')}}')">
	<!-- Footer Top -->
	<div class="footer-top ">
		<div class="container">
			<div class="row">
				<div class="col-lg-4  wow animate__fadeInUp"  data-wow-duration="1s"  data-wow-offset="50">
					<div class="text-white">
						<a href="{{url('/')}}" >
							<img src="{{asset('themes-assets/img/white-logo.png')}}" alt="" style="height:55px;">
						</a>
						<p class="mt-2">{{ $setting->welcome_title }}</p>
						<div class="share-this mt-5 d-flex">
							<p class="mr-2">
								<b class="text-white">Follow Us:</b>
							</p>
							<a href="{{$setting->facebook_link}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="{{$setting->twitter_link}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="{{$setting->instagram_link}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							<a href="{{$setting->linkedin_link}}"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>

						</div>
					</div>
				</div>

				<div class="col-lg-4  wow animate__fadeInUp"  data-wow-duration="1s"  data-wow-offset="50">
					<div class="text-white">
						<p style="font-size: 20px; color: white; font-weight:500; margin-bottom:20px;">Useful Links</p>
						<ul>
							@foreach ($navigations as $row)
								<li class="mb-2">
									<a href="{{ url('page/' . posttype_url($row->uri)) }}">{{ $row->post_type }}</a>
								</li>
							@endforeach
						</ul>
					</div>
				</div>

				<div class="col-lg-4  wow animate__fadeInUp"  data-wow-duration="1s"  data-wow-offset="50">
					<div class="text-white">
						<p style="font-size: 20px; color: white; font-weight:500; margin-bottom:20px;">Contact Us</p>
						<ul>
							<li class="mb-2 d-flex align-items-baseline">
								<i class="fa fa-map-marker mr-2"></i>
								PO Box: {{$setting->address}}
							</li>
							<li class="mb-2 d-flex align-items-baseline">
								<i class="fa fa-phone mr-2"></i>
								{{$setting->phone}}
							</li>
							<li class="mb-2 d-flex align-items-baseline">
								<i class="fa fa-phone mr-2"></i>
								{{$setting->phone2}}
							</li>
							<li class="mb-2 d-flex align-items-baseline">
								<i class="fa fa-envelope-o mr-2"></i>
								{{$setting->email_primary}}
							</li>
						</ul>
					</div>
				</div>

			</div>

		</div>
	</div>
	<!-- Copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="copyright-content">
						<!-- Copyright Text -->
						<p>© Copyright <a href="#">{{ $setting->copyright_text }}</a>. Design &amp; Development By <a target="_blank" href="http://cyberlink.com.np">Cyberlink Pvt. Ltd.</a></p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Copyright -->
</footer>

<!-- Jquery JS -->
<script src="{{asset('themes-assets/js/jquery.min.js')}}"></script>
<script src="{{asset('themes-assets/js/jquery-migrate-3.0.0.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('themes-assets/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('themes-assets/js/bootstrap.min.js')}}"></script>
<!-- Modernizr JS -->
<script src="{{asset('themes-assets/js/modernizr.min.js')}}"></script>
<!-- ScrollUp JS -->
<script src="{{asset('themes-assets/js/scrollup.js')}}"></script>
<!-- FacnyBox JS -->
<script src="{{asset('themes-assets/js/jquery-fancybox.min.js')}}"></script>

<!-- Slick Nav JS -->
<script src="{{asset('themes-assets/js/slicknav.min.js')}}"></script>
<!-- Slick Slider JS -->
<script src="{{asset('themes-assets/js/owl-carousel.min.js')}}"></script>
<!-- Easing JS -->
<!-- Magnipic Popup JS -->
<script src="{{asset('themes-assets/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('themes-assets/js/wow.js')}}"></script>
<script src="{{asset('themes-assets/js/easing.js')}}"></script>
<!-- Active JS -->
<script src="{{asset('themes-assets/js/app.js')}}"></script>
</body>

</html>