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
															<img class="full-width img-responsive" src="{{ asset('img/work/'.$work->image)}}" alt="No Image">

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
																	<a href="javascript:void(0);" class="work-popup-close">

																	</a>

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

														<div class="modal fade" id="work-edit-{{ $work->id }}" tabindex="-1" role="dialog" aria-labelledby="work-edit-{{ $work->id }}Label" aria-hidden="true">
															<div class="modal-dialog" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="work-edit-{{ $work->id }}Label">Update Works</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	<form role="form" action="{{ route('work.update', $work->id) }}" method="post"  enctype="multipart/form-data">
																		{{ csrf_field() }}
																		{{ method_field('PUT') }}

																		<div class="modal-body">

																			<div class="box-body">
																				<div class="form-group">
																					<label for="title">Title</label>
																					<input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $work->title }}">
																				</div>

																				<div class="form-group">
																					<label for="image" class="form-control col-sm-4 col-form-label">Upload Project Image</label>
																					<div class="col-sm-8">
																						<input type="file" id="image" name="image" class="dropify" data-default-file="{{ asset('img/work/'.$work->image) }}" />
																					</div>
																				</div>
																				<br><br><br><br><br><br><br><br><br><br><br><br><br>

																				<div class="form-group">
																					<label for="category">Category</label>
																					<input type="text" class="form-control" id="category" name="category" placeholder="Category" value="{{ $work->category }}">
																				</div>

																				<div class="form-group">
																					<label for="description">Description</label>
																					<textarea class="form-control" id="description" name="description" placeholder="Description">{{ $work->description }}</textarea>
																				</div>

																				<div class="form-group">
																					<label for="link">Link</label>
																					<input type="url" class="form-control" id="link" name="link" placeholder="Link" value="{{ $work->link }}">
																				</div>
																			</div>

																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																			<button type="submit" class="btn btn-primary">Save changes</button>
																		</div>
																	</form>

																</div>
															</div>
														</div>
														@if($panel)
														<button type="button" class="btn btn-default"><i class="glyphicon glyphicon-pencil"  data-toggle="modal" data-target="#work-edit-{{ $work->id }}"></i></button>



														<form id="delete-form-{{ $work->id }}" method="post" action="{{ route('work.destroy', $work->id) }}" style="display: none;">
															{{ csrf_field() }}
															{{ method_field('DELETE') }}
														</form>

														<a  onclick="
																if(confirm('Are you sure, you want to delete this?')){
																event.preventDefault();
																document.getElementById('delete-form-{{ $work->id }}').submit();
																} else {
																event.preventDefault();
																}
																"><button type="button" class="btn btn-default"><i class="icon-trash"></i></button>
														</a>
														@endif
												@endforeach
											@else
												<h3>No Projects added yet</h3>
											@endif
										</div>

								</div>
								<!-- End Masonry Grid -->
						</div>

					@if($panel)
						<div class="text-center">
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#work-add"><i class="glyphicon glyphicon-plus"></i> Add Projects</button>

						</div>

					<!-- Modal -->
					<div class="modal fade" id="work-add" tabindex="-1" role="dialog" aria-labelledby="work-addLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="work-addLabel">Add Works</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form role="form" action="{{ route('work.store') }}" method="post" enctype="multipart/form-data">
									{{ csrf_field() }}
									<div class="modal-body">
										<div class="box-body">
												<div class="form-group">
													<label for="title">Title</label>
													<input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title') }}">
												</div>

												<div class="form-group">
													<label for="image">Upload Project Image</label>
													<br>
													<div class="col-sm-8">
														<input type="file" id="image" name="image" class="dropify" data-default-file="{{ old('image') }}" />
													</div>
												</div>
												<br><br><br><br><br><br><br><br><br><br><br>
												<div class="form-group">
													<label for="category">Category</label>
													<input type="text" class="form-control" id="category" name="category" placeholder="Category" value="{{ old('category') }}">
												</div>

												<div class="form-group">
													<label for="description">Description</label>
													<textarea class="form-control" id="description" name="description" placeholder="Description">{{ old('category') }}</textarea>
												</div>

												<div class="form-group">
													<label for="link">Link</label>
													<input type="url" class="form-control" id="link" name="link" placeholder="Link" value="{{ old('link') }}">
												</div>
										</div>

										<!-- /.box-body -->



									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Save changes</button>
									</div>
								</form>

							</div>
						</div>
					</div>
					@endif
				</div>
				<!--// end row -->
		</div>
</div>
