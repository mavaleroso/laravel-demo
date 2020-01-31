import Vue from 'vue'
import VueRouter from 'vue-router'
import $ from 'jquery';
import NProgress from 'nprogress';
import 'nprogress/nprogress.css';
import { VclFacebook, VclInstagram, VclTwitch, VclList } from 'vue-content-loading';

window.$ = window.jQuery = $;

Vue.use(VueRouter)

import App from './views/App'
import Hello from './views/Hello'
import Home from './views/Home'
import Friends from './views/Friends'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
        },
        {
            path: '/hello',
            name: 'hello',
            component: Hello,
        },
        {
            path: '/friends',
            name: 'friends',
            component: Friends
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