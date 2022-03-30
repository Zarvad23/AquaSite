<template>
    <div>
        <transition name="fade">
            <div class="addNew" v-show="getIsHelpful">
                <form>
                    <img src="https://www.ipng.ru/upload/no-image.png" alt="Превью">
                    <div class="formAddItem">
                        <label for="formAddHelpfulImage">Выберите постер новости</label>
                        <input type="file" name="HelpfulImage" id="formAddHelpfulImage">
                    </div>
                    <div class="formAddItem">
                        <label for="formAddHelpfulName">Введите название новости</label>
                        <input type="text" name="HelpfulName" id="formAddHelpfulName" placeholder="Название новости">
                    </div>
                    <div class="formAddItem">
                        <label for="formAddHelpfulSdesk">Введите краткое описание</label>
                        <textarea  name="HelpfulSdesk" id="formAddHelpfulSdesk" placeholder="Краткое описание" rows="5"></textarea>
                    </div>
                    <div class="formAddItem">
                        <label for="formAddHelpfulContent">Введите содержание новости (Поддерживает BBCode)</label>
                        <textarea name="HelpfulContent" id="formAddHelpfulContent" rows="15" placeholder="Содержание"></textarea>
                    </div>
                    <button>Отправить</button>
                </form>
                <div class="addNew-close" @click="closeHelpfulAdd()">
                    <div class="addNew-close-inner"></div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    name: "helpfulForm",
    computed: {
        getIsHelpful () {
            return this.$store.getters.getIsHelpful
        }
    },
    methods: {
        closeHelpfulAdd() {
            this.$store.dispatch('CHANGE_VISIBLE', [false, 'Helpful'])
        }
    }
}
</script>

