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
                <div class="card-header">Add Contact</div>
                 @if (session('insertdata') )
                    <span class="alert alert-info">{{ session('insertdata') }}</span>
                 @endif
                <div class="card-body">
                   <form method="POST"action="{{route('ContactinformationsController.store')}}"enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label>main_photo</label>
                            <input type="file" class="form-control   @error('main_photo')  @enderror "  placeholder="Enter Your Title"name="main_photo">
                            @error('main_photo')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>icon_photo</label>
                            <input type="file" class="form-control  @error('icon_photo')  @enderror "  placeholder="Enter Your description"name="icon_photo">
                             @error('icon_photo')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Location_photo</label>
                            <input type="file" class="form-control  @error('Location_photo')  @enderror "  placeholder="Enter Your Location_photo"name="Location_photo">
                             @error('Location_photo')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Emailaddress_photo</label>
                            <input type="file" class="form-control  @error('emailaddress_photo')  @enderror "  placeholder="Enter Your emailaddress_photo"name="emailaddress_photo">
                             @error('emailaddress_photo')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Call Now_1 </label>
                            <input type="text" class="form-control   @error('information_one')  @enderror"  placeholder="Enter Your information_one"name="information_one">
                             @error('information_one')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Call Now_2</label>
                            <input type="text" class="form-control   @error('information_two')  @enderror"  placeholder="Enter Your information_one"name="information_two">
                             @error('information_two')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                          <div class="form-group">
                            <label>Location</label>
                            <input type="text" class="form-control   @error('Location')  @enderror"  placeholder="Enter Your Location"name="Location">
                             @error('Location')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" class="form-control   @error('address')  @enderror"  placeholder="Enter Your address_1"name="address_1">
                             @error('address')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" class="form-control   @error('address')  @enderror"  placeholder="Enter Your address_2"name="address_2">
                             @error('address')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Patner Photo</label>
                            <input multiple type="file" class="form-control   @error('photo')  @enderror"  placeholder="Enter Your photo"name="patner_photo[]">
                             @error('patner_photo')
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
