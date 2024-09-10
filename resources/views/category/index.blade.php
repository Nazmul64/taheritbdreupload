@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Category</div>
                <div class="card-body">
                   <table class="table-bordered table">
                      <thead>
                           <tr>
                               <th>Category Name</th>
                                <th>Status</th>
                               <th>Category Tagline</th>
                               <th>Category Photo</th>
                                <th>Action</th>
                           </tr>
                      </thead>
                      <tbody>
                        @foreach ( $categories as $categories )
                            <tr>
                               <td>{{ $categories->title }}</td>
                                <td>{{ $categories->status }}</td>
                               <td>{{ $categories->description }}</td>
                               <td>
                                  <img height="100" src="{{ asset('uploads/category_photos') }}/{{ $categories->photo }}">
                              </td>
                               <td class="d-flex">
                                  <a href="{{ route('category.edit',$categories->id) }}" class="btn btn-info text-white">Edit</a>
                                  <a href="{{ route('category.show',$categories->id) }}" class="btn btn-success text-white mx-3">Details</a>
                                   <form method="POST"action="{{ route('category.destroy',$categories->id) }}">
                                    @csrf
                                    @method('DELETE')
                                      <button  class="btn btn-danger text-white">Delete</button>
                                   </form>
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
