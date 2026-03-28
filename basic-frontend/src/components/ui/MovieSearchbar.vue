<script>
import {getAllMedia} from "@/data/data.js";

export default {
  name: "Searchbar",
  data() {
    return {
      filteredMedia: [],
      searchQuery: '',
      media: [],
      error: ''
    }
  },
  methods: {
    async getMedia() {
      try {
        const res = await getAllMedia()
        this.media = res.data.media
      } catch (e) {
        this.error = e.message
      }
    },
    filterMovies() {
      const query = this.searchQuery.toLowerCase()

      if (!query) {
        this.filteredMedia = []
        return
      }

      const movies = this.media.movies.filter(movie => movie.title.toLowerCase().includes(query)).map(movie => ({...movie, type: 'movie'}))
      const series = this.media.series.filter(series => series.title.toLowerCase().includes(query)).map(series => ({...series, type: 'series'}))

      this.filteredMedia = [...movies, ...series].slice(0, 5)
    }
  },
  mounted() {
    this.getMedia()
  }
}
</script>

<template>
  <input v-model="searchQuery" @input="filterMovies" type="text" class="form-control" placeholder="Search for a movie">
  <ul class="list-group over" v-if="filteredMedia">
    <li class="list-group-item" v-for="media in filteredMedia">
      <RouterLink v-if="media.type === 'movie'" :to="{name: 'public-movie', params: {movieID: media.id}}" class="text-dark">{{
          media.title
        }}
      </RouterLink>
      <RouterLink v-else-if="media.type === 'series'" :to="{name: 'public-show', params: {showID: media.id}}" class="text-dark">{{
          media.title
        }}
      </RouterLink>
    </li>
  </ul>
</template>

<style scoped>

</style>