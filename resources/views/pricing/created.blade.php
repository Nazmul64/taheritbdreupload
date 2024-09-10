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
                <div class="card-header">Software Pricing</div>
                 @if (session('pricing') )
                    <span class="alert alert-info">{{ session('pricing') }}</span>
                 @endif
                <div class="card-body">
                   <form method="POST"action="{{ route('pricing.insert') }}"enctype="multipart/form-data">
                    @csrf
                       <div class="form-group">
                            <label>BASIC</label>
                            <input type="text" class="form-control   @error('basic')  @enderror "  placeholder="Enter Your life_time_update"name="basic">
                            @error('basic')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>200$</label>
                            <input type="text" class="form-control   @error('price')  @enderror "  placeholder="Enter Your life_time_update"name="price">
                            @error('price')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Life Time Update</label>
                            <input type="text" class="form-control   @error('life_time_update')  @enderror "  placeholder="Enter Your life_time_update"name="life_time_update">
                            @error('life_time_update')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>6 Months Support</label>
                            <input type="text" class="form-control  @error('month')  @enderror "  placeholder="Enter Your 6_month"name="month">
                             @error('month')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                         <div class="form-group">
                            <label>Permitted for one domain</label>
                            <input type="text" class="form-control  @error('permitted_domain')  @enderror "  placeholder="Enter Your permitted_domain"name="permitted_domain">
                             @error('permitted_domain')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>For personal project</label>
                            <input type="text" class="form-control  @error('personal_project')  @enderror "  placeholder="Enter Your personal_project"name="personal_project">
                             @error('personal_project')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email Support</label>
                            <input type="text" class="form-control  @error('email_support')  @enderror "  placeholder="Enter Your email_support"name="email_support">
                             @error('email_support')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Skype Support</label>
                            <input type="text" class="form-control  @error('skype_support')  @enderror "  placeholder="Enter Your skype_support"name="skype_support">
                             @error('skype_support')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Anydesk Support</label>
                            <input type="text" class="form-control  @error('anydesk_support')  @enderror "  placeholder="Enter Your anydesk_support"name="anydesk_support">
                             @error('anydesk_support')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Whatsapp Support</label>
                            <input type="text" class="form-control  @error('whatsapp_support')  @enderror "  placeholder="Enter Your 6_month"name="whatsapp_support">
                             @error('whatsapp_support')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Free Installation cpanel</label>
                            <input type="text" class="form-control  @error('installation_cpanel')  @enderror "  placeholder="Enter Your 6_month"name="installation_cpanel">
                             @error('installation_cpanel')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Photo</label>
                            <input type="file" class="form-control   @error('photo')  @enderror"  placeholder="Enter Your photo"name="photo">
                             @error('photo')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
