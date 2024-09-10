@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="card">
                        <div class="card-header">Add Photos</div>
                         @if (session('success') )
                            <span class="alert alert-info">{{ session('success') }}</span>
                         @endif
                        <div class="card-body">
                           <form method="POST"action="{{route('portfolio_photo_gallery_store')}}"enctype="multipart/form-data">
                            @csrf
                            <input type="hidden"name="portfolio_id"value={{$single_portfolio->id}}>
                                 <div class="form-group">
                                    <label>Photo</label>
                                    <input type="file" class="form-control   @error('photo')  @enderror"  placeholder="Enter Your photo"name="photo">
                                     @error('photo')
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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Photo Gallery {{ $single_portfolio->name}} <a style="float: right" class="btn btn-success text-white"href="{{route('index.added')}}">Back Pages</a></h5>
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-bordered">
                         <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach ($photo_gallery_items as $items )
                              <tr>
                                <td>
                                    <img height="100" src="{{ asset('uploads/portfolio') }}/{{ $items->photo }}">
                                </td>
                                <td>
                                    <a href="{{route('portfolio_photo_gallery_edite',$items->id)}}" class="btn btn-success btn-sm text-white">Edite</a>
                                    <a href="{{route('photo_gallery_delete',$items->id)}}" class="btn btn-danger btn-sm text-white">Delete</a>
                                </td>
                              </tr>
                         @endforeach
                         </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
