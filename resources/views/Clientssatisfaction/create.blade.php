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
                <div class="card-header">Client Project <h3><a class="btn btn-success float-right" href="{{route('clientsatifactionsshow')}}">Back Pages</a></h3></div>
                 @if (session('success') )
                    <span class="alert alert-info">{{ session('success') }}</span>
                 @endif
                <div class="card-body">
                   <form method="POST"action="{{route('clientsatifactions.store')}}"enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label>Watchus_title</label>
                            <input type="text" class="form-control   @error('watchus_title')  @enderror "  placeholder="Enter Your watchus_title"name="watchus_title">
                            @error('watchus_title')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>See_how_title</label>
                            <input type="text" class="form-control  @error('see_how_title')  @enderror "  placeholder="Enter Your see_how_title"name="see_how_title">
                             @error('see_how_title')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Video_id</label>
                            <input type="text" class="form-control  @error('video_id')  @enderror "  placeholder="Enter Your video_id"name="video_id">
                             @error('video_id')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Happy_client1</label>
                            <input type="text" class="form-control  @error('happy_client1')  @enderror "  placeholder="Enter Your happy_client1"name="happy_client1">
                             @error('happy_client1')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Happy_count1</label>
                            <input type="text" class="form-control  @error('happy_count1')  @enderror "  placeholder="Enter Your happy_count1"name="happy_count1">
                             @error('happy_count1')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                          <div class="form-group">
                            <label>Happy_client2</label>
                            <input type="text" class="form-control  @error('happy_client2')  @enderror "  placeholder="Enter Your happy_client2"name="happy_client2">
                             @error('happy_client2')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Happy_count2</label>
                            <input type="text" class="form-control  @error('happy_count2')  @enderror "  placeholder="Enter Your happy_count2"name="happy_count2">
                             @error('happy_count2')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Happy_client3</label>
                            <input type="text" class="form-control  @error('happy_client3')  @enderror "  placeholder="Enter Your happy_client3"name="happy_client3">
                             @error('happy_client3')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Happy_count3</label>
                            <input type="text" class="form-control  @error('happy_count3')  @enderror "  placeholder="Enter Your happy_count3"name="happy_count3">
                             @error('happy_count3')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Happy_client4</label>
                            <input type="text" class="form-control  @error('happy_client4')  @enderror "  placeholder="Enter Your happy_client4"name="happy_client4">
                             @error('happy_client4')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Happy_count4</label>
                            <input type="text" class="form-control  @error('happy_count4')  @enderror "  placeholder="Enter Your happy_count4"name="happy_count4">
                             @error('happy_count4')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Images</label>
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
