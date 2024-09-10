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
                                <th>about_title</th>
                                <th>about_description</th>
                                <th>about_photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $about as $about )
                            <tr>
                                <td>{{ $about->about_title }}</td>
                                <td>{{ $about->about_description }}</td>
                                <td>
                                    <img height="100" src="{{ asset('uploads/about_photos') }}/{{ $about->about_photo }}">
                                </td>
                                <td class="d-flex">
                                    <a href="{{ route('about.edit',$about->id) }}" class="btn btn-info text-white">Edit</a>
                                    {{-- <a href="{{ route('category.show',$categories->id) }}" class="btn btn-success text-white mx-3">Details</a> --}}
                                    <form method="POST" action="{{ route('about.destroy',$about->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger text-white mx-2">Delete</button>
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
