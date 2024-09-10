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
                <div class="card-header">Welcome</div>
                 @if (session('success') )
                    <span class="alert alert-info">{{ session('success') }}</span>
                 @endif
                <div class="card-body">
                   <form method="POST"action="{{route('portfilos.insert')}}"enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label>subtitle</label>
                            <input type="text" class="form-control   @error('subtitle')  @enderror "  placeholder="Enter Your subtitle"name="subtitle">
                            @error('subtitle')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>maintitle</label>
                            <input type="text" class="form-control   @error('maintitle')  @enderror "  placeholder="Enter Your maintitle"name="maintitle">
                            @error('maintitle')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>name</label>
                            <input type="text" class="form-control   @error('name')  @enderror "  placeholder="Enter Your Name"name="name">
                            @error('name')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <select class="form-control"name="portfoli_category_id">
                                <label>Portfilo Category Select</label>
                                <option>Select Categorices</option>
                                @foreach ($portfilo_category as $portfilo_category)
                                     <option value="{{$portfilo_category->id}}">{{$portfilo_category->category_name}}</option>
                                @endforeach
                                @error('name')
                                   <span class="text-danger">{{$message}}</span>
                                @enderror
                            </select>
                        </div>
                        <div class="form-group">
                            <label>slug</label>
                            <input type="text" class="form-control   @error('slug')  @enderror "  placeholder="Enter Your Slug"name="slug">
                            @error('slug')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>short_description</label>
                            <input type="text" class="form-control   @error('short_description')  @enderror "  placeholder="Enter Your Short_description"name="short_description">
                            @error('short_description')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" class="form-control   @error('description')  @enderror "  placeholder="Enter Your description"name="description"></textarea>
                            @error('description')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Project_client</label>
                            <input type="text" class="form-control   @error('project_client')  @enderror "  placeholder="Enter Your Project_client"name="project_client">
                            @error('project_client')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>project_company</label>
                            <input type="text" class="form-control   @error('project_company')  @enderror "  placeholder="Enter Your Project_company"name="project_company">
                            @error('project_company')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>project_start_date</label>
                            <input type="text" class="form-control   @error('project_start_date')  @enderror "  placeholder="Enter Your project_start_date"name="project_start_date">
                            @error('project_start_date')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>project_end_date</label>
                            <input type="text" class="form-control   @error('project_end_date')  @enderror "  placeholder="Enter Your project_end_date"name="project_end_date">
                            @error('project_end_date')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>project_cost</label>
                            <input type="text" class="form-control   @error('project_cost')  @enderror "  placeholder="Enter Your project_cost"name="project_cost">
                            @error('project_cost')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>project_website</label>
                            <input type="text" class="form-control   @error('project_website')  @enderror "  placeholder="Enter Your project_website"name="project_website">
                            @error('project_website')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>seo_title</label>
                            <input type="text" class="form-control   @error('seo_title')  @enderror "  placeholder="Enter Your seo_title"name="seo_title">
                            @error('seo_title')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>seo_meta_description</label>
                            <input type="text" class="form-control   @error('seo_meta_description')  @enderror "  placeholder="Enter Your seo_meta_description"name="seo_meta_description">
                            @error('seo_meta_description')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Photo</label>
                            <input type="file" class="form-control   @error('photo')  @enderror"  placeholder="Enter Your photo"name="photo">
                             @error('photo')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Banner</label>
                            <input type="file" class="form-control   @error('banner')  @enderror"  placeholder="Enter Your banner"name="banner">
                             @error('banner')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Background Image One</label>
                            <input type="file" class="form-control   @error('background1')  @enderror"  placeholder="Enter Your background1"name="background1">
                             @error('background1')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Background Image two</label>
                            <input type="file" class="form-control   @error('background2')  @enderror"  placeholder="Enter Your background2"name="background2">
                             @error('background2')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
