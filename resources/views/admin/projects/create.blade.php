@extends('admin.layout')
@section('title','New Client')


@section('main-content')
    <div class="container">
        <div class="row bg-white p-3 border-radius-12">
            <div class="col-12 mb-5 ">
                <h3 class="">New Project</h3>
            </div>
            <div class=" col-md-8 col-sm-12 ">
                <form method="POST" action="{{route('project.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="name">Project Name</label>
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

                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="clients">Client</label>
                                <select class="form-control" id="client" name="client" >
                                    <option>---</option>
                                @foreach($clients as $client)
                                        <option value="{{$client->id}} ">{{$client->name}}</option>
                                    @endforeach
                                </select>
                                @error('client')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="department">Department</label>
                                <select  class="form-control" id="department" name="department" >
                                    <option value=""></option>
                                @foreach($departments as $department)
                                        <option value="{{$department}}">{{$department}}</option>
                                    @endforeach
                                </select>
                                @error('department')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                                  <div class="form-group">
                                    <label for="dateStart">Date Start</label>
                                    <input type="date"
                                           class="form-control
                                        @error('dateStart') is-invalid @enderror "
                                           id="dateStart" name="dateStart"
                                           value="{{old('dateStart')}}">

                                    @error('dateStart')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="dateEnd">Date End</label>
                                <input type="date"
                                       class="form-control
                                        @error('dateEnd') is-invalid @enderror "
                                       id="dateEnd" name="dateEnd"
                                       value="{{old('dateEnd')}}">

                                @error('dateEnd')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control
                                     @error('description') is-invalid @enderror "
                                          rows="8"
                                          id="description"
                                          name="description">
                                   {{old('description')}}
                                 </textarea>
                                @error('description')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="industry">Industry</label>
                                <textarea class="form-control
                                     @error('industry') is-invalid @enderror "
                                          rows="7"
                                          id="industry"
                                          name="industry">
                                   {{old('industry')}}
                                 </textarea>
                                @error('industry')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="work_we_delivered">Work We Delivered</label>
                                <textarea class="form-control
                                     @error('work_we_delivered') is-invalid @enderror "
                                          rows="7"
                                          id="work_we_delivered"
                                          name="work_we_delivered">
                                   {{old('work_we_delivered')}}
                                 </textarea>
                                @error('work_we_delivered')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>




                    <div class="form-group">
                        <label for="thumbnails">Thumbnail</label>
                        <div class="input-group ">
                            <div class="custom-file">
                                <input type="file" name="thumbnails[]"  id="thumbnails" class="custom-file-input" >
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>

                        @error('thumbnail')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for=" project_photos"> Project Photos</label>
                        <div class="input-group increment">
                            <div class="custom-file">
                                <input type="file" name=" project_photos[]"  id="project_photos" class="custom-file-input" >
                                <label class="custom-file-label">Choose file</label>
                            </div>
                            <div class="input-group-btn mb-2">
                                <button class="btn btn-success" type="button"><i class="fa fa-plus"></i>Add Another file</button>
                            </div>
                        </div>

                        @error('project_photos')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror

                    </div>

                    <div class="clone hide">
                        <div class="control-group input-group" style="margin-top:10px">
                            <div class="custom-file">
                                <input type="file" name=" project_photos[]"  id=" project_photos" class="custom-file-input" >
                                <label class="custom-file-label">Choose file</label>
                            </div>
                            <div class="input-group-btn">
                                <button class="btn btn-danger btn-remove-file" type="button"><i class="fa fa-minus"></i> Remove</button>
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary btn-block p-2">Create New Project</button>
                </form>
            </div>
        </div>


    </div>
@endsection
