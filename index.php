<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Crewe - Heart of Rail</title>
		<meta name="description" content="Landing page for Crewe - Heart of Rail campaign" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Add jQuery -->
		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous" ></script>

		<!-- Add Bootstrap -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous" ></script>

		<!-- Add LightSlider -->
		<link rel="stylesheet" href="./assets/lib/lightslider/css/lightslider.css" />
		<script type="text/javascript" src="./assets/lib/lightslider/js/lightslider.js"></script>

		<!-- Add Pushbar -->
		<link rel="stylesheet" href="./assets/lib/pushbar/css/pushbar.min.css" />
		<script type="text/javascript" src="./assets/lib/pushbar/js/pushbar.min.js"></script>

		<!-- Add Google Font Chivo -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700&display=swap" rel="stylesheet" />

		<!-- Add CSS File for site -->
		<link rel="stylesheet" href="./assets/css/base.css" />
		<script type="text/javascript" src="./assets/js/base.js"></script>
	</head>
	<body>
		
		<!-- Mobile Menu Content -->
		<div class="mobile-menu" data-pushbar-id="mobile-menu" data-pushbar-direction="right">
			<button class="border-0" data-pushbar-close>
				<img src="./assets/images/xmark-solid.svg" />
			</button>
			<div class="content">
				<div class="text-size text-center pb-3">
					<p>Text Size:</p>
					<div class="d-flex justify-content-center align-items-baseline">
						<span class="tiny pe-2 active">A</span>
						<span class="medium pe-2">A</span>
						<span class="large">A</span>
					</div>
				</div>
				<div class="links">
					<ul class="">
						<li class="text-center py-3"><a href="#">Back our Bid</a></li>
						<li class="text-center py-3"><a href="#">Latest Updates</a></li>
						<li class="text-center py-3"><a href="#">Supporters Toolkit</a></li>
					</ul>
				</div>
				<div class="logos">
					<img class="w-100 pb-3" src="./assets/images/logo-10.png" alt="Great British Railways Transiiton Team Logo" />
					<img class="w-100 pb-3" src="./assets/images/logo-1.png" alt="Cheshire East Council Logo" />
				</div>
			</div>
		</div>

		<!-- Header element containing logo and nav bar, container fixed logo section when scrolling the site -->
		<header>
			<div class="main-header container-fluid position-relative">
				<div class="logo-section row">
					<div class="col-12 col-md-6">
						<div class="logo text-center text-md-start py-4 px-5">
							<img src="./assets/images/site-logo.svg" alt="Crewe Site Logo" />
						</div>
					</div>
					<div class="d-flex justify-content-center justify-content-md-end align-items-center col-12 col-md-6 pb-3 pb-md-0">
						<div class="mobile">
							<button class="border-0" data-pushbar-target="mobile-menu">
								<img src="./assets/images/bars-solid.svg" />
							</button>
						</div>
						<div class="button py-4 px-5">
							<a class="pink-button text-decoration-none mt-0" href="#form-section">Back Crewe's Bid</a
							>
						</div>
					</div>
				</div>
				<div class="nav-section row">
					<div class="col-12 px-0">
						<div class="container py-3 px-5">
							<ul class="d-flex justify-content-center align-items-center mb-0">
								<li class="text-center"><a href="#">Back our Bid</a></li>
								<li class="text-center"><a href="#">Latest Updates</a></li>
								<li class="text-center"><a href="#">Supporters Toolkit</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sticky-header container-fluid position-fixed top-0">
				<div class="logo-section row">
					<div class="col-12 col-md-6">
						<div class="logo d-flex justify-content-between align-items-center py-4 px-5">
							<img src="./assets/images/site-logo.svg" alt="Crewe Site Logo" />
							<img src="./assets/images/logo-10.png" alt="Great British Railways Transiiton Team Logo" />
							<img src="./assets/images/logo-1.png" alt="Cheshire East Council Logo" />
						</div>
					</div>
					<div class="d-flex justify-content-end align-items-center col-12 col-md-6">
						<div class="button py-4 px-5">
							<a href="#form-section" class="pink-button text-decoration-none mt-0">Back Crewe's Bid</a>
						</div>
						<div class="text-size pe-5">
							<p>Text Size:</p>
							<div class="d-flex align-items-baseline">
								<span class="tiny pe-2 active">A</span>
								<span class="medium pe-2">A</span>
								<span class="large">A</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- Hero Banner section, section contains image and title -->
		<section class="hero-section">
			<div class="container-fluid">
				<div class="row">
					<div class="text-section d-flex justify-content-center align-items-center col-12 col-md-6 p-5">
						<div class="text p-5">
							<h1>Back Crewe’s bid to be the home of Great British Railways</h1>
						</div>
					</div>
					<div class="image-section d-flex justify-content-center align-items-center col-12 col-md-6 px-0">
						<div class="image">
							<img class="w-100 img-fluid" src="./assets/images/hero.jpg" alt="Crewe station hero image" />
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Crewe - heart of rail, section contains image and text -->
		<section class="heart-rail-section">
			<div class="container-fluid">
				<div class="row">
					<div class="image-section d-flex justify-content-center align-items-center col-12 col-md-6 p-5">
						<div class="image expandable mb-5">
							<img class="img-fluid" src="./assets/images/crewe-arial-sq.jpg" alt="Crewe areial view image"
							/>
						</div>
					</div>
					<div class="text-section d-flex justify-content-center align-items-center col-12 col-md-6 p-5">
						<div class="text">
							<h2 class="pb-4">Crewe - The Heart of Rail</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Curabitur facilisis euismod lorem, at aliquam eros interdum at.
								In eu faucibus odio. Ut quis nulla enim. Fusce eu est arcu.
								Nulla facilisi. Nullam et quam sed augue commodo semper. Mauris
								nec elementum tellus. Sed non arcu quis est malesuada accumsan
								sed iaculis nisi. Donec lacinia diam at ligula interdum, a
								facilisis augue consequat. Nam nec aliquet turpis. Proin sit
								amet sollicitudin nisl, at tempus dolor. Ut fringilla velit
								aliquet odio fringilla porta. Suspendisse id eros quis leo
								euismod tincidunt a sed odio. Sed eget mattis lorem, in vehicula
								turpis. Aliquam dignissim diam sem, nec lacinia purus varius sit
								amet.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Opportunity section, contains text and image -->
		<section class="opportunity-section">
			<div class="container-fluid">
				<div class="row">
					<div class="text-section d-flex justify-content-center align-items-center col-12 col-lg-6 p-4">
						<div class="text w-75 py-5">
							<h2>Great British Railways –</h2>
							<h2>An Exciting Opportunity for Crewe’s Future</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Curabitur facilisis euismod lorem, at aliquam eros interdum at.
								In eu faucibus odio. Ut quis nulla enim. Fusce eu est arcu.
								Nulla facilisi. Nullam et quam sed augue commodo semper. Mauris
								nec elementum tellus. Sed non arcu quis est malesuada accumsan
								sed iaculis nisi.
							</p>
							<p>
								Donec lacinia diam at ligula interdum, a facilisis augue
								consequat. Nam nec aliquet turpis. Proin sit amet sollicitudin
								nisl, at tempus dolor. Ut fringilla velit aliquet odio fringilla
								porta. Suspendisse id eros quis leo euismod tincidunt a sed
								odio. Sed eget mattis lorem, in vehicula turpis. Aliquam
								dignissim diam sem, nec lacinia purus varius sit amet.
							</p>
						</div>
					</div>
					<div class="image-section col-12 col-lg-6 px-0">
						<div class="image">
							<img class="w-100 img-fluid" src="./assets/images/hs2-render.jpg" alt="HS2 train image" />
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Supporters and Advocates section, contains carousel showing key members and sponsors -->
		<section class="supporters-advocates-section">
			<div class="container py-5">
				<div class="headings row text-center">
					<h2>Already backing Crewe’s bid….</h2>
					<h3>Supporters & Advocates</h3>
				</div>
				<div class="carousel row">
					<div class="col-12 pt-5">
						<ul id="carousel-advocates">
							<li>
								<div class="item image expandable">
									<img class="d-block w-100" src="./assets/images/pete-waterman.jpg" alt="Pete Waterman Image" />
									<div class="carousel-info d-flex justify-content-center py-5">
										<div class="text-center">
											<h4>Pete Waterman</h4>
											<p>
												Music producer, railway enthusiast and Cheshire East
												resident
											</p>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="item image expandable">
									<img class="d-block w-100" src="./assets/images/peter-graham.jpg" alt="Peter Graham Image" />
									<div class="carousel-info d-flex justify-content-center py-5">
										<div class="text-center">
											<h4>Peter Graham</h4>
											<p>
												Head of Policy & Regulatory Affairs, Freightliner Group
												Limited
											</p>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="item image expandable">
									<img class="d-block w-100" src="./assets/images/doug-kinsman.jpg" alt="Doug Kinsman Image" />
									<div class="carousel-info d-flex justify-content-center py-5">
										<div class="text-center">
											<h4>Doug Kinsman</h4>
											<p>Chair of Crewe Town Board</p>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="item image expandable">
									<img class="d-block w-100" src="./assets/images/dr-keiran-mullan.jpg" alt="Dr Kieran Mullan Image" />
									<div class="carousel-info d-flex justify-content-center py-5">
										<div class="text-center">
											<h4>Dr Kieran Mullan</h4>
											<p>MP for Crewe and Nantwich</p>
										</div>
									</div>
								</div>
							</li>
						</ul>
						<button class="position-absolute border-0" id="prevSlide"></button>
						<button class="position-absolute border-0" id="nextSlide"></button>
					</div>
				</div>
				<div class="row justify-content-center justify-content-lg-between align-items-center">
					<div class="icons d-flex justify-content-center col-12 col-md-6 col-lg-2 py-3 py-lg-0">
						<img src="./assets/images/logo-1.png" alt="Cheshire east council logo" />
					</div>
					<div class="icons d-flex justify-content-center col-12 col-md-6 col-lg-2 py-3 py-lg-0">
						<img src="./assets/images/logo-5.png" alt="Crewe town council logo" />
					</div>
					<div class="icons d-flex justify-content-center col-12 col-md-6 col-lg-2 py-3 py-lg-0">
						<img src="./assets/images/logo-9.png" alt="Crewe logo" />
					</div>
					<div class="icons d-flex justify-content-center col-12 col-md-6 col-lg-2 py-3 py-lg-0">
						<img src="./assets/images/logo-2.png" alt="Cheshire and Warrington partnership logo" />
					</div>
					<div class="icons d-flex justify-content-center col-12 col-md-6 col-lg-2 py-3 py-lg-0">
						<img src="./assets/images/logo-4.png" alt="Crewe FC logo" />
					</div>
				</div>
			</div>
		</section>

		<!-- Support section, contaisn text and a video -->
		<section class="supporter-section container">
			<div class="row mx-0 py-5">
				<div class="d-flex justify-content-start align-items-center col-12 col-md-6">
					<div class="text p-2 p-md-5">
						<h2>Here’s what some of our supporters have to say:</h2>
						<p>
							In recent weeks we have been speaking to members of the public,
							local businesses and other people who live and work in Crewe about
							why the town should be home to the new headquarters for Great
							British Railways.
						</p>
					</div>
				</div>
				<div class="video d-flex align-items-center col-12 col-md-6 text-end">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/IkatpHBi_-M?si=17HeQA3YdGh2F64v" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>
			</div>
		</section>

		<!-- Latest updates section, contains articles to show updates from site -->
		<section class="latest-updates">
			<div class="container">
				<div class="heading text-center">
					<h2>Latest updates</h2>
				</div>
				<div class="content row justify-content-between mx-0 pt-4">
					<div class="article col-12 col-md-4 image expandable pb-4 pb-md-0">
						<img class="w-100 img-fluid" src="./assets/images/crewe-arial-sq.jpg" alt="Crewe arial image" />
						<div class="article-info pt-4">
							<h4>Article title to go here</h4>
							<p><?php echo date('d.m.y'); ?></p>
							<a href="#">Read More</a>
						</div>
					</div>
					<div class="article col-md-4 image expandable pb-4 pb-md-0">
						<img class="w-100 img-fluid" src="./assets/images/avanti-train.jpg" alt="Avanti train image" />
						<div class="article-info pt-4">
							<h4>Article title to go here</h4>
							<p><?php echo date('d.m.y'); ?></p>
							<a href="#">Read More</a>
						</div>
					</div>
					<div class="article col-12 col-md-4 image expandable pb-4 pb-md-0">
						<img
							class="w-100 img-fluid"
							src="./assets/images/avanti-platform.jpg"
							alt="Avanti platform image"
						/>
						<div class="article-info pt-4">
							<h4>Article title to go here</h4>
							<p><?php echo date('d.m.y'); ?></p>
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
				<div class="text-center pt-4">
					<button class="pink-button">See all updates</button>
				</div>
			</div>
		</section>

		<!-- Form section, displays form for users to fill out and submit -->
		<section id="form-section" class="form-section">
			<div class="container">
				<div class="row mx-0">
					<div class="col-12 col-md-6">
						<div class="text">
							<h2>Drop us a message</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Curabitur facilisis euismod lorem, at aliquam eros interdum at.
								In eu faucibus odio. Ut quis nulla enim. Fusce eu est arcu.
								Nulla facilisi. Nullam et quam sed augue commodo semper.
							</p>
							<p>
								Mauris nec elementum tellus. Sed non arcu quis est malesuada
								accumsan sed iaculis nisi. Donec lacinia diam at ligula
								interdum, a facilisis augue consequat. Nam nec aliquet turpis.
								Proin sit amet sollicitudin nisl, at tempus dolor
							</p>
						</div>
					</div>
					<div class="form-component d-flex justify-content-end col-12 col-md-6">
						<form id="crewe-form" action="" method="POST">
							<div class="form-message"></div>
							<div class="form-element">
								<label for="name">Name:</label>
								<input type="text" name="name" required />
							</div>
							<div class="form-element">
								<label for="email">Email:</label>
								<input type="email" name="email" required />
							</div>
							<div class="form-element">
								<label for="organisation">Organisation (optional):</label>
								<input type="text" name="organisation" />
							</div>
							<div class="form-element">
								<label for="message">Message:</label>
								<textarea name="message" rows="4" cols="50"></textarea>
							</div>
							<div class="form-element">
								<input class="checkbox" type="checkbox" name="updates" value="" />
								<label for="updates">Tick to confirm you’re happy to receive updates</label>
							</div>
							<div class="form-element d-flex justify-content-end">
								<input class="submit pink-button" type="submit" name="submit" value="Send Message" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<!-- Footer section, displays links and other info -->
		<footer>
			<div class="container">
				<div class="heading row text-center text-md-start pt-5 pt-md-0">
					<h3 class="mb-0">&num;HeartofRail</h3>
				</div>
				<div class="footer-links row py-3 pt-0 pt-md-3">
					<div class="social-icons col-12 col-md-2 text-center text-md-start py-3 py-md-0">
						<a href="#"><img src="./assets/images/facebook-icon.svg" /></a>
						<a href="#"><img src="./assets/images/twitter-icons.svg" /></a>
					</div>
					<div class="page-links col-12 col-md-8 text-center py-3 py-md-0">
						<a class="px-4" href="#">Accessibility</a>
						<a class="px-4" href="#">Privacy & Cookie Policy</a>
					</div>
					<div class="copyright col-12 col-md-2 text-center text-md-end py-3 py-md-0">
						<p>&copy; Copyright - Built &amp; Developed by <a href="https://portfolio.dalvinderpalssoora.co.uk/" alt="Link to developer: Dalvinderpal Soora Portfolio">Dalvinderpal Soora</a></p>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>
