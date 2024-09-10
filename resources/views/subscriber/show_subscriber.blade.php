@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
          <div class="col-12">
            <h1 class="h4">All Users Subscribers</h1>
              <table class="table table-bordered">
                  <thead>
                        <tr>
                            <th>All Subscriber List</th>
                            <th>Action</th>
                        </tr>
                 </thead>
                   <tbody>
                       @foreach ($usersubscriber as $usersubscriber )
                        <tr>
                            <td>{{ $usersubscriber->email }}</td>
                            <td>
                                <a href="{{ url('subscriberdeleted') }}/{{ $usersubscriber->id  }}"class="bg-danger text-white p-10"style="padding:10px">Deleted</a>
                            </td>
                        </tr>
                       @endforeach
                        
                   </tbody>
              </table>
          </div>
    </div>
</div>
@endsection