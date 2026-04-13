<script>
export default {
  name: "SeriesCard",
  props: {
    series: {
      type: Object,
      required: true
    }
  },
  computed: {
    ratingColor() {
      if (!this.series.avg) return 'unrated'
      if (this.series.avg <= 2) return 'very-bad'
      if (this.series.avg <= 4) return 'bad'
      if (this.series.avg <= 6) return 'mid'
      if (this.series.avg <= 8) return 'good'
      if (this.series.avg <= 10) return 'very-good'
    }
  }
}
</script>

<template>
  <div class="card m-2" :class="ratingColor">
    <div class="card-body text-center" @click="$router.push({name: 'public-show', params: {showID: series.id}})">
      <p class="card-text">{{ series.title }}</p>
      <p class="card-text">{{ series.avg? series.avg+'⭐' : 'No ratings yet' }}</p>
      <p class="card-text">{{ series.release_year }}</p>
    </div>
  </div>
</template>

<style scoped>

</style>