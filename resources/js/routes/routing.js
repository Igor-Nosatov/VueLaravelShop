import HomeComponent from '../views/HomeComponent';
import ShopComponent from '../views/shop/ShopComponent';
import CategoryComponent from '../views/shop/CategoryComponent';
import Login from '../views/Login'
import Register from '../views/Register'
import SingleProduct from '../views/SingleProduct'
import Checkout from '../views/Checkout'
import Confirmation from '../views/Confirmation'
import UserBoard from '../views/UserBoard'
import Admin from '../views/Admin'

const routes = [{
        name: 'home',
        path: '/',
        component: HomeComponent
    },
    {
        path: '/shop',
        name: 'shop',
        component: ShopComponent
    },
    {
        path: '/shop/:id/products',
        name: 'category',
        component: ShopComponent
    },
    {
        path: '/login',
        name: 'login',
        component: Login
    },
    {
        path: '/register',
        name: 'register',
        component: Register
    },
    {
        path: '/products/:id',
        name: 'single-products',
        component: SingleProduct
    },
    {
        path: '/confirmation',
        name: 'confirmation',
        component: Confirmation
    },
    {
        path: '/checkout',
        name: 'checkout',
        component: Checkout,
        props: (route) => ({
            pid: route.query.pid
        })
    },
    {
        path: '/dashboard',
        name: 'userboard',
        component: UserBoard,
        meta: {
            requiresAuth: true,
            is_user: true
        }
    },
    {
        path: '/admin/:page',
        name: 'admin-pages',
        component: Admin,
        meta: {
            requiresAuth: true,
            is_admin: true
        }
    },
    {
        path: '/admin',
        name: 'admin',
        component: Admin,
        meta: {
            requiresAuth: true,
            is_admin: true
        }
    }
  ]

export default routes
