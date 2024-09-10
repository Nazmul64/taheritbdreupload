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
                <div class="card-header">Edit Details</div>
                 @if ( session('edit'))
                     <span class="alert alert-info">{{ session('edit') }}</span>
                 @endif
                <div class="card-body">
                   <form method="POST"action="{{route('category.update',$category->id)}}"enctype="multipart/form-data">
                    @csrf
                     @method('PATCH')
                      <div class="form-group">
                            <label>status</label>
                        <select name="status"class="form-control">
                              <option value="show"{{ $category->status=='show'?'selected':''}}>Show</option>
                               <option value="hide"{{ $category->status=='hide'?'selected':''}}>Hide</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control   @error('title')  @enderror "  placeholder="Enter Your Title"name="title"value="{{ $category->title }}">
                            @error('title')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" id="description" rows="5"  class="form-control  @error('description')  is-invalid   @enderror " placeholder="Enter Your description"name="description">{{ $category->description }}</textarea>
                            @error('description')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label> old Photo</label><br>
                             <img height="100" src="{{ asset('uploads/category_photos') }}/{{ $category->photo }}">
                             @error('photo')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label> New Photo</label>
                            <input type="file" class="form-control   @error('new_photo')  @enderror"  placeholder="Enter Your photo"name="new_photo">
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
