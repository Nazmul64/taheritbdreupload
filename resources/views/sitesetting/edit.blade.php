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
                   <form method="POST"action="{{ route('siteseting.update',$edit->id) }}"enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label>information</label>
                            <input type="text" class="form-control   @error('information')  is-invalid @enderror "  placeholder="Enter Your information"name="information"value="{{ $edit->information}}">
                            @error('information')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>facebook_link</label>
                            <textarea name="facebook_link" id="" rows="5"  class="form-control  @error('facebook_link')  is-invalid   @enderror " placeholder="Enter Your position">{{ $edit->facebook_link}}</textarea>
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
                            <label>twitter_link</label>
                            <input name="twitter_link" id="" rows="5"  class="form-control  @error('twitter_link')  is-invalid   @enderror " placeholder="Enter Your twitter_link"value="{{ $edit->twitter_link}}">
                            @error('twitter_link')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>adderes</label>
                            <input name="adderes" id="" rows="5"  class="form-control  @error('adderes')  is-invalid   @enderror " placeholder="Enter Your adderes"value="{{ $edit->adderes}}">
                            @error('adderes')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>phone_1</label>
                            <input name="phone_1" id="" rows="5"  class="form-control  @error('phone_1')  is-invalid   @enderror " placeholder="Enter Your phone_1"value="{{ $edit->phone_1}}">
                            @error('phone_1')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>phone_2</label>
                            <input name="phone_2" id="" rows="5"  class="form-control  @error('phone_2')  is-invalid   @enderror " placeholder="Enter Your phone_2"value="{{ $edit->phone_2}}">
                            @error('phone_2')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>email_1</label>
                            <input name="email_1" id="" rows="5"  class="form-control  @error('email_1')  is-invalid   @enderror " placeholder="Enter Your email_1"value="{{ $edit->email_1}}">
                            @error('email_1')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>email_2</label>
                            <input name="email_2" id="" rows="5"  class="form-control  @error('email_2')  is-invalid   @enderror " placeholder="Enter Your email_2"value="{{ $edit->email_2}}">
                            @error('email_2')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label> Old <Em></Em>photo </label><br>
                            <img height="100" src="{{ asset('uploads/setting') }}/{{ $edit->photo}}">
                        </div>
                         <div class="form-group">
                            <label> Old <Em></Em>site_icon</label><br>
                            <img height="100" src="{{ asset('uploads/setting') }}/{{ $edit->site_icon}}">
                        </div>
                         <div class="form-group">
                            <label> New site_photo</label>
                            <input type="file" class="form-control   @error('new_photo')  is-invalid   @enderror"  placeholder="Enter Your new_photo"name="new_photo">
                             @error('new_photo')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>  New_site_icon_photo</label>
                            <input type="file" class="form-control   @error('new_icon')  is-invalid   @enderror"  placeholder="Enter Your new_site_logo"name="new_icon">
                             @error('new_icon')
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
