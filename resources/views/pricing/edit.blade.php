<?php declare(strict_types=1); ?>
@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pricing Update</div>
                 @if (session('edit') )
                    <span class="alert alert-info">{{ session('edit') }}</span>
                 @endif
                  
                <div class="card-body">
                   <form method="POST"action="{{ route('pricing.update',$edit->id) }}"enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label>basic</label>
                            <input type="text" class="form-control   @error('basic')  is-invalid @enderror "  placeholder="Enter Your Title"name="basic"value="{{ $edit->basic}}">
                            @error('basic')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>price</label>
                            <textarea name="price" id="" rows="5"  class="form-control  @error('price')  is-invalid   @enderror " placeholder="Enter Your price">{{ $edit->price}}</textarea>
                            @error('price')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>life_time_update</label>
                            <input name="life_time_update" id="" rows="5"  class="form-control  @error('life_time_update')  is-invalid   @enderror " placeholder="Enter Your life_time_update"value="{{ $edit->life_time_update}}">
                            @error('life_time_update')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>month</label>
                            <input name="month"  rows="5"  class="form-control  @error('month')  is-invalid   @enderror " placeholder="Enter Your month" value="{{ $edit->month}}">
                            @error('month')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>permitted_domain</label>
                            <input name="permitted_domain" id="" rows="5"  class="form-control  @error('permitted_domain')  is-invalid   @enderror " placeholder="Enter Your permitted_domain"value="{{ $edit->permitted_domain}}">
                            @error('permitted_domain')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>personal_project</label>
                            <input name="personal_project" id="" rows="5"  class="form-control  @error('personal_project')  is-invalid   @enderror " placeholder="Enter Your personal_project"value="{{ $edit->personal_project}}">
                            @error('personal_project')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>email_support</label>
                            <input name="email_support" id="" rows="5"  class="form-control  @error('email_support')  is-invalid   @enderror " placeholder="Enter Your email_support"value="{{ $edit->email_support}}">
                            @error('email_support')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>skype_support</label>
                            <input name="skype_support" id="" rows="5"  class="form-control  @error('skype_support')  is-invalid   @enderror " placeholder="Enter Your skype_support"value="{{ $edit->skype_support}}">
                            @error('skype_support')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>anydesk_support</label>
                            <input name="anydesk_support" id="" rows="5"  class="form-control  @error('anydesk_support')  is-invalid   @enderror " placeholder="Enter Your anydesk_support"value="{{ $edit->anydesk_support}}">
                            @error('anydesk_support')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>skype_support</label>
                            <input name="whatsapp_support" id="" rows="5"  class="form-control  @error('whatsapp_support')  is-invalid   @enderror " placeholder="Enter Your whatsapp_support"value="{{ $edit->whatsapp_support}}">
                            @error('whatsapp_support')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>installation_cpanel</label>
                            <input name="installation_cpanel" id="" rows="5"  class="form-control  @error('installation_cpanel')  is-invalid   @enderror " placeholder="Enter Your installation_cpanel"value="{{ $edit->installation_cpanel}}">
                            @error('installation_cpanel')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label> Old Awesome_photo</label><br>
                            <img height="100" src="{{ asset('uploads/pricing') }}/{{ $edit->photo}}">
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
