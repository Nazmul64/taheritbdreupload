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
                               <th>Name</th>
                               <th>subtitle</th>
                               <th>maintitle</th>
                               <th>slug</th>
                               <th>short_description</th>
                               <th>description</th>
                               <th>project_client</th>
                               <th>project_company</th>
                               <th>project_start_date</th>
                               <th>project_end_date</th>
                               <th>project_website</th>
                               <th>seo_title</th>
                               <th>seo_meta_description</th>
                               <th>project_cost</th>
                               <th>Category</th>
                               <th>Gallery</th>
                               <th>photo</th>
                               <th>banner</th>
                               <th>Action</th>
                           </tr>
                      </thead>
                      <tbody>
                        @foreach ( $portfolio_main as $item )
                            <tr>
                               <td>{{ $item->name }}</td>
                                <td>{{ $item->subtitle }}</td>
                                <td>{{ $item->maintitle }}</td>
                               <td>{{ $item->slug }}</td>
                               <td>{{ $item->short_description }}</td>
                               <td>{{ $item->description}}</td>
                               <td>{{ $item->project_client }}</td>
                               <td>{{ $item->project_company }}</td>
                               <td>{{ $item->project_start_date}}</td>
                               <td>{{ $item->project_end_date }}</td>
                               <td>{{ $item->project_website }}</td>
                               <td>{{ $item->seo_title }}</td>
                               <td>{{ $item->seo_meta_description }}</td>
                               <td>{{ $item->project_cost }}</td>
                               <td>
                                {{ $item->rPortfolioCategory->category_name}}
                              </td>
                              <td class="d-flex">
                                <a href="{{route('portfolio_photo_gallery_show',$item->id)}}"class="btn btn-success btn-sm w-100-p mb-10 mx-2">Photo Gallery</a>
                                <a href="{{route('portfolio_video_gallery_show',$item->id)}}"class="btn btn-success btn-sm w-100-p">Video Gallery</a>
                              </td>
                               <td>
                                  <img height="100" src="{{ asset('uploads/portfolio') }}/{{ $item->photo }}">
                              </td>
                              <td>
                                <img height="100" src="{{ asset('uploads/portfolio') }}/{{ $item->banner }}">
                            </td>
                               <td class="d-flex">
                                  <a href="{{ route('edit.portfilos',$item->id) }}" class="btn btn-info text-white"><i class="fa fa-edit" id="edit-icon"></i></a>
                                  <a href="{{ route('delete.portfilos',$item->id) }}" class="btn btn-danger text-white mx-3"><i class="fa fa-trash" id="delete-icon"></i></a>
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
