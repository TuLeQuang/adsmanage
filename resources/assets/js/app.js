
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');
import router from './routers';
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import VeeValidate from 'vee-validate/dist/vee-validate.js';
Vue.use(VeeValidate);

Vue.component('Tem', require('./components/Tem.vue'));
Vue.component('user-list', require('./components/User.vue'));
Vue.component('view-tem', require('./components/ViewTem.vue'));

const app = new Vue({
    el: '#app',
    router,
    VeeValidate,
});
/*

import Vue from 'vue/dist/vue.js'
import App from './App.vue'
import VueRouter from 'vue-router/dist/vue-router.js'

Vue.use(VueRouter)

//import Example from './components/Example.vue'

import Tem from './components/Tem.vue'
import example from './components/Example.vue'
const router = new VueRouter({
    mode: 'history',
    base: __dirname,
    routes: [
        { path: '/testVue', component: Tem },
        { path: '/vueitems', component: example },
    ]
})

new Vue({
    router,
    render: h => h(Tem),
}).$mount('#content');*/
