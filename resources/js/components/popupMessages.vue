<template>
    <div>
        <div class="popupMessages">
            <transition-group name="popup" mode="in-out" appear>
                <div v-for="(item, index) in items" key="index" :class="item.type" class="popupMessage">{{ item.message }}</div>
            </transition-group>
        </div>
    </div>
</template>

<script>
export default {
    name: "popupMessages",
    computed: {
        items () {
            return this.$store.getters.GET_MESSAGES;
        }
    }
}
</script>
