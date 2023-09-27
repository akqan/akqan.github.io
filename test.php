<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		body, html, .main {
		    height: 100%;
		}

		section {
		    min-height: 100%;
		}
	</style>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {
                // Prevent default anchor click behavior
                event.preventDefault();
                // Store hash
                var hash = this.hash;
                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            });
        });
	</script>
</head>
<body>
	<a href="#section2">Click Me to Smooth Scroll to Section 2 Below</a>

	<div class="main">
	  <section></section>
	</div>

	<div class="main" id="section2">
	  <section style="background-color:blue"></section>
	</div>




							<h2 class="h2">Fleet</h2>

							<!-- Fleet -->
							<section class="tiles">
								<article class="style4">
									<span class="image">
										<img src="images/other-1-720x480.jpg" alt="" />
									</span>
									<a href="fleet.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p>price from: <strong> $ 140.00</strong> per weekend</p>

										<p>
											<i class="fa fa-user"></i> 5 &nbsp;&nbsp;
											<i class="fa fa-briefcase"></i> 4 &nbsp;&nbsp;
											<i class="fa fa-sign-out"></i> 4 &nbsp;&nbsp;
											<i class="fa fa-cog"></i> A
										</p>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/other-2-720x480.jpg" alt="" />
									</span>
									<a href="fleet.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p>price from: <strong> $ 140.00</strong> per weekend</p>

										<p>
											<i class="fa fa-user"></i> 5 &nbsp;&nbsp;
											<i class="fa fa-briefcase"></i> 4 &nbsp;&nbsp;
											<i class="fa fa-sign-out"></i> 4 &nbsp;&nbsp;
											<i class="fa fa-cog"></i> A
										</p>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/other-3-720x480.jpg" alt="" />
									</span>
									<a href="fleet.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p>price from: <strong> $ 140.00</strong> per weekend</p>

										<p>
											<i class="fa fa-user"></i> 5 &nbsp;&nbsp;
											<i class="fa fa-briefcase"></i> 4 &nbsp;&nbsp;
											<i class="fa fa-sign-out"></i> 4 &nbsp;&nbsp;
											<i class="fa fa-cog"></i> A
										</p>
									</a>
								</article>
							</section>

							<p class="text-center"><a href="fleet.php">View Fleet &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

							<br>

							<h2 class="h2">Blog</h2>
							
							<div class="row">
								<div class="col-sm-4 text-center">
									<img src="images/blog-1-720x480.jpg" class="img-fluid" alt="" />

									<h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

									<p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
								</div>

								<div class="col-sm-4 text-center">
									<img src="images/blog-2-720x480.jpg" class="img-fluid" alt="" />

									<h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

									<p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
								</div>

								<div class="col-sm-4 text-center">
									<img src="images/blog-3-720x480.jpg" class="img-fluid" alt="" />

									<h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

									<p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
								</div>
							</div>

							<p class="text-center"><a href="blog.php">Read More &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

							<br>

							<h2 class="h2">Testimonials</h2>
							
							<div class="row">
								<div class="col-sm-6 text-center">
									<p class="m-n"><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt delectus mollitia, debitis architecto recusandae? Quidem ipsa, quo, labore minima enim similique, delectus ullam non laboriosam laborum distinctio repellat quas deserunt voluptas reprehenderit dignissimos voluptatum deleniti saepe. Facere expedita autem quos."</em></p>

									<p><strong> - John Doe</strong></p>
								</div>

								<div class="col-sm-6 text-center">
									<p class="m-n"><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt delectus mollitia, debitis architecto recusandae? Quidem ipsa, quo, labore minima enim similique, delectus ullam non laboriosam laborum distinctio repellat quas deserunt voluptas reprehenderit dignissimos voluptatum deleniti saepe. Facere expedita autem quos."</em></p>

									<p><strong>- John Doe</strong> </p>
								</div>
							</div>

							<p class="text-center"><a href="testimonials.php">Read More &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>
</body>
</html>

							<section>
								<h2>Contact Us</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>

										<div class="field half">
											<input type="text" name="email" id="email" placeholder="Email" />
										</div>

										<div class="field">
											<input type="text" name="subject" id="subject" placeholder="subject" />
										</div>

										<div class="field">
											<textarea name="message" id="message" rows="3" placeholder="Notes"></textarea>
										</div>

										<div class="field text-right">
											<label>&nbsp;</label>

											<ul class="actions">
												<li><input type="submit" value="Send Message" class="primary" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>

							<h2 class="h2">Pakej Kelas Yang Disediakan</h2>

							<!-- Offers -->
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/other-1-720x480.jpg" alt="" />
									</span>
									<a href="offers.php">
										<h2>Kelas Talaqqi Musyafahah Dewasa</h2>
										
										<p>Harga dari: <strong> RM 89.00 </strong> sebulan</p>

										<div class="content">
											<p>Pakej biasa dan pakej penuh.</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/other-2-720x480.jpg" alt="" />
									</span>
									<a href="offers.php">
										<h2>Kelas Talaqqi Musyafahah Kanak-Kanak</h2>
										
										<p>Harga dari: <strong> RM 69.00 </strong> sebulan</p>

										<div class="content">
											<p>Pakej biasa dan pakej penuh.</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/other-3-720x480.jpg" alt="" />
									</span>
									<a href="offers.php">
										<h2>Kelas-Kelas Ekslusif</h2>
										
										<p>Harga dari: <strong> RM 39.00 </strong> sebulan</p>

										<div class="content">
											<p>Kelas Bahasa Arab, Fardu Ain dan Tajwid.</p>
										</div>
									</a>
								</article>
							</section>