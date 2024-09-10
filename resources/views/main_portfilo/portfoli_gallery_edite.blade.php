@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        </ol>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Details <span><a href="{{route('portfolio_video_gallery_show',$photo_gallery_edite->portfolio_id)}}" style="float:right"class="btn btn-info">Back Pages</a></span></div>
                    @if (session('success'))
                        <span class="alert alert-info">{{ session('success') }}</span>
                    @endif
                    <div class="card-body">
                        <form method="POST"action="{{route('portfolio_photo_gallery_update',$photo_gallery_edite->id)}}"enctype="multipart/form-data">
                            @csrf
                        <div class="form-group"> <label> old Photo</label><br> <img height="100"
                                src="{{ asset('uploads/portfolio') }}/{{ $photo_gallery_edite->photo }}"> @error('photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group"> <label> New Photo</label> <input type="file"
                            class="form-control   @error('new_photo')  @enderror"
                            placeholder="Enter Your photo"name="new_photo"> @error('new_photo')
                            <span class="text-danger">{{ $message }}</span>
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
