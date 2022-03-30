require('./bootstrap');
import {createRouter, createWebHistory} from 'vue-router';
import { createApp } from "vue";
import routes from "./routes";
import store from "./Vuex";
import Auth from "./components/Auth";
import NewsForm from "../js/components/NewsForm";
import petsForm from "./components/petsForm";
import plantsForm from "./components/plantsForm";
import helpfulForm from "./components/helpfulForm";
const router = createRouter({
    history: createWebHistory(),
    routes
})

createApp({
    data () {
        return{
        }
    },
    computed: {
    },
    methods: {
        showAuth() {
            this.$store.dispatch('CHANGE_VISIBLE', [true, 'Auth']);
        },
    },
    components: {
        Auth,
        NewsForm,
        petsForm,
        plantsForm,
        helpfulForm
    }
}).use(router).use(store).mount('#app')
