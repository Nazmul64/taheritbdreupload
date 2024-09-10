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
                 @if (session('delete'))
                        <span class="alert alert-info">{{ session('delete') }}</span>
                    @endif
                <div class="card-header">Pricing DATASHOW</div>
                <div class="card-body">
                   <table class="table table-bordered table-responsive">
                            <tr>
                                <th>information</th>
                                <th>facebook_link</th>
                                <th>instagram_link Link</th>
                                <th> twitter_link link</th>
                                <th>adderes </th>
                                <th>phone_1</th>
                                <th>phone_2</th>
                                <th>email_1</th>
                                <th>email_2</th>
                                <th>site icon</th>
                                <th>photo</th>
                                <th>Action</th>
                            </tr>
                       <tbody>
                          @foreach ( $datashow  as $datashow)
                        <tr>

                                <td>{{ $datashow->information}}</td>
                                <td>{{ $datashow->facebook_link}}</td>
                                <td>{{ $datashow->instagram_link}}</td>
                                <td>{{ $datashow->twitter_link}}</td>
                                <td>{{ $datashow->adderes}}</td>
                                <td>{{ $datashow->phone_1}}</td>
                                <td>{{ $datashow->phone_2}}</td>
                                <td>{{ $datashow->email_1}}</td>
                                <td>{{ $datashow->phone_2}}</td>
                                <td>
                                     <img height="80px" src="{{asset('uploads/setting')}}/{{  $datashow->photo }}" alt="About Image">
                                </td>
                                <td>
                                     <img height="80px" src="{{asset('uploads/setting')}}/{{  $datashow->site_icon }}" alt="About Image">
                                </td>
                                
                                <td class="d-flex">
                                    <a href="{{ url('sitesetdelete.delete',$datashow->id) }}" class="btn btn-danger text-white">Delete</a>
                                    <a href="{{ url('site.edit',$datashow->id ) }}" class="btn btn-success text-white mx-2">Edit</a>
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
