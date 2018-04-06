<!--========== SLIDER ==========-->
<div class="promo-block parallax-window" data-parallax="scroll" data-image-src="{{ asset('img/1920x1080/01.jpg')}}">
		<div class="container">
				<div class="row">
						<div class="col-sm-6">
								<div class="promo-block-divider">
										<h1 class="promo-block-title">{{ $user->name }}</h1>
										<p class="promo-block-text">{{ $user->designation }}</p>
								</div>
								<ul class="list-inline">
										<li><a href="{{ $user->web }}" target="_blank" class="social-icons"><i class="icon-globe"></i></a></li>
										<li><a href="https://facebook.com/{{ $user->fb }}" target="_blank" class="social-icons"><i class="icon-social-facebook"></i></a></li>
										{{--<li><a href="{{ $user->twitter }}" target="_blank" class="social-icons"><i class="icon-social-twitter"></i></a></li>--}}
										{{--<li><a href="#" class="social-icons"><i class="icon-social-dribbble"></i></a></li>--}}
										{{--<li><a href="#" class="social-icons"><i class="icon-social-behance"></i></a></li>--}}
										{{--<li><a href="#" class="social-icons"><i class="icon-social-linkedin"></i></a></li>--}}
								</ul>
						</div>
				</div>
				<!--// end row -->
		</div>
</div>
<!--========== SLIDER ==========-->
