<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <div class="logo">
            <a href="admin"><img src="/venus-logo.svg"></a>
        </div>
        <div class="logo-icon">
            <a href="admin"><img src="/logo-icon.svg"></a>
        </div>
        <ul>
            <li>
                <a href="{{route('admin')}}" class="{{request()->path()==="admin"?'active':'' }}">
                    <span class="icon">
                           <i class="fa fa-dashboard" aria-hidden="true"></i>
                      </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>


            <li>
                <a href="{{route('projects.index')}}" class="{{request()->path()==="admin/projects"?'active':'' }}">
                    <span class="icon">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </span>
                    <span class="title">projects</span>
                </a>
            </li>



            <li>
                <a href="{{route('clients.index')}}" class="{{request()->path()==="admin/clients"?'active':'' }}">
                      <span class="icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                      </span>
                      <span class="title">Clients</span>
                </a>
            </li>

            <li>
                <a href="{{route('pages.index')}}" class="{{request()->path()==="admin/pages"?'active':'' }}">
                    <span class="icon">
                        <i class="fa fa-pagelines" aria-hidden="true"></i>
                    </span>
                     <span class="title">Pages Management</span>
                </a>
            </li>

        </ul>
    </div>
    <div class="main-content ">
        <div class="top-nav">
            <div class="top-menu">
                <div class="hamburger">
                    <i class="fa fa-align-justify"></i>
                </div>
                <div>
                    <ul>
                        <li class="li-settings">
                            <i class="fa fa-cog "></i>
                            <div class="card card-settings ">
                                <ul>
                                    <li>
                                        <a href="#">My Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li><a href="#"><i class="fa fa-bell-o"></i></a></li>
                        <li class="profile-img">
                            <img src="/uploads/profile-img.jpg" alt="profile-img">
                        </li>

                    </ul>

                </div>
            </div>
        </div>

        @yield('main-content')
        </div>
</div>



<script src="/js/jquery-3.3.1.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/query.dataTables.min.js"></script>
<script src="/js/dataTables.bootstrap4.min.js"></script>
<script src="/js/main.js"></script>
<script>

</script>

<!--<script src="main.js"></script>-->
</body>
</html>
