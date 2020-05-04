<template>
    <div class="container">

        <!-- Start Header -->
        <div class="header header-sub-page">
            <app-header></app-header>
        </div>
        <!-- End Header -->
        <div class="container ">
            <div class="row my-5">

                <div class="about-us">
                    <div class="row my-5">
                        <div class="col-lg-6">
                            <div class="about-us-card">
                                <h1>WORK WE DID</h1>
                                <p>Venus Agency has been known for over 7 years. Venus has worked with a
                                    variety of clients internationally. As we had started, we have worked with
                                    many international clients that promoted us and let us go further with the work
                                    we do. Our work has been sanctioned and certified as a pro and following the
                                    international standers-by of our clients. Moreover, we had started our new
                                    location to work closely with our nation, Yemen, and in this portfolio are the
                                    projects we did.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-us-img">
                                <img src="venus-logo-color.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <app-footer/>

        </div>

    </div>

</template>
<script>

    // import ProjectCards from  "../../components/app/globle/ProjectCards";
    import  AppHeader from "../../components/app/globle/AppHeader.vue";
    import  AppFooter from "../../components/app/globle/AppFooter.vue";

    export default {
        name: "Project",
        data: function() {
            return {
                projects : '',
                activeTab:'1',
            };
        },
        components :{
            AppHeader,
            AppFooter
            // ProjectCards
        },
        created() {
            this.axios
                .get('/getAllClients')
                .then(response => {
                    this.projects = response.data.data;
                    // console.log(this.projects);
                });
        },
    };
</script>


<style scoped>

</style>
