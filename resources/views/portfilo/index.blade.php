@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @if (session('success') )
                <span class="alert alert-info">{{ session('success') }}</span>
             @endif
                <div class="card-header">List Category</div>
                <div class="card-body">
                   <table class="table-bordered table">
                      <thead>
                           <tr>
                               <th>Category Name</th>
                                <th>Action</th>
                           </tr>
                      </thead>
                      <tbody>
                        @foreach ( $portfolio_category as $portfolio_category )
                            <tr>
                               <td>{{ $portfolio_category->category_name }}</td>
                               <td class="d-flex">
                                  <a href="{{ route('portfilo.edit',$portfolio_category->id) }}" class="btn btn-success text-white"><i class="fa fa-edit" id="edit-icon"></i></a>
                                  <a href="{{ route('portfilo.delete',$portfolio_category->id) }}" class="btn btn-danger text-white mx-3"> <i class="fa fa-trash" id="delete-icon"></i> </a>
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
