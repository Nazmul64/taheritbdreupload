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
                <div class="card-header">Our Setting Section</div>
                 @if (session('success') )
                    <span class="alert alert-info">{{ session('success') }}</span>
                 @endif
                <div class="card-body">
                   <form method="POST"action="{{ route('datainsert.added') }}"enctype="multipart/form-data">
                    @csrf
                       <div class="form-group">
                            <label>Information</label>
                            <input type="text" class="form-control   @error('information') is-invalid  @enderror "  placeholder="Enter Your name"name="information">
                            @error('information')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>facebook_link</label>
                            <input type="text" class="form-control   @error('facebook_link') is-invalid  @enderror "  placeholder="Enter Your facebook_link"name="facebook_link">
                            @error('facebook_link')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" class="form-control   @error('instagram_link')  is-invalid  @enderror "  placeholder="Enter Your Instagram"name="instagram_link">
                            @error('instagram_link')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         
                         <div class="form-group">
                            <label>Twitter </label>
                            <input type="text" class="form-control   @error('twitter_link')  is-invalid  @enderror "  placeholder="Enter Your twitter_link"name="twitter_link">
                            @error('twitter_link')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Adderes </label>
                            <input type="text" class="form-control   @error('adderes')  is-invalid  @enderror "  placeholder="Enter Your adderes"name="adderes">
                            @error('adderes')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Phone-1</label>
                            <input type="text" class="form-control   @error('phone_1') is-invalid @enderror "  placeholder="Enter Your phone_1"name="phone_1">
                            @error('phone_1')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Phone-2</label>
                            <input type="text" class="form-control   @error('phone_2') is-invalid   @enderror "  placeholder="Enter Your phone_1"name="phone_2">
                            @error('phone_2')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Email-1</label>
                            <input type="email" class="form-control   @error('email_1')  @enderror "  placeholder="Enter Your email_1"name="email_1">
                            @error('email_1')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Email-2</label>
                            <input type="email" class="form-control   @error('email_2')  @enderror "  placeholder="Enter Your email_1"name="email_2">
                            @error('email_2')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Site Icon</label>
                            <input type="file" class="form-control   @error('site_icon')  @enderror"  placeholder="Enter Your site_icon"name="site_icon">
                             @error('site_icon')
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
