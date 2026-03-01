<script>
import NavBar from "@/components/layouts/NavBar.vue";
import Footer from "@/components/layouts/Footer.vue";

export default {
  components: {Footer, NavBar},
}
</script>

<template>
  <NavBar/>
  <RouterView/>
  <Footer/>
</template>

<style>
:root {
  background-color: rgb(18 18 18);
}
</style>
