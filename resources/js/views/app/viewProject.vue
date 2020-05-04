<template>
    <div class="container">

        <!-- Start Header -->
        <div class="header header-sub-page">
            <app-header></app-header>
        </div>
        <!-- End Header -->

        <div class="our-projects">
            <div class="row">
                <div class="col-lg-6 single-project">

                            <div class="img-project" v-for="project_photos in project.project_photos" :key="project.id">
                                <img :src=project_photos>
                            </div>

                </div>
            </div>
        </div>

        <app-footer/>
    </div>

</template>
<script>

    // import ProjectCards from  "../../components/app/globle/ProjectCards";
    import AppHeader from "../../components/app/globle/AppHeader.vue";
    import AppFooter from "../../components/app/globle/AppFooter.vue";


    export default {
        name: "Project",
        data: function () {
            return {
                project: '',
                activeTab: '1',
            };
        },
        components: {
            AppHeader,
            AppFooter

            // ProjectCards
        },
        created() {
            this.axios
                .get('/project/1')
                .then(response => {
                    this.project = response.data.data;
                    console.log(this.project);
                });
        },
    };
</script>


<style scoped>

</style>
