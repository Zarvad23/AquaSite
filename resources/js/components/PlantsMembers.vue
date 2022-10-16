<template>
    <div class="container">
        <h2>Почвопокровные растения переднего плана</h2>
        <div class="plantMembers">
            <div class="plantMembers-left">
                <div class="addForm" @click="showPlants()">
                    <p>Добавить</p>
                </div>
                <div class="plantMembers-left-content">
                    <div class="plantMember">
                        <div class="plantMember-image">
                            <span style="background-image: url('https://fanfishka.ru/uploads/posts/2016-07/1469790947_02.jpg')"></span>
                        </div>
                        <div class="plantMember-title">
                            <h3>Водный лютик (<span class="plantMember-title__another">ранукулус инундатус</span>)</h3>
                        </div>
                    </div>
                    <div class="plantMember">
                        <div class="plantMember-image">
                            <span style="background-image: url('https://fanfishka.ru/uploads/posts/2016-07/1469790947_02.jpg')"></span>
                        </div>
                        <div class="plantMember-title">
                            <h3>Водный лютик (<span class="plantMember-title__another">ранукулус инундатус</span>)</h3>
                        </div>
                    </div>
                    <div class="plantMember">
                        <div class="plantMember-image">
                            <span style="background-image: url('https://fanfishka.ru/uploads/posts/2016-07/1469790947_02.jpg')"></span>
                        </div>
                        <div class="plantMember-title">
                            <h3>Водный лютик (<span class="plantMember-title__another">ранукулус инундатус</span>)</h3>
                        </div>
                    </div>
                </div>
                <div class="plantMembers-items-load">
                    <span>Загрузить еще</span>
                </div>
            </div>
            <div class="plantMembers-arrow">
                <span style="background-image: url('https://icomoon.io/iconsabf18a1/12/52.svg')"></span>
            </div>
            <div class="plantMembers-right">
                <plant />
            </div>
        </div>
    </div>
</template>

<script>
import plant from './Plant'
export default {
    name: "PlantsMembers",
    components: {
        plant
    },
    methods: {
        showPlants() {
            this.$store.dispatch('CHANGE_VISIBLE', 'Plants');
        }
    }
}
</script>

<style scoped>

</style>
