@extends('admin.layout')
@section('title','Pages Management')
@section('main-content')
<div class="container index-client ">
    <div class="row bg-white  p-2 border-radius-12">

        <div class="col-12 ">
            <div class="row top-div">
                <div class="col-sm-6 mt-2">
                    <h3 class="text-uppercase weight-800 ">Pages Management</h3>
                </div>
                <div class="col-sm-6 mt-2 btn-new-client text-right">
                    <a href="{{route('page.create')}}" class="btn btn-primary"><i class="fa fa-user"></i>Create New Page</a>
                </div>
            </div>

        </div>


        <div class="col-sm-12 mt-5">
                <table class="table table-striped table-bordered venus-data-table" style="width: 100%" >
                    <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Page Name</th>
                        <th>Page Description</th>
                        <th>Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pages as $page)

                        <tr>
                            <td>{{$page->id}}</td>
                            <td>{{$page->title}}</td>
                            <td>{{$page->description}}</td>
                            <td>
                                <a href="{{route('page.edit',$page->id)}}"><i class="fa fa-edit"></i></a>
                                <form class="deleteItem" action="{{route('page.delete',$page->id)}}" method="post" >
                                    @csrf
                                    @method('DELETE')
                                    <button href="" type="submit">
                                        <i type="submit" class="fa fa-trash-o text-danger"></i>
                                    </button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
        </div>
    </div>





</div>
@endsection
