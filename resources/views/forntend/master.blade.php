<!DOCTYPE html>
<html lang="en-us">

<head>
	<title>Taheritbd & Soft Agency – Design your dream</title>
	<meta charset="utf-8">
	<meta name="keywords" content="Taheritbd" />
    <meta name="description" content="Taheritbd" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<meta name="description" content="Taheritbd - Creative Digital Agency" />
	<meta property="og:title" content="Taheritbd - Creative Digital Agency " />
	<meta property="og:description" content="Taheritbd - Creative Digital" />
	<meta property="og:image" content="../social-image.png" />
	<meta name="format-detection" content="telephone=no">
    @php
    use App\Models\Sitelogo;
    $sitelogoss = Sitelogo::first();  // Fetch the first entry
@endphp
@if($sitelogoss && $sitelogoss->site_icon)
    <link rel="icon" href="{{ asset('uploads/setting/' . $sitelogoss->site_icon) }}" type="image/gif" sizes="16x16">
@else
    <link rel="icon" href="{{ asset('uploads/setting/' . $sitelogoss->site_icon) }}" type="image/gif" sizes="16x16">
@endif
	<link rel="stylesheet" type="text/css" href="{{asset('forntend/assets/css/bootstrap.min.css')}}">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">

	<!-- Font Awesome Icon CSS Link -->
	<link rel="stylesheet" type="text/css" href="{{asset('forntend/assets/css/font-awesome.min.css')}}">

	<!-- Slick Slider CSS Link -->
	<link rel="stylesheet" type="text/css" href="{{asset('forntend/assets/css/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('forntend/assets/css/slick-theme.css')}}">

	<!-- Themify Icons -->
	<link rel="stylesheet" type="text/css" href="{{asset('forntend/assets/vendor/themify/themify-icons.css')}}">

	<!-- Wow Animation CSS Link -->
	<link rel="stylesheet" type="text/css" href="{{asset('forntend/assets/css/animate.css')}}">

	<!-- Main Style CSS Link -->
	<link rel="stylesheet" type="text/css" href="{{asset('forntend/assets/css/style.css')}}">

