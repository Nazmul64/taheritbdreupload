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
                <div class="card-header">Edit Pages </div>
                 @if ( session('success'))
                     <span class="alert alert-info">{{ session('success') }}</span>
                 @endif
                <div class="card-body">
                   <form method="POST"action="{{route('about.update',$about->id)}}"enctype="multipart/form-data">
                    @csrf
                     @method('PATCH')
                        <div class="form-group">
                            <label>about_title</label>
                            <input type="text" class="form-control   @error('about_title')  @enderror "  placeholder="Enter Your about_title"name="about_title"value="{{ $about->about_title }}">
                            @error('about_title')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="about_description" id="description" rows="5"  class="form-control  @error('about_description')  is-invalid   @enderror " placeholder="Enter Your about_description"name="about_description">{{ $about->about_description }}</textarea>
                            @error('about_description')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label> old Photo</label><br>
                             <img height="100" src="{{ asset('uploads/about_photos') }}/{{ $about->about_photo }}">
                             @error('photo')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label> New Photo</label>
                            <input type="file" class="form-control   @error('new_about_photo')  @enderror"  placeholder="Enter Your photo"name="new_about_photo">
                             @error('new_about_photo')
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
