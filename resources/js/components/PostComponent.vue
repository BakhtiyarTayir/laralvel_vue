<template>
    <div class="container-sm m-5 p-4">
        <div class="mb-5"></div>
        <CreateComponent></CreateComponent>
        <IndexComponent ref="index"></IndexComponent>
    </div>

</template>

<script>


import CreateComponent from "@/components/CreateComponent.vue";
import IndexComponent from "@/components/IndexComponent.vue";
export default {
    name: "PostComponent",
    data() {
        return {
            persons: null
        }
    },

    mounted() {
        // this.persons = this.getPersons()
    },
    methods: {
        parentLog(){
            console.log('This is Parent Component')
        }

    },
    computed: {

    },
    components: {
        CreateComponent,
        IndexComponent
    }
}
</script>

<style scoped>

</style>
