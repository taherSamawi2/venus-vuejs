require('./bootstrap');
import  Vue from 'vue';
import router from './routes';
import App from './App.vue';
import VueAxios from 'vue-axios';
import axios from 'axios';

Vue.config.productionTip = false;
Vue.use(VueAxios, axios);


new Vue({
    // el :'#app',
    router,  // route: router
    render: h => h(App)
}).$mount("#app");
