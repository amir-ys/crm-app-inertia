import {createRouter, createWebHistory} from 'vue-router'

const routes = [
    {
        path: '/',
        component: import('../views/Home.vue'),
        name: 'home'
    },
    {
        path: '/login',
        component: import('../views/Auth/login.vue'),
        name: 'login'
    },
    {
        path: '/register',
        component: import('../views/Auth/register.vue'),
        name: 'register'
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
