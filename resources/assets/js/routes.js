import VueRouter from 'vue-router'

let routes=[
  {
    path:'/login',
    component: require('./components/auth/Login')
  },
  {
    path:'/',
    component: require('./components/administrator/Dashboard')
  },
  {
    path :'/halaman',
    component:require('./components/administrator/Halaman')
  },
  {
    path: '/menus',
    component:require('./components/administrator/Menus')
  },
  {
    path: '/submenu',
    component:require('./components/administrator/Submenu')
  },
  {
    path: '/work',
    component:require('./components/administrator/Workes')
  },
  {
    path: '/portfolio',
    component:require('./components/administrator/Portfolio')
  }
]

export default new VueRouter({
  routes,
  mode : 'history'
})
