<script>
export default {
  name: "SeriesDetails",
  props: {
    series: {
      type: Object,
      required: true
    }
  },
  computed: {
    releaseDate() {
      let date = this.series.release_year
      if (this.series.release_month && this.series.release_day) date += ". " + this.series.release_month + ". " + this.series.release_day + "."
      return date
    }
  }
}
</script>

<template>
  <div class="box" v-if="series">
    <div class="row text-center">
      <div class="col-12">
        <h1 class="text-center">{{ series.title }}</h1>
      </div>
      <div class="col-12 col-lg-3 mt-2">
        <h2>Rating</h2>
        <h2 v-if="series.avg">⭐{{ series.avg }} / 10</h2>
        <h2 v-else>No ratings</h2>
      </div>
      <div class="col-12 col-lg-3 mt-2">
        <h2>Release date</h2>
        <h2>{{ releaseDate }}</h2>
      </div>
      <div class="col-12 col-lg-3 mt-2">
        <h2>Seasons</h2>
        <h2>{{ series.count }}</h2>
      </div>
      <div class="col-12 col-lg-3 mt-2">
        <h2>Genres</h2>
        <p v-for="genre in series.genres">{{ genre.name }}</p>
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