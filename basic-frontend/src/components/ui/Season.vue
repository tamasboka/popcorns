<script>
import MovieCard from "@/components/ui/MovieCard.vue";

export default {
  name: "Season",
  components: {MovieCard},
  props: {
    season: {
      type: Object,
      required: true
    },
  }
}
</script>

<template>
  <div class="box" v-if="season">
    <div class="row text-center">
      <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <h1 class="text-center">Season {{ season.number }}</h1>
      </div>
      <div class="row">
        <div class="col-12 col-xl-2 col-lg-4 col-md-6 col-sm-6 mb-5 mt-2" v-for="(episode, episodeNumber) in season.episodes">
          <h1 class="h4">Episode {{ episodeNumber+1 }}</h1>
          <MovieCard :key="episode.id" :movie="episode" class="text-white"/>
        </div>
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