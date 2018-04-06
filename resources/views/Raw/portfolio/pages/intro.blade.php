<div class="banner-info">
				<div class="col-md-7 header-right">
					<h1>Hi !</h1>
					<h6>{{ $user->designation }}</h6>
					<ul class="address">

					<li>
							<ul class="address-text">
								<li><b>NAME</b></li>
								<li>I'M {{ $user->name }}</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>D.O.B</b></li>
								<li>{{ $user->dob }}</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>PHONE </b></li>
								<li>{{ $user->phone1 }}</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>ADDRESS </b></li>
								<li>{{ $user->address }}</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>E-MAIL </b></li>
								<li><a href="{{ $user->email }}">{{ $user->email }}</a></li>

							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>WEBSITE </b></li>
								<li><a href="{{ $user->web }}">{{ $user->web }}</li>

							</ul>
						</li>

					</ul>
				</div>
				<div class="col-md-5 header-left">
					<?php
						// $img = "data:image/jpeg;base64,".$user['image'];
					?>
					<img src="{{ asset('images/'.$user->image_name) }}" alt="">
				</div>
				<div class="clearfix"> </div>

		      </div>
