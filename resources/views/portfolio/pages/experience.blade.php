<div id="experience">
		<div class="bg-color-sky-light" data-auto-height="true">
				<div class="container content-lg">
						<div class="row">
								<div class="col-sm-3 sm-margin-b-30">
										<div class="text-right sm-text-left">
												<h2 class="margin-b-0">Experience</h2>
												<p>Batman would be jealous.</p>
											{{--<button class="btn btn-primary sweet-1" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);">Try It</button>--}}
											{{--<button class="btn btn-primary sweet-2" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-2']);">Try It</button>--}}
											{{--<button class="btn btn-primary sweet-3" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-3']);">Try It</button>--}}
											{{--<button class="btn btn-primary sweet-4" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-4']);">Try It</button>--}}
											{{--<button class="btn btn-primary sweet-5" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-5']);">Try It</button>--}}

											{{--@php($carbon = new Carbon())--}}
												{{--<p>{{ Carbon::now()}}</p>--}}
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
																				<h5>{{$experience->start_year}} - {{$experience->end_year}}</h5>
																				<p class="margin-b-5">{{ $experience->company}}</p>
																		</div>

																	@if($panel)
																	<button type="button" class="btn btn-default"><i class="glyphicon glyphicon-pencil"  data-toggle="modal" data-target="#exp-edit-{{ $experience->id }}"></i></button>

																	<div class="modal fade" id="exp-edit-{{ $experience->id }}" tabindex="-1" role="dialog" aria-labelledby="exp-edit-{{ $experience->id }}Label" aria-hidden="true">
																		<div class="modal-dialog" role="document">
																			<div class="modal-content">
																				<div class="modal-header">
																					<h5 class="modal-title" id="exp-edit-{{ $experience->id }}Label">Edit Experience</h5>
																					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																						<span aria-hidden="true">&times;</span>
																					</button>
																				</div>
																				<form role="form" action="{{ route('experience.update', $experience->id) }}" method="post">
																					{{ csrf_field() }}
																					{{ method_field('PUT') }}

																					<div class="modal-body">
																						<div class="box-body">
																								<div class="form-group">
																									<label for="role">Role</label>
																									<input type="text" class="form-control" id="role" name="role" placeholder="Role" value="{{ $experience->role }}">
																								</div>

																								<div class="form-group">
																									<label for="company">Company</label>
																									<input type="text" class="form-control" id="company" name="company" placeholder="Company" value="{{ $experience->company }}">
																								</div>


																								<div class="form-group">
																									<label for="description">Description</label>
																									<textarea class="form-control" maxlength="30" id="description" name="description" placeholder="Description">{{ $experience->description }}</textarea>
																								</div>

																								<div class="form-group">
																									<label for="start_year">Start Year</label>
																									<select  class="form-control" name="start_year" id="start_year" >
																										@for($i= 2018; $i >=1950; $i--)
																											<option value="{{ $i }}"
																												@if($i == $experience->start_year)
																													selected
																												@endif
																											>{{ $i }}</option>
																										@endfor
																									</select>
																								</div>

																								<div class="form-group">
																									<label for="end_year">End Year</label>
																									<select  class="form-control" name="end_year" id="end_year" >
																										@for($i= 2018; $i >=1950; $i--)
																											<option value="{{ $i }}"
																												@if($i == $experience->end_year)
																													selected
																												@endif
																											>{{ $i }}</option>
																										@endfor
																									</select>
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

																		<form id="delete-form-{{ $experience->id }}" method="post" action="{{ route('experience.destroy', $experience->id) }}" style="display: none;">
																			{{ csrf_field() }}
																			{{ method_field('DELETE') }}
																		</form>

																	<a  onclick="
																				if(confirm('Are you sure, you want to delete this?')){
																				event.preventDefault();
																				document.getElementById('delete-form-{{ $experience->id }}').submit();
																				} else {
																				event.preventDefault();
																				}
																				"><button class="btn btn-default"><i class="icon-trash"></i></button>
																			</a>

																	@endif
																</div>
														</div>
											@endforeach
										@else
											<h3>No Experience Added Yet!</h3>
										@endif

									</div>
										<!--// end row -->
									@if($panel)
									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#exp-add"><i class="glyphicon glyphicon-plus"></i> Add Experience</button>
									<!-- Modal -->
									<div class="modal fade" id="exp-add" tabindex="-1" role="dialog" aria-labelledby="exp-addLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exp-addLabel">Add Experience</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<form role="form" action="{{ route('experience.store') }}" method="post">
													{{ csrf_field() }}
													<div class="modal-body">
															<div class="box-body">
																	<div class="form-group">
																		<label for="role">Role</label>
																		<input type="text" class="form-control" id="role" name="role" placeholder="Role" value="{{ old('role') }}">
																	</div>

																	<div class="form-group">
																		<label for="company">Company</label>
																		<input type="text" class="form-control" id="company" name="company" placeholder="Company" value="{{ old('company') }}">
																	</div>


																	<div class="form-group">
																		<label for="description">Description</label>
																		<textarea class="form-control" id="description" maxlength="30" name="description" placeholder="Description">{{ old('description') }}</textarea>
																	</div>

																	<div class="form-group">
																		<label for="start_year">Start Year</label>
																		<select  class="form-control" name="start_year" id="start_year" >
																			@for($i= 2018; $i >=1950; $i--)
																				<option value="{{ $i }}">{{ $i }}</option>
																			@endfor
																		</select>
																	</div>

																	<div class="form-group">
																		<label for="end_year">End Year</label>
																		<select  class="form-control" name="end_year" id="end_year" >
																			@for($i= 2018; $i >=1950; $i--)
																				<option value="{{ $i }}">{{ $i }}</option>
																			@endfor
																		</select>																	</div>
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
							{{--<div class="row">--}}
								{{--<button class="btn btn-info" id="btn-exp-add">Add</button>--}}
								{{--<button class="btn btn-success" id="btn-exp-edit">Edit</button>--}}

							{{--</div>--}}
						</div>
						<!--// end row -->
				</div>
		</div>
</div>
