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
                <div class="card-header">Category Edit Details</div>
                 @if ( session('success'))
                     <span class="alert alert-info">{{ session('success') }}</span>
                 @endif
                <div class="card-body">
                   <form method="POST"action="{{route('portfilo.update',$edite_category->id)}}">
                    @csrf
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" class="form-control   @error('category_name')  @enderror "  placeholder="Update Category Name"name="category_name"value="{{ $edite_category->category_name }}">
                            @error('category_name')
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
