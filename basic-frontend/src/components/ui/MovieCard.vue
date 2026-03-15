<script>
export default {
  name: "MovieCard",
  props: {
    title: {
      type: String
    },
    avg: {
      type: Number
    },
    year: {
      type: Number
    }
  }
}
</script>

<template>
<div>
  <p>{{ title }}</p>
  <p>{{ avg }}⭐</p>
  <p>{{ year }}</p>
</div>
</template>

<style scoped>
div {
  border: 5px solid black;
  width: 25%;
}
</style>