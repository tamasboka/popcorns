<script>
import NavBar from "@/components/ui/NavBar.vue";
import Footer from "@/components/ui/Footer.vue";

export default {
  name: "UserView",
  components: {Footer, NavBar},
}
</script>

<template>
  <NavBar/>
  <section class="user mx-5 min-vh-100 layout">
    <RouterView/>
  </section>
  <Footer/>
</template>

<style scoped>

</style>