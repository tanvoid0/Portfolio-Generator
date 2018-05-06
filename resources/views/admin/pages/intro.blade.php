<!--========== SLIDER ==========-->
<div class="promo-block parallax-window" data-parallax="scroll" data-image-src="{{ asset('img/1920x1080/01.jpg')}}">
		<div class="container">
				<div class="row" id="intro">
						<div class="col-sm-6">
								<div class="promo-block-divider">
										<h1 class="promo-block-title">{{ $user->name }}</h1>
										<p class="promo-block-text">{{ $user->designation }}</p>
								</div>
								<ul class="list-inline">
										<li><a href="{{ $user->web }}" target="_blank" class="social-icons"><i class="icon-globe"></i></a></li>
										<li><a href="https://facebook.com/{{ $user->fb }}" target="_blank" class="social-icons"><i class="icon-social-facebook"></i></a></li>
								</ul>
						</div>
				</div>
            <div class="row">
                <div class="col-sm-6">
                    <button class="btn btn-default btn-block" id="intro-btn">Edit</button>
                </div>
            </div>
				<div class="row" id="intro-edit">
					<div class="col-sm-6">

						<form role="form" action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
							{{ method_field('PUT') }}
							<input type="hidden" value="{{ csrf_token() }}" name="_token">
                            <div class="promo-block-divider">
								<label for="image" class="">Update Image</label>

								<input type="file" id="image" name="image" class="dropify"
									@if($user->image != "")
										data-default-file="{{ asset('img/user/'.$user->image) }}"
									@endif
								/>

								<div class="form-group">
                                    <label for="name" class="">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                           value="{{ $user->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="designation" class="">Designation</label>
                                    <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation"
                                           value="{{ $user->designation }}">
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-default btn-block" id="intro-update">Update</button>
                                    </div>
                                </div>
                            </div>

							{{--<div class="row justify-content-center">--}}
								{{--<div class="col" align="center">--}}
									{{--<div class="card" style="">--}}
										{{--<div class="card-header">--}}
											{{--<label for="image" class="form-control col-sm-4 col-form-label">Upload your image</label>--}}
											{{--<div class="col-sm-8">--}}
												{{--<input type="file" id="image" name="image" class="dropify"--}}
													   {{--@if($user->image != "")--}}
													   {{--data-default-file="{{ asset('img/user/'.$user->image) }}"--}}
														{{--@endif--}}
												{{--/>--}}
											{{--</div>--}}
										{{--</div>--}}
										{{--<div class="card-body">--}}

											{{--<div class="form-group">--}}
												{{--<label for="name" class="">Name</label>--}}
												{{--<input type="text" class="form-control" id="name" name="name" placeholder="Name"--}}
													   {{--value="{{ $user->name }}">--}}
											{{--</div>--}}

											{{--<div class="form-group">--}}
												{{--<label for="designation" class="">Designation</label>--}}
												{{--<input type="text" class="form-control" id="designation" name="designation" placeholder="Designation"--}}
													   {{--value="{{ $user->designation }}">--}}
											{{--</div>--}}

											{{--<div class="form-group">--}}
												{{--<label for="web" class="">Personal Web/Blog</label>--}}
												{{--<input type="text" class="form-control" id="web" name="web" placeholder="Personal Web/Blog"--}}
													   {{--value="{{ $user->web }}">--}}
											{{--</div>--}}

											{{--<div class="form-group">--}}
												{{--<label for="fb" class="">FB Username</label>--}}
												{{--<input type="text" class="form-control" id="fb" name="fb" placeholder="Facebook Username"--}}
													   {{--value="{{ $user->fb }}">--}}
											{{--</div>--}}
											{{--<div class="col-sm-12">--}}
												{{--<input type="submit" class="btn btn-primary" value="Update"/>--}}
											{{--</div>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}
							{{--</div>--}}
						</form>
					</div>
				</div>
				<!--// end row -->
		</div>
</div>
<!--========== SLIDER ==========-->
