<template>
    <div>
        <div class="auth" v-show="getIsAuth">
            <transition name="auth">
                <div class="auth-container" v-show="getIsAuth">
                    <div class="auth-switchers">
                        <div class="auth-switchers__register" :class="{'auth-active': authBlock == 'registration'}" @click="authBlock = 'registration'">
                            <span>Регистрация</span>
                        </div>
                        <div class="auth-switchers__login" :class="{'auth-active': authBlock == 'authorization'}" @click="authBlock = 'authorization'">
                            <span>Авторизация</span>
                        </div>
                    </div>
                    <div class="registration" v-show="authBlock == 'registration'">

                    </div>
                    <div class="authorization" v-show="authBlock == 'authorization'">
                        <form action="" class="login-form">
                            <div class="form-input">
                                <label for="login">Ваш логин</label>
                                <input type="text" name="login" id="login">
                            </div>
                            <div class="form-input">
                                <label for="password">Ваш пароль</label>
                                <input type="password" name="password" id="password">
                            </div>
                            <button class="login-btn">Войти</button>
                        </form>
                    </div>
                    <div class="closeAuth" @click="closeAuth()"><div class="closeAuthBtn"></div></div>
                </div>
            </transition>
        </div>
        <transition name="fade">
            <div class="auth-wrapper" v-show="getIsAuth"></div>
        </transition>
    </div>
</template>

<script>
export default {
    name: "auth",
    data() {
        return {

            authBlock: 'registration',
        }
    },
    computed: {
        getIsAuth () {
            return this.$store.getters.getIsAuth
        }
    },
    methods: {
        closeAuth() {
            this.$store.dispatch('CHANGE_AUTH', false)
        }
    }
}
</script>

<style scoped>

</style>
