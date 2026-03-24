<script>
export default {
  name: "Review",
  data() {
    return {
      revealed: this.has_spoilers === 0
    }
  },
  props: {
    id: {
      type: Number,
      required: true
    },
    stars: {
      type: Number,
      required: true
    },
    title: {
      type: String,
      required: true
    },
    content: {
      type: String,
      required: true
    },
    has_spoilers: {
      type: Number,
      required: true
    },
    uid: {
      type: Number,
      required: true
    },
    uname: {
      type: String,
      required: true
    }
  }
}
</script>

<template>
<div>
  <RouterLink :to="{name: 'user-profile', params: {userID: uid}}" class="btn btn-sm btn-outline-light">{{ uname }}</RouterLink>
  <div v-if="revealed">
    <h1 class="h4">{{ title }} - {{ stars }}⭐</h1>
    <p> {{ content }} </p>
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