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
    },
    id: {
      type: Number
    }
  }
}
</script>

<template>
<div class="card m-2">
  <div class="card-body text-center" @click="$router.push({name: 'public-movie', params: {movieID: id}})">
    <p class="card-text">{{ title }}</p>
    <p class="card-text">{{ avg }}⭐</p>
    <p class="card-text">{{ year }}</p>
  </div>
</div>
</template>

<style scoped>
.card {
  border: 5px solid black;
  transition: transform 0.2s;
  background: #020024;
  background: linear-gradient(to left top, white, gray 50%, black);
  //background: linear-gradient(10deg, rgb(29, 19, 141) 5%, rgb(54, 136, 153) 75%);
}

.card:hover {
  box-shadow: 10px 10px black;
  transform: translateY(-10px);
}

</style>