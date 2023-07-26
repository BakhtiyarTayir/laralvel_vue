<template>
    <div class="container-sm m-5 p-4">
        <div class="mb-5"></div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="person in persons">
                <th scope="row">{{ person.id }}</th>
                <td> {{ person.name }}</td>
                <td> {{ person.age }}</td>
                <td> {{ person.job }}</td>
            </tr>

            </tbody>
        </table>

        <SinglePostComponent></SinglePostComponent>
    </div>

</template>

<script>
import SinglePostComponent from "@/components/SinglePostComponent.vue";
export default {
    name: "PostComponent",
    data() {
        return {
            persons: null
        }
    },

    mounted() {
        this.persons = this.getPersons()
    },
    methods: {
        getPersons() {
            axios.get('/persons')
                .then(data => {
                    this.persons = data.data
                })
        }
    },
    computed: {

    },
    components: {
        SinglePostComponent
    }
}
</script>

<style scoped>

</style>
