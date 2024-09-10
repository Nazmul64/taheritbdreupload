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
                <div class="card-header">Our Team Section</div>
                 @if (session('success') )
                    <span class="alert alert-info">{{ session('success') }}</span>
                 @endif
                <div class="card-body">
                   <form method="POST"action="{{ route('team.insert') }}"enctype="multipart/form-data">
                    @csrf
                       <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control   @error('name')  @enderror "  placeholder="Enter Your name"name="name">
                            @error('name')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Position</label>
                            <input type="text" class="form-control   @error('position')  @enderror "  placeholder="Enter Your position"name="position">
                            @error('position')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>facebook_link</label>
                            <input type="text" class="form-control   @error('facebook_link')  @enderror "  placeholder="Enter Your facebook_link"name="facebook_link">
                            @error('facebook_link')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" class="form-control   @error('instagram_link')  @enderror "  placeholder="Enter Your Instagram"name="instagram_link">
                            @error('instagram_link')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         
                         <div class="form-group">
                            <label>Twitter </label>
                            <input type="text" class="form-control   @error('twitter_link')  @enderror "  placeholder="Enter Your twitter_link"name="twitter_link">
                            @error('twitter_link')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Youtube </label>
                            <input type="text" class="form-control   @error('youtube_link')  @enderror "  placeholder="Enter Your youtube_link"name="youtube_link">
                            @error('youtube_link')
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
