<script>
import Review from "@/components/ui/Review.vue";
import ReviewForm from "@/components/ui/ReviewForm.vue";

export default {
  name: "ReviewsBox",
  data() {
    return {
      isWriting: false
    }
  },
  methods: {
    toggleReviewForm() {
      this.isWriting = !this.isWriting
    }
  },
  props: {
    ratings: {
      type: Array,
      required: true
    },
    movieID: {
      type: Number,
      required: true
    }
  },
  components: {ReviewForm, Review}
}
</script>

<template>
  <div class="box" v-if="ratings.length">
    <h1 class="text-center">Reviews</h1>
    <div class="d-flex justify-content-center">
      <button v-if="!isWriting" class="btn btn-secondary" @click="toggleReviewForm">Write review</button>
      <button v-else class="btn btn-secondary" @click="toggleReviewForm">Cancel writing</button>
    </div>
    <div v-if="isWriting" class="d-flex justify-content-center mt-2">
      <ReviewForm :movieID="movieID"/>
    </div>
    <div v-for="review in ratings">
      <Review :review="review"/>
    </div>
  </div>
  <div class="box" v-else>
    <h1 class="text-center">No reviews!</h1>
    <div class="d-flex justify-content-center">
      <button v-if="!isWriting" class="btn btn-secondary" @click="toggleReviewForm">Write review</button>
      <button v-else class="btn btn-secondary" @click="toggleReviewForm">Cancel writing</button>
    </div>
    <div v-if="isWriting" class="d-flex justify-content-center mt-2">
      <ReviewForm :movieID="movieID"/>
    </div>
  </div>
</template>

<style scoped>

</style>