@extends('forntend.master')
@section('main_content')
<!-- Banner Start -->
<section class="main-banner inner-banner about-banner back-img" id="main-banner" style="background-image: url('{{ asset('uploads/portfolio/' . $portfoli_details->background1) }}');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content">
                    <h1 class="h1-title wow fadeup-animation" data-wow-delay="0.2s">Portfolio Details</h1>
                    <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.4s">
                        <ul>
                            <li><a href="#main-banner" title="Home">Home</a></li>
                            <li><a href="#main-banner" title="Portfolio">Portfolio</a></li>
                            <li>Portfolio Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->

<!-- Portfolio Details Start -->
<section class="main-portfolio-details">
    <div class="container">

        <div class="row">
            <div class="col-lg-9">
                <div class="portfolio-detail-content">
                    <h3 class="h3-title">{{$portfoli_details->short_description}}</h3>
                    <p>{{$portfoli_details->description}}</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="portfolio-detail-info">
                    <div class="portfolio-detail-info-box">
                        <p>Client Name:</p>
                        <h3 class="h3-title">{{$portfoli_details->project_client}}</h3>
                    </div>
                    <div class="portfolio-detail-info-box">
                        <p>Client Company:</p>
                        <h3 class="h3-title">{{$portfoli_details->project_company}}</h3>
                    </div>
                    <div class="portfolio-detail-info-box">
                        <p>Project Start Date:</p>
                        <h3 class="h3-title">{{$portfoli_details->project_start_date}}</h3>
                    </div>
                    <div class="portfolio-detail-info-box">
                        <p>End Date:</p>
                        <h3 class="h3-title">{{$portfoli_details->project_end_date}}</h3>
                    </div>
                    <div class="portfolio-detail-info-box">
                        <p>End Date:</p>
                        <h3 class="h3-title">{{$portfoli_details->project_end_date}}</h3>
                    </div>
                    <div class="portfolio-detail-info-box">
                        <p>Porject Cost :</p>
                        <h3 class="h3-title">{{$portfoli_details->project_cost}}</h3>
                    </div>
                    <div class="portfolio-detail-info-box">
                        <p>Porject Website :</p>
                        <h3 class="h3-title">{{$portfoli_details->project_website}}</h3>
                    </div>
                    <div class="social-icon">
                        <a href="javascript:void(0);" title="Follow on Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="javascript:void(0);" title="Follow on Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="javascript:void(0);" title="Follow on Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-portfolio-details-img">
            <div class="row">
                <div class="col-12">
                    <div class="portfolio-detail-img back-img" style="background-image: url('{{ asset('uploads/portfolio/' . $portfoli_details->banner) }}')"></div>
                    <div class="portfolio-detail-img back-img" style="background-image: url('{{ asset('uploads/portfolio/' . $portfoli_details->photo) }}')"></div>
                    <div class="portfolio-detail-img back-img" style="background-image: url('{{ asset('uploads/portfolio/' . $portfoli_details->banner) }}')"></div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Portfolio Details End -->
@endsection
