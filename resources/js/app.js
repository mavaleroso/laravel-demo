import Vue from 'vue'
import VueRouter from 'vue-router'
import $ from 'jquery';
import NProgress from 'nprogress';
import 'nprogress/nprogress.css';

window.$ = window.jQuery = $;

Vue.use(VueRouter)

import App from './views/App'
import Dashboard from './views/Dashboard'
import Messages from './views/Messages'
import Configurations from './views/Configurations'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'dashboard',
            component: Dashboard,
        },
        {
            path: '/messages',
            name: 'messages',
            component: Messages,
        },
        {
            path: '/configurations',
            name: 'configurations',
            component: Configurations
        }
    ],
});

router.beforeResolve((to, from, next) => {
    if (to.path) {
        NProgress.start();
    }
    next();
});

router.afterEach(() => {
    NProgress.done();
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});