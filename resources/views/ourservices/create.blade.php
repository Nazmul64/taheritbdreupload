@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Awesome Service</div>
                 @if (session('awesome') )
                    <span class="alert alert-info">{{ session('awesome') }}</span>
                 @endif
                <div class="card-body">
                   <form method="POST"action="{{route('ourservices.store')}}"enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label>Awesome_title</label>
                            <input type="text" class="form-control   @error('awesome_title')  is-invalid @enderror "  placeholder="Enter Your Title"name="awesome_title">
                            @error('awesome_title')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Awesome_description</label>
                            <textarea name="awesome_description" id="" rows="5"  class="form-control  @error('awesome_description')  is-invalid   @enderror " placeholder="Enter Your description"></textarea>
                            @error('awesome_description')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Awesome_photo</label>
                            <input type="file" class="form-control   @error('awesome_photo')  is-invalid   @enderror"  placeholder="Enter Your photo"name="photo">
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
