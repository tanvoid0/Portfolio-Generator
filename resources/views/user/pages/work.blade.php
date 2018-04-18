<div id="work">
		<div class="container content-lg">
				<div class="row">
						<div class="col-sm-3 sm-margin-b-30">
								<div class="text-right sm-text-left">
										<h2 class="margin-b-0">Works</h2>
										<p>I build the real value.</p>
								</div>
						</div>
						<div class="col-sm-8 col-sm-offset-1">
								<!-- Masonry Grid -->
								<div class="masonry-grid row row-space-2">
										<div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
											@if(count($works) > 0)
												@foreach($works as $work)
													<div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8 margin-b-4">
													<!-- Work -->
													<div class="work work-popup-trigger">
														<div class="work-overlay">
															<img class="full-width img-responsive" src="{{ asset('img/work/'.$work->image)}}" alt="work Image">
														</div>
														<div class="work-popup-overlay">
															<div class="work-popup-content">
																<a href="javascript:void(0);" class="work-popup-close">Hide</a>
																<div class="margin-b-30">
																	<h3 class="margin-b-5">{{ $work->tiltle }}</h3>
																	<span>{{ $work->title }}</span>
																</div>
																<div class="row">
																	<div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
																		<div class="margin-t-10 sm-margin-t-0">
																			<p>{{ $work->description }}</p>
																			{{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
																			{{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>--}}
																			{{--<ul class="list-inline work-popup-tag">--}}
																			{{--<li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>--}}
																			{{--<li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>--}}
																			{{--<li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">work</a></li>--}}
																			{{--</ul>--}}
																		</div>
																	</div>
																	{{--<div class="col-sm-4">--}}
																	{{--<div class="margin-t-10 sm-margin-t-0">--}}
																	{{--<p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>--}}
																	{{--<p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>--}}
																	{{--<p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>--}}
																	{{--<p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>--}}
																	{{--</div>--}}
																	{{--</div>--}}
																</div>
															</div>
														</div>
													</div>
													<!-- End Work -->
												@endforeach
											@else
												<h3>No Projects added yet</h3>
											@endif
										</div>

								</div>
								<!-- End Masonry Grid -->
						</div>
				</div>
				<!--// end row -->
		</div>
</div>
