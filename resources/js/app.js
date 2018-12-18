require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './App.vue';
Vue.use(VueAxios, axios);

import HomeComponent from './components/HomeComponent.vue';
import BlogComponent from './components/BlogComponent.vue';
import BlogSingleComponent from './components/BlogSingleComponent.vue';
import ProductComponent from './components/ProductComponent.vue';
import CartComponent from './components/CartComponent.vue';
import ContactComponent from './components/ContactComponent.vue';
import ShopComponent from './components/ShopComponent.vue';

Vue.component('header-component', require('./includes/HeaderComponent'));
Vue.component('footer-component', require('./includes/FooterComponent'));
Vue.component('subscribe', require('./includes/SubscribeComponent'));
const routes = [
  {
      name: 'blog',
      path: '/blog',
      component: BlogComponent
  },
  {
      name: 'blog_single',
      path: '/blog_single',
      component: BlogSingleComponent
  },
  {
      name: 'contact',
      path: '/contact',
      component: ContactComponent
  },
  {
      name: 'home',
      path: '/',
      component: HomeComponent
  },
  {
      name: 'product',
      path: '/product',
      component: ProductComponent
  },
  {
      name: 'cart',
      path: '/cart',
      component: CartComponent
  }

];

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');
