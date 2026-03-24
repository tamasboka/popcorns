<script>
import Review from "@/components/ui/Review.vue";

export default {
  name: "ReviewsBox",
  props: {
    ratings: {
      type: Array,
      required: true
    }
  },
  components: {Review}
}
</script>

<template>
  <div class="box" v-if="ratings.length">
    <h1 class="text-center">Reviews</h1>
    <div v-for="review in ratings">
      <Review :id="review.id" :title="review.title" :content="review.content" :has_spoilers="review.has_spoilers"
              :stars="review.stars" :uid="review.rater.id" :uname="review.rater.name"/>
    </div>
  </div>
  <div class="box" v-else>
    <h1 class="text-center">No reviews!</h1>
  </div>
</template>

<style scoped>

</style>