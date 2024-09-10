@extends('forntend.master')
@section('main_content')

	<!-- Banner Start -->
	<section class="main-banner" id="main-banner">
		<div class="container">
			<div class="row">
                 @foreach ($datashow as $datashows)
                <div class="col-lg-6">
					<div class="banner-content">
						<span class="sub-title wow fadeup-animation" data-wow-delay="0.2s">Welcome</span>

						<h1 class="h1-title wow fadeup-animation" data-wow-delay="0.4s">{{$datashows->title}}</h1>
						<p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">{{$datashows->description}}</p>
						<a href="{{ route('contact') }}" title="Contact Us Now" class="sec-btn wow fadeup-animation" data-wow-delay="0.8s"><span>Contact Us Now</span></a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="banner-img">
						<img src="{{asset('uploads/category_photos')}}/{{$datashows->photo}}" alt="Banner Image">
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</section>
	<!-- Banner End -->

	<!-- Our Services Start -->
	<section class="main-our-services "id="main-our-services">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="our-services-title">
						<span class="sub-title" id="services">OUR SERVICES</span>
						<h2 class="h2-title">Awesome Service</h2>
					</div>
				</div>
			</div>
			<div class="our-services-list">
				<div class="row">
                     @foreach ($awesome as $awesomes)
                    <div class="col-xl-4 col-sm-6">
						<div class="our-service-box wow fadeup-animation" data-wow-delay="0.4s">
							<div class="our-service-text">
								<div class="our-service-icon">
									<img src="{{ asset('uploads/ourservices_photos') }}/{{ $awesomes->photo }}" alt="Web Design">
								</div>
								<h3 class="h3-title">{{ $awesomes->awesome_title }}</h3>
								<p class="text-justify">{{ $awesomes->awesome_description }}</p>
							</div>
						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- Our Services End -->

	<!-- About Us Start -->
	<section class="main-about-us"id="about-us">
		<div class="container"id="about-us">

            @foreach ($about as $about )
                <div class="row align-items-center" id="about-us">
				<div class="col-lg-6">
					<div class="about-img-box wow right-animation" data-wow-delay="0.4s">
						<img src="{{asset('uploads/about_photos')}}/{{  $about->about_photo }}" alt="About Image">
					</div>
				</div>
				<div class="col-lg-6"id="about-us">
					<div class="about-content wow left-animation" data-wow-delay="0.4s">
						<span class="sub-title">ABOUT US</span>
						<h2 class="h2-title">{{ $about->about_title }}</h2>
						<div class="about-text">

							<p>{{ $about->about_description }}</p>
						</div>
						<a href="{{ route('contact') }}" class="sec-btn" title="Contact Us Now"><span>Contact Us Now</span></a>
					</div>
				</div>
			</div>
            @endforeach
		</div>
	</section>
	<!-- About Us End -->
<!-- Whatch Us Start -->
@foreach ($projectclient as $items )
<section class="main-whatch-us">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="whatch-title">
                    <span class="sub-title">{{$items->watchus_title}}</span>
                    <h2 class="h2-title">{{$items->see_how_title}}</h2>
                </div>
            </div>
            <div class="col-xl-8 col-lg-9">
                <div class="whatch-video-box wow fadeup-animation" data-wow-delay="0.4s">
                    <div class="whatch-video-img back-img img_hover" style="background-image: url('{{asset('uploads/happy_clients')}}/{{  $items->photo }}');">
                        <a href="https://www.youtube.com/watch?v={{$items->video_id}}" class="video-play-icon popup-youtube" title="Play Video"><span><i class="fa fa-play" aria-hidden="true"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Whatch Us End -->

