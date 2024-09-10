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
        <div class="col-12">
            <div class="card">
                 @if (session('success'))
                        <span class="alert alert-info">{{ session('success') }}</span>
                    @endif
                <div class="card-header">Get In Touch With Us</div>
                <div class="card-body">
                   <table class="table table-bordered table-responsive">
                            <tr>
                                <th>first_name</th>
                                <th>last_name</th>
                                <th>email</th>
                                <th>phone_number</th>
                                <th>message</th>
                                <th>Action</th>
                            </tr>
                       <tbody>
                        @foreach ($getintouch as $getintouch )
                            <tr>
                                <td>{{ $getintouch->first_name }}</td>
                                <td>{{ $getintouch->last_name }}</td>
                                <td>{{ $getintouch->phone_number }}</td>
                                <td>{{ $getintouch->message }}</td>
                                <td>{{ $getintouch->email }}</td>
                                <td>
                                    <a href="{{ route('getintouch.delete',$getintouch->id) }}"class="btn btn-danger text-white">Delete</a>
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
