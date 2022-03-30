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
                        <form action="" class="register-form" @submit.prevent="sendRegister()">
                            <div class="form-input">
                                <label for="register-login">Логин:</label>
                                <input v-model="registerForm.login" type="text" id="register-login">
                            </div>
                            <div class="form-input">
                                <label for="register-name">Имя:</label>
                                <input v-model="registerForm.name" type="text" id="register-name">
                            </div>
                            <div class="form-input">
                                <label for="register-surname">Фамилия:</label>
                                <input v-model="registerForm.surname" type="text" id="register-surname">
                            </div>
                            <div class="form-input">
                                <label for="register-BirthDate">Дата рождения:</label>
                                <input v-model="registerForm.date" type="date" id="register-BirthDate">
                            </div>
                            <div class="form-input">
                                <label>Пол:</label>
                                <div class="radio-gender">
                                    <label for="register-gender-male">Муж. <input v-model="registerForm.gender"  type="radio" value="male" id="register-gender-male" checked></label>
                                    <label for="register-gender-male">Жен. <input v-model="registerForm.gender" type="radio" value="female" id="register-gender-female"></label>
                                </div>
                            </div>
                            <div class="form-input">
                                <label for="register-password">Пароль</label>
                                <input v-model="registerForm.password" type="password" name="register-password" id="register-password">
                            </div>
                            <button class="auth-btn">Зарегистрироваться</button>
                        </form>
                    </div>
                    <div class="authorization" v-show="authBlock == 'authorization'">
                        <form action="" class="login-form" @submit.prevent="auth()">
                            <div class="form-input">
                                <label for="login">Ваш логин</label>
                                <input v-model="loginForm.login" type="text" name="login" id="login">
                            </div>
                            <div class="form-input">
                                <label for="password">Ваш пароль</label>
                                <input v-model="loginForm.password" type="password" name="password" id="password">
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
            registerForm: {
                login: 'test',
                name: 'test',
                surname: 'test',
                date:'test',
                gender: 'male',
                password: 'test',
            },
            loginForm: {
                login: '',
                password: ''
            }
        }
    },
    computed: {
        getIsAuth () {
            return this.$store.getters.getIsAuth
        }
    },
    methods: {
        closeAuth() {
            this.$store.dispatch('CHANGE_VISIBLE', [false, 'Auth'])
        },
        sendRegister: function () {
            fetch('http://127.0.0.1:8000/api/registration', {
                method: 'POST',
                headers: {
                    'content-type': 'application/json'
                },
                body: JSON.stringify(this.registerForm)
            })
        },
        auth() {
            fetch('http://127.0.0.1:8000/api/authent', {
                method: 'POST',
                headers: {
                    'content-type': 'application/json'
                },
                body: JSON.stringify(this.registerForm)
            })
                .then(res => res.json())
                .then(data => {
                    localStorage.setItem('token', data.token)
                })
        }
    }
}
</script>

<style scoped>

</style>
