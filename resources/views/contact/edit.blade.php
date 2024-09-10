@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Contact Information</div>
                 @if (session('updated') )
                    <span class="alert alert-info">{{ session('updated') }}</span>
                 @endif
                  {{-- @if ( session('edit'))
                        <span class="alert alert-info">{{ session('edit') }}</span>
                 @endif --}}
                <div class="card-body">
                   <form method="POST"action="{{url('experiencedataedit.update',$edit ->id )}}"enctype="multipart/form-data">
                    @csrf

                        <div class="form-group">
                            <label>Email_photo</label>
                            <input type="text" class="form-control   @error('Email_photo')  is-invalid @enderror "  placeholder="Enter Your Title"name="email_photo"value="{{ $edit->email_photo}}">
                            @error('Email_photo')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>description</label>
                            <textarea name="description" id="" rows="5"  class="form-control  @error('description')  is-invalid   @enderror " placeholder="Enter Your description">{{ $edit->description}}</textarea>
                            @error('description')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>designing</label>
                            <input name="designing" id="" rows="5"  class="form-control  @error('designing')  is-invalid   @enderror " placeholder="Enter Your designing"value="{{ $edit->designing}}">
                            @error('designing')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>progress_1</label>
                            <input name="progress_1" id="" rows="5"  class="form-control  @error('progress_1')  is-invalid   @enderror " placeholder="Enter Your progress_1="{{ $edit->progress_1}}">
                            @error('progress_1')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>development</label>
                            <input name="development" id="" rows="5"  class="form-control  @error('development')  is-invalid   @enderror " placeholder="Enter Your development"value="{{ $edit->development}}">
                            @error('development')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>progress_2</label>
                            <input name="progress_2" id="" rows="5"  class="form-control  @error('progress_2')  is-invalid   @enderror " placeholder="Enter Your progress_2"value="{{ $edit->progress_2}}">
                            @error('progress_2')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>optimization</label>
                            <input name="optimization" id="" rows="5"  class="form-control  @error('optimization')  is-invalid   @enderror " placeholder="Enter Your optimization"value="{{ $edit->optimization}}">
                            @error('optimization')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>progress_3</label>
                            <input name="progress_3" id="" rows="5"  class="form-control  @error('progress_3')  is-invalid   @enderror " placeholder="Enter Your progress_3"value="{{ $edit->progress_3}}">
                            @error('progress_3')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label> Old Awesome_photo</label><br>
                            <img height="100" src="{{ asset('uploads/experience') }}/{{ $edit->photo}}">
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
