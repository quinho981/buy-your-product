import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home
  },
  {
    path: '/product/:id',
    name: 'product',
    props: true,
    component: () => import(/* webpackChunkName: "details" */ '../views/ProductDetail.vue')
  },
  {
    path: '/order-item',
    name: 'order-item',
    component: () => import(/* webpackChunkName: "details" */ '../views/OrderItem.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
