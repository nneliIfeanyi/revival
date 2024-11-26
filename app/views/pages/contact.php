<?php require APPROOT . '/views/inc/header.php'; ?>
	    
			<section class="hero-section">
				<div class="flexslider px-0">
					<ul class="slides list-unstyled mt-4">
				   	<li style="background-image: url(<?= URLROOT;?>/img/rev4.webp);">
				   		<div class="overlay"></div>
				   		<div class="container">
				   			<div class="row">
					   			<div class="col-md-8 offset-md-2 text-center">
					   				<div class="slider-text">
						   				<div class="slider-text-inner">
						   					<h1>Contact Us</h1>
 												<h2>Lets get in touch</h2>
 												
 												<a href="#msg" class="btn btn-primary btn-learn my-2">Send Message</a></p>
						   				</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  </ul>
				</div>
			</section>
	  </header>
		<main class="">

			<section id="contact" class="light-grey">
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-6 offset-md-3 text-center heading">
							<h2>Trusting in His Mercies!</h2>
          					<span>We are open Sunday to Monday</span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-md-push-8 animate-box">
							<h3>Locate Us</h3>
							<ul class="contact-info">
								<li>
									<i class="icon-location4"></i><?= $data['core']->address;?></li>
								<li>
									<i class="icon-phone3"></i><?= $data['core']->phone1;?>
								</li>
								<li>
									<i class="icon-location3"></i><a href="#"><?= $data['core']->email;?></a>
								</li>
								<li>
									<i class="icon-globe2"></i><a href="#"><?= $data['core']->website;?></a>
								</li>
							</ul>
						</div>
						<div class="col-md-8 col-md-pull-2 animate-box" id="msg">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Send Message" class="btn btn-primary w-100 btn-modify">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>


<?php require APPROOT . '/views/inc/footer.php'; ?>