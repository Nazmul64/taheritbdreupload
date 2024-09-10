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
                <div class="card-header">List Contact</div>
                 @if (session('insertdata') )
                    <span class="alert alert-info">{{ session('insertdata') }}</span>
                 @endif
                <div class="card-body table-responsive">
                    <table class="table-bordered table bg-success" >
                        <thead>
                             <tr>
                                <th>main_photo</th>
                                <th>icon_photo</th>
                                <th>Location_photo</th>
                                <th>Email_photo</th>
                                <th>Call</th>
                                <th>Call</th>
                                <th>Location</th>
                                <th>E_Address_1</th>
                                <th>E_Address_2</th>
                                <th>Patner_Photo</th>
                                <th>Action</th>
                             </tr>
                        </thead>
                        <tbody>
                            @foreach ( $contact as $contact  )
                              <tr>
                                  <td><img src="{{ asset('uploads/contact_photos') }}/{{ $contact->main_photo  }}"></td>
                                  <td><img src="{{ asset('uploads/contact_photos') }}/{{ $contact->icon_photo  }}"></td>
                                  <td>{{ $contact->information_one}}></td>
                                  <td>{{ $contact->information_two}}></td>
                                  <td><img src="{{ asset('uploads/contact_photos') }}/{{ $contact->Location_photo  }}"></td>
                                  <td><img src="{{ asset('uploads/contact_photos') }}/{{ $contact->emailaddress_photo  }}"></td>
                                  <td>{{ $contact->Location}}></td>
                                  <td>{{ $contact->address_1}}></td>
                                  <td>{{ $contact->address_2}}></td>
                                  <td>

                                     @php
                                        $partnerPhotos = json_decode($contact->patner_photo);
                                    @endphp
                                        @foreach ($partnerPhotos as $key => $partnerPhoto )
                                        <img src="{{ asset('uploads/contact_photos/' . $partnerPhoto) }}" at="{{ $partnerPhoto }}" />
                                    @endforeach

                                </td>
                                  <td><a href="" class="btn btn-danger text-white">Edit</a></td>
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
