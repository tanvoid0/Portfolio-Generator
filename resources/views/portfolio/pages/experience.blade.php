<div id="experience">
		<div class="bg-color-sky-light" data-auto-height="true">
				<div class="container content-lg">
						<div class="row">
								<div class="col-sm-3 sm-margin-b-30">
										<div class="text-right sm-text-left">
												<h2 class="margin-b-0">Experience</h2>
												<p>Batman would be jealous.</p>
										</div>
								</div>
								<div class="col-sm-8 col-sm-offset-1">

									<div class="row row-space-2 margin-b-4">
										@if(count($experiences) > 0)

											@foreach ($experiences as $experience)
														<div class="col-md-4 md-margin-b-4">
																<div class="service" data-height="height">
																		<div class="service-element">
																				{{--<i class="service-icon icon-chemistry"></i>--}}
																		</div>
																		<div class="service-info">
																				<h3>{{ $experience->role }}</h3>
																				<p class="margin-b-5">{{ $experience->description}}</p>
																		</div>
																		<a href="#" class="content-wrapper-link"></a>
																</div>
														</div>
											@endforeach
										@else
											<h3>No Experience Added Yet!</h3>
										@endif

									</div>
										<!--// end row -->

								</div>
						</div>
						<!--// end row -->
				</div>
		</div>
</div>
