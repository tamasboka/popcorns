<script>
export default {
  name: "MovieCard",
  props: {
    movie: {
      type: Object,
      required: true
    }
  }
}
</script>

<template>
  <div class="card m-2">
    <div class="card-body text-center" @click="$router.push({name: 'public-movie', params: {movieID: movie.id}})">
      <p class="card-text">{{ movie.title }}</p>
      <p class="card-text">{{ movie.avg? movie.avg+'⭐' : 'No ratings yet' }}</p>
      <p class="card-text">{{ movie.release_year }}</p>
    </div>
  </div>
</template>

<style scoped>

</style>