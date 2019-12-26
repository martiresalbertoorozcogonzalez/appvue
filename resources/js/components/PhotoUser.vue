<template>
  <div class="container mt-2">
    <div class="row">
      <a>
        <img
          :src="getProfilePhoto()"
          alt
          class="brand-image img-circle elevation-3"
          style="opacity: .8"
        />
        <span class="brand-text font-weight-light" style="color:white;">{{this.form.name}}</span>
      </a>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: new Form({
        id: "",
        name: "",
        email: "",
        password: "",
        type: "",
        bio: "",
        photo: ""
      })
    };
  },

  mounted() {
    console.log("Component mounted.");
  },

  methods: {
    getProfilePhoto() {
      let photo =
        this.form.photo.length > 300
          ? this.form.photo
          : "img/profile/" + this.form.photo;
      return photo;
    }
  },

  created() {
    axios.get("api/profile").then(({ data }) => this.form.fill(data));
  }
};
</script>
