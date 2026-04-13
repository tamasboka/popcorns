<script>
import {isDarkTheme} from "@/utils/methods.js";

export default {
  name: "ErrorBox",
  computed: {
    getTitle() {
      return this.$route.meta.title
    },
    isDarkTheme
  }
}
</script>

<template>
  <div class="text-center" :class="{'box': !isDarkTheme, 'box-dark': isDarkTheme}">
    <h1>{{ getTitle }}</h1>
    <RouterLink :to="{name: 'public-home'}" class="btn btn-success mx-2"><i class="bi bi-house"></i></RouterLink>
    <RouterLink :to="{name: 'public-movies'}" class="btn btn-success mx-2"><i class="bi bi-film"></i></RouterLink>
    <RouterLink :to="{name: 'public-shows'}" class="btn btn-success mx-2"><i class="bi bi-collection-play"></i></RouterLink>
  </div>
</template>

<style scoped>

</style>