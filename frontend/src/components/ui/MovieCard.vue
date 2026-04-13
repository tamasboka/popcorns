<script>
export default {
  name: "MovieCard",
  props: {
    movie: {
      type: Object,
      required: true
    }
  },
  computed: {
    ratingColor() {
      if (!this.movie.avg) return 'unrated'
      if (this.movie.avg <= 2) return 'very-bad'
      if (this.movie.avg <= 4) return 'bad'
      if (this.movie.avg <= 6) return 'mid'
      if (this.movie.avg <= 8) return 'good'
      if (this.movie.avg <= 10) return 'very-good'
    }
  }
}
</script>

<template>
  <div class="card m-2" :class="ratingColor">
    <div class="card-body text-center" @click="$router.push({name: 'public-movie', params: {movieID: movie.id}})">
      <p class="card-text">{{ movie.title }}</p>
      <p class="card-text">{{ movie.avg? movie.avg+'⭐' : 'No ratings yet' }}</p>
      <p class="card-text">{{ movie.release_year }}</p>
    </div>
  </div>
</template>

<style scoped>

</style>