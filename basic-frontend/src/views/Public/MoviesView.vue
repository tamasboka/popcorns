<script>
import {getAllMovies} from "@/data/data.js";
import MovieCard from "@/components/ui/MovieCard.vue";

export default {
  name: "MoviesView",
  components: {MovieCard},
  data() {
    return {
      movies: [],
      error: false
    }
  },
  methods: {
    async getMovies() {
      try {
        const res = await getAllMovies()
        this.movies = res.data.data
      } catch {
        this.error = true
      }
    }
  },
  mounted() {
    this.getMovies()
  }
}
</script>

<template>
<MovieCard v-for="movie in movies" :key="movie.id" :title="movie.title" :avg="movie.avg" :year="movie.release_year"/>
</template>

<style scoped>

</style>