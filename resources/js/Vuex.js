import { createStore } from 'vuex';

const store = createStore({
    state () {
        return {
            isAuth: false,
            isNews: false,
            isPets: false,
            isPlants: false,
            isHelpful: false,
            PetSpecie: 'Хищники',
            news: {},
            authorize: true
        }
    },
    getters: {
        getIsAuth(state) {
            return state.isAuth;
        },
        getIsNews(state) {
            return state.isNews;
        },
        getIsPets(state) {
            return state.isPets;
        },
        getIsPlants(state) {
            return state.isPlants;
        },
        getIsHelpful(state) {
            return state.isHelpful;
        },
        getPetSpecie(state) {
            return state.PetSpecie;
        },
    },
    mutations: {
        CHANGE_VISIBLE(state, isVisible) {
            if (isVisible[1] === 'Auth'){
                state.isAuth = isVisible[0];
            }
            if (isVisible[1] === 'News'){
                state.isNews = isVisible[0];
            }
            if (isVisible[1] === 'Pets'){
                state.isPets = isVisible[0];
            }
            if (isVisible[1] === 'Plants'){
                state.isPlants = isVisible[0];
            }
            if (isVisible[1] === 'Helpful'){
                state.isHelpful = isVisible[0];
            }
        },
        GET_NEWS (state, data) {
            state.news = data;
        }
    },
    actions: {
        CHANGE_VISIBLE({ commit }, isVisible) {
            commit("CHANGE_VISIBLE", isVisible);
        },
        async GET_NEWS({commit}){
            let res = await fetch('http://localhost:8000/api/news');
            let data = await res.json();
            commit("GET_NEWS", data);
        }
    }
})

export default store;
