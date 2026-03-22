<script>
import Review from "@/components/ui/Review.vue";

export default {
  name: "MovieView",
  components: {Review},
  data() {
    return {
      movie: this.$route.meta.prefetched.movie.data.data
    }
  }
}
</script>

<template>
  <section class="row p-5">
    <div class="col-12 col-lg-8">

    </div>
    <div class="col-12 col-lg-4">
      <div v-for="review in movie.ratings" class="box">
        <Review :id="review.id" :title="review.title" :content="review.content" :has_spoilers="review.has_spoilers"
                :stars="review.stars" :uid="review.rater.id" :uname="review.rater.name"/>
      </div>
    </div>
  </section>
</template>

<style scoped>

</style>