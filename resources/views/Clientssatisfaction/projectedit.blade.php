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
                    <div class="card-header">Edit Details<h3><a class="btn btn-success float-right" href="{{route('clientsatifactionsshow')}}">Back Pages</a></h3></div>
                    @if (session('success'))
                        <span class="alert alert-info">{{ session('success') }}</span>
                    @endif
                    <div class="card-body">
                        <form method="POST"action="{{route('update',$data_show->id)}}"enctype="multipart/form-data">
                            @csrf

                            <div class="form-group"> <label>watchus_title</label> <input type="text"
                                    class="form-control   @error('watchus_title')  @enderror "
                                    placeholder="Enter Your Title"name="watchus_title" value="{{ $data_show->watchus_title }}"> @error('watchus_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group"> <label>see_how_title</label> <input type="text"
                                class="form-control   @error('see_how_title')  @enderror "
                                placeholder="Enter Your See"name="see_how_title" value="{{ $data_show->see_how_title }}"> @error('see_how_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group"> <label>video_id</label> <input type="text"
                            class="form-control   @error('video_id')  @enderror "
                            placeholder="Enter Your video_id"name="video_id" value="{{ $data_show->video_id }}"> @error('video_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                            <div class="form-group"> <label>happy_client1</label>
                                <textarea name="happy_client1" id="happy_client1" rows="5" class="form-control  @error('slug')  is-invalid   @enderror "
                                    placeholder="Enter Your happy_client1"name="happy_client1">{{ $data_show->happy_client1 }}</textarea> @error('happy_client1')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group"> <label>happy_count1</label>
                                <textarea name="happy_count1" id="happy_count1" rows="5"
                                    class="form-control  @error('happy_count1')  is-invalid   @enderror "
                                    placeholder="Enter Your count1"name="happy_count1">{{ $data_show->happy_count1 }}</textarea> @error('happy_count1')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group"> <label>happy_client2</label>
                                <textarea name="happy_client2" id="happy_client2" rows="5"
                                    class="form-control  @error('happy_client2')  is-invalid   @enderror "
                                    placeholder="Enter Your happy_client2"name="happy_client2">{{ $data_show->happy_client2 }}</textarea> @error('happy_client2')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group"> <label>happy_count2</label> <input type="text"
                                    class="form-control   @error('happy_count2')  @enderror "
                                    placeholder="Enter Your count2"name="happy_count2"
                                    value="{{ $data_show->happy_count2 }}"> @error('happy_count2')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group"> <label>happy_client3</label> <input type="text"
                                    class="form-control   @error('happy_client3')  @enderror "
                                    placeholder="Enter Your happy_client3"name="happy_client3"
                                    value="{{ $data_show->happy_client3 }}"> @error('happy_client3')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group"> <label>happy_count3</label> <input type="text"
                                    class="form-control   @error('happy_count3')  @enderror "
                                    placeholder="Enter Your happy_count3"name="happy_count3"
                                    value="{{ $data_show->happy_count3 }}"> @error('happy_count3')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group"> <label>happy_client4</label> <input type="text"
                                    class="form-control   @error('happy_client4')  @enderror "
                                    placeholder="Enter Your happy_client4"name="happy_client4"
                                    value="{{ $data_show->happy_client4 }}"> @error('happy_client4')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group"> <label>happy_count4</label> <input type="text"
                                    class="form-control   @error('happy_count4')  @enderror "
                                    placeholder="Enter Your happy_count4"name="happy_count4"
                                    value="{{ $data_show->happy_count4 }}"> @error('count4')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>



                        <div class="form-group"> <label> old Photo</label><br> <img height="100"
                                src="{{ asset('uploads/happy_clients') }}/{{ $data_show->photo }}"> @error('photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group"> <label> New Photo</label> <input type="file"
                                class="form-control   @error('new_photo')  @enderror"
                                placeholder="Enter Your photo"name="new_photo"> @error('new_photo')
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
