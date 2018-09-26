
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'
import Toasted from 'vue-toasted'
Vue.use(Toasted, {
  duration: 9000,
  action : {
    text : 'Ok',
    onClick : (e, toastObject) => {
        toastObject.goAway(0);
    }
  }
})
Vue.use(VueRouter)


let Myheader = require('./components/Myheader.vue');
let Myfooter = require('./components/Myfooter.vue');

let Home = require('./components/Home.vue');
let About = require('./components/About.vue');
let Services = require('./components/Services.vue');

const routes = [
  { path: '/home', component: Home },
  { path: '/about', component: About },
  { path: '/services', component: Services }
]

const router = new VueRouter({
	// mode: 'history',
  routes // short for `routes: routes`
})


const app = new Vue({
    el: '#app',
    router,
    components: {Myheader, Myfooter}
});
