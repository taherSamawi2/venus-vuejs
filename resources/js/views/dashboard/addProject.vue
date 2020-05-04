<template>
    <div class="container">
        <div class="row bg-white p-3 border-radius-12">
            <div class="col-12 mb-5 ">
                <h3 class="">New Project</h3>
            </div>
            <div class=" col-md-8 col-sm-12 ">
                <form @submit.prevent="addProject" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="name">Project Name</label>
                                <input type="text"
                                       v-model="project.name"
                                       class="form-control"
                                       id="name" name="name">
                                <span class="text-danger"></span>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="client">Client</label>
                                <select class="form-control" id="client" name="client" v-model="project.client">
                                    <option disabled value="">Please select one</option>
                                    <option v-for="client in clients"
                                            :value="client.id" :key="client.id"> {{client.name}}
                                    </option>
                                </select>
                                {{project.client.name}}
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="department">Department</label>
                                <select class="form-control" id="department" name="department"
                                        v-model="project.department">
                                    <option disabled value="">Please select one</option>
                                    <option v-for="department in departments"
                                            :value="department" :key="department">
                                        {{department}}
                                    </option>
                                </select>
                                {{project.department}}
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="dateStart">Date Start</label>
                                <input type="date"
                                       class="form-control"
                                       v-model="project.dateStart"
                                       id="dateStart" name="dateStart"
                                >
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="dateEnd">Date End</label>

                                <input type="date"
                                       class="form-control"
                                       v-model="project.dateEnd"
                                       id="dateEnd" name="dateEnd">
                            </div>
                        </div>


                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control "
                                          rows="8"
                                          v-model="project.description"
                                          id="description"
                                          name="description">
                                 </textarea>

                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label for="industry">Industry</label>
                                <textarea class="form-control       "
                                          rows="7"
                                          v-model="project.industry"
                                          id="industry"
                                          name="industry">

                                 </textarea>
                                <span class="text-danger"></span>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
<!--                            <editor-->
<!--                                :init="{-->
<!--                              height: 200,-->
<!--                              menubar: false,-->
<!--                              plugins: [-->
<!--                                'advlist autolink lists link image charmap',-->
<!--                                'searchreplace visualblocks code fullscreen',-->
<!--                                'print preview anchor insertdatetime media',-->
<!--                                'paste code help wordcount table'-->
<!--                              ],-->
<!--                              toolbar:-->
<!--                                'undo redo | formatselect | bold italic | \-->
<!--                                alignleft aligncenter alignright | \-->
<!--                                bullist numlist outdent indent | help'-->
<!--                            }"-->
<!--                                                    >-->
<!--                            </editor>-->
                            <div class="form-group">
                                <label for="work_we_delivered">Work We Delivered</label>
                                <textarea class="form-control"
                                          rows="7"
                                          v-model="project.work_we_delivered"
                                          id="work_we_delivered"
                                          name="work_we_delivered">
                                 </textarea>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="thumbnail">Thumbnail</label>
                        <div class="input-group ">
                            <div class="custom-file">
                                <input type="file"
                                       v-on:change="handleThumbnailUpload"
                                       name="thumbnail"
                                       id="thumbnail"
                                       ref="file" accept="image/*"
                                       class="custom-file-input">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <span class="text-danger"></span>
                    </div>

                    <div class="col-md-4 card-thumbs" v-show="project.thumbnail">
                        <div class="card">
                            <div class="card-img">
                                <img :src="imagePreview" class="img-responsive">
                            </div>
                            <div class="card-body">
                                <div class="float-left">
                                    imagePreview.name
<!--                                    <a href="#"><i class="text-danger fa fa-minus-circle fa-2x "></i></a>-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="project_photos"> Project Photos</label>
                        <div class="input-group increment">
                            <div class="custom-file">
                                <input type="file" name=" project_photos[]"
                                       id="project_photos"
                                       ref="project_photos"
                                       multiple
                                       accept="image/*"
                                       v-on:change="handlePhotosUpload"
                                       class="custom-file-input">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                            <div class="input-group-btn mb-2">
                                <button class="btn btn-success" type="button" v-on:click="addFiles()"><i
                                    class="fa fa-plus"></i>Add Another file
                                </button>
                            </div>
                        </div>
                        <span class="text-danger"></span>
                    </div>
                    <div class="row">
                    <div class="col-md-4 card-thumbs" v-for="(file, key) in project.project_photos">
                        <div class="card"  >
                            <div class="card-img">
                                <img class="preview" :ref="'image'+parseInt( key )"/>
                            </div>
                            <div class="card-body">
                                <div class="float-left">
                                    {{ file.name }}
