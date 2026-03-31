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
  <RouterView/>
  <Footer/>
</template>

<style scoped>

</style>