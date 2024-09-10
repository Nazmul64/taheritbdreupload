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
                           <form method="POST"action="{{route('portfolio_video_gallery_store')}}">
                            @csrf
                            <input type="hidden"name="portfolio_id"value={{$single_portfolio_video->id}}>
                                 <div class="form-group">
                                    <label>Caption</label>
                                    <input text="text" class="form-control   @error('caption')  @enderror"  placeholder="Enter Your caption"name="caption"value="{{old('caption')}}">
                                     @error('caption')
                                         <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Video Id</label>
                                    <input text="text" class="form-control   @error('video_id')  @enderror"  placeholder="Enter Your video_id"name="video_id"value="{{old('video_id')}}">
                                     @error('video_id')
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
                    <h5>Photo Gallery {{ $single_portfolio_video->name}} <a style="float: right" class="btn btn-success text-white"href="{{route('index.added')}}">Back Pages</a></h5>
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-bordered">
                         <thead>
                            <tr>
                                <th>Video Id</th>
                                <th>Caption</th>
                                <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach ($photo_gallery_items_video as $items )
                              <tr>
                                <td>
                                    <iframe src="http://www.youtube.com/embed/{{$items->video_id}}" height="120px" width="150px"></iframe>
                                </td>
                                <td>{{$items->caption}}</td>
                                <td class="d-flex ">
                                    <a  href="{{route('portfolio_video_gallery_edit',$items->id)}}" class="btn btn-success btn-sm text-white mx-1">Edite</a>
                                    <a href="{{route('portfolio_video_delete',$items->id)}}" class="btn btn-danger btn-sm text-white">Delete</a>
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
