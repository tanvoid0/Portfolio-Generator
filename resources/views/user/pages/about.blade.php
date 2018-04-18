<div id="about">
		<div class="container content-lg">
				<div class="row">
						<div class="col-sm-3 sm-margin-b-30">
								<div class="text-right sm-text-left">
										<h2 class="margin-b-0">About</h2>
										<p>What I am all about.</p>
								</div>
						</div>

						<div class="col-sm-8 col-sm-offset-1">
							<div class="row" id="about-detail">
								<div class="margin-b-60">
                                    {{--<div class="range-field">--}}

										{{--<input type="text" id="example_id" name="example_name" value="" />--}}
                                        {{--<button id="s-btn">Push</button>--}}
                                    {{--</div>--}}

                                    {{-- <p>I'm Alex Teseira, orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
									{{-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> --}}
									@foreach ($descriptions as $description)
										<p>{{ $description->description }}</p>
									@endforeach
								</div>
							@if(count($skills) > 0)

								<!-- Progress Box -->
									@foreach ($skills as $skill)
										<div class="progress-box">
											<h5>{{ $skill->name }} <span class="color-heading pull-right">{{ $skill->percentage}}%</span></h5>
											<div class="progress">
												<div class="progress-bar bg-color-base" role="progressbar" data-width="{{$skill->percentage}}"></div>
											</div>
										</div>
									@endforeach
								@else
									<h3>No Skills Added Yet!</h3>
								@endif
								<button class="btn btn-default btn-block" id="about-btn">Edit</button>

							</div>


							<div class="row" id="about-edit">
								<div class="margin-b-60">
									 <p>I'm Alex Teseira, orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									 <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
                                <h1>Hello</h1>


                                {{--@if(count($skills) > 0)--}}

								{{--<!-- Progress Box -->--}}
									{{--@foreach ($skills as $skill)--}}
										{{--<div class="progress-box">--}}
											{{--<h5>{{ $skill->name }} <span class="color-heading pull-right">{{ $skill->percentage}}%</span></h5>--}}
											{{--<div class="progress">--}}
												{{--<div class="progress-bar bg-color-base" role="progressbar" data-width="{{$skill->percentage}}"></div>--}}
											{{--</div>--}}
										{{--</div>--}}
									{{--@endforeach--}}
								{{--@else--}}
									{{--<h3>No Skills Added Yet!</h3>--}}
								{{--@endif--}}
								<button class="btn btn-default btn-block" id="about-update">Update</button>

							</div>


						</div>
					</div>

				</div>
				<!--// end row -->
		</div>
</div>
