<!-- /header -->
<div class="footer" id="contact">
	<div class="container">
		<div class="service-head one text-center">
			<h4>CONTACT ME</h4>
			<h3>GET <span>IN TOUCH WITH ME</span></h3>
			<span class="border two"></span>
		</div>
		<div class="mail_us">
			<div class="col-md-6 mail_left">
				<div class="contact-grid1-left">
					<div class="contact-grid1-left1">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						<h4>Contact By Email</h4>
						<ul>
							<li>Mail1:<a href="{{ $user->email1 }}"> {{ $user->email1 }}</a>"</li>
							<li>Mail2:<a href="{{ $user->email2 }}"> {{ $user->email2 }}</a>"</li>

							<!-- <li>Mail1: <a href="mailto:info@example.com">info@example1.com</a></li> -->
							<!-- <li>Mail2: <a href="mailto:info@example.com">info@example2.com</a></li> -->
						</ul>
					</div>
				</div>
					<div class="contact-grid1-left">
						<div class="contact-grid1-left1">
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							<h4>Contact By Phone</h4>
							<ul>
								<li>Phone: {{ $user->phone1 }}</li>
								<li>Secondary Phone: {{ $user->phone2 }}</li>
							</ul>
						</div>
					</div>
					<div class="contact-grid1-left">
						<div class="contact-grid1-left1">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							<h4>Looking For Address</h4>
							<ul>
								<li>Address: {{ $user->address }}</li>
								<!-- <li>Address: General Pvt 66, Dong Da</li> -->
								<!-- <li>Hanoi, Vietnam.</li> -->
							</ul>
						</div>
					</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-6 mail_right">
				<form action="#" method="post">
					<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="text" name="Mobile number" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
					<textarea name="Message..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="submit" value="Send">
					
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="copy_right text-center">
			<p>&copy; 2016 Preface . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts.</a></p>
			 <ul class="social-icons two">
							<li><a href="#"> </a></li>
							<li><a href="facebook.com/{{ $user->fb }}" class="fb"> </a></li>
							<li><a href="twitter.com/{{ $user->twitter }}" class="in"> </a></li>
							<li><a href="instagram.com/{{ $user->instagram }}" class="dott"> </a></li>
						</ul>
		</div>
	</div>
</div>