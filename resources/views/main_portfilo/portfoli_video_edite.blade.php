@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        </ol>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Details <span><a href="{{route('portfolio_video_gallery_show',$portfoli_video->portfolio_id)}}" style="float:right"class="btn btn-info">Back Pages</a></span></div>
                    @if (session('success'))
                        <span class="alert alert-info">{{ session('success') }}</span>
                    @endif
                    <div class="card-body">
                        <form method="POST"action="{{route('portfolio_video_gallery_update',$portfoli_video->id)}}">
                            @csrf
                        <div class="form-group">
                             <label>Caption</label>
                             <input type="text"name="caption"value="{{$portfoli_video->caption}}"style="width:500%;box-sizing:border-box;">
                        </div>
                        <div class="form-group">
                             <label>Vide ID</label>
                            <input type="text"name="video_id"value="{{$portfoli_video->video_id}}"style="width:500%;box-sizing:border-box;">
                       </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
