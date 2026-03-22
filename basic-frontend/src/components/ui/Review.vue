<script>
export default {
  name: "Review",
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
  <RouterLink :to="{name: 'user-profile', params: {userID: uid}}" class="btn btn-outline-light">{{ uname }}</RouterLink>
  <p v-if="has_spoilers === 1">Spoiler alert</p>
  <h1>{{ title }} - {{ stars }}⭐</h1>
  <p> {{ content }} </p>
</div>
</template>

<style scoped>

</style>