<!--                                    <a href="#"><i class="text-danger fa fa-minus-circle fa-2x "></i></a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block p-2">Create New Project</button>
                </form>
            </div>
        </div>


    </div>

</template>

<script>
    import Editor from '@tinymce/tinymce-vue'

    export default {
        name: "addProject",
        data() {
            return {
                project: {
                    id: '',
                    name: '',
                    department: '',
                    client: '',
                    description: '',
                    industry: '',
                    work_we_delivered: '',
                    thumbnail: '',
                    project_photos: [],
                    dateStart: '',
                    dateEnd: '',
                },
                // project: {},
                showPreview: false,
                imagePreview: '',
                clients: [],
                departments: [
                    'Digital Solutions Department',
                    'Creative Department',
                    'Digital Marketing Department'
                ],
            }

        },
        components: {
            editor: Editor
        },
        created() {
            this.axios
                .get('/admin/clients')
                .then(response => {
                    //console.log(response.data.data);
                    this.clients = response.data.data;
                });
        },
        methods: {
            handleThumbnailUpload(event) {
                this.project.thumbnail = event.target.files[0];
                let reader = new FileReader();
                reader.addEventListener("load", function () {
                    this.showPreview = true;
                    this.imagePreview = reader.result;
                }.bind(this), false);

                if (this.project.thumbnail) {
                    if (/\.(jpe?g|png|gif)$/i.test(this.project.thumbnail.name)) {
                        /*
                          Fire the readAsDataURL method which will read the file in and
                          upon completion fire a 'load' event which we will listen to and
                          display the image in the preview.
                        */
                        reader.readAsDataURL(this.project.thumbnail);
                    }
                }
            },
            handlePhotosUpload(event) {
                let uploadedFiles = event.target.files;

                /*
              Adds the uploaded file to the project_photos array
            */
                for (let i = 0; i < uploadedFiles.length; i++) {
                    this.project.project_photos.push(uploadedFiles[i]);
                }
                /*
                Generate image previews for the uploaded files
              */
                this.getImagePreviews();
            },
            /*
              Get a preview image of the project image
            */
            getImagePreviews() {
                /*
                  Iterate over all of the files and generate an image preview for each one.
                */
                for (let i = 0; i < this.project.project_photos.length; i++) {
                    if (/\.(jpe?g|png|gif)$/i.test(this.project.project_photos[i].name)) {
                        let reader = new FileReader();
                        /*
                          Add an event listener for when the file has been loaded
                          to update the src on the file preview.
                        */
                        reader.addEventListener("load", function () {
                            this.$refs['image' + parseInt(i)][0].src = reader.result;
                        }.bind(this), false);

                        /*
                          Read the data for the file in through the reader. When it has
                          been loaded, we listen to the event propagated and set the image
                          src to what was loaded from the reader.
                        */
                        reader.readAsDataURL(this.project.project_photos[i]);
                    }
                }
            },
            addFiles() {
                this.$refs.project_photos.click();
            },
            addProject() {
                let URL = '/admin/projects/store';

                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                };
                let formData = new FormData();
                formData.append('name', this.project.name);
                formData.append('client', this.project.client);
                formData.append('description', this.project.description);
                formData.append('work_we_delivered', this.project.work_we_delivered);
                formData.append('industry', this.project.industry);
                formData.append('dateStart', this.project.dateStart);
                formData.append('dateEnd', this.project.dateEnd);
                formData.append('thumbnail', this.project.thumbnail);
                for( let i = 0; i < this.project.project_photos.length; i++ ){
                    let project_photo = this.project.project_photos[i];
                    formData.append('project_photos[' + i + ']', project_photo);
                }
                this.axios
                    .post(URL,formData,config)
                    .then(response => (
                        // this.$router.push({name: 'projects'})
                        console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            },
        }
    }
</script>

<style scoped>

</style>
