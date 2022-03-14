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
                        <form action="" class="register-form">
                            <div class="form-input">
                                <label for="register-login">Логин:</label>
                                <input type="text" name="register-login" id="register-login">
                            </div>
                            <div class="form-input">
                                <label for="register-name">Имя:</label>
                                <input type="text" name="register-name" id="register-name">
                            </div>
                            <div class="form-input">
                                <label for="register-surname">Фамилия:</label>
                                <input type="text" name="register-surname" id="register-surname">
                            </div>
                            <div class="form-input">
                                <label for="register-BirthDate">Дата рождения:</label>
                                <input type="date" name="register-BirthDate" id="register-BirthDate">
                            </div>
                            <div class="form-input">
                                <label>Пол:</label>
                                <div class="radio-gender">
                                    <label for="register-gender-male">Муж. <input type="radio" name="register-gender" id="register-gender-male" checked></label>
                                    <label for="register-gender-male">Жен. <input type="radio" name="register-gender" id="register-gender-female"></label>
                                </div>
                            </div>
                            <div class="form-input">
                                <label for="register-password">Пароль</label>
                                <input type="password" name="register-password" id="register-password">
                            </div>
                            <button class="auth-btn">Зарегистрироваться</button>
                        </form>
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
                            <button class="auth-btn">Войти</button>
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
