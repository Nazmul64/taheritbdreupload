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
                   <form method="POST"action="{{ route('team.update',$edit->id) }}"enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label>name</label>
                            <input type="text" class="form-control   @error('name')  is-invalid @enderror "  placeholder="Enter Your name"name="name"value="{{ $edit->name}}">
                            @error('name')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>position</label>
                            <textarea name="position" id="" rows="5"  class="form-control  @error('position')  is-invalid   @enderror " placeholder="Enter Your position">{{ $edit->position}}</textarea>
                            @error('position')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>facebook_link</label>
                            <input name="facebook_link" id="" rows="5"  class="form-control  @error('facebook_link')  is-invalid   @enderror " placeholder="Enter Your facebook_link"value="{{ $edit->facebook_link}}">
                            @error('facebook_link')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>instagram_link</label>
                            <input name="instagram_link" id="" rows="5"  class="form-control  @error('instagram_link')  is-invalid   @enderror " placeholder="Enter Your instagram_link="value="{{ $edit->instagram_link}}">
                            @error('instagram_link')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>youtube_link</label>
                            <input name="youtube_link" id="" rows="5"  class="form-control  @error('youtube_link')  is-invalid   @enderror " placeholder="Enter Your youtube_link"value="{{ $edit->youtube_link}}">
                            @error('youtube_link')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>twitter_link</label>
                            <input name="twitter_link" id="" rows="5"  class="form-control  @error('twitter_link')  is-invalid   @enderror " placeholder="Enter Your twitter_link"value="{{ $edit->twitter_link}}">
                            @error('twitter_link')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                         <div class="form-group">
                            <label> Old <Em></Em>xpertise</label><br>
                            <img height="100" src="{{ asset('uploads/expertise') }}/{{ $edit->photo}}">
                        </div>
                         <div class="form-group">
                            <label> New Awesome_photo</label>
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
