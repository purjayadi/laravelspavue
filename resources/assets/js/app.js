
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import router from './routes.js'
require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 import VueRouter from 'vue-router';
  window.Vue.use(VueRouter);
  import VueSwal from 'vue-swal'
  import Spinner from 'vue-simple-spinner'
  import Vue from 'vue'
  // import Ckeditor from 'vue-ckeditor2'

  window.Vue.use(VueSwal)
  window.Vue.use(Spinner)

 Vue.component('vue-simple-spinner',require('vue-simple-spinner'))
 Vue.component('vue-pagination', require('laravel-vue-pagination'));
Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    router
});
