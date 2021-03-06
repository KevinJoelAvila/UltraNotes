import { createRouter, createWebHashHistory } from 'vue-router'
import Home from '../views/Home.vue'
import Index from '../views/Index.vue'
import VistaLogin from '../views/Login.vue'
import Editor from '../views/Editor.vue'
import DashBoard from '../views/DashBoard.vue'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  },
  {
    path: '/index',
    name: 'Index',
    component: Index
  },
  {
    path: '/empezar',
    name: 'Empezar',
    component: VistaLogin
  },
  {
    path: '/editor',
    name: 'Editor',
    component: Editor
  },
  {
    path: '/dashboard',
    name: 'DashBoard',
    component: DashBoard
  }

]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
