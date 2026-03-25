<script>
export default {
  name: "SeriesCard",
  props: {
    series: {
      type: Object,
      required: true
    }
  }
}
</script>

<template>
  <div class="card m-2">
    <div class="card-body text-center" @click="$router.push({name: 'public-show', params: {showID: series.id}})">
      <p class="card-text">{{ series.title }}</p>
      <p class="card-text">{{ series.avg? movie.avg+'⭐' : 'No ratings yet' }}</p>
      <p class="card-text">{{ series.release_year }}</p>
    </div>
  </div>
</template>

<style scoped>

</style>