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
                <div class="card-header">TESTIMONIAL</div>
                 @if (session('success') )
                    <span class="alert alert-info">{{ session('success') }}</span>
                 @endif
                <div class="card-body">
                   <form method="POST"action="{{ route('testmonials.insert') }}"enctype="multipart/form-data">
                    @csrf
                         <div class="form-group">
                            <label>Name </label>
                            <input type="text" class="form-control   @error('name')  is-invalid  @enderror "  placeholder="Enter Your name"name="name">
                            @error('name')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                         </div>
                         <div class="form-group">
                            <label>description </label>
                            <input type="text" class="form-control   @error('description_2')  is-invalid  @enderror "  placeholder="Enter Your description_2"name="description_2">
                            @error('description_2')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Review</label>
                            <input type="text" class="form-control   @error('title_1') is-invalid @enderror "  placeholder="Enter Your title_1"name="title_1">
                            @error('title_1')
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
