<script>
import NavBar from "@/components/ui/NavBar.vue";
import Footer from "@/components/ui/Footer.vue";
import {isDarkTheme} from "@/utils/methods.js";

export default {
  name: "PublicLayout",
  data() {
    return {
      dark: isDarkTheme()
    }
  },
  components: {Footer, NavBar},
  methods: {
    updateTheme() {
      this.dark = isDarkTheme()
    }
  }
}
</script>

<template>
  <NavBar @toggle-theme="updateTheme()"/>
  <main class="min-vh-100" :class="{'public-dark': dark, 'public': !dark}">
    <RouterView/>
  </main>
  <Footer/>
</template>

<style scoped>

</style>