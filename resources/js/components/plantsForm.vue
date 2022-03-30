<template>
    <div>
        <transition name="fade">
            <div class="addNew" v-show="getIsPlants">
                <form>
                    <img src="https://www.ipng.ru/upload/no-image.png" alt="Превью">
                    <div class="formAddItem">
                        <label for="formAddPlantImage">Выберите постер растения</label>
                        <input type="file" name="PlantImage" id="formAddPlantImage">
                    </div>
                    <div class="PlantFormChar">
                        <div class="formAddItem">
                            <label for="formAddPlantName">Название</label>
                            <input type="text" name="PlantName" id="formAddPlantName" placeholder="Название">
                        </div>
                        <div class="formAddItem">
                            <label for="formAddPlantTerm">Научное название</label>
                            <input type="text" name="PlantTerm" id="formAddPlantTerm" placeholder="Научное название">
                        </div>
                        <div class="formAddItem"><h3>Введите параметры выращивания растения</h3></div>
                        <div class="formAddItem">
                            <label for="formAddPlantHydro">Водородный показатель</label>
                            <input type="text" name="PlantHydro" id="formAddPlantHydro" placeholder="Показатель">
                        </div>
                        <div class="formAddItem">
                            <label for="formAddPlantTemp">Температура</label>
                            <input type="text" name="PlantTemp" id="formAddPlantTemp" placeholder="Температура">
                        </div>
                        <div class="formAddItem">
                            <label for="formAddPlantCarbo">Карбонатная жесткость</label>
                            <input type="text" name="PlantCarbo" id="formAddPlantCarbo" placeholder="Жесткость">
                        </div>
                        <div class="formAddItem">
                            <label for="formAddPlantOxygen">Уровень кислорода</label>
                            <input type="text" name="PlantOxygen" id="formAddPlantOxygen" placeholder="Кислород">
                        </div>
                    </div>
                    <div class="formAddItem">
                        <label for="formAddPlantContent">Описание (Поддерживает BBCode)</label>
                        <textarea name="PlantContent" id="formAddPlantContent" rows="15"></textarea>
                    </div>
                    <button>Отправить</button>
                </form>
                <div class="addNew-close" @click="closePlantsAdd()">
                    <div class="addNew-close-inner"></div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    name: "plantsForm",
    computed: {
        getIsPlants () {
            return this.$store.getters.getIsPlants
        }
    },
    methods: {
        closePlantsAdd() {
            this.$store.dispatch('CHANGE_VISIBLE', [false, 'Plants'])
        }
    }
}
</script>

