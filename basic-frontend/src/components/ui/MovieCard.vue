<script>
export default {
  name: "MovieCard",
  props: {
    movie: {
      type: Object,
      required: true
    }
  }
}
</script>

<template>
  <div class="card m-2">
    <div class="card-body text-center" @click="$router.push({name: 'public-movie', params: {movieID: id}})">
      <p class="card-text">{{ movie.title }}</p>
      <p class="card-text">{{ movie.avg }}⭐</p>
      <p class="card-text">{{ movie.release_year }}</p>
    </div>
  </div>
</template>

<style scoped>
.card {
  border: 5px solid black;
  transition: transform 0.2s;
  background: gray;
  //background: linear-gradient(10deg, rgb(29, 19, 141) 5%, rgb(54, 136, 153) 75%);
}

.card:hover {
  box-shadow: 10px 10px black;
  transform: translateY(-10px);
}

</style>