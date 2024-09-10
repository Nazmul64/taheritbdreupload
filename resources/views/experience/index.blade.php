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
                 @if (session('deleteexperience'))
                        <span class="alert alert-info">{{ session('deleteexperience') }}</span>
                    @endif
                <div class="card-header">EXPERIENCE DATASHOW</div>
                <div class="card-body">
                   <table class="table table-bordered table-responsive">
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Designing</th>
                                <th>Progress_1</th>
                                <th>Development</th>
                                <th>Progress_2</th>
                                <th>Optimization</th>
                                <th>Progress_3</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                       <tbody>
                        @foreach ($experiencedatashow as $experiencedatashow )
                            <tr>
                                <td>{{ $experiencedatashow->title }}</td>
                                <td><textarea rows="10">{{ $experiencedatashow->description }}</textarea></td>
                                <td>{{ $experiencedatashow->designing }}</td>
                                <td>{{ $experiencedatashow->progress_1 }}</td>
                                <td>{{ $experiencedatashow->development }}</td>
                                <td>{{ $experiencedatashow->progress_2 }}</td>
                                <td>{{ $experiencedatashow->optimization }}</td>
                                <td>{{ $experiencedatashow->progress_3 }}</td>
                                <td>
                                    <img height="80px" src="{{asset('uploads/experience')}}/{{$experiencedatashow->photo}}" alt="Banner Image">
                                </td>
                                <td class="d-flex">
                                    <a class=" btn btn-danger mx-2"href="{{ url('experience/delete') }}/{{$experiencedatashow->id }}">Delete</a>
                                    <a class=" btn btn-success"href="{{ url('experiencedataedit.edit') }}/{{$experiencedatashow->id }}">Edit</a>
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
