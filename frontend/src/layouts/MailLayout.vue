<script>
import NavBar from "@/components/ui/NavBar.vue";
import Footer from "@/components/ui/Footer.vue";

export default {
  name: "MailLayout",
  components: {Footer, NavBar}
}
</script>

<template>
  <NavBar/>
<section class="mx-5 p-5 min-vh-100 layout planets">
  <RouterView/>
</section>
  <Footer/>
</template>

<style scoped>

</style>