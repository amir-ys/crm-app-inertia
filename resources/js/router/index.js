import {createRouter, createWebHistory} from 'vue-router'

const routes = [
    {
        path: '/',
        component: '../App.vue',
        name: 'home'
    },
    {
        path: '/login',
        component: import('../views/login.vue'),
        name: 'login'
    },
    {
        path: '/register',
        component: import('../views/register.vue'),
        name: 'register'
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
