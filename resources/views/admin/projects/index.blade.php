@extends('admin.layout')
@section('title','Projects')
@section('main-content')
<div class="container index-client ">
    <div class="row bg-white  border-radius-12">

        <div class="col-12 ">
            <div class="row top-div">
                <div class="col-sm-6 mt-2">
                    <h3 class="text-uppercase weight-800 ">Projects</h3>
                </div>
                <div class="col-sm-6 mt-2 btn-new-client text-right">
                    <a href="{{route('project.create')}}" class="btn btn-primary"><i class="fa fa-alig"></i>Create New Project</a>
                </div>
            </div>

        </div>


        <div class="col-sm-12 mt-5 data-table-div">
                <table class="table table-striped table-bordered venus-data-table" >
                    <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Project Name</th>
                        <th>Client Name</th>
                        <th>Department</th>
                        <th>Description</th>
                        <th>Industry</th>
                        <th>Work Delivered</th>
                        <th>Data Start</th>
                        <th>Data End</th>
                        <th>Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projects as $projects)

                        <tr>
                            <td>{{$projects->id}}</td>
                            <td>{{$projects->name}}</td>

                            <td>@foreach ($projects->clients as $client)
                                    {{ $client->name}},
                                    @endforeach
                             </td>
                            <td>{{$projects->department}}</td>
                            <td>{{$projects->description}}</td>
                            <td>{{$projects->industry}}</td>
                            <td>{{$projects->work_we_delivered}}</td>
                            <td>{{$projects->date_start}}</td>
                            <td>{{$projects->date_end}}</td>
                            <td>
                                <a href="{{route('project.edit',$projects->id)}}"><i class="fa fa-edit"></i></a>
                                <form class="deleteItem" action="{{route('project.delete',$projects->id)}}" method="post" >
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
