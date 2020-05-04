<template>
    <div class="">
        <!-- Start Header -->
        <div class="header">

            <app-header></app-header>
            <div id="header-slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner ">

                    <div class="carousel-item active">
                        <img src="imgs/Venus_portfolio_second edtion_e.g.jpg"  alt=""  >
                        <div class="carousel-caption">
                            <p>Working collaboratively with Coding Academy's coordinator and her team we immersed ourselves in their
                                world through a series of interactive workshops, research, along with candid interviews of crucial team
                                members and partners.</p>
                        </div>
                    </div>

                    <div class="carousel-item ">
                        <img src="imgs/Venus_portfolio_second edtion_e.g2.jpg" alt=""  >
                        <div class="carousel-caption">
                            <p>Working from insight gained from strategic workshops with the Amwal team and other research, Venus
                                created a new visual identity and key messaging that fully expresses the heart of the Amwal brand.</p>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="imgs/Venus_portfolio_second edtion_e.g.jpg"  alt=""  >
                        <div class="carousel-caption">
                            <p>Working collaboratively with Coding Academy's coordinator and her team we immersed ourselves in their
                                world through a series of interactive workshops, research, along with candid interviews of crucial team
                                members and partners.</p>
                        </div>
                    </div>
                </div>
                <!--        <ul class="carousel-indicators">-->
                <!--            <li data-target="#header-slider" data-slide-to="0" class="active"></li>-->
                <!--            <li data-target="#header-slider" data-slide-to="1"></li>-->
                <!--            <li data-target="#header-slider" data-slide-to="2"></li>-->
                <!--        </ul>-->

                <a class="carousel-control-prev" href="#header-slider" data-slide="prev">
                <span class="carousel-control-prev-icon" style="
                            ">
                </span>
                </a>
                <a class="carousel-control-next" href="#header-slider" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        <!-- End Header -->

        <div class="container ">

<!--                <ProjectCards v-for="project in projects"-->
<!--                           :key="project.id"-->
<!--                           :name="project.name"-->
<!--                           :department="project.department"-->
<!--                           :industry="project.industry"-->
<!--                           :work_we_delivered="project.work_we_delivered"-->
<!--                           :description="project.description"-->
<!--                           :thumbnail="project.thumbnail"-->
<!--                           :project_photos="project.project_photos"-->
<!--                           :date_start="project.date_start"-->
<!--                           :date_end="project.date_end"-->
<!--                />-->

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

                <div class="our-project">
                    <h3 class=" section-header">
                        Our Projects
                    </h3>
                        <div class="row p-5 my-5">
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

                <div class="our-clients">
                    <h3 class=" section-header">
                        Our Clients
                    </h3>
                    <div class="row my-5">
                        <div class="col-lg-3 mb-5" v-for="client in Clients"  :key="client.id">
                            <div class="card client-card">
                                <div class="client-logo">
                                        <img :src=client.logo >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="our-team">
                <h3 class=" section-header">
                    Our Team
                </h3>
                <div class="row my-5">
                    <div class="col-lg-3 col-6 mb-5">
                        <div class="card member-card">
                            <div class="member-img">
                                <img src="imgs/taher.JPG">
                            </div>
                            <h3 class="member-name">Taher Al-samawi</h3>
                            <h5 class="job-title">Web Developer</h5>
                            <div class="member-social-media-icons">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 mb-5">
                        <div class="card member-card">
                            <div class="member-img">
                                <img src="imgs/taher.JPG">
                            </div>
                            <h3 class="member-name">Taher Al-samawi</h3>
                            <h5 class="job-title">Web Developer</h5>
                            <div class="member-social-media-icons">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mb-5">
                        <div class="card member-card">
                            <div class="member-img">
                                <img src="imgs/taher.JPG">
                            </div>
                            <h3 class="member-name">Taher Al-samawi</h3>
                            <h5 class="job-title">Web Developer</h5>
                            <div class="member-social-media-icons">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mb-5">
                        <div class="card member-card">
                            <div class="member-img">
                                <img src="imgs/taher.JPG">
                            </div>
                            <h3 class="member-name">Taher Al-samawi</h3>
                            <h5 class="job-title">Web Developer</h5>
                            <div class="member-social-media-icons">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mb-5">
                        <div class="card member-card">
                            <div class="member-img">
                                <img src="imgs/taher.JPG">
                            </div>
                            <h3 class="member-name">Taher Al-samawi</h3>
                            <h5 class="job-title">Web Developer</h5>
                            <div class="member-social-media-icons">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mb-5">
                        <div class="card member-card">
                            <div class="member-img">
                                <img src="imgs/taher.JPG">
                            </div>
                            <h3 class="member-name">Taher Al-samawi</h3>
                            <h5 class="job-title">Web Developer</h5>
                            <div class="member-social-media-icons">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mb-5">
                        <div class="card member-card">
                            <div class="member-img">
                                <img src="imgs/taher.JPG">
                            </div>
                            <h3 class="member-name">Taher Al-samawi</h3>
                            <h5 class="job-title">Web Developer</h5>
                            <div class="member-social-media-icons">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mb-5">
                        <div class="card member-card">
                            <div class="member-img">
                                <img src="imgs/taher.JPG">
                            </div>
                            <h3 class="member-name">Taher Al-samawi</h3>
                            <h5 class="job-title">Web Developer</h5>
                            <div class="member-social-media-icons">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

               <div class="ContactUs">
                <div class="row">
                    <div class="col-md-4">
                        <div class="logo">
                            <img src="venus-logo-color.png">
                            <ul>
                                <li><i class="fa fa-location-arrow"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="section-head">
                            <h2 class="title">CONTACT US
                            </h2>
                            <p> For more information, please contact us. </p>
                        </div>

                        <div class="form-contact-us">
                            <form>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="usr">Name :</label>
                                            <input type="text" class="form-control" id="usr" placeholder="Enter Your Name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email"> Email :</label>
                                            <input type="email" class="form-control" id="email" placeholder="Enter Your Email">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea class="form-control" rows="6" id="message" placeholder="Enter Your Message" ></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn  btn-block py-2">Send Message</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>

         <app-footer/>

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
                Clients : '',
            };
        },
        components :{
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

            this.axios
                .get('/getAllClients')
                .then(response => {

                    this.Clients = response.data.data;
                    console.log(this.Clients);

                });
        },
    };
</script>


<style scoped>

</style>
