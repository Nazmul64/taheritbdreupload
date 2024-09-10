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
                <div class="card-header">Home</div>

                <div class="card-body">
                   <table class="table-bordered table">
                       <thead>
                            <th>SL .NO</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                       </thead>
                       <tbody>
                        @foreach ($customers as $customer)
                        <tr>
                           <td>{{$loop->index+1}}</td>
                           <td>{{$customer->name}}</td>
                           <td>{{$customer->email}}</td>
                           <td>
                            <a class="btn btn-info"href="{{route('singleoffer',$customer->id)}}">Send</a>
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
