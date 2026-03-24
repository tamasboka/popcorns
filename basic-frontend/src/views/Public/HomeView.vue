<script>
import {getAllMovies} from "@/data/data.js";

export default {
  name: "HomeView",
  data() {
    return {
      top: [],
      newest: [],
      filteredMovies: [],
      searchQuery: ''
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
      <input v-model="searchQuery" @input="filterMovies" type="text" class="form-control" placeholder="Search for a movie">
      <ul class="list-group" v-if="filteredMovies">
        <li class="list-group-item" v-for="movie in filteredMovies">
          <RouterLink :to="{name: 'public-movie', params: {movieID: movie.id}}" class="text-dark">{{ movie.title }}</RouterLink>
        </li>
      </ul>
    </div>
  </section>
</template>

<style scoped>

</style>