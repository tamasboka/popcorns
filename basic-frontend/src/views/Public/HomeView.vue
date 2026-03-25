<script>
import {getAllMovies} from "@/data/data.js";
import MovieSearchbar from "@/components/ui/MovieSearchbar.vue";

export default {
  name: "HomeView",
  components: {MovieSearchbar},
  data() {
    return {
      top: [],
      newest: [],
    }
  },
  methods: {
    getTopMovies() {

    },
    async getMovies() {
      try {
        const res = await getAllMovies()
        this.movies = res.data.data
      } catch {
        this.error = true
      }
    },
    filterMovies() {
      if (this.searchQuery) this.filteredMovies = this.movies.filter(movie => movie.title.toLowerCase().includes(this.searchQuery.toLowerCase()))
      else this.filteredMovies = []
    }
  },
  mounted() {
    this.getMovies()
  }
}
</script>

<template>
  <section class="d-flex justify-content-center min-vh-100">
    <div class="text-center my-5">
      <h1>Popcorns!</h1>
      <MovieSearchbar/>
    </div>
  </section>
</template>

<style scoped>

</style>