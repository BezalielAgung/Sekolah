<!-- /*
* Template Name: Blogy
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="{{asset("assets/fonts/icomoon/style.css")}}">
	<link rel="stylesheet" href="{{asset("assets/fonts/flaticon/font/flaticon.css")}}">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel="stylesheet" href="{{asset("assets/css/tiny-slider.css")}}">
	<link rel="stylesheet" href="{{asset("assets/css/aos.css")}}">
	<link rel="stylesheet" href="{{asset("assets/css/glightbox.min.css")}}">
	<link rel="stylesheet" href="{{asset("assets/css/style.css")}}">

	<link rel="stylesheet" href="{{asset("assets/css/flatpickr.min.css")}}">


	<title>Blogy &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-2">
							<a href="index.html" class="logo m-0 float-start">Blogy<span class="text-primary">.</span></a>
						</div>
						<div class="col-8 text-center">
							<form action="#" class="search-form d-inline-block d-lg-none">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="bi-search"></span>
							</form>

							<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
								<li class="active"><a href="index.html">Home</a></li>
								<li class="has-children">
									<a href="category.html">Pages</a>
									<ul class="dropdown">
										<li><a href="search-result.html">Search Result</a></li>
										<li><a href="blog.html">Blog</a></li>
										<li><a href="single.html">Blog Single</a></li>
										<li><a href="category.html">Category</a></li>
										<li><a href="about.html">About</a></li>
										<li><a href="contact.html">Contact Us</a></li>
										<li><a href="#">Menu One</a></li>
										<li><a href="#">Menu Two</a></li>
										<li class="has-children">
											<a href="#">Dropdown</a>
											<ul class="dropdown">
												<li><a href="#">Sub Menu One</a></li>
												<li><a href="#">Sub Menu Two</a></li>
												<li><a href="#">Sub Menu Three</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="category.html">About Us</a></li>
								<li><a href="category.html">Contact</a></li>
							</ul>
						</div>
						<div class="col-2 text-end">
							<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
								<span></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<!-- Start retroy layout blog posts -->
	{{-- <section class="section bg-light">
		<div class="container">
			<div class="row align-items-stretch retro-layout">
				<div class="col-md-4">
					<a href="single.html" class="h-entry mb-30 v-height gradient">

						<div class="featured-img" style="background-image: url('images/img_2_horizontal.jpg');"></div>

						<div class="text">
							<span class="date">Apr. 14th, 2022</span>
							<h2>AI can now kill those annoying cookie pop-ups</h2>
						</div>
					</a>
					<a href="single.html" class="h-entry v-height gradient">

						<div class="featured-img" style="background-image: url('images/img_5_horizontal.jpg');"></div>

						<div class="text">
							<span class="date">Apr. 14th, 2022</span>
							<h2>Don’t assume your user data in the cloud is safe</h2>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="single.html" class="h-entry img-5 h-100 gradient">

						<div class="featured-img" style="background-image: url('images/img_1_vertical.jpg');"></div>

						<div class="text">
							<span class="date">Apr. 14th, 2022</span>
							<h2>Why is my internet so slow?</h2>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="single.html" class="h-entry mb-30 v-height gradient">

						<div class="featured-img" style="background-image: url('images/img_3_horizontal.jpg');"></div>

						<div class="text">
							<span class="date">Apr. 14th, 2022</span>
							<h2>Startup vs corporate: What job suits you best?</h2>
						</div>
					</a>
					<a href="single.html" class="h-entry v-height gradient">

						<div class="featured-img" style="background-image: url('images/img_4_horizontal.jpg');"></div>

						<div class="text">
							<span class="date">Apr. 14th, 2022</span>
							<h2>Thought you loved Python? Wait until you meet Rust</h2>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- End retroy layout blog posts -->

    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url({{asset('assets/images/hero_5.jpg')}});">
        <div class="container">
          <div class="row same-height justify-content-center">
            <div class="col-md-6">
              <div class="post-entry text-center">
                <h1 class="mb-4">Hallo Selamat Datang Di Website PG TK SHARON</h1>
                <div class="post-meta align-items-center text-center">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

	<!-- Start posts-entry -->
	<section class="section posts-entry">
		<div class="container">
			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Berita Terbaru</h2>
				</div>
				<div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
			</div>
			<div class="row g-3">
				<div class="col-md-12">
					<div class="row g-3">
						<div class="col-md-4">
							<div class="blog-entry">
								<a href="single.html" class="img-link">
									<img src="{{asset("assets/images/img_1_sq.jpg")}}" alt="Image" class="img-fluid">
								</a>
								<span class="date">Apr. 14th, 2022</span>
								<h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
								<p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="blog-entry">
								<a href="single.html" class="img-link">
									<img src="{{asset("assets/images/img_2_sq.jpg")}}" alt="Image" class="img-fluid">
								</a>
								<span class="date">Apr. 14th, 2022</span>
								<h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
								<p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="blog-entry">
								<a href="single.html" class="img-link">
									<img src="{{asset("assets/images/img_2_sq.jpg")}}" alt="Image" class="img-fluid">
								</a>
								<span class="date">Apr. 14th, 2022</span>
								<h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
								<p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End posts-entry -->

	<!-- Start posts-entry -->
	<section class="section posts-entry posts-entry-sm bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-8 lg-3 ">
					<div class="blog-entry">
						{{-- <a href="single.html" class="img-link">
							<img src="{{asset("assets/images/img_1_horizontal.jpg")}}" alt="Image" class="img-fluid">
						</a> --}}
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="#" class="read-more">Continue Reading</a></p>
					</div>
				</div>
				<div class="col-md-4 lg-3">
					<div class="blog-entry">
						<a href="single.html" class="img-link">
							<img src="{{asset("assets/images/img_2_horizontal.jpg")}}" alt="Image" class="img-fluid float-end">
						</a>
					</div>
				</div>
				{{-- <div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="single.html" class="img-link">
							<img src="images/img_3_horizontal.jpg" alt="Image" class="img-fluid">
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="single.html">UK sees highest inflation in 30 years</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="#" class="read-more">Continue Reading</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="single.html" class="img-link">
							<img src="images/img_4_horizontal.jpg" alt="Image" class="img-fluid">
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="single.html">Don’t assume your user data in the cloud is safe</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="#" class="read-more">Continue Reading</a></p>
					</div>
				</div> --}}
			</div>
		</div>
	</section>
	<!-- End posts-entry -->

	<section class="section">
		<div class="container">

			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Angkatan</h2>
				</div>
				<div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
			</div>

			<div class="row">
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="single.html" class="img-link"><img src="{{asset("assets/images/img_7_horizontal.jpg")}}" alt="Image" class="img-fluid"></a>
						<div class="excerpt">
							

							<h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="single.html" class="img-link"><img src="{{asset("assets/images/img_7_horizontal.jpg")}}" alt="Image" class="img-fluid"></a>
						<div class="excerpt">
							

							<h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</div>
					</div>
				</div>
				


			</div>
			
		</div>
	</section>

	{{-- <div class="section bg-light">
		<div class="container">

			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Travel</h2>
				</div>
				<div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
			</div>

			<div class="row align-items-stretch retro-layout-alt">

				<div class="col-md-5 order-md-2">
					<a href="single.html" class="hentry img-1 h-100 gradient">
						<div class="featured-img" style="background-image: url('images/img_2_vertical.jpg');"></div>
						<div class="text">
							<span>February 12, 2019</span>
							<h2>Meta unveils fees on metaverse sales</h2>
						</div>
					</a>
				</div>

				<div class="col-md-7">

					<a href="single.html" class="hentry img-2 v-height mb30 gradient">
						<div class="featured-img" style="background-image: url('images/img_1_horizontal.jpg');"></div>
						<div class="text text-sm">
							<span>February 12, 2019</span>
							<h2>AI can now kill those annoying cookie pop-ups</h2>
						</div>
					</a>

					<div class="two-col d-block d-md-flex justify-content-between">
						<a href="single.html" class="hentry v-height img-2 gradient">
							<div class="featured-img" style="background-image: url('images/img_2_sq.jpg');"></div>
							<div class="text text-sm">
								<span>February 12, 2019</span>
								<h2>Don’t assume your user data in the cloud is safe</h2>
							</div>
						</a>
						<a href="single.html" class="hentry v-height img-2 ms-auto float-end gradient">
							<div class="featured-img" style="background-image: url('images/img_3_sq.jpg');"></div>
							<div class="text text-sm">
								<span>February 12, 2019</span>
								<h2>Startup vs corporate: What job suits you best?</h2>
							</div>
						</a>
					</div>  

				</div>
			</div>

		</div>
	</div> --}}


	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3 class="mb-4">About</h3>
						<p>SEMKA NISA PASTI BISA.</p>
					</div> <!-- /.widget -->
					<div class="widget">
						<h3>Social</h3>
						<ul class="list-unstyled social">
							<li><a href="#"><span class="icon-instagram"></span></a></li>
							{{-- <li><a href="#"><span class="icon-twitter"></span></a></li> --}}
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							{{-- <li><a href="#"><span class="icon-linkedin"></span></a></li> --}}
							{{-- <li><a href="#"><span class="icon-pinterest"></span></a></li> --}}
							{{-- <li><a href="#"><span class="icon-dribbble"></span></a></li> --}}
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4 ps-lg-5">
					<div class="widget">
						<h3 class="mb-4">Company</h3>
						<ul class="list-unstyled float-start links">
							<li><a href="#">About us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Vision</a></li>
							<li><a href="#">Mission</a></li>
							<li><a href="#">Terms</a></li>
							<li><a href="#">Privacy</a></li>
						</ul>
						<ul class="list-unstyled float-start links">
							<li><a href="#">Partners</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Creative</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3 class="mb-4">Recent Post Entry</h3>
						<div class="post-entry-footer">
                            <iframe class="me-4 rounded " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.096470157782!2d112.66213737530056!3d-7.3430630926655756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fd28f58e96fd%3A0xfa211b47b85bde60!2sTK%20SHARON%20BAMBE!5e0!3m2!1sid!2sid!4v1691065709326!5m2!1sid!2sid" width="380" height="225"   style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							{{-- <ul>
								<li>
									<a href="">
										<img src="images/img_1_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="">
										<img src="images/img_2_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="">
										<img src="images/img_3_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li>
							</ul> --}}
						</div>


					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
			</div> <!-- /.row -->

			<div class="row mt-5">
				<div class="col-12 text-center">
          <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a>  Distributed by <a href="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
            </p>
          </div>
        </div>
      </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border text-primary" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>


    <script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("assets/js/tiny-slider.js")}}"></script>

    <script src="{{asset("assets/js/flatpickr.min.js")}}"></script>


    <script src="{{asset("assets/js/aos.js")}}"></script>
    <script src="{{asset("assets/js/glightbox.min.js")}}"></script>
    <script src="{{asset("assets/js/navbar.js")}}"></script>
    <script src="{{asset("assets/js/counter.js")}}"></script>
    <script src="{{asset("assets/js/custom.js")}}"></script>

    
  </body>
  </html>
