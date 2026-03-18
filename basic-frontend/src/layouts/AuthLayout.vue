<script>
import {isDarkTheme} from "@/utils/methods.js";

export default {
  name: "AuthLayout",
  computed: {
    isDarkTheme
  }
}
</script>

<template>
<section class="min-vh-100 d-flex justify-content-center align-items-center" :class="{'auth': !isDarkTheme, 'auth-dark': isDarkTheme}">
  <RouterView/>
</section>
</template>

<style scoped>

</style>