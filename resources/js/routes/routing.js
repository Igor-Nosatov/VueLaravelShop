import HomeComponent from '../components/HomeComponent.vue';
import ShopComponent from '../components/ShopComponent.vue';

const routes = [
  {
      name: 'home',
      path: '/',
      component: HomeComponent
  },
  {
     path: '/shop',
     name: 'shop',
     component: ShopComponent
  }
];

export default routes
