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
                 @if (session('add') )
                    <span class="alert alert-info">{{ session('add') }}</span>
                 @endif
                <div class="card-body">
                   <form method="POST"action="{{route('category.store')}}"enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control   @error('title')  @enderror "  placeholder="Enter Your Title"name="title">
                            @error('title')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control  @error('description')  @enderror "  placeholder="Enter Your description"name="description">
                             @error('description')
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
