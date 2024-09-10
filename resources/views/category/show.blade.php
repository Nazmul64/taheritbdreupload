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
                <div class="card-header">Welcome</div>
                 @if (session('add') )
                    <span class="alert alert-info">{{ session('add') }}</span>
                 @endif
                <div class="card-body">
                   <table class="table-bordered table">
                      <tr>
                         <th>Title</th>
                         <th>Description</th>
                         <th>Photo</th>
                      </tr>
                   </table>
                   <tbody>
                        <tr>
                          <td>{{ $category->title}}</td>
                          <td>{{ $category->description}}</td>
                          <td>
                             <img  height="50" src="{{ asset('uploads/category_photos') }}/{{ $category->photo}}">
                          </td>
                        </tr>
                   </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
