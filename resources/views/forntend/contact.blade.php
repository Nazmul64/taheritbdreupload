@extends('forntend.master')
@section('main_content')
	<section class="main-banner inner-banner about-banner back-img" id="main-banner" style="background-image: url('{{ asset('forntend') }}/assets/images/inner-banner-bg.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="banner-content">
						<h1 class="h1-title wow fadeup-animation" data-wow-delay="0.2s">Contact Us</h1>
						<div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.4s">
							<ul>
								<li><a href="index.html" title="Home">Home</a></li>
								<li>Contact Us</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Banner End -->

	<!-- Contact Page Content Start -->
	<div class="contact-page-content">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 order-lg-1 order-2">
					<div class="contact-page-img wow right-animation" data-wow-delay="0.2s">
                         @foreach ($contactus as $contactus)
							<img src="{{ asset('uploads/contact_photos/' . $contactus->main_photo) }}" alt="Partner Image">
					</div>
				</div>
				<div class="col-lg-6 order-lg-2 order-1">
					<div class="contact-page-form wow left-animation" data-wow-delay="0.2s">
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
			<div class="contact-page-link">


                <div class="row justify-content-center">
					<div class="col-lg-4 col-sm-6">
						<div class="contact-link-box wow fadeup-animation" data-wow-delay="0.2s">
							<div class="contact-link-text">
								<div class="contact-link-icon">
									<img src="{{ asset('uploads/contact_photos/' . $contactus->icon_photo) }}" alt="Mail Icon">
								</div>
								<h3 class="h3-title">Call Now</h3>
								<p><a href="javascript:void(0);" title="Call on +91 784 7849 784">{{ $contactus->information_one }}</a></p>
								<p><a href="javascript:void(0);" title="Call on +91 874 8745 987">{{ $contactus->information_two }}</a></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="contact-link-box wow fadeup-animation" data-wow-delay="0.3s">
							<div class="contact-link-text">
								<div class="contact-link-icon">
									<img src="{{ asset('uploads/contact_photos/' . $contactus->Location_photo) }}" alt="Mail Icon">
								</div>
								<h3 class="h3-title">Location</h3>
								<p><a href="javascript:void(0);" title="1247/Plot No. 39, 15th Phase, Colony, Kukatpally, Hyderabad">{{ $contactus->Location }}</span></a></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="contact-link-box wow fadeup-animation" data-wow-delay="0.4s">
							<div class="contact-link-text">
								<div class="contact-link-icon">
									<img src="{{ asset('uploads/contact_photos/' . $contactus->emailaddress_photo) }}" alt="Mail Icon">
								</div>
								<h3 class="h3-title">Email Address</h3>
								<p><a href="javascript:void(0);" title="Mail on info@gmail.com">{{ $contactus->address_1 }}</a></p>
								<p><a href="javascript:void(0);" title="Mail on services@gmail.com">{{ $contactus->address_2 }}</a></p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Contact Page Content End -->

	<!-- Contact Map Start -->
	{{-- <div class="contact-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7016.328264634826!2d77.02397704760743!3d28.444468247121968!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d183e9439f8d1%3A0x8feee7d4d8275f66!2sCommissionerate%20Of%20Police!5e0!3m2!1sen!2sin!4v1618593106816!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div> --}}
	<!-- Contact Map End -->

	<!-- Partners Start -->
	<div class="main-partners back-img page-contact-partners" style="background-image: url('{{ asset('forntend') }}/assets/images/partner-back-img2.png')">
		<div class="container">
            <div class="row align-items-center">
                @php
                    $partnerPhotos = json_decode($contactus->patner_photo);
                @endphp
                    @foreach ($partnerPhotos as $key => $partnerPhoto )
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="partner-box">

                                 <img src="{{ asset('uploads/contact_photos/' . $partnerPhoto) }}" alt="Partner Image">

                            </div>
                        </div>
                   @endforeach
			</div>
         @endforeach
		</div>
	</div>
	<!-- Partners End -->
@endsection
