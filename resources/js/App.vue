<template>
    <div class="">
            <router-view></router-view>
    </div>
</template>

<script>
    import  AppHeader from "./components/app/globle/AppHeader.vue";
    export default {
        name :'App',
        components: {
            AppHeader,
        }


    }
</script>
