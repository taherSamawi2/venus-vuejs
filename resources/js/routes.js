import Vue from "vue";
import VueRouter from "vue-router";
import Home from "./views/app/home.vue";
import Projects from "./views/app/projects.vue";
import About from "./views/app/about.vue";
import Project from "./views/app/viewProject.vue";


Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        name:'home',
        component: Home
    },
    {
        path: '/our-projects',
        name:'Projects',
        component: Projects
    },
    {
        path: '/about',
        name:'About',
        component: About
    },
    {
        path: '/showProject/:id',
        name:'project',
        component: Project
    },

];

const router = new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    routes
});

export default router;
