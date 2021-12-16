@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp
		<!-- Best Sale Area Area -->
		<!-- Footer Area -->
		<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
			<div class="footer-static-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer__widget footer__menu">
								<div class="ft__logo">
									<a href="{{route('home')}}">
										<img src="{{asset('assets')}}/images/logo/3.png" alt="logo">
									</a>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered duskam alteration variations of passages</p>
								</div>
								<div class="footer__content">
									<ul class="social__net social__net--2 d-flex justify-content-center">
									    @if ($setting->instagram !=null) <li><a href="{{$setting->instagram}}" target="_blank"><i class="bi bi-instagram"></i></a></li> @endif
										@if ($setting->facebook !=null) <li><a href="{{$setting->facebook}}" target="_blank"><i class="bi bi-facebook"></i></a></li> @endif
										@if ($setting->twitter !=null) <li><a href="{{$setting->twitter}}" target="_blank"><i class="bi bi-twitter"></i></a></li> @endif
										@if ($setting->youtube !=null) <li><a href="{{$setting->youtube}}" target="_blank"><i class="bi bi-youtube"></i></a></li> @endif
										<li><a href="#"><i class="bi bi-linkedin"></i></a></li>
										<li><a href="#"><i class="bi bi-google"></i></a></li>
									</ul>
									<ul class="mainmenu d-flex justify-content-center">
										<li><a href="index.html">Trending</a></li>
										<li><a href="index.html">Best Seller</a></li>
										<li><a href="index.html">All Product</a></li>
										<li><a href="index.html">Wishlist</a></li>
										<li><a href="index.html">Blog</a></li>
										<li><a href="index.html">Contact</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright__wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="copyright">
								<div class="copy__right__inner text-left">
									<p>Copyright <i class="fa fa-copyright"></i> <a href="https://freethemescloud.com/">Free themes Cloud.</a> All Rights Reserved</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="payment text-right">
								<img src="{{asset('assets')}}/images/icons/payment.png" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- //Footer Area -->
			<!-- JS Files -->
			
			
	<script src="{{asset('assets')}}/js/vendor/jquery-3.2.1.min.js"></script>
	<script src="{{asset('assets')}}/js/popper.min.js"></script>
	<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
	<script src="{{asset('assets')}}/js/plugins.js"></script>
	<script src="{{asset('assets')}}/js/active.js"></script>

	