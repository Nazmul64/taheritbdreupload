@extends('layouts.app')
@section('breadcrumb')
<div class="page-title-right">
        <ol class="breadcrumb m-0">
           <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
      </ol>
</div>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                   <div class="row">

                            <div class="col-xl-3 col-sm-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                    <div class="media">
                                        <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                                            <i class="mdi mdi-currency-usd avatar-title font-30 text-white"></i>
                                        </div>

                                        <div class="wigdet-two-content media-body">
                                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Total Revenue</p>
                                            <h3 class="font-weight-medium my-2">$ <span data-plugin="counterup">65,841</span></h3>
                                            <p class="m-0">Jan - Apr 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card-box widget-box-two widget-two-custom ">
                                    <div class="media">
                                        <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                                            <i class="mdi mdi-account-multiple avatar-title font-30 text-white"></i>
                                        </div>

                                        <div class="wigdet-two-content media-body">
                                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Total Unique Visitors</p>
                                            <h3 class="font-weight-medium my-2"> <span data-plugin="counterup">26,521</span></h3>
                                            <p class="m-0">Jan - Apr 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card-box widget-box-two widget-two-custom ">
                                    <div class="media">
                                        <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                                            <i class="mdi mdi-crown avatar-title font-30 text-white"></i>
                                        </div>

                                        <div class="wigdet-two-content media-body">
                                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Number of Transactions</p>
                                            <h3 class="font-weight-medium my-2"><span data-plugin="counterup">7,842</span></h3>
                                            <p class="m-0">Jan - Apr 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card-box widget-box-two widget-two-custom ">
                                    <div class="media">
                                        <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                                            <i class="mdi mdi-auto-fix  avatar-title font-30 text-white"></i>
                                        </div>

                                        <div class="wigdet-two-content media-body">
                                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Conversation Rate</p>
                                            <h3 class="font-weight-medium my-2"><span data-plugin="counterup">2.07</span>%</h3>
                                            <p class="m-0">Jan - Apr 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
