<script>
import MovieSearchbar from "@/components/ui/MovieSearchbar.vue";

export default {
  name: "HomeView",
  components: {MovieSearchbar},
}
</script>

<template>
  <section class="d-flex justify-content-center min-vh-100">
    <div class="text-center my-5">
      <h1>Popcorns!🍿</h1>
      <MovieSearchbar/>
    </div>
  </section>
</template>

<style scoped>

</style>