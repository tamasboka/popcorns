<script>

export default {
  name: "NavBar",
}
</script>

<template>
  <nav class="navbar expand-lg bg-dark">
    <div class="container">
      <RouterLink :to="{name: 'home'}" class="navbar-brand text-white h2">
        Home
      </RouterLink>
      <div v-if="true">
        <RouterLink :to="{name: 'register'}" class="btn btn-success mx-2">Register</RouterLink>
        <RouterLink :to="{name: 'login'}" class="btn btn-success mx-2">Login</RouterLink>
      </div>
      <div v-else>

      </div>
    </div>
  </nav>
</template>

<style scoped>

</style>
