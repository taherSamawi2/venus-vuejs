<template>
    <div class="container">

        <!-- Start Header -->
        <div class="header header-sub-page">
            <app-header></app-header>
        </div>
        <!-- End Header -->
        <div class="our-projects">
            <ul class="tabs-choose">
                <li @click="activeTab = '1'" :class="[activeTab === '1' ?'active' :'']">type of client</li>
                <li @click="activeTab = '2'" :class="[activeTab === '2' ?'active' :'']">type of work</li>
                <li @click="activeTab = '3'" :class="[activeTab === '3' ?'active' :'']">all projects</li>
            </ul>
            <div class="tabs-content">
                <div class="content-one" v-if="activeTab ==='1'">
                    <div class="row  my-5">
                        <div class="col-lg-4" v-for="project in projects" :key="project.id">
                            <div class="card project-card">
                                <div class="project-img">
                                    <a v-for="thumbnail in project.thumbnail" :key="project.id">
                                        <img :src=thumbnail>
                                        <div class="img-overlay">
                                            <div class="overlay-info full-width">
                                                <p> {{project.work_we_delivered}}</p>
                                                <h3>{{project.department}}</h3>
                                                <a href="/project/1">
                                                    <span class="icon">
                                                        <i class="fa fa-arrow-right"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="project-details">
                                    <h3 class="project-title">{{project.name}}</h3>
<!--                                    <a v-for="client in project.client" :key="project.id" class="client-name">-->
<!--                                        {{ client.name}}-->
<!--                                    </a>-->
                                    <span class="industry">
                                    <a href="/showProject/1"> {{project.industry}}
                                        </a>

<!--                     <router-link :to="{name: 'edit', params: { id: projects.id }}" class="btn btn-primary">Edit-->
<!--                    </router-link>-->
                                        </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="content-one" v-if="activeTab ==='2'">Content 2</div>
                <div class="content-one" v-if="activeTab ==='3'">Content 3</div>
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
                projects: '',
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
                .get('/getAllProjects')
                .then(response => {
                    this.projects = response.data.data;
                    // console.log(this.projects);
                });
        },
    };
</script>


<style scoped>

</style>
