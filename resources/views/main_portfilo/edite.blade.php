@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        </ol>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Details</div>
                    @if (session('success'))
                        <span class="alert alert-info">{{ session('success') }}</span>
                    @endif
                    <div class="card-body">
                        <form method="POST"action="{{route('update.portfilos',$data_show->id)}}"enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <select class="form-control"name="portfoli_category_id">
                                    <label>Portfilo Category Select</label>
                                    @foreach ($portfilo_category as $items)
                                    <option value="{{$items->id}}" {{ $items->id == $data_show->portfoli_category_id ? 'selected' : '' }}>{{$items->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group"> <label>Name</label> <input type="text"
                                    class="form-control   @error('name')  @enderror "
                                    placeholder="Enter Your Title"name="name" value="{{ $data_show->name }}"> @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group"> <label>subtitle</label> <input type="text"
                                class="form-control   @error('subtitle')  @enderror "
                                placeholder="Enter Your subtitle"name="subtitle" value="{{ $data_show->subtitle }}"> @error('subtitle')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group"> <label>maintitle</label> <input type="text"
                            class="form-control   @error('maintitle')  @enderror "
                            placeholder="Enter Your maintitle"name="maintitle" value="{{ $data_show->maintitle }}"> @error('maintitle')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                            <div class="form-group"> <label>Slug</label>
                                <textarea name="slug" id="slug" rows="5" class="form-control  @error('slug')  is-invalid   @enderror "
                                    placeholder="Enter Your slug"name="slug">{{ $data_show->slug }}</textarea> @error('slug')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group"> <label>short_description</label>
                                <textarea name="short_description" id="short_description" rows="5"
                                    class="form-control  @error('short_description')  is-invalid   @enderror "
                                    placeholder="Enter Your short_description"name="slug">{{ $data_show->short_description }}</textarea> @error('short_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group"> <label>description</label>
                                <textarea name="description" id="short_description" rows="5"
                                    class="form-control  @error('description')  is-invalid   @enderror "
                                    placeholder="Enter Your description"name="description">{{ $data_show->description }}</textarea> @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group"> <label>project_client</label> <input type="text"
                                    class="form-control   @error('project_client')  @enderror "
                                    placeholder="Enter Your project_client"name="project_client"
                                    value="{{ $data_show->project_client }}"> @error('project_client')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group"> <label>project_company</label> <input type="text"
                                    class="form-control   @error('project_company')  @enderror "
                                    placeholder="Enter Your project_company"name="project_company"
                                    value="{{ $data_show->project_company }}"> @error('project_company')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group"> <label>project_start_date</label> <input type="text"
                                    class="form-control   @error('project_start_date')  @enderror "
                                    placeholder="Enter Your project_start_date"name="project_start_date"
                                    value="{{ $data_show->project_start_date }}"> @error('project_start_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group"> <label>project_end_date</label> <input type="text"
                                    class="form-control   @error('project_end_date')  @enderror "
                                    placeholder="Enter Your project_end_date"name="project_end_date"
                                    value="{{ $data_show->project_end_date }}"> @error('project_end_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group"> <label>project_website</label> <input type="text"
                                    class="form-control   @error('project_website')  @enderror "
                                    placeholder="Enter Your project_website"name="project_website"
                                    value="{{ $data_show->project_website }}"> @error('project_website')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group"> <label>seo_title</label> <input type="text"
                                    class="form-control   @error('seo_title')  @enderror "
                                    placeholder="Enter Your seo_title"name="seo_title" value="{{ $data_show->seo_title }}">
                                @error('seo_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group"> <label>seo_meta_description</label> <input type="text"
                                    class="form-control   @error('seo_meta_description')  @enderror "
                                    placeholder="Enter Your seo_meta_description"name="seo_meta_description"
                                    value="{{ $data_show->seo_meta_description }}"> @error('seo_meta_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group"> <label>project_cost</label> <input type="text"
                                    class="form-control   @error('project_cost')  @enderror "
                                    placeholder="Enter Your project_cost"name="project_cost"
                                    value="{{ $data_show->project_cost }}"> @error('project_cost')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        <div class="form-group"> <label> old Photo</label><br> <img height="100"
                                src="{{ asset('uploads/portfolio') }}/{{ $data_show->photo }}"> @error('photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group"> <label> New Photo</label> <input type="file"
                                class="form-control   @error('new_photo')  @enderror"
                                placeholder="Enter Your photo"name="new_photo"> @error('new_photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group"> <label> old banner</label><br> <img height="100"
                                src="{{ asset('uploads/portfolio') }}/{{ $data_show->banner }}"> @error('banner')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group"> <label> New Banner</label> <input type="file"
                                class="form-control   @error('banner_new')  @enderror"
                                placeholder="Enter Your banner_new"name="banner_new"> @error('banner_new')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group"> <label> old background1</label><br> <img height="100"
                            src="{{ asset('uploads/portfolio') }}/{{ $data_show->background1 }}"> @error('background1')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group"> <label> New background1</label> <input type="file"
                            class="form-control   @error('banner_new')  @enderror"
                            placeholder="Enter Your background1"name="background1"> @error('background1')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group"> <label> old background2</label><br> <img height="100"
                        src="{{ asset('uploads/portfolio') }}/{{ $data_show->banner }}"> @error('background2')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group"> <label> New background2</label> <input type="file"
                        class="form-control   @error('background2')  @enderror"
                        placeholder="Enter Your background2"name="background2"> @error('background2')
                        <span class="text-danger">{{ $message }}</span>
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
