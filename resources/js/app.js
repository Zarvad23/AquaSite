require('./bootstrap');
import {createRouter, createWebHistory} from 'vue-router';
import { createApp } from "vue";
import routes from "./routes";
import store from "./Vuex";
import Auth from "./components/Auth"

const router = createRouter({
    history: createWebHistory(),
    routes
})

createApp({
    methods: {
        showAuth() {
            this.$store.dispatch('CHANGE_AUTH', true)
        },
    },
    components: {
        Auth
    }
}).use(router).use(store).mount('#app')
