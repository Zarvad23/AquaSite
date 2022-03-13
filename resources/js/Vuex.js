import { createStore } from 'vuex';

const store = createStore({
    state () {
        return {
            isAuth: false
        }
    },
    getters: {
        getIsAuth(state) {
            return state.isAuth;
        }
    },
    mutations: {
        CHANGE_AUTH(state, isAuth) {
            state.isAuth = isAuth;
        },
    },
    actions: {
        CHANGE_AUTH({ commit }, isAuth) {
            commit("CHANGE_AUTH", isAuth);
        },
    }
})

export default store;
