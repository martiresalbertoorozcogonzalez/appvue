<template>
    <div class="h5 m-0">{{this.form.name}}</div>
</template>

<script>
    export default {
        data(){
          return {
                form: new Form({
                  id: '',
                  name : '',
                  email : '',
                  password : '',
                  type : '',
                  bio : '',
                  photo : ''
                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        created() {
            axios.get("api/profile")
            .then(({ data }) => (this.form.fill(data)));
        }
    }
</script>
