<!DOCTYPE html>
<html lang="en">

<head>
    @include('portfolio.includes.header')
</head>

<body>
{{-- <div id="page-wrapper"> --}}
	<div id="home" class="header">
		<div class="container">
			<!-- top-hedader -->
			<div class="top-header">
				<!-- /logo -->
					@include('portfolio.includes.nav');
					@include('portfolio.pages.intro');
					@include('portfolio.pages.about');
					@include('portfolio.pages.service');
					@include('portfolio.pages.experience');
					@include('portfolio.pages.portfolio');
					@include('portfolio.pages.contact');
			</div>
		</div>
	</div>

    @include('portfolio.includes.footer')
</body>

</html>