</head>
<body class="home">
<div class="main">

	<!-- Loder Start -->
	<div class="loader-box">
		<div class="loader-design">
			<svg class="gegga">
				<defs>
					<filter id="gegga">
						<feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
						<feColorMatrix in="blur" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 20 -10" result="inreGegga" />
						<feComposite in="SourceGraphic" in2="inreGegga" operator="atop" />
					</filter>
				</defs>
			</svg>
			<svg class="snurra" width="200" height="200" viewBox="0 0 200 200">
				<defs>
					<linearGradient id="linjärGradient">
						<stop class="stopp1" offset="0" />
						<stop class="stopp2" offset="1" />
					</linearGradient>
					<linearGradient y2="160" x2="160" y1="40" x1="40" gradientUnits="userSpaceOnUse" id="gradient" xlink:href="#linjärGradient" />
				</defs>
				<path class="halvan" d="m 164,100 c 0,-35.346224 -28.65378,-64 -64,-64 -35.346224,0 -64,28.653776 -64,64 0,35.34622 28.653776,64 64,64 35.34622,0 64,-26.21502 64,-64 0,-37.784981 -26.92058,-64 -64,-64 -37.079421,0 -65.267479,26.922736 -64,64 1.267479,37.07726 26.703171,65.05317 64,64 37.29683,-1.05317 64,-64 64,-64"
				/>
				<circle class="strecken" cx="100" cy="100" r="64" />
			</svg>
			<svg class="skugga" width="200" height="200" viewBox="0 0 200 200">
				<path class="halvan" d="m 164,100 c 0,-35.346224 -28.65378,-64 -64,-64 -35.346224,0 -64,28.653776 -64,64 0,35.34622 28.653776,64 64,64 35.34622,0 64,-26.21502 64,-64 0,-37.784981 -26.92058,-64 -64,-64 -37.079421,0 -65.267479,26.922736 -64,64 1.267479,37.07726 26.703171,65.05317 64,64 37.29683,-1.05317 64,-64 64,-64"
				/>
				<circle class="strecken" cx="100" cy="100" r="64" />
			</svg>
		</div>
	</div>
	<!-- Loder End -->

	<!-- Header Start -->
	<header class="site-header">
         @foreach ($sitelogo as $sitelogo )
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="header-box">
						<div class="site-branding">
							<a href="#main-banner" title="Taheritbd">
								<img src="{{asset('uploads/setting')}}/{{  $sitelogo->photo }}" style="height:100px" alt="About Image">
							</a>
						</div>
						<div class="header-menu">
							<nav class="main-navigation">
								<button class="toggle-button">
									<span></span>
									<span></span>
									<span></span>
								</button>
								<ul class="menu">
									<li class="active"><a href="#main-banner" title="Home">Home</a></li>
									<li><a href="#about-us" title="About Us">About Us</a></li>
									<li><a href="#main-our-services" title="Services">Services</a></li>
									<li class="sub-items">

										<ul class="sub-menu">
											<li><a href="#pricing" title="Pricing">Pricing</a></li>
											<li><a href="#portfoliolist" title="Portfolio">Portfolio</a></li>
											<li><a href="#temmumber" title="Team">Team</a></li>
											<li><a href="faq.html" title="FAQ">FAQ</a></li>
										</ul>
									</li>
									<li class="sub-items">
										<a href="javascript:void(0);" title="Blog">Blog</a>
										<ul class="sub-menu">
											<li><a href="blog-list.html" title="Blog List">Blog List</a></li>
											<li><a href="blog-detail.html" title="Blog Detail">Blog Detail</a></li>
										</ul>
									</li>
									<li><a href="{{route('contact')}}" title="Contact Us">Contact Us</a></li>
								</ul>
							</nav>
							<div class="black-shadow"></div>
						</div>
						<div class="header-search">
							<div class="search-box">
								<div class="search-icon">
									<a href="javascript:void(0);" title="Search"><i class="fa fa-search" aria-hidden="true"></i></a>
								</div>
							</div>
							<div class="extra-menu">
								<div class="extra-menu-icon">
									<a href="javascript:void(0);" title="Menu"><img src="{{asset('forntend')}}/assets/images/menu-icon.png" alt="Menu Icon"></a>
								</div>
								<div class="extra-menu-info">
									<span class="close-extra-menu"></span>
									<div class="extra-info-text">
										<div class="extra-info-logo">
											<img src="{{asset('uploads/setting')}}/{{$sitelogo->photo}}" alt="Logo">
										</div>
										<div class="search-input">
											<form>
												<input type="text" name="search" class="form-input" placeholder="Search Here..." required>
												<button type="submit" class="sec-btn"><span><i class="fa fa-search" aria-hidden="true"></i></span></button>
											</form>
										</div>
										<p>{{$sitelogo->information}}</p>
									</div>
									<div class="extra-info-text">
										<h3 class="h3-title">Categories</h3>
										<ul>
											<li>Web Design</li>
											<li>Idea & Research</li>
											<li>Web Development</li>
											<li>SEO & Marketing</li>
										</ul>
									</div>
									<div class="col-lg-3">
                                        <div class="footer-contact">
                                            <h3 class="h3-title footer-title">Contact Us</h3>
                                            <div class="footer-contact-box">
                                                <div class="footer-contact-link">
                                                    <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                    <a href="javascript:void(0);" title="1247/Plot No. 39, 15th Phase, Colony, Kukatpally, Hyderabad">{{  $sitelogo->adderes }}</a>
                                                </div>
                                            </div>
                                            <div class="footer-contact-box">
                                                <div class="footer-contact-link">
                                                    <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                    <a href="javascript:void(0);" title="1800-1700-1600">{{  $sitelogo->phone_1 }}</a>
                                                    <a href="javascript:void(0);" title="+91 987 654-3210">{{  $sitelogo->phone_2 }}</a>
                                                </div>
                                            </div>
                                            <div class="footer-contact-box">
                                                <div class="footer-contact-link">
                                                    <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                    <a href="javascript:void(0);" title="info@gmail.com">{{  $sitelogo->email_1 }}</a>
                                                    <a href="javascript:void(0);" title="services@gmail.com">{{  $sitelogo->email_2 }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<div class="extra-info-text">
										<div class="social-icon">
											 @if ($sitelogo->facebook_link)
                                            <a href="{{ $sitelogo->facebook_link }}" title="Follow on Facebook"target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                             @endif
                                            @if ($sitelogo->instagram_link)
                                                <a href="{{ $sitelogo->instagram_link }}" title="Follow on Instagram"target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            @endif
                                            @if ($sitelogo->twitter_link)
                                                <a href={{ $sitelogo->twitter_link }} title="Follow on Twitter"target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            @endif
                                        </div>
									</div>
								</div>
								<div class="black-shadow"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
    @yield('main_content')
	<!-- Header End -->

	<!-- Banner Start -->


	<!-- Footer Start -->
	<footer class="site-footer">
		<div class="container">
			<div class="row">



				<div class="col-lg-3">
					<div class="footer-info">
						<div class="footer-logo">
							<a href="index.html" title="Shivaa">
								<img src="{{asset('uploads/setting')}}/{{  $sitelogo->photo }}" alt="About Image">
							</a>
						</div>
						<p>{{  $sitelogo->information }}</p>
						<div class="social-icon">
                            @if ($sitelogo->facebook_link)
                                <a href="{{ $sitelogo->facebook_link }}" title="Follow on Facebook"target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            @endif
                            @if ($sitelogo->instagram_link)
                                <a href="{{ $sitelogo->instagram_link }}" title="Follow on Instagram"target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            @endif
                            @if ($sitelogo->twitter_link)
                                <a href={{ $sitelogo->twitter_link }} title="Follow on Twitter"target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            @endif
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="footer-contact">
						<h3 class="h3-title footer-title">Contact Us</h3>
						<div class="footer-contact-box">
							<div class="footer-contact-link">
								<span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
								<a href="javascript:void(0);" title="1247/Plot No. 39, 15th Phase, Colony, Kukatpally, Hyderabad">{{  $sitelogo->adderes }}</a>
							</div>
						</div>
						<div class="footer-contact-box">
							<div class="footer-contact-link">
								<span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
								<a href="javascript:void(0);" title="1800-1700-1600">{{  $sitelogo->phone_1 }}</a>
								<a href="javascript:void(0);" title="+91 987 654-3210">{{  $sitelogo->phone_2 }}</a>
							</div>
						</div>
						<div class="footer-contact-box">
							<div class="footer-contact-link">
								<span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
								<a href="javascript:void(0);" title="info@gmail.com">{{  $sitelogo->email_1 }}</a>
								<a href="javascript:void(0);" title="services@gmail.com">{{  $sitelogo->email_2 }}</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="our-links">
						<h3 class="h3-title footer-title">Our Links</h3>
						<ul>
							<li><a href="index.html" title="Home">Home</a></li>
							<li><a href="#about-us" title="About Us">About Us</a></li>
							<li><a href="#main-our-services" title="Services">Services</a></li>
							<li><a href="blog-list.html" title="Blog">Blog</a></li>
							<li><a href="{{route('contact')}}" title="Contact Us">Contact Us</a></li>
							<li><a href="faq.html" title="FAQ">FAQ</a></li>
							<li><a href="#temmumbe" title="Team">Team</a></li>
							<li><a href="#pricing" title="Pricing">Pricing</a></li>
							<li><a href="#portfoliolist" title="Portfolio">Portfolio</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="our-services">
						<h3 class="h3-title footer-title">Our Services</h3>
						<ul>
							<li><a href="services.html" title="Web Design">Web Design</a></li>
							<li><a href="services.html" title="Web Development">Web Development</a></li>
							<li><a href="services.html" title="SEO Marketing">SEO Marketing</a></li>
							<li><a href="services.html" title="Research & Idea">Research & Idea</a></li>
							<li><a href="services.html" title="Mobile App">Mobile App</a></li>
							<li><a href="services.html" title="UI / UX">UI / UX</a></li>
						</ul>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</footer>
	<div class="footer-last">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="copy-right">
						<p>Copyright © {{ \Carbon\Carbon::now()->year }} <a href="https://taheritbd.com/" target="_blank">Taheritbd</a>. All rights reserved.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer-last-link">
						<ul>
							<li><a href="javascript:void(0);" title="Privacy Policy">Privacy Policy</a></li>
							<li><a href="javascript:void(0);" title="Terms Of Service">Terms Of Service</a></li>
							<li><a href="javascript:void(0);" title="Legal">Legal</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End -->


	<!-- Scroll To Top Start -->
	<a href="#main-banner" class="scroll-top" id="scroll-to-top">
		<i class="fa fa-caret-up" aria-hidden="true"></i>
	</a>
	<!-- Scroll To Top End-->

	<!-- Bubbles Animation Start -->
	<div class="bubbles_wrap">
		<div class="bubble x1"></div>
		<div class="bubble x2"></div>
		<div class="bubble x3"></div>
		<div class="bubble x4"></div>
		<div class="bubble x5"></div>
		<div class="bubble x6"></div>
		<div class="bubble x7"></div>
		<div class="bubble x8"></div>
		<div class="bubble x9"></div>
		<div class="bubble x10"></div>
	</div>
	<!-- Bubbles Animation End-->
</div>


<!-- Jquery JS Link -->
<script src="{{asset('forntend/assets/js/jquery.min.js')}}"></script>

<!-- Bootstrap JS Link -->
<script src="{{asset('forntend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('forntend/assets/js/popper.min.js')}}"></script>

<!-- Slick Slider JS Link -->
<script src="{{asset('forntend/assets/js/slick.min.js')}}"></script>

<!-- Portfolio Tabbing JS Link -->
<script src="{{asset('forntend/assets/js/jquery.mixitup.min.js')}}"></script>

<!-- Wow Animation JS Link -->
<script src="{{asset('forntend/assets/js/wow.min.js')}}"></script>

<!-- Custom JS Link -->
<script src="{{asset('forntend/assets/js/dz.ajax.js')}}"></script><!-- AJAX -->
<script src="{{asset('forntend/assets/js/custom.js')}}"></script>
<script src="{{asset('forntend/assets/js/custom-scroll-count.js')}}"></script>

@yield('jsscript')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@if (Session::has('success') || Session::has('error'))
    <script>
        toastr.options = {
            "positionClass": "toast-top-center",
            "timeOut": "5000"
        };
        @if (Session::has('error'))
            toastr.error("{!! Session::get('error') !!}");
        @endif
        @if (Session::has('success'))
            toastr.success("{!! Session::get('success') !!}");
        @endif
    </script>
@endif


</body>



</html>
