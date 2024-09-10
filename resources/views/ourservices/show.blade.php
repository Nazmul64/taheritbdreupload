@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Show Details</div>
                <div class="card-body">
                   <table class="table-bordered table">
                      <thead>
                           <th>Awesome-Title</th>
                           <th>Awesome-Description</th>
                           <th>Awesome-Photo</th>
                      </thead>
                      <tbody>
                        @foreach ($show_data as $show_data )
                          <tr>
                              <td>{{  $show_data->awesome_title }}</td>
                              <td>{{  $show_data->awesome_description }}</td>
                              <td>
                                 <img height="50" src="{{ asset('uploads/ourservices_photos') }}/{{$show_data->photo }}">
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

