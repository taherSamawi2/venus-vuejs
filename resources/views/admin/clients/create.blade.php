@extends('admin.layout')
@section('title','New Client')


@section('main-content')
    <div class="container ">
        <div class="row bg-white p-3 border-radius-12">
            <div class="col-12 mb-5 ">
                <h3 class="">New Client</h3>
            </div>
            <div class=" col-sm-10 ">
                <form method="POST" action="{{route('client.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="name">Client Name</label>
                                <input type="text"
                                       class="form-control
                            @error('name') is-invalid @enderror "
                                       id="name" name="name"
                                       value="{{old('name')}}">

                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email"
                                       class="form-control
                            @error('email') is-invalid @enderror "
                                       id="email" name="email"
                                       value="{{old('email')}}">

                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text"
                                   class="form-control
                                @error('phone') is-invalid @enderror "
                                   id="phone" name="phone"
                                   value="{{old('phone')}}">

                            @error('phone')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         </div>
                    </div>


                    <div class="form-group">
                        <label for="about_client">About Client</label>
                        <textarea class="form-control
                             @error('about_client') is-invalid @enderror "
                                  rows="7"
                                  id="about_client"
                                  name="about_client">
                           {{old('about_client')}}
                         </textarea>
                    </div>

                    <div class="form-group">
                        <label for="client_opinion">Client Opinion</label>
                        <textarea class="form-control
                             @error('client_opinion') is-invalid @enderror "
                                  rows="7"
                                  id="client_opinion"
                                  name="client_opinion">
                           {{old('client_opinion')}}
                         </textarea>
                    </div>


                    <div class="form-group">
                        <label for="logo">Client Logo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="logo"  id="logo" class="custom-file-input">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        @error('logo')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror

                    </div>


                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>


    </div>
@endsection
