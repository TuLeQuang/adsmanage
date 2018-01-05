import VueRouter from 'vue-router/dist/vue-router.js';

import Tem from './components/Tem.vue'
import User from './components/User.vue'
import ViewTem from './components/ViewTem.vue'

let routes=[
    {path: '/testVue', component: Tem},
    {path: '/vueitems', component: User},
    {path: '/templates', component: ViewTem},
];

export default new VueRouter({
    mode: 'history',
    linkActiveClass: 'active',
    routes
})
