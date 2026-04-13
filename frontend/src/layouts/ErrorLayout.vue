<script>
import {isDarkTheme} from "@/utils/methods.js";

export default {
  name: "ErrorLayout",
  computed: {
    isDarkTheme
  }
}
</script>

<template>
  <section class="min-vh-100 d-flex justify-content-center align-items-center" :class="{'error': !isDarkTheme, 'error-dark': isDarkTheme}">
    <RouterView/>
  </section>
</template>

<style scoped>

</style>