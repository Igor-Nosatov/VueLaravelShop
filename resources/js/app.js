require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './App.vue';
Vue.use(VueAxios, axios);
import Router from './routes/routing.js'

Vue.component('header-component', require('./parts/HeaderComponent.vue').default);
Vue.component('deals-component', require('./parts/DealsComponent.vue').default);
Vue.component('footer-component', require('./parts/FooterComponent.vue').default);
Vue.component('pagination', require('./parts/PaginationComponent.vue').default);

const router = new VueRouter({
    mode: 'history',
    routes: Router
})

const app = new Vue(Vue.util.extend({
    router
}, App)).$mount('#app');
