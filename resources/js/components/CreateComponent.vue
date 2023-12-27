<template>
    <div class="container-sm m-5 p-4">
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <input type="text" class="form-control" v-model="name" id="name" placeholder="Имя">
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" v-model="age" id="age" placeholder="Возраст">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" v-model="job" id="job" placeholder="Работа">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" @click.prevent="addPerson" value="Добавить">
                </div>
            </div>
        </div>
    </div>

</template>

<script>

export default {
    name: "CreateComponent",
    data() {
        return {
            name: '',
            age: '',
            job: ''
        }
    },
    mounted() {
        this.$parent.$refs.index.indexLog()
    },
    methods: {
        addPerson() {
            axios.post('/api/people', {
                name: this.name,
                age: this.age,
                job: this.job
            })
                .then(res => {
                    this.name = ''
                    this.age = ''
                    this.job = ''
                    this.$parent.$refs.index.getPersons()
                })
        },
        getPersons() {
            axios.get('/api/people')
                .then(res => {
                    this.persons = res.data

                })
            }
    },
}
</script>

<style scoped>

</style>
