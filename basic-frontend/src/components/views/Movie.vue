<script>
import axios from "axios";

export default {
  name: "Movie",
  data() {
    return {
      movie: null
    }
  },
  async mounted() {
    await axios(
        {
          method: 'get',
          url: 'http://127.0.0.1:8000/api/movies/' + this.$route.params.id,
          headers: {
            'accept': 'application/json',
          }
        }
    ).then((res) => {
      this.movie = res.data.data
      document.title = res.data.data.title
    })
  }
}
</script>

<template>

</template>

<style scoped>

</style>