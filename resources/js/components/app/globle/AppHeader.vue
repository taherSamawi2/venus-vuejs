<template>

    <div>
        <!-- Start Header -->
        <div class="header">
            <nav class="navbar navbar-expand-lg  fixed-top ">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="venus-logo.svg">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="main-nav">
                        <ul class="navbar-nav ml-auto text-uppercase">
                                <router-link to="/" tag="a" exact class="nav-item nav-link">Home</router-link>
                                <router-link to="/our-projects" tag="a"  class="nav-item nav-link">projects</router-link>
                                <router-link to="/About" tag="a"  class="nav-item nav-link">About</router-link>
                                <router-link to="/contact-us" tag="a"  class="nav-item nav-link">Contact US</router-link>
                        </ul>

                    </div>
                </div>

            </nav>
        </div>
        <!-- End Header -->


    </div>

</template>

<script>
    export default {
        name: "AppHeader",

    };
</script>

