<script>
import NavBar from "@/components/layouts/NavBar.vue";
import Footer from "@/components/layouts/Footer.vue";

export default {
  components: {Footer, NavBar},
}
</script>

<template>
  <NavBar v-if="$route.path !== '/login' && $route.path !== '/register'"/>
  <RouterView/>
  <Footer/>
</template>

<style>
:root {
  background-color: rgb(18 18 18);
}
</style>
