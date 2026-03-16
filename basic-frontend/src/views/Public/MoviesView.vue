<script>
import {getAllMovies} from "@/data/data.js";
import MovieCard from "@/components/ui/MovieCard.vue";
import Spinner from "@/components/ui/Spinner.vue";

export default {
  name: "MoviesView",
  components: {Spinner, MovieCard},
  data() {
    return {
      movies: [],
      error: false,
      loading: false
    }
  },
  methods: {
    async getMovies() {
      this.loading = true
      try {
        const res = await getAllMovies()
        this.movies = res.data.data
      } catch {
        this.error = true
      } finally {
        this.loading = false
      }
    }
  },
  mounted() {
    this.getMovies()
  }
}
</script>

<template>
  <section v-if="loading">
    <Spinner/>
  </section>
  <section class="p-5" v-else>
    <h1 class="text-center text-white">Movies</h1>
    <div class="row">
      <div class="col-12 col-lg-3 col-md-4 col-sm-6" v-for="movie in movies">
        <MovieCard  :key="movie.id" :title="movie.title" :avg="movie.avg" :year="movie.release_year" :id="movie.id" class="text-white"/>
      </div>
    </div>
  </section>
</template>

<style scoped>
</style>