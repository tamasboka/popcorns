<script>
export default {
  name: "AdminHome",
  data() {
    return {
      username: localStorage.getItem('popcorns_name')
    }
  }
}
</script>

<template>
<section class="d-flex justify-content-center align-items-center min-vh-100">
  <div class="p-5 box d-block">
    <h1>Welcome back, {{ username }}!</h1>
    <p>Remember: Power tripping is fun, but punishable.</p>
  </div>
</section>
</template>

<style scoped>

</style>