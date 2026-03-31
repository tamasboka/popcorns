<script>
export default {
  name: "UserView",
  data() {
    return {
      user: this.$route.meta.prefetched.user.data.data
    }
  }
}
</script>

<template>
  <section class="mx-5 min-vh-100 layout grayscale" :class="user.bgcolor">
    <RouterView/>
  </section>
</template>

<style scoped>

</style>