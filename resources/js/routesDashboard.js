import Vue from "vue";
import VueRouter from "vue-router";
import Project from "./views/dashboard/project";
import addProject from "./views/dashboard/addProject";
import editProject from "./views/dashboard/editProject";

Vue.use(VueRouter);

const routes = [
    {
        path: "/dashboard/projects",
        name: "projects",
        component: Project
    },
    {
        path: "/dashboard/project/add",
        name: "addProject",
        component: addProject
    },
    {
        path: "/dashboard/project/edit",
        name: "addProject",
        component: editProject
    },

];

const router = new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    routes
});

export default router;
