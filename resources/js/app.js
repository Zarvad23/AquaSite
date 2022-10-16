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
import popupMessages from "./components/popupMessages";
const router = createRouter({
    history: createWebHistory(),
    routes
})

createApp({
    data () {
        return{
        }
    },
    mounted() {
        if(localStorage.getItem('token')){
            this.$store.dispatch('CHANGE_AUTHORIZED', true);
        }else{
            this.$store.dispatch('CHANGE_AUTHORIZED', false);
        }
    },
    computed: {
        isAuthorized() {
            return this.$store.getters.IS_AUTHORIED;
        }
    },
    methods: {
        showAuth() {
            this.$store.dispatch('CHANGE_VISIBLE', 'Auth');
        },
        logout() {
            this.$store.dispatch('CHANGE_AUTHORIZED', false);
            localStorage.removeItem('token');
            this.$store.dispatch('ADD_POPUP', {message: 'Вы успешно деавторизировались', type: 'popupMessage-succesful'})
        }
    },
    components: {
        Auth,
        NewsForm,
        petsForm,
        plantsForm,
        helpfulForm,
        popupMessages
    }
}).use(router).use(store).mount('#app')
