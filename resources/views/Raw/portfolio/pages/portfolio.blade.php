<!-- portfolio -->
<div class="portfolio" id="port">
				<div class="service-head text-center">
						<h4>MY WORKS</h4>
						<h3>MY <span>PORTFOLIO</span></h3>
						<span class="border"></span>
					</div>
			<div class="portfolio-grids">
				<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
									$(document).ready(function () {
										$('#horizontalTab').easyResponsiveTabs({
											type: 'default', //Types: default, vertical, accordion           
											width: 'auto', //auto or any width like 600px
											fit: true   // 100% fit in a container
										});
									});
									
				</script>
				<div class="sap_tabs">
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						<ul class="resp-tabs-list">
							<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>ALL</span></li>
							@foreach($portfolios as $portfolio)
								<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>{{ $portfolio->category }}</span></li> 

							{{-- <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>WEB DESIGN</span></li>  --}}
							{{-- <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>MOBILE UI</span></li> 				 --}}
							{{-- <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>ILLUSTRATIONS</span></li>  --}}
							@endforeach
						</ul>				  	 
						<div class="resp-tabs-container">
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
								<div class="col-md-3 team-gd ">
									
										<a href="#portfolioModal1" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic4.jpg" alt="">
										
										</a>
									
								</div>
								<div class="col-md-3 team-gd ">
									
										<a href="#portfolioModal3" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic5.jpg" alt="">
										
										</a>
									
								</div>
								<div class="col-md-3 team-gd ">
									
										<a href="#portfolioModal2" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic9.jpg" alt="">
										
										</a>
									
								</div>
								<div class="col-md-3 team-gd ">
								
										<a href="#portfolioModal4" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic6.jpg" alt="">
										
										</a>
									
								</div>
								<div class="col-md-3 team-gd yes_marg ">
									
										<a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic10.jpg" alt="">
										
										</a>
									
								</div>
								<div class="col-md-3 team-gd yes_marg ">
									
										<a href="#portfolioModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic11.jpg" alt="">
										
										</a>
									
								</div>
								<div class="col-md-3 team-gd yes_marg ">
									
										<a href="#portfolioModal7" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic13.jpg" alt="">
										
										</a>
								
								</div>
								<div class="col-md-3 team-gd yes_marg ">
									
										<a href="#portfolioModal8" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic14.jpg" alt="">
										
										</a>
									
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
								<div class="col-md-3 team-gd ">
									<div class="thumb">
										<a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic10.jpg" alt="">
										
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd  ">
									<div class="thumb">
										<a href="#portfolioModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic11.jpg" alt="">
										
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd ">
									
										<a href="#portfolioModal7" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic13.jpg" alt="">
										
										</a>
									
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
								<div class="col-md-3 team-gd ">
									
										<a href="#portfolioModal2" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic9.jpg" alt="">
										
										</a>
								
								</div>
								<div class="col-md-3 team-gd ">
									
										<a href="#portfolioModal4" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic6.jpg" alt="">
										
										</a>
									
								</div>
								<div class="col-md-3 team-gd">
									
										<a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic10.jpg" alt="">
										
										</a>
									
								</div>
								<div class="col-md-3 team-gd">
									
										<a href="#portfolioModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic11.jpg" alt="">
									
										</a>
									
								</div>
								<div class="clearfix"></div>
							</div>
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
								<div class="col-md-3 team-gd ">
									
										<a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic10.jpg" alt="">
										
										</a>
									
								</div>
								<div class="col-md-3 team-gd">
									
										<a href="#portfolioModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic11.jpg" alt="">
										
										</a>
									
								</div>
								<div class="col-md-3 team-gd ">
									
										<a href="#portfolioModal7" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic13.jpg" alt="">
										
										</a>
									
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	<!-- //portfolio -->