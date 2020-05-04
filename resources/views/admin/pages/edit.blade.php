@extends('admin.layout')
@section('title','Edit Page')


@section('main-content')
    <div class="container">
        <div class="row bg-white p-3 border-radius-12">
            <div class="col-12 mb-5 ">
                <h3 class="">Update Page</h3>
            </div>
            <div class=" col-sm-10 ">
                <form method="POST" action="{{route('page.update',$page->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="title"> Page Title</label>
                                <input type="text"
                                       class="form-control
                                       @error('title') is-invalid @enderror "
                                       id="title" name="title"
                                       value="{{$page->title}}">

                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="note">Description</label>
                                <textarea class="form-control
                                      @error('description') is-invalid @enderror "
                                          rows="7"
                                          id="description"
                                          name="description">
                                       {{$page->description}}
                           </textarea>
                            </div>

                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary btn-block">Update Page</button>
                </form>
            </div>
        </div>


    </div>
@endsection
