<!--top-nav-->
					<div class="top-nav">
					<div class="navigation">
					<div class="logo">
						<h1><a href="{{ route('index',$user->username)}}"><span>{{ $user->username[0]}}</span>{{ substr($user->username, 1) }}</a></h1>
					</div>
					<div class="navigation-right">
						<span class="menu"><img src="images/menu.png" alt=" " /></span>
						<nav class="link-effect-3" id="link-effect-3">
							<ul class="nav1 nav nav-wil">
								<li class="active"><a data-hover="Home" href="index.html">Home</a></li>
								<li><a class="scroll" data-hover="About" href="#about">About</a></li>
								<li><a class="scroll" data-hover="Services" href="#services" >Services</a></li>
								<li><a class="scroll" data-hover="Experience" href="#work">Experience</a></li>
								<li><a class="scroll" data-hover="Portfolio" href="#port">Portfolio</a></li>
								<!-- <li><a class="scroll" data-hover="Blog" href="#blogs">Blog</a></li> -->
								<li><a class="scroll" data-hover="Contact" href="#contact">Contact</a></li>
							</ul>
						</nav>
							<!-- script-for-menu -->
								<script>
								   $( "span.menu" ).click(function() {
									 $( "ul.nav1" ).slideToggle( 300, function() {
									 // Animation complete.
									  });
									 });
								</script>
							<!-- /script-for-menu -->
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- /top-hedader -->
				</div>
