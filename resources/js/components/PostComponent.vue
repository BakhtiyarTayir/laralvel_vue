<template>
    <div class="container-sm m-5 p-4">
        <div class="row">
            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item">Name: {{ name }}</li>
                    <li class="list-group-item">Age: {{ age }}</li>
                    <li class="list-group-item">Job: {{ getJob }}</li>
                </ul>
            </div>
        </div>
        <button class="btn btn-primary mt-3" @click="sayHello">Hello</button>
        <div class="mb-5"></div>
        <SinglePostComponent></SinglePostComponent>
    </div>

</template>

<script>
import SinglePostComponent from "@/components/SinglePostComponent.vue";
export default {
    name: "PostComponent",
    data() {
        return {
            name: 'Roman',
            age: 34,
        }
    },
    methods: {
        sayHello(){
            alert('Hello!')
        }
    },
    computed: {
        getJob(){
            return this.name + ' работает в булочной'
        }
    },



    components: {
        SinglePostComponent
    }
}
</script>

<style scoped>

</style>
