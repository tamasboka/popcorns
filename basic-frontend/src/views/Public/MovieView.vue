<script>
import Review from "@/components/ui/Review.vue";
import ReviewsBox from "@/components/ui/ReviewsBox.vue";
import MovieDetails from "@/components/ui/MovieDetails.vue";

export default {
  name: "MovieView",
  components: {MovieDetails, ReviewsBox, Review},
  data() {
    return {
      movie: this.$route.meta.prefetched.movie.data.data
    }
  }
}
</script>

<template>
  <section class="row p-5">
    <div class="col-12 col-lg-8 col-md-6">
      <MovieDetails :movie="movie"/>
    </div>
    <div class="col-12 col-lg-4 col-md-6">
      <ReviewsBox :ratings="movie.ratings"/>
    </div>
  </section>
</template>

<style scoped>

</style>