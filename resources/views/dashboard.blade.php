<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/swiper.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- JavaScripts
	============================================= -->
    <script src="{{asset('front/js/jquery.js')}}"></script>
    <script src="{{asset('front/js/plugins.min.js')}}"></script>
    
    <!-- Footer Scripts
        ============================================= -->
    <script src="{{asset('front/js/functions.js')}}"></script>
	<!-- Document Title
	============================================= -->
	<title>Dashboard</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header">
			<div id="header-wrap" style="background-color: #f2277c">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
							<a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo.png" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

					
		
						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container">
								
								
												
						
								<li class="nav-item">
									<a class="nav-link" href="#fat" style=" font-size: 18px; font-weight: bold;  color: rgb(0, 0, 0);">Dashboard</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" href="#mdo" style=" font-size: 18px; font-weight: bold;  color: rgb(0, 0, 0);">Templates</a>
								  </li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 18px; font-weight: bold;  color: rgb(3, 3, 3);">
										Eng
									</a>
									<div class="dropdown-menu" aria-labelledby="languageDropdown">
										<a class="dropdown-item" href="#english"  color: white;>English</a>
									  
										<a class="dropdown-item" href="#french  color: white;" >Indonesia</a>
										<!-- Tambahkan pilihan bahasa lainnya di sini -->
									</div>
								</li>
								<li class="nav-item">
									<a href="javascript:void(0);" class="nav-link " id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 120%;">
										<svg xmlns="http://www.w3.org/2000/svg" height="25" width="25"  viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>
									</a>
								</li>
								<li class="nav-item">
									<a href="javascript:void(0);" class="nav-link " id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 120%;">
										<svg xmlns="http://www.w3.org/2000/svg" height="25" width="25"  viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 0c-17.7 0-32 14.3-32 32V49.9C119.5 61.4 64 124.2 64 200v33.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416H424c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4V200c0-75.8-55.5-138.6-128-150.1V32c0-17.7-14.3-32-32-32zm0 96h8c57.4 0 104 46.6 104 104v33.4c0 47.9 13.9 94.6 39.7 134.6H72.3C98.1 328 112 281.3 112 233.4V200c0-57.4 46.6-104 104-104h8zm64 352H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z"/></svg>
									</a>
								</li>

							</ul>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				
				<div class="row col-mb-50">
				<div class="entry col-sm-6 col-12">
					<div class="grid-inner">
						<div style= " margin-left: 60px">
							<div style="text-align: left; font-size: 20px; ">
								<div><strong style="color: black;">Boost Your Chances To</strong></div>
							
							</div>
							<div style="text-align: left; font-size: 100px; ">
								<div><strong style="color: black;">Land That</strong></div>
  								<div><strong style="color: black;">Dream Job</strong></div>
							</div>
							<div >
								<a href="/informasipribadi" class="custom-button" style="background-color: #502ACD; width: 160px; height: 40px; display: inline-block; text-align: center; line-height: 40px; color: white; text-decoration: none;"  style="margin-bottom: 20px;">Create CV now</a>

							</div>
							  
						</div>
						
					
					</div>
				</div>

				<div class="entry col-sm-6 col-12">
					<div class="grid-inner" style="margin-top: -60px;">
						<a href="images/tri.png" data-lightbox="image">
							<img src="images/tri.png" alt="Standard Post with Image" style="width: 150%; height: auto;">
						</a>
					</div>
				</div>
				
				<div class="container clearfix">
					<div class="row col-mb-50">
						<div class="col-sm-6 col-lg-12">
							<div class="feature-box fbox-effect" style="text-align: center; display: flex; align-items: center; justify-content: center; height: 10vh;">
								<div class="grid-inner">
									<div class= "fbox-content">
										
											<h3>Create in CV</h3>
									
									</div>
									<div class= "fbox-content">
										
										<h2>Our Templates</h2>
								
								</div>
								</div>
								
								
								
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="container clearfix">

					<div class="row col-mb-50">

						<div class="col-sm-6 col-lg-4">
							<div class="feature-box fbox-effect">
								<div class="entry-image">
									<a href="#"><img src="images/temp1.png" alt="Image"></a>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-4">
							<div class="feature-box fbox-effect">
							
								<div class="entry-image">
									<a href="#"><img src="images/temp2.png" alt="Image"></a>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-4">
							<div class="feature-box fbox-effect" >
							
								<div class="entry-image"  style="margin-bottom: 100px;">
									<a href="#"><img src="images/temp3.png" alt="Image"></a>
								</div>
							</div>
						</div>
					</div>
				</div>




				<div class="container clearfix">
					<div class="row col-mb-50">
						<div class="col-sm-6 col-lg-12">
							<div class="feature-box fbox-effect" style="text-align: center; display: flex; align-items: center; justify-content: center; height: 10vh;">
								<div class="grid-inner"  style="margin-bottom: 200px;">
									<div class= "fbox-content"  style="margin-bottom: 300px;">
										
										<h3>There  are some redeeming factors</h3>

										<h2>The benefits you get from having a cv house</h2>
								
									</div>
								
								</div>

							</div>
						</div>
					</div>
				</div>

				
	


				<div class="container clearfix">

					<div class="row col-mb-50">

						<div class="col-sm-6 col-lg-4">
							<div class="feature-box fbox-effect">
								<div class="fbox-icon">
									<a href="#"><i class="icon-stack i-alt"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Premium Sliders Included</h3>
									<p>Canvas included 20+ custom designed Slider Pages with Premium Sliders like Layer, Revolution, Swiper &amp; others.</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-4">
							<div class="feature-box fbox-effect">
								<div class="fbox-icon">
									<a href="#"><i class="icon-tint i-alt"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Unlimited Color Options</h3>
									<p>Change the color scheme of the Theme in a flash just by changing the 6-digit HEX code in the colors.php file.</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-4">
							<div class="feature-box fbox-effect">
								<div class="fbox-icon">
									<a href="#"><i class="icon-text-width i-alt"></i></a>
								</div>
								<div class="fbox-content" style="margin-bottom: 200px;">
									<h3>CUSTOMIZABLE FONTS</h3>
									<p>Use any Font you like from Google Web Fonts, Typekit or other Web Fonts. They will blend in perfectly.</p>
								</div>
							</div>
						</div>

					</div>
				</div>



				<div class="container clearfix">

					<div class="row col-mb-50">

						<div class="col-sm-6 col-lg-4">
							<div class="feature-box fbox-effect">
								<div class="fbox-icon">
									<a href="#"><i class="icon-stack i-alt"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Premium Sliders Included</h3>
									<p>Canvas included 20+ custom designed Slider Pages with Premium Sliders like Layer, Revolution, Swiper &amp; others.</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-4">
							<div class="feature-box fbox-effect">
								<div class="fbox-icon">
									<a href="#"><i class="icon-tint i-alt"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Unlimited Color Options</h3>
									<p>Change the color scheme of the Theme in a flash just by changing the 6-digit HEX code in the colors.php file.</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-4">
							<div class="feature-box fbox-effect">
								<div class="fbox-icon">
									<a href="#"><i class="icon-text-width i-alt"></i></a>
								</div>
								<div class="fbox-content">
									<h3>CUSTOMIZABLE FONTS</h3>
									<p>Use any Font you like from Google Web Fonts, Typekit or other Web Fonts. They will blend in perfectly.</p>
								</div>
							</div>
						</div>

					</div>
				</div>


				


				</div>
				
			</div>
		</section><!-- #content end -->
		
		

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			

			<div class="container">
				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-4">

							<div class="widget clearfix">

                                
							
								<a class="btn btn-block ;" style="margin-bottom:20px;padding-bottom:20px; text-align:left; font-weight:bold">Contact Info</a>
								<div id="flickr-widget"  class="flickr-feed masonry-thumbs grid-container" data-id="613394@N22" data-count="16" data-type="group" data-lightbox="gallery"></div>

								<div class="posts-sm row col-mb-30" id="post-list-sidebar">
									<div class="entry col-12">
										<div class="grid-inner row no-gutters">
											<div class="col-auto">
												<div class="entry-image"style="width: 30px; height:  30px;">
													<a href="#"><img src="images/Vector.png" alt="Image"></a>
												</div>
											</div>
											<div class="col pl-3">
												<div class="entry-title">
													<h4><a href="#">Customer Service</a></h4>
												</div>
												<div class="entry-meta">
													<ul>
														<li>+62 8232 2786 0687</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div class="entry col-12">
										<div class="grid-inner row no-gutters">
											<div class="col-auto">
												<div class="entry-image" style="width: 30px; height:  30px;">
													<a href="#"><img src="images/wpf.png" alt="Image"></a>
												</div>
											</div>
											<div class="col pl-3">
												<div class="entry-title">
													<h4><a href="#">Do you have a question?</a></h4>
												</div>
												<div class="entry-meta">
													<ul>
														<li>supprot.cvhouse@gmail.com</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div class="entry col-12">
										<div class="grid-inner row no-gutters">
											<div class="col-auto">
												<div class="entry-image" style="width: 30px; height:  30px;">
													<a href="#"><img src="images/clar.png" alt="Image"></a>
												</div>
											</div>
											<div class="col pl-3">
												<div class="entry-title">
													<h4><a href="#">Social Media</a></h4>
												</div>
												<div class="entry-meta">
													<ul>
														<li>10th July 2021</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

								</div>
							
                            
                                
                            
                           

						</div>
					</div>

						<div class="col-sm-6 col-lg-4">

							<div class="widget clearfix">
							<a class="btn btn-block  ;" style="margin-bottom:20px;padding-bottom:20px; text-align:left; font-weight:bold">Quick Link</a>
								<div id="flickr-widget" class="flickr-feed masonry-thumbs grid-container" data-id="613394@N22" data-count="16" data-type="group" data-lightbox="gallery"></div>

								<div class="posts-sm row col-mb-30" id="post-list-sidebar">
										
									

										<div class="entry col-12">
											<div class="grid-inner row no-gutters">
											
												<div class="col pl-3">
													<div class="entry-title">
														<h4><a href="#">Dashboard</a></h4>
													</div>
													
												</div>
											</div>
										</div>

										<div class="entry col-12">
											<div class="grid-inner row no-gutters">
												
												<div class="col pl-3">
													<div class="entry-title">
														<h4><a href="#">Templates</a></h4>
													</div>
													<div class="entry-meta">
														
													</div>
												</div>
											</div>
										</div>
									

								</div>

							</div>

						</div>

						<div class="col-sm-6 col-lg-4">


						<a class="btn btn-block  ;" style="margin-bottom:20px;padding-bottom:20px; text-align:left; font-weight:bold">Support</a>
								<div id="flickr-widget" class="flickr-feed masonry-thumbs grid-container" data-id="613394@N22" data-count="16" data-type="group" data-lightbox="gallery"></div>
								<div class="posts-sm row col-mb-30" id="post-list-sidebar">
										
									

									<div class="entry col-12">
										<div class="grid-inner row no-gutters">
										
											<div class="col pl-3">
												<div class="entry-title">
													<h4><a href="#">about</a></h4>
												</div>
												
											</div>
										</div>
									</div>

									<div class="entry col-12">
										<div class="grid-inner row no-gutters">
											
											<div class="col pl-3">
												<div class="entry-title">
													<h4><a href="#">Privacy Policy</a></h4>
												</div>
												<div class="entry-meta">
													
												</div>
											</div>
										</div>
									</div>

									<div class="entry col-12">
										<div class="grid-inner row no-gutters">
										
											<div class="col pl-3">
												<div class="entry-title">
													<h4><a href="#">Terms of Service</a></h4>
												</div>
												
											</div>
										</div>
									</div>

									<div class="entry col-12">
										<div class="grid-inner row no-gutters">
											
											<div class="col pl-3">
												<div class="entry-title">
													<h4><a href="#">Cookies & Tracking Policy</a></h4>
												</div>
												<div class="entry-meta">
													
												</div>
											</div>
										</div>
									</div>


								
									


								

							</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->
			</div>

			<!-- Copyrights
			============================================= -->
		
				<div class="container">
					<div class="row justify-content-center"> <!-- Menggunakan justify-content-center untuk mengatur teks di tengah -->
						<div class="col-12 col-lg-auto text-center">
							<p class="mb-3 text-white">Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.</p> <!-- Mengatur teks menjadi putih -->
						</div>
					</div>
				</div>
			
		
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('js/functions.js')}}"></script>

</body>
</html>