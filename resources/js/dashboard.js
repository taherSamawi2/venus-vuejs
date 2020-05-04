require('./bootstrap');
import  Vue from 'vue';
import router from './routesDashboard';
import Dashboard from './Dashboard.vue';
import VueAxios from 'vue-axios';
import axios from 'axios';

Vue.config.productionTip = false;
Vue.use(VueAxios, axios);

new Vue({
    router,  // route: router
    render: h => h(Dashboard)
}).$mount("#dashboard");
