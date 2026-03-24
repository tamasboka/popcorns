<script>
export default {
  name: "MovieDetails",
  props: {
    movie: {
      type: Object,
      required: true
    }
  },
  computed: {
    releaseDate() {
      let date = this.movie.release_year
      if (this.movie.release_month && this.movie.release_day) date += ". " + this.movie.release_month + ". " + this.movie.release_day
      return date
    }
  }
}
</script>

<template>
  <div class="box" v-if="movie">
    <div class="row text-center">
      <div class="col-12">
        <h1 class="text-center">{{ movie.title }}</h1>
      </div>
      <div class="col-12 col-lg-3 mt-2">
        <h2>Rating</h2>
        <h2 v-if="movie.avg">⭐{{ movie.avg }} / 10</h2>
        <h2 v-else>No ratings</h2>
      </div>
      <div class="col-12 col-lg-3 mt-2">
        <h2>Release date</h2>
        <h2>{{ releaseDate }}</h2>
      </div>
      <div class="col-12 col-lg-3 mt-2">
        <h2>Runtime</h2>
        <h2>{{ movie.hours }}h</h2>
      </div>
      <div class="col-12 col-lg-3 mt-2">
        <h2>Genres</h2>
        <p v-for="genre in movie.genres">{{ genre.name }}</p>
      </div>
    </div>
  </div>
  <div class="box" v-else>
    <h1>Something went wrong!</h1>
    <h2>Try reloading the page.</h2>
  </div>
</template>

<style scoped>

</style>