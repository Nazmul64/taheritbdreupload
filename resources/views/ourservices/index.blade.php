@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Category</div>
                 @if ( session('delete'))
                        <span class="alert alert-info">{{ session('delete') }}</span>
                 @endif
                <div class="card-body">
                   <table class="table-bordered table">
                      <thead>
                           <tr>
                               <th>Ourservices Name</th>
                               <th>Ourservices description</th>
                               <th>Ourservices Photo</th>
                                <th>Action</th>
                           </tr>
                      </thead>
                      <tbody>
                        @foreach ( $ourservices as $ourservices)
                          <tr>
                             <td>{{ $ourservices->awesome_title }}</td>
                             <td>{{ $ourservices->awesome_description }}</td>
                             <td>
                                 <img height="100" src="{{ asset('uploads/ourservices_photos') }}/{{ $ourservices->photo }}">
                             </td>
                            <td class="d-flex ">
                                 <a href="{{ route('ourservices.edit',$ourservices->id) }}" class="btn bnt-sm btn-info text-white ">Edit</a>
                                 <a href="{{ route('ourservices.show',$ourservices->id) }}" class="btn bnt-sm btn-success text-white mx-2">Details</a>
                                  <form method="POST"action={{ route('ourservices.destroy',$ourservices->id) }}>
                                    @csrf
                                    @method('DELETE')
                                     <button type="submit" class="btn bnt-sm btn-danger text-white">Delete</button>
                                </form>

                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                   </table>
                {{-- </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
