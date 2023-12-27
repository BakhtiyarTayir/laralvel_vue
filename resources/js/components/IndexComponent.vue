<template>
    <div class="container-sm m-5 p-4">
        <div class="row">
            <div class="col-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Job</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <template  v-for="person in peoples">
                            <ShowComponent :person="person" :ref="`show_${person.id}`"></ShowComponent>
                            <EditComponent :person="person" :ref="`edit_${person.id}`"></EditComponent>
                        </template>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</template>

<script>
import EditComponent from './EditComponent.vue'
import ShowComponent from './ShowComponent.vue'
export default {
    name: "IndexComponent",
    data() {
        return {
            peoples: null,
            editPersonId: null,
            name: '',
            age: '',
            job: ''
        }
    },
    
    mounted() {
        this.getPersons()
    },
    components: {
        EditComponent,
        ShowComponent
    },
    
    methods: {
        getPersons() {
            axios.get('/api/people')
                .then(res => {
                    this.peoples = res.data
                })
        },
        updatePerson(id) {
            this.editPersonId = null
            axios.patch(`/api/people/${id}`, {
                name: this.name,
                age: this.age,
                job: this.job

            })
                .then(res => {
                    this.getPersons()
                })
        },
        deletePerson(id) {
            this.editPersonId = null
            axios.delete(`/api/people/${id}`)
                .then(res => {
                    this.getPersons()
                })
        },
        changeEditPersonId(id, name, age, job) {
            this.editPersonId = id
            let editName = `edit_${id}`
            let fullEditName = this.$refs[editName][0]
            fullEditName.name = name
            fullEditName.age = age
            fullEditName.job = job
        },
        isEdit(id) {
            return this.editPersonId === id
        },
        indexLog() {
            console.log('This is Index Component')
        }

    },
}
</script>

<style scoped>

</style>
