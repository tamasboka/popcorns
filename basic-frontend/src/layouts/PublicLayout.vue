<script>
import NavBar from "@/components/ui/NavBar.vue";
import Footer from "@/components/ui/Footer.vue";

export default {
  name: "PublicLayout",
  components: {Footer, NavBar},
}
</script>

<template>
  <NavBar @toggleTheme="toggleTheme"/>
  <main>
    <RouterView/>
  </main>
  <Footer/>
</template>

<style scoped>

</style>