@extends('admin.layout')
@section('title','Clients')
@section('main-content')
<div class="container index-client ">
    <div class="row bg-white   border-radius-12">

        <div class="col-12 ">
            <div class="row top-div">
                <div class="col-sm-6 mt-2">
                    <h3 class="text-uppercase weight-800 ">Our Clients</h3>
                </div>
                <div class="col-sm-6 mt-2 btn-new-client text-right">
                    <a href="{{route('client.create')}}" class="btn btn-primary"><i class="fa fa-user"></i>Create New Client</a>
                </div>
            </div>

        </div>


        <div class="col-sm-12 mt-5 data-table-div">
                <table class="table table-striped table-bordered venus-data-table"  >
                    <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Client Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Logo</th>
                        <th>Note</th>
                        <th>Request Date</th>
                        <th>Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clients as $client)

                        <tr>
                            <td>{{$client->id}}</td>
                            <td>{{$client->name}}</td>
                            <td>{{$client->email}}</td>
                            <td>{{$client->phone}}</td>
                            <td class="text-center">
                                @foreach($client->getMedia('logos') as $logo)
                                    <img src="{{$logo->getURL()}}" >
                                @endforeach
                            </td>
                            <td>{{$client->note?$client->note:""}}</td>
                            <td>{{$client->request_date}}</td>

                            <td>
                                <a href="{{route('client.edit',$client->id)}}"><i class="fa fa-edit"></i></a>
                                <form class="deleteItem" action="{{route('client.delete',$client->id)}}" method="post" >
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
