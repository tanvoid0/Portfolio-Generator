<div id="contact">
		<div class="bg-color-sky-light">
				<div class="container content-lg">
						<div class="row">
								<div class="col-sm-3 sm-margin-b-30">
										<div class="text-right sm-text-left">
												<h2 class="margin-b-0">Contact</h2>
												<p>Hire me.</p>
										</div>
								</div>
								<div class="col-sm-8 col-sm-offset-1">
										<div class="row">
												<div class="col-md-3 col-xs-6 md-margin-b-30">
														<h5>Location</h5>
														<a href="#">{{ $user->address }}</a>
												</div>
												<div class="col-md-3 col-xs-6 md-margin-b-30">
														<h5>Phone</h5>
														<a href="#">{{ $user->phone }}</a>
												</div>
												<div class="col-md-3 col-xs-6">
														<h5>Email</h5>
														<a href="mailto:{{ $user->email}}">{{ $user->email}}</a>
												</div>
												<div class="col-md-3 col-xs-6">
														<h5>Web</h5>
														<a href="{{ $user->web }}" target="_blank">{{ $user->web }}</a>
												</div>
										</div>
								</div>
							<br>

							@if($panel)
							<div class="col-sm-8 col-sm-offset-1">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-default" data-toggle="modal" data-target="#cnt-edit">Edit Contact</button>

								<!-- Modal -->
								<div class="modal fade" id="cnt-edit" tabindex="-1" role="dialog" aria-labelledby="cnt-editLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="cnt-editLabel">Edit Contact</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<form role="form" action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
												{{ csrf_field() }}
												{{ method_field('PUT') }}
												<div class="modal-body">
													<div class="form-group">
														<label for="address" class="">Address</label>
														<input type="text" class="form-control" id="address" name="address" placeholder="Address"
															   value="{{ $user->address }}">
													</div>


													<div class="form-group">
														<label for="phone" class="">Phone</label>
														<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"
															   value="{{ $user->phone }}">
													</div>



													<div class="form-group">
														<label for="email" class="">Email</label>
														<input type="email" class="form-control" id="email" name="email" placeholder="Email"
															   value="{{ $user->email }}">
													</div>

													<div class="form-group">
														<label for="web" class="">Personal Web/Blog</label>
														<input type="text" class="form-control" id="web" name="web" placeholder="Personal Web/Blog"
															   value="{{ $user->web }}">
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Save</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							@endif
						</div>
				</div>
		</div>
</div>
