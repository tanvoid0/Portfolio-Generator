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
						</div>
				</div>
		</div>
</div>
