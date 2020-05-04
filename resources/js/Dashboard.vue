<template>
        <div>

            <div class="wrapper">
                <div class="sidebar">
                    <div class="logo">
                        <a href="admin"><img src="/venus-logo.svg"></a>
                    </div>
                    <div class="logo-icon">
                        <a href="admin"><img src="/logo-icon.svg"></a>
                    </div>
                    <ul>
                        <router-link to="/dashboard" tag="li" exact>
                            <a>
                                <span class="icon">
                                       <i class="fa fa-dashboard" aria-hidden="true"></i>
                               </span>
                                <span class="title">Dashboard</span>
                            </a>
                        </router-link>

                        <router-link to="/dashboard/projects" tag="li" >
                            <a>
                            <span class="icon">
                           <i class="fa fa-bars" aria-hidden="true"></i>
                          </span>
                            <span class="title">projects</span>
                            </a>
                        </router-link>


                        <router-link to="/dashboard/clients" tag="li" >
                            <a >
                            <span class="icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                      </span>
                            <span class="title">Clients</span>
                            </a>
                        </router-link>

                        <router-link to="/dashboard/pages" tag="li" >
                            <a>
                            <span class="icon">
                        <i class="fa fa-pagelines" aria-hidden="true"></i>
                    </span>
                            <span class="title">Pages Management</span>
                            </a>
                        </router-link>
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
<!--                                                <li>-->
<!--                                                    <a href="#"-->
<!--                                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">-->
<!--                                                        logout</a>-->
<!--                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">-->
<!--                                                        @csrf-->
<!--                                                    </form>-->
<!--                                                </li>-->
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

                    <router-view></router-view>

                </div>
            </div>


    </div>

</template>

<script>
    import sidebar from "./components/dashboard/globle/sidebar";
    export default {
        name :'Dashboard',
        components: {
            sidebar
        }


    }
</script>
