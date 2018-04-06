<div class="banner-info">
				<div class="col-md-7 header-right">
					<h1>Hi !</h1>
					<h6>UX & UI DESIGNER</h6>
					<ul class="address">
					
					<li>
							<ul class="address-text">
								<li><b>NAME</b></li>
								<li>Name{{-- I'M <?php echo $user['name']; ?> --}}</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>D.O.B</b></li>
								<li>DOB{{-- <?php echo Date('d-m-Y', strtotime($user['dob'])) ; ?> --}}</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>PHONE </b></li>
								<li>Phone1{{-- <?php echo $user['phone1']; ?> --}}</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>ADDRESS </b></li>
								<li>addrss{{-- <?php echo $user['address']; ?> --}}</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>E-MAIL </b></li>
								<li>email{{-- <?php echo "<a href='". $user['email1']. "'> ".$user['email1']."</a>"; ?> --}}</li>
								<!-- <li><a href="mailto:example@mail.com"> mail@example.com</a></li> -->
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>WEBSITE </b></li>
								<li>{{-- <?php echo "<a href='". $user['web']. "'> ".$user['web']."</a>"; ?> --}} web link</li>

							</ul>
						</li>
						
					</ul>
				</div>
				<div class="col-md-5 header-left">
					{{-- <?php
						$img = "data:image/jpeg;base64,".$user['image'];
					?> --}}
					<img src="images/img1.jpg" alt="">
				</div>
				<div class="clearfix"> </div>
						
		      </div>