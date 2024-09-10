@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Main Portfilo</div>
                <div class="card-body">
                   <table class="table-bordered table table-responsive">
                      <thead>
                           <tr>
                               <th>Watchus</th>
                               <th>See</th>
                               <th>video_id</th>
                               <th>client1</th>
                               <th>count1</th>
                               <th>client2</th>
                               <th>count2</th>
                               <th>client3</th>
                               <th>count3</th>
                               <th>client4</th>
                               <th>count4</th>
                               <th>photo</th>
                               <th>Action</th>
                           </tr>
                      </thead>
                      <tbody>
                        @foreach ( $project as $item )
                            <tr>
                               <td>{{ $item->watchus_title }}</td>
                                <td>{{ $item->see_how_title }}</td>
                                <td>{{ $item->video_id }}</td>
                               <td>{{ $item->happy_client1 }}</td>
                               <td>{{ $item->happy_count1 }}</td>
                               <td>{{ $item->happy_client2}}</td>
                               <td>{{ $item->happy_count2 }}</td>
                               <td>{{ $item->happy_client3 }}</td>
                               <td>{{ $item->happy_count3}}</td>
                               <td>{{ $item->happy_client4 }}</td>
                               <td>{{ $item->happy_count4 }}</td>

                               <td>
                                <img height="100" src="{{ asset('uploads/happy_clients') }}/{{ $item->photo }}">
                              </td>
                              <td class="d-flex">

                                <a href="{{ route('projectedit', $item->id) }}" class="btn btn-success mx-2"><i class="fa fa-edit"></i></a>

                                <a href="{{ route('delete', $item->id) }}"class="btn btn-danger "><i class="fa fa-trash"></i></a>
                              </td>
                        @endforeach
                      </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
