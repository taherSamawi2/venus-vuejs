@extends('admin.layout')
@section('title','Welcome Page')


@section('main-content')

        <div class="container dashboard">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card card-welcome" >
                        @auth()
                            <h2> Hello, {{Auth::User()->name}}</h2>
                            <span> Welcome back to Venus</span>

                        @else
                            Login
                        @endauth

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card" >

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card " >

                    </div>
                </div>
            </div>
        </div>

@endsection
