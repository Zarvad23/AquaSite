require('./bootstrap');
import {createRouter, createWebHistory} from 'vue-router';
import { createApp } from "vue";
import routes from "./routes";

const router = createRouter({
    history: createWebHistory(),
    routes
})

createApp({

}).use(router).mount('#app')
