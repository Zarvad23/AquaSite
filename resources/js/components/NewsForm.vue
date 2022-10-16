<template>
    <div>
        <transition name="fade">
            <div class="addNew" v-show="getIsNews === 'News'">
                <form>
                    <img src="https://www.ipng.ru/upload/no-image.png" alt="Превью">
                    <div class="formAddItem">
                        <label for="formAddNewsImage">Выберите постер новости</label>
                        <input type="file" name="NewsImage" id="formAddNewsImage">
                    </div>
                    <div class="formAddItem">
                        <label for="formAddNewsName">Введите название новости</label>
                        <input type="text" name="NewsName" id="formAddNewsName" placeholder="Название новости">
                    </div>
                    <div class="formAddItem">
                        <label for="formAddNewsSdesk">Введите краткое описание</label>
                        <textarea  name="NewsSdesk" id="formAddNewsSdesk" placeholder="Краткое описание" rows="5"></textarea>
                    </div>
                    <div class="formAddItem">
                        <label for="formAddNewsContent">Введите содержание новости (Поддерживает BBCode)</label>
                        <textarea name="NewsContent" id="formAddNewsContent" rows="15" placeholder="Содержание"></textarea>
                    </div>
                    <button>Отправить</button>
                </form>
                <div class="addNew-close" @click="closeForm()">
                    <div class="addNew-close-inner"></div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    name: "NewsForm",
    computed: {
        getIsNews () {
            return this.$store.getters.GET_VISIBLE;
        }
    },
    methods: {
        closeForm() {
            this.$store.dispatch('CHANGE_VISIBLE', '')
        }
    }
}
</script>

<style scoped>

</style>