<!-- Counter Start -->
<section class="main-counter">
    <div class="container">
        <div class="main-counter-list" id="progress_bar">
            <div class="row mb-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <h4 class="h4-title counter-title"><span class="counting" data-count="{{$items->happy_count1}}">0</span>+</h4>
                        <p>{{$items->happy_client1}}</p>
                        <div class="counter-bar" data-width="60%">
                            <div class="counter-bar-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box project-done">
                        <h4 class="h4-title counter-title"><span class="counting" data-count="{{$items->happy_count2}}">0</span>+</h4>
                        <p>{{$items->happy_client2}}</p>
                        <div class="counter-bar" data-width="75%">
                            <div class="counter-bar-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box cup-coffee">
                        <h4 class="h4-title counter-title"><span class="counting" data-count="{{$items->happy_count3}}">0</span>+</h4>
                        <p>{{$items->happy_client3}}</p>
                        <div class="counter-bar" data-width="45%">
                            <div class="counter-bar-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box skills-services">
                        <h4 class="h4-title counter-title"><span class="counting" data-count="{{$items->happy_count4}}">0</span>+</h4>
                        <p>{{$items->happy_client4}}</p>
                        <div class="counter-bar" data-width="90%">
                            <div class="counter-bar-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach

<!-- Counter End -->
	<!-- NewsLetter Start -->
	<section class="main-newsletter">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6 col-lg-7">
					<div class="newsletter-content">
						<span class="sub-title">NEWSLETTER</span>
						<h4 class="h4-title">Subscribe Now!</h4>
						<p>Fusce mollis sed odio nec dapibus. Phasellus gravida luctus erat sit amet scelerisque. Praesent sollicitudin non dui eget consequat.</p>
						<div class="newsletter-form">
							<form class="dzSubscribe" action="{{ url('users/subscriber') }}" method="POST"enctype="multipart/form-data">
                                @csrf
								<div class="dzSubscribeMsg"></div>
								<div class="form-box">
									<input name="email" type="email" class="form-input  @error('email')  is-invalid   @enderror" placeholder="Email Address...">
                               @error('email')
                                 <span class="text-danger">{{$message}}</span>
                                  {{-- @enderrordzSubscribeMsg --}}
                               @enderror
									<button type="submit" class="sec-btn"><span>Subscribe Now</span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- NewsLetter End -->

	<!-- Experience Start -->
	<section class="main-experience">
		<div class="container">
			<div class="row align-items-center">
				@foreach ($experience as $experience )
				<div class="col-lg-6 order-lg-1 order-2">
					<div class="experience-content wow right-animation" data-wow-delay="0.4s">
						<span class="sub-title">EXPERIENCE</span>
						<h2 class="h2-title">{{ $experience->title }}</h2>
						<p>{{ $experience->description}}</p>
						<div class="experience-skills">
							<div class="experience-skill-list" id="progress_bar">
								<div class="experience-skill-bar-box">
									<h5 class="h3-title experience-skill-bar-title">{{ $experience->designing}}</h5>
									<div class="h3-title experience-skill-bar-percent"><span class="experience-counting" data-count="{{ $experience->progress_1}}">0</span>%</div>
									<div class="experience-skill-bar" data-width="{{ $experience->progress_1}}%">
										<div class="experience-skill-bar-inner"></div>
									</div>
								</div>
								<div class="experience-skill-bar-box">
									<h5 class="h3-title experience-skill-bar-title">{{ $experience->development}}</h5>
									<div class="h3-title experience-skill-bar-percent"><span class="experience-counting" data-count="{{ $experience->progress_2}}">0</span>%</div>
									<div class="experience-skill-bar" data-width="{{ $experience->progress_2}}%">
										<div class="experience-skill-bar-inner"></div>
									</div>
								</div>
								<div class="experience-skill-bar-box">
									<h5 class="h3-title experience-skill-bar-title">{{ $experience->optimization}}</h5>
									<div class="h3-title experience-skill-bar-percent"><span class="experience-counting" data-count="{{ $experience->progress_3}}">0</span>%</div>
									<div class="experience-skill-bar" data-width="{{ $experience->progress_3}}%">
										<div class="experience-skill-bar-inner"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 order-lg-2 order-1">
					<div class="experience-img wow left-animation" data-wow-delay="0.4s">
						<img src="{{asset('uploads/experience')}}/{{  $experience->photo }}" alt="About Image">
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</section>
	<!-- Experience End -->

	<!-- Pricing Plans Start -->
	<section class="main-pricing"id="pricing">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="pricing-title">
						<span class="sub-title" id="pricing">PRICING PLANS</span>
						<h2 class="h2-title">Choose Our Plans</h2>
					</div>
				</div>
			</div>
			<div class="pricing-list">
				<div class="row pricing-slider">
                       @foreach ( $pricing as  $pricing)
					<div class="col-lg-4">
                           <div class="pricing-box wow fadeup-animation" data-wow-delay="0.8s">
							<div class="pricing-box-text">
								<h3 class="h3-title">{{ $pricing->basic }}</h3>
								<div class="pricing-img">
								<img src="{{asset('uploads/pricing')}}/{{  $pricing->photo }}" alt="About Image">
								</div>
								<h4 class="h4-title">${{ $pricing->price }}<span></span></h4>
								<div class="pricing-text-list">
									<ul>
										<li>{{ $pricing->life_time_update  }}</li>
										<li>{{ $pricing->month  }}</li>
										<li>{{ $pricing->permitted_domain  }}</li>
										<li>{{ $pricing->personal_project  }}</li>
										<li>{{ $pricing->email_support  }}</li>
                                        <li>{{ $pricing->anydesk_support  }}</li>
                                        <li>{{ $pricing->whatsapp_support  }}</li>
                                        <li>{{ $pricing->installation_cpanel  }}</li>
									</ul>
								</div>
								<a href=" https://wa.me/qr/M5MADF272T7EA1" class="sec-btn" title="Join Now"><span>Join Now</span></a>
							</div>
						</div>

					</div>
                     @endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- Pricing Plans End -->

	<!-- Portfolio Start -->
	<section class="main-portfolio">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12">
					<div class="portfolio-title">
						<span class="sub-title" id="portfolio">PORTFOLIO</span>
					</div>
				</div>
                <div class="col-lg-6">
                    <div class="portfolio-title">
                        <h2 class="h2-title">Featured Projects</h2>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="portfolio-tabbing">
                        <ul class="clearfix" id="filters">
                            <li><span class="filter active"
                                data-filter="{{ implode(', ', array_map(function($item) { return '.category-' . $item;  }, $portfolio_category->pluck('id')->toArray()))}}">All</span></li>
                            @foreach ($portfolio_category as $item)
                                <li><span class="filter" data-filter=".category-{{$item->id}}">{{$item->category_name}}</span></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-12">
                    <div class="portfolio-list-box">
                        <div class="portfoliolist" id="portfoliolist">
                            @foreach ($mainportfoloi as $item)
                                <div class="portfolio md-6 category-{{$item->portfoli_category_id}}">
                                    <div class="portfolio-wrapper">
                                        <div class="portfolio-img back-img" style="background-image: url('{{ asset('uploads/portfolio/' . $item->photo) }}')"></div>
                                        <div class="portfolio-wrapper-text">
                                            <h3 class="h3-title">{{$item->name}}</h3>
                                            <p>{{$item->short_description}}</p>
                                            <a href="{{ route('portfolio_details',$item->id) }}" title="View More"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

		</div>
	</section>
	<!-- Portfolio End -->

	<!-- Team Members Start -->
	<section class="main-team"id="temmumber">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="team-title">
						<span class="sub-title" id="team">TEAM MEMBERS</span>
						<h2 class="h2-title">Our Expertise</h2>
					</div>
				</div>
			</div>
			<div class="main-team-slider wow fadeup-animation" data-wow-delay="0.4s"id="temmumber">
				<div class="row team-slider">
					@foreach ($expertise as $expertise)
					<div class="col-xl-3 col-lg-4">
						<div class="team-box">
							<div class="team-text">
								<div class="team-social">
									<div class="team-social-box">
										@if ($expertise->facebook_link)
											<a href="{{ $expertise->facebook_link }}"  target="_blank"  title="Follow on Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
										@endif
									</div>
									<div class="team-social-box">
										@if ($expertise->instagram_link)
										  <a href="{{ $expertise->facebook_link }}" title="Follow on Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
										@endif
									</div>

									<div class="team-social-box">
										@if ($expertise->twitter_link)
										<a href="{{ $expertise->twitter_link }}" title="Follow on Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
										@endif
									</div>
									<div class="team-social-box">
										@if ($expertise->youtube_link)
										<a href="{{ $expertise->youtube_link }}" title="Follow on Youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
										@endif
									</div>
								</div>
								<div class="team-img back-img" style="background-image: url('{{ asset('uploads/expertise/' . $expertise->photo) }}')"></div>
							</div>
							<div class="team-text-box">
								<p>{{ $expertise->name }}</p>
								<h3 class="h3-title">{{ $expertise->position}}</h3>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- Team Members End -->

	<!-- Testimonial Start -->
	<section class="main-testimonial">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="testimonial-content wow right-animation" data-wow-delay="0.4s">

						<span class="sub-title">TESTIMONIAL</span>
						<h2 class="h2-title">See What Our Clients Say’s</h2>
						<p>This approach makes sure that only one testimonial is shown, specifically the first one from the collection.</p>

					</div>
               </div>
				<div class="col-lg-6">
					<div class="main-testimonial-slider wow left-animation" data-wow-delay="0.4s">
						<div class="testimonial-slider-box">
							<div class="review-slider">
                                @foreach ($testmonial as $testmonial)
								<div class="review-box">
									<p>{{ $testmonial->description_2 }}</p>
									<h3 class="h3-title">{{ $testmonial->title_1 }}</h3>
									<span>{{ $testmonial->name }}</span>
									<div class="review-img back-img" style="background-image: url('{{ asset('uploads/testimonial/' . $testmonial->photo) }}')"></div>
								</div>
                                @endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonial End -->

	<!-- Our Blog Start -->
	<section class="main-our-blog">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="our-blog-title">
						<span class="sub-title" id="blog">OUR BLOG</span>
						<h2 class="h2-title">Latest News Feed</h2>
					</div>
				</div>
			</div>
			<div class="main-blog-slider">
				<div class="row blog-slider">
					<div class="col-lg-4">
						<div class="blog-box wow fadeup-animation" data-wow-delay="0.4s">
							<div class="blog-img-box">
								<div class="blog-img back-img" style="background-image: url('{{ asset('forntend/assets/images/blog-img1.jpg') }}')"></div>
								<div class="blog-date">
									<a href="javascript:void(0);" title="7 March, 2021"><i class="fa fa-calendar" aria-hidden="true"></i>7 March, 2021</a>
								</div>
							</div>
							<div class="blog-text">
								<h3 class="h3-title"><a href="blog-detail.html" title="Blog title">Quisque ut magna id ex aliquet blandit id ac neque.</a></h3>
								<a href="blog-detail.html" title="READ MORE">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="blog-box wow fadeup-animation" data-wow-delay="0.6s">
							<div class="blog-img-box">
								<div class="blog-img back-img" style="background-image: url('{{ asset('forntend/assets/images/blog-img1.jpg') }}')"></div>
								<div class="blog-date">
									<a href="javascript:void(0);" title="7 March, 2021"><i class="fa fa-calendar" aria-hidden="true"></i>7 March, 2021</a>
								</div>
							</div>
							<div class="blog-text">
								<h3 class="h3-title"><a href="blog-detail.html" title="Blog title">Understand Corporate Business Before You.</a></h3>
								<a href="blog-detail.html" title="READ MORE">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="blog-box wow fadeup-animation" data-wow-delay="0.8s">
							<div class="blog-img-box">
								<div class="blog-img back-img" style="background-image: url('{{ asset('forntend/assets/images/blog-img1.jpg') }}')"></div>
								<div class="blog-date">
									<a href="javascript:void(0);" title="7 March, 2021"><i class="fa fa-calendar" aria-hidden="true"></i>7 March, 2021</a>
								</div>
							</div>
							<div class="blog-text">
								<h3 class="h3-title"><a href="blog-detail.html" title="Blog title">The Biggest Contribution Of Corporate.</a></h3>
								<a href="blog-detail.html" title="READ MORE">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Our Blog End -->

	<!-- Contact Us Start -->
	<section class="main-contact-us">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-8 col-lg-9">
					<div class="contact-us-content wow fadeup-animation" data-wow-delay="0.4s">
						<span class="sub-title" id="contact">CONTACT US</span>
						<h4 class="h4-title">Get In Touch With Us</h4>
						@if (session('success'))
								 <span class="alert alert-info">{{ session('success') }}</span>
							@endif
						<div class="contact-form">

							<form class="" method="POST" action="{{ route('getintouch.insert') }}">
								@csrf
								<div class="row">
									<div class="col-md-6">
										<div class="form-box">
											<input name="first_name" type="text"  class="form-input" placeholder="First Name" >
											@error('first_name')
												<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-box">
											<input name="last_name" type="text" class="form-input" placeholder="Last Name" >
											@error('last_name')
												<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-box">
											<input type="email" name="email" class="form-input" placeholder="Email Address" >
											@error('email')
												<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-box">
											<input type="number" name="phone_number" class="form-input" placeholder="Phone No." >
											@error('phone_number')
												<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
									</div>
									<div class="col-12">
										<div class="form-box">
											<textarea name="message" class="form-input"  placeholder="Message..."></textarea>
											@error('message')
												<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
									</div>
									<div class="col-12">
										<div class="form-box">
											<button  type="submit" value="Submit" class="sec-btn"><span>Submit Now</span></button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact Us End -->

	<!-- Partners Start -->
	<div class="main-partners back-img" style="background-image: url('assets/images/partner-back-img.png')">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-2 col-md-4 col-6">
					<div class="partner-box">
						<img src="{{asset('forntend')}}/assets/images/partner-img1.png" alt="Partner Image">
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-6">
					<div class="partner-box">
						<img src="{{asset('forntend')}}/assets/images/partner-img2.png" alt="Partner Image">
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-6">
					<div class="partner-box">
						<img src="{{asset('forntend')}}/assets/images/partner-img3.png" alt="Partner Image">
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-6">
					<div class="partner-box">
						<img src="{{asset('forntend')}}/assets/images/partner-img4.png" alt="Partner Image">
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-6">
					<div class="partner-box">
						<img src="{{asset('forntend')}}/assets/images/partner-img5.png" alt="Partner Image">
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-6">
					<div class="partner-box">
						<img src="{{asset('forntend')}}/assets/images/partner-img6.png" alt="Partner Image">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Partners End -->
