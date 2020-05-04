
<template>
<div>
    <h3 class="text-center">All Projects</h3><br/>

    <div class="row">
        <div class="col-6">
            <form @submit.prevent="addProject">
                <div class="form-group">
                    <label class="label" for="name"></label>
                    <input class="form-control" type="text" id="name" placeholder="name" v-model="project.name">
                </div>

                <div class="form-group">
                    <textarea class="form-control" rows="8" placeholder="Description" id="Description" v-model="project.description"></textarea>
                </div>
                <button type="submit" class="btn btn-light btn-block">Save</button>
            </form>

        </div>

    </div>

    <nav aria-label="Page navigation ">
        <ul class="pagination">
            <li :class="[{disabled : !pagination.prev_page_url}]"
                class="page-item"><a class="page-link" href="#"
                  @click="fetchProjects(pagination.prev_page_url)">Previous</a></li>

            <li class="page-item disabled"><a class="page-link text-dark" href="#">
                page {{pagination.current_page}} of {{pagination.last_page}}
            </a></li>
            <li  :class="[{disabled : !pagination.next_page_url}]"
                class="page-item"><a class="page-link" href="#"
              @click="fetchProjects(pagination.next_page_url)">Next</a></li>
        </ul>
    </nav>

    <div class="row">
        <div class="col-md-4 col-sm-6"  v-for="project in projects" :key="projects.id">
            <div class="card card-body mb-5">
                <h1 class="text-danger">{{project.name}}</h1>
                <h3>{{project.department}}</h3>
                <p>{{project.description}}</p>
                <button class="btn btn-danger mb-3" @click="deleteProject(project.id)">Delete</button>
                <button class="btn btn-warning " @click="editProject(project)">Edit</button>

            </div>
        </div>

    </div>

<!--        <table class="table table-bordered">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th>ID</th>-->
<!--                <th>Name</th>-->
<!--                <th>Author</th>-->
<!--                <th>Created At</th>-->
<!--                <th>Updated At</th>-->
<!--                <th>Actions</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            <tr v-for="book in books" :key="book.id">-->
<!--                <td>{{ book.id }}</td>-->
<!--                <td>{{ book.name }}</td>-->
<!--                <td>{{ book.author }}</td>-->
<!--                <td>{{ book.created_at }}</td>-->
<!--                <td>{{ book.updated_at }}</td>-->
<!--                <td>-->
<!--                    <div class="btn-group" role="group">-->
<!--                        <router-link :to="{name: 'edit', params: { id: book.id }}" class="btn btn-primary">Edit-->
<!--                        </router-link>-->
<!--                        <button class="btn btn-danger" @click="deleteBook(book.id)">Delete</button>-->
<!--                    </div>-->
<!--                </td>-->
<!--            </tr>-->
<!--            </tbody>-->
<!--        </table>-->
    </div>
</template>

<script>

    export default {
        name : "AllProjects",
        data() {
            return {
                projects: [],
                project:{
                    id:'',
                    name:'',
                    department:'',
                    description:'',
                    thumbnail:'',
                },
                project_id:'',
                pagination: '',
                edit:false
            }
        },
        created() {
            this.fetchProjects();
            //
            // this.axios
            //     .get('http://localhost:8000/api/books')
            //     .then(response => {
            //         this.books = response.data;
            //     });
        },
        methods: {
            fetchProjects(page_url){
                page_url = page_url || '/api/projects'
                fetch(page_url)
                    .then(response => response.json())
                    .then((response => {
                        this.projects = response.data;
                        this.makePagination(response.meta,response.links)
                    }))
                    .catch(err=>console.log(err));
            },
            makePagination(meta,links){
                let pagination = {
                    current_page : meta.current_page,
                    last_page : meta.last_page,
                    next_page_url : links.next,
                    prev_page_url : links.prev,

                }
                this.pagination = pagination;
            },
            deleteProject(id){
                if(confirm('Are You Sure ?')){
                    fetch(`api/project/${id}`,{
                        method:'delete'
                    })
                    .then(response =>response.json())
                    .then(data =>{
                        alert("Project Removed");
                        this.fetchProjects();
                    })
                    .catch(err =>console.log(err))
                }
            },
            addProject(){
                if (this.edit === false) {
                    //add
                    fetch('api/project',{
                        method :'post',
                        body: JSON.stringify(this.project),
                        headers : {
                            'content-type':'application/json'
                        }

                })
                        .then(respone => respone.json())
                        .then(data =>{
                            this.project.name ='';
                            this.project.description ='';
                            alert('Project Added');
                            this.fetchProjects()

                        })
                }
                else {
                    //update
                    fetch('api/project',{
                        method :'put',
                        body: JSON.stringify(this.project),
                        headers : {
                            'content-type':'application/json'
                        }

                    })
                        .then(respone => respone.json())
                        .then(data =>{
                            this.project.name ='';
                            this.project.description ='';
                            alert('Project updated');
                            this.fetchProjects()

                        })

                }
            },
            editProject(project){
                this.edit = true;
                this.project.name =project.name;
                this.project.description =project.description;
                this.project.id=project.id;
                this.project.project_id = project.id;

            }

            // deleteBook(id) {
            //     this.axios
            //         .delete(`http://localhost:8000/api/book/delete/${id}`)
            //         .then(response => {
            //             let i = this.books.map(item => item.id).indexOf(id); // find index of your object
            //             this.books.splice(i, 1)
            //         });
            // }
        }
    }
</script>
