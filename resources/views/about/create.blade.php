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
                <div class="card-header">Welcome</div>
                 @if (session('insert') )
                    <span class="alert alert-info">{{ session('insert') }}</span>
                 @endif
                <div class="card-body">
                   <form method="POST"action="{{route('about.store')}}"enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label>About-Title</label>
                            <input type="text" class="form-control   @error('about_title') is-invalid  @enderror "  placeholder="Enter Your about_title"name="about_title">
                            @error('about_title')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>About-Description</label>
                            <textarea type="text" class="form-control  @error('about_description') is-invalid  @enderror " rows="5" placeholder="Enter Your about_description"name="about_description"></textarea>
                             @error('about_description')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>About-Photo</label>
                            <input type="file" class="form-control   @error('about_photo')  is-invalid  @enderror"  placeholder="Enter Your about_photo"name="about_photo">
                             @error('about_photo')
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