@endsection

@section('jsscript')
<script>
    // Portfolio Tabbing JS Start
$(function() {
    var filterList = {
        init: function() {
            // MixItUp plugin
            // http://mixitup.io
            $('#portfoliolist').mixItUp({
                selectors: {
                    target: '.portfolio',
                    filter: '.filter'
                },
                load: {
                    filter: "{{ implode(', ', array_map(function($item) { return '.category-' . $item;  }, $portfolio_category->pluck('id')->toArray()))}}"
                }
            });
        }
    };
    // Run the show!
    filterList.init();
});


document.addEventListener('DOMContentLoaded', function () {
    // Function to animate the counters
    function animateCounters() {
        const counters = document.querySelectorAll('.counting');

        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-count');
                const count = +counter.innerText;

                // Set the speed of the counting (smaller number = faster)
                const speed = target / 200;

                if (count < target) {
                    counter.innerText = Math.ceil(count + speed);
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = target;
                }
            };

            updateCount();
        });
    }

    // Function to animate the progress bars
    function animateProgressBars() {
        const progressBars = document.querySelectorAll('.counter-bar-inner');

        progressBars.forEach(bar => {
            const width = bar.parentElement.getAttribute('data-width');
            bar.style.width = width;
        });
    }

    // Trigger animations when the element is in view
    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function handleScroll() {
        const progressBarSection = document.getElementById('progress_bar');

        if (isElementInViewport(progressBarSection)) {
            animateCounters();
            animateProgressBars();
            // Remove scroll listener after animation triggers
            window.removeEventListener('scroll', handleScroll);
        }
    }

    // Attach scroll event listener to trigger animations when in view
    window.addEventListener('scroll', handleScroll);
    // Trigger the handleScroll on page load
    handleScroll();
});

</script>
@endsection
