<template>
    <div>
        <transition name="auth">
            <div class="auth-container" v-show="getIsAuth">
                <div class="registration">
                    Регистрация
                </div>
                <div class="authorization">
                    Авторизация
                </div>
                <div class="closeAuth" @click="closeAuth()"></div>
            </div>
        </transition>
        <transition name="fade"><div class="auth-wrapper" v-show="getIsAuth"></div></transition>
    </div>
</template>

<script>
export default {
    name: "auth",
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
