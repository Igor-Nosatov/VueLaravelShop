import HomeComponent from '../components/HomeComponent.vue';
import ShopComponent from '../components/shop/ShopComponent.vue';
import CategoryComponent from '../components/shop/CategoryComponent.vue';

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
  ,
  {
     path: '/shop/:id/products',
     name: 'category',
     component: CategoryComponent
  }
];

export default routes
