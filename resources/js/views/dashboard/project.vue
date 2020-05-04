<template>
    <div class="container index-client ">
        <div class="row bg-white  border-radius-12">

            <div class="col-12 ">
                <div class="row top-div">
                    <div class="col-sm-6 mt-2">
                        <h3 class="text-uppercase weight-800 ">Projects</h3>
                    </div>
                    <div class="col-sm-6 mt-2 btn-new-client text-right">
                        <router-link class="btn btn-primary" :to="{ name: 'addProject'}">
                            Create New Project
                        </router-link>

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

                    <tr v-for="project in projects" :key="project.id">
                        <td>{{ project.id }}</td>
                        <td>{{ project.name}}</td>


                        <td v-for="client in project.client" >
                            {{ client.name}}
                        </td>
                        <td v-if="(project.client).length === 0">

                        </td>
                        <td>{{ project.department}}</td>
                        <td>{{ project.description}}</td>
                        <td>{{ project.industry}}</td>
                        <td>{{ project.work_we_delivered}}</td>
                        <td>{{ project.date_start}}</td>
                        <td>{{ project.date_end}}</td>
                        <td>
                            <router-link :to="{ path: 'project/edit/', params: {id: project.id }}">
                                <i class="fa fa-edit"></i>
                            </router-link>
                                <a @click.prevent="deleteProject(project.id)">
                                    <i class="fa fa-trash-o text-danger"></i>
                                </a>

                        </td>
                    </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</template>
<script>

    // import projectCard from  "/js/components/Project/ProjectCard.vue";

    import projects from "../app/projects";

    export default {
        name: "project",
        data() {
            return {
                projects: [],
            };
        },
        components :{
        },
        created() {
            let url = '/admin/projects';
            this.axios.get(url).then(response => {
                    this.projects = response.data.data;
                });
        },
        methods: {
            fetchProjects(){
                page_url = page_url || '/api/projects'
                fetch('/admin/projects')
                    .then(response => response.json())
                    .then((response => {
                        this.projects = response.data;
                        // this.makePagination(response.meta,response.links)
                    }))
                    .catch(err=>console.log(err));
            },
            deleteProject(id) {
                if(confirm('Are you sure to delete this?')) {
                    let url = `/admin/projects/${id}`;
                    this.axios.delete(url)
                        .then(response => {
                            let item = this.projects.map(project => project.id).indexOf(id); // find index of your object
                            this.projects.splice(item, 1)
                        })
                        .catch(err => console.log(err));
                }
            },
        }

    };
</script>
