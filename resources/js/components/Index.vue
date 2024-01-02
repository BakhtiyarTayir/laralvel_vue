<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
import PostComponent from "./PostComponent.vue";

export default {
    name: "Index",
    data() {
        return {

        }
    },
    

    methods: {

    },
    components: {
        PostComponent
    }
}
</script>

<style scoped>

</style>
