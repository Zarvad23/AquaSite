<template>
    <div>
        <transition name="fade">
            <div class="addNew" v-show="getIsPets">
                <form class="PetsForm">
                    <img src="https://www.ipng.ru/upload/no-image.png" alt="Превью">
                    <div class="formAddItem">
                        <label for="formAddImage">Выберите постер новости</label>
                        <input type="file" name="image" id="formAddImage">
                    </div>
                    <div class="PetsFormChar">
                        <div class="formAddItem">
                            <label for="formAddPetsName">Название</label>
                            <input type="text" name="PetsName" id="formAddPetsName">
                        </div>
                        <div class="formAddItem">
                            <label for="formAddPetsTerm">Научное название</label>
                            <input type="text" name="PetsTerm" id="formAddPetsTerm">
                        </div>
                        <div class="formAddItem">
                            <label for="formAddPetsType">Тип питомца </label>
                            <select name="formAddPetsType" id="formAddPetsType">
                                <option value="Рыба">Рыба</option>
                                <option value="Ракаообразное">Улитки и ракообразные</option>
                                <option value="Земноводное">Рептилии и амфибии</option>
                            </select>
                        </div>
                        <div class="formAddItem">
                            <label for="formAddPetsSpecie">Вид Питомца </label>
                            <output name="PetsSpecie" id="formAddPetsSpecie">{{ getPetSpecie }}</output>
                        </div>
                        <div class="formAddItem">
                            <p>Тип жилища</p>
                            <div>
                                <label for="formAddPetsHomeOne"><input type="radio" name="formAddPetsHome" id="formAddPetsHomeOne" checked>Аквариум</label>
                                <label for="formAddPetsHomeTwo"><input type="radio" name="formAddPetsHome" id="formAddPetsHomeTwo">Акватеррариум</label>
                            </div>
                        </div>
                        <div class="formAddItem">
                            <label for="formAddPetsLife">Продолжительность жизни(Лет)</label>
                            <input type="number" name="PetsLife" id="formAddPetsLife" placeholder="10">
                        </div>
                        <div class="formAddItem">
                            <label for="formAddPetsFeed">Корм</label>
                            <input type="text" name="PetsFeed" id="formAddPetsFeed">
                        </div>
                        <div class="formAddItem">
                            <label for="formAddPetsSize">Размер</label>
                            <input type="text" name="PetsSize" id="formAddPetsSize">
                        </div>
                    </div>
                    <div class="formAddItem">
                        <label for="formAddPetsDesc">Описание (поддерживает BBCode)</label>
                        <textarea  name="PetsDesc" id="formAddPetsDesc" placeholder="Описание" rows="15"></textarea>
                    </div>
                    <button>Отправить</button>
                </form>
                <div class="addNew-close" @click="closePetsAdd()">
                    <div class="addNew-close-inner"></div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    name: "petsForm",
    computed: {
        getIsPets () {
            return this.$store.getters.getIsPets
        },
        getPetSpecie() {
            return this.$store.getters.getPetSpecie
        }
    },
    methods: {
        closePetsAdd() {
            this.$store.dispatch('CHANGE_VISIBLE', [false, 'Pets'])
        }
    }
}
</script>

