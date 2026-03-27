<script>
export default {
  name: "Review",
  data() {
    return {
      revealed: this.review.has_spoilers === 0
    }
  },
  props: {
    review: {
      type: Object,
      required: true
    }
  }
}
</script>

<template>
<div>
  <RouterLink v-if="review.rater?.name" :to="{name: 'user-profile', params: {userID: review.rater.id}}" class="btn btn-sm btn-outline-light">{{ review.rater.name }}</RouterLink>
  <p v-else class="btn btn-sm btn-outline-light my-1">Anon</p>
  <div v-if="revealed">
    <h1 class="h4 my-0">{{ review.title }} - {{ review.stars }}⭐</h1>
    <p> {{ review.content }} </p>
  </div>
  <div v-else>
    <div class="alert alert-danger text-center">
      <h1>Spoiler alert!</h1>
      <button class="btn btn-dark" @click="revealed = true">Click to reveal review</button>
    </div>
  </div>
</div>
</template>

<style scoped>

</style>