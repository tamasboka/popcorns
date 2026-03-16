<script>
export default {
  name: "ErrorBox",
  computed: {
    getTitle() {
      return this.$route.meta.title
    }
  }
}
</script>

<template>
  <div class="box text-center">
    <h1>{{ getTitle }}</h1>
    <RouterLink :to="{name: 'public-home'}" class="btn btn-success mx-2"><i class="bi bi-house"></i></RouterLink>
    <RouterLink :to="{name: 'public-movies'}" class="btn btn-success mx-2"><i class="bi bi-film"></i></RouterLink>
  </div>
</template>

<style scoped>
.box {
  padding: 50px;
  color: black;
  box-shadow: 20px 20px black;
  background-color: whitesmoke;
}
</style>