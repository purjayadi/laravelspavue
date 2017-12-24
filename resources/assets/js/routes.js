import VueRouter from 'vue-router'

let routes=[
  {
    path:'/login',
    component: require('./components/auth/Login')
  },
  {
    path:'/',
    component: require('./components/administrator/Dashboard'),
    meta: { title: 'SPA Laravel Vuejs' }
  },
  {
    path :'/halaman',
    component:require('./components/administrator/Halaman'),
    meta: { title: 'halaman - laravel' }
  },
  {
    path: '/menus',
    component:require('./components/administrator/Menus'),
    meta: { title: 'menu - laravel' }
  },
  {
    path: '/submenu',
    component:require('./components/administrator/Submenu'),
    meta: { title: 'submenu - laravel' }
  },
  {
    path: '/work',
    component:require('./components/administrator/Workes'),
    meta: { title: 'work - laravel' }
  },
  {
    path: '/portfolio',
    component:require('./components/administrator/Portfolio'),
    meta: { title: 'portfolio - laravel' }
  }
]

export default new VueRouter({
  routes,
  mode : 'history'
})
