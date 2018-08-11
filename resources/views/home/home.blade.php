<!DOCTYPE html>
<html lang="en">
<head>
	@include('home.includes.head')
</head>

<body>

@include('home.includes.header')

@include('home.pages.intro')

<main id="main">

	@include('home.pages.about')

	@include('home.pages.facts')

	@include('home.pages.services')

	<!--==========================
    Call To Action Section
    ============================-->
	{{--<section id="call-to-action">--}}
		{{--<div class="container wow fadeIn">--}}
			{{--<div class="row">--}}
				{{--<div class="col-lg-9 text-center text-lg-left">--}}
					{{--<h3 class="cta-title">Call To Action</h3>--}}
					{{--<p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
				{{--</div>--}}
				{{--<div class="col-lg-3 cta-btn-container text-center">--}}
					{{--<a class="cta-btn align-middle" href="#">Call To Action</a>--}}
				{{--</div>--}}
			{{--</div>--}}

		{{--</div>--}}
	{{--</section><!-- #call-to-action -->--}}

	@include('home.pages.portfolio')

	{{--@include('home.pages.team')--}}

	@include('home.pages.contact')

</main>

@include('home.includes.footer')

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

@include('home.includes.script')

</body>
</html>
