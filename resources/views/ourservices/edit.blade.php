@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Awesome Service</div>
                 @if (session('awesome') )
                    <span class="alert alert-info">{{ session('awesome') }}</span>
                 @endif
                  @if ( session('edit'))
                        <span class="alert alert-info">{{ session('edit') }}</span>
                 @endif
                <div class="card-body">
                   <form method="POST"action="{{route('ourservices.update',$awesome->id)}}"enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                     <div class="form-group">
                            <label>Status </label>
                            <select name="status" class="form-control ">
                                <option value="show"{{ ($awesome->status == 'show')? 'selected':'' }}>show</option>
                                <option value="hide"{{ ($awesome->status == 'hide')? 'selected':'' }}>hide</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Awesome_title</label>
                            <input type="text" class="form-control   @error('awesome_title')  is-invalid @enderror "  placeholder="Enter Your Title"name="awesome_title"value="{{ $awesome->awesome_title}}">
                            @error('awesome_title')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Awesome_description</label>
                            <textarea name="awesome_description" id="" rows="5"  class="form-control  @error('awesome_description')  is-invalid   @enderror " placeholder="Enter Your description">{{ $awesome->awesome_description}}</textarea>
                            @error('awesome_description')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label> Old Awesome_photo</label><br>
                            <img height="100" src="{{ asset('uploads/ourservices_photos') }}/{{ $awesome->photo}}">
                        </div>
                         <div class="form-group">
                            <label> New Awesome_photo</label>
                            <input type="file" class="form-control   @error('new_photo')  is-invalid   @enderror"  placeholder="Enter Your photo"name="new_photo">
                             @error('new_photo')
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
