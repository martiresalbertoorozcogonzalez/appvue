<template>
    <img :src="getProfilePhoto()" class="img-circle elevation-2" width="60px" alt="User Image">
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
        
        methods:{
            getProfilePhoto(){

                let photo = (this.form.photo.length > 300) ? this.form.photo : "img/profile/"+ this.form.photo ;
                return photo;
            }
        },

        created() {
            axios.get("api/profile")
            .then(({ data }) => (this.form.fill(data)));
        } 
    }
</script>
