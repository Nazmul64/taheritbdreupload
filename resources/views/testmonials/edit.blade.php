@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Awesome Service</div>
                 @if (session('success') )
                    <span class="alert alert-info">{{ session('success') }}</span>
                 @endif
                  {{-- @if ( session('edit'))
                        <span class="alert alert-info">{{ session('edit') }}</span>
                 @endif --}}
                <div class="card-body">
                   <form method="POST"action="{{route('updatetestomonila',$edit->id)}}"enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label>name</label>
                            <input type="text" class="form-control   @error('name')  is-invalid @enderror "  placeholder="Enter Your name"name="name"value="{{ $edit->name}}">
                            @error('name')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>description_2</label>
                            <textarea name="description_2" id="" rows="5"  class="form-control  @error('description_2')  is-invalid   @enderror " placeholder="Enter Your position">{{ $edit->description_2}}</textarea>
                            @error('description_2')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>title_1</label>
                            <input name="title_1" id="" rows="5"  class="form-control  @error('title_1')  is-invalid   @enderror " placeholder="Enter Your title_1"value="{{ $edit->title_1}}">
                            @error('title_1')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label> Old Testmonial</label><br>
                            <img height="100" src="{{ asset('uploads/testimonial') }}/{{ $edit->photo}}">
                        </div>
                         <div class="form-group">
                            <label> New Testmonial</label>
                            <input type="file" class="form-control   @error('new_photo')  is-invalid   @enderror"  placeholder="Enter Your photo"name="new_photo">
                             @error('new_photo')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                       <button type="submit" class="btn btn-primary">Update</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
