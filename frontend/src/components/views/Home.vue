<script>
import axios from "axios"
export default {
  name: "Home",
  data() {
    return {
      movies: null
    }
  },
  async mounted() {
    await axios({
      method: "get",
      url: "http://127.0.0.1:8000/api/movies",
      headers: {
        accept: "application/json"
      }
    }).then(res => this.movies = res.data.data)
  }
}
</script>

<template>

</template>

<style scoped>

</style>