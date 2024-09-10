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
                <div class="card-header">EXPERIENCE</div>
                 @if (session('experience') )
                    <span class="alert alert-info">{{ session('experience') }}</span>
                 @endif
                <div class="card-body">
                   <form method="POST"action="{{route('experience.insert')}}"enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control   @error('title')  @enderror "  placeholder="Enter Your Title"name="title">
                            @error('title')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" class="form-control  @error('description')  @enderror "  placeholder="Enter Your description"name="description"row="10"></textarea>
                             @error('description')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Designing</label>
                            <input type="text" class="form-control  @error('designing')  @enderror "  placeholder="Enter Your Designing"name="designing">
                             @error('designing')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Progress-1</label>
                            <input type="text" class="form-control  @error('progress_1')  @enderror "  placeholder="Enter Your progress_1"name="progress_1">
                             @error('progress_1')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>development</label>
                            <input type="text" class="form-control  @error('development')  @enderror "  placeholder="Enter Your development"name="development">
                             @error('development')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Progress-2</label>
                            <input type="text" class="form-control  @error('progress_2')  @enderror "  placeholder="Enter Your progress_2"name="progress_2">
                             @error('progress_2')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                          <div class="form-group">
                            <label>Optimization-2</label>
                            <input type="text" class="form-control  @error('optimization')  @enderror "  placeholder="Enter Your optimization"name="optimization">
                             @error('optimization')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>progress_3</label>
                            <input type="text" class="form-control  @error('progress_3')  @enderror "  placeholder="Enter Your progress_3"name="progress_3">
                             @error('progress_3')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
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
@endsection
