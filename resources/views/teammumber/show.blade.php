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
                 @if (session('success'))
                        <span class="alert alert-info">{{ session('success') }}</span>
                    @endif
                <div class="card-header">Pricing DATASHOW</div>
                <div class="card-body">
                   <table class="table table-bordered table-responsive">
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Facebook Link</th>
                                <th> Instagram link</th>
                                <th>Twitter link</th>
                                <th>Youtube_link</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                       <tbody>
                          @foreach ( $datashow  as $datashow)
                        <tr>

                                <td>{{ $datashow->name}}</td>
                                <td>{{ $datashow->position}}</td>
                                <td>{{ $datashow->facebook_link}}</td>
                                <td>{{ $datashow->instagram_link}}</td>
                                <td>{{ $datashow->twitter_link}}</td>
                                <td>{{ $datashow->youtube_link}}</td>
                                <td>
                                    <img height="80px" src="{{asset('uploads/expertise')}}/{{  $datashow->photo }}" alt="About Image">
                                </td>
                                <td class="d-flex">
                                    <a href="{{ url('team.delete',$datashow->id) }}" class="btn btn-danger text-white">Delete</a>
                                    <a href="{{ url('team.editshow',$datashow->id ) }}" class="btn btn-success text-white mx-2">Edit</a>
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
