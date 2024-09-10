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
                <div class="card-header">Pricing DATASHOW</div>
                <div class="card-body">
                   <table class="table table-bordered table-responsive">
                            <tr>
                                <th>basic</th>
                                <th>price</th>
                                <th>life_time_update</th>
                                <th>month</th>
                                <th>permitted_domain</th>
                                <th>personal_project</th>
                                <th>email_support</th>
                                <th>skype_support</th>
                                <th>anydesk_support</th>
                                <th>whatsapp_support</th>
                                <th>installation_cpanel</th>
                                <th>photo</th>
                                <th>Action</th>
                            </tr>
                       <tbody>
                          @foreach ( $datashow  as $datashow)
                        <tr>
                          
                                <td>{{ $datashow->basic}}</td>
                                <td>{{ $datashow->price}}</td>
                                <td>{{ $datashow->life_time_update}}</td>
                                <td>{{ $datashow->month}}</td>
                                <td>{{ $datashow->permitted_domain}}</td> 
                                <td>{{ $datashow->personal_project}}</td>
                                <td>{{ $datashow->email_support}}</td>
                                <td>{{ $datashow->skype_support}}</td> 
                                <td>{{ $datashow->anydesk_support}}</td>
                                <td>{{ $datashow->whatsapp_support}}</td>
                                <td>{{ $datashow->installation_cpanel}}</td>
                                <td>
                                    <img height="80px" src="{{asset('uploads/pricing')}}/{{$datashow->photo}}" alt="Banner Image">
                                </td>
                                <td class="d-flex">
                                    <a href="{{ url('pricing.delete',$datashow->id) }}" class="btn btn-danger text-white">Delete</a>
                                    <a href="{{ url('pricing.dataedit',$datashow->id ) }}" class="btn btn-success text-white mx-2">Update</a>
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
