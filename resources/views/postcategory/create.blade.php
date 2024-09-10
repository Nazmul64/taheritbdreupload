@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Post Category</div>
                 @if (session('awesome') )
                    <span class="alert alert-info">{{ session('awesome') }}</span>
                 @endif
                <div class="card-body">
                   <form method="POST"action="{{route('ourservices.store')}}"enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" class="form-control   @error('category_name')  is-invalid @enderror "  placeholder="Enter Your Title"name="category_name">
                            @error('category_name')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Category Slug</label>
                            <input type="text" class="form-control   @error('category_slug')  is-invalid @enderror "  placeholder="Enter Your Title"name="category_slug">
                            @error('category_slug')
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
