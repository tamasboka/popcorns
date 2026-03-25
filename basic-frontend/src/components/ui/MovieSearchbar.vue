<script>
import {getAllMovies} from "@/data/data.js";

export default {
  name: "Searchbar",
  data() {
    return {
      filteredMovies: [],
      searchQuery: ''
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
    },
    filterMovies() {
      if (this.searchQuery) this.filteredMovies = this.movies.filter(movie => movie.title.toLowerCase().includes(this.searchQuery.toLowerCase())).slice(0, 5)
      else this.filteredMovies = []
    }
  },
  mounted() {
    this.getMovies()
  }
}
</script>

<template>
  <input v-model="searchQuery" @input="filterMovies" type="text" class="form-control" placeholder="Search for a movie">
  <ul class="list-group over" v-if="filteredMovies">
    <li class="list-group-item" v-for="movie in filteredMovies">
      <RouterLink :to="{name: 'public-movie', params: {movieID: movie.id}}" class="text-dark">{{ movie.title }}</RouterLink>
    </li>
  </ul>
</template>

<style scoped>

</style>