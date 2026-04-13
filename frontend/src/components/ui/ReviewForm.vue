<script>
import {Field, Form} from "vee-validate";
import {http} from "@/utils/http.js";
export default {
  name: "ReviewForm",
  data() {
    return {
      rating: 1,
      stars: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
      uid: localStorage.getItem('popcorns_uid')
    }
  },
  props: {
    movieID: {
      type: Number,
      required: true
    }
  },
  methods: {
    starClass(i) {
      if (this.rating >= i) return 'bi-star-fill text-warning'
      return 'bi-star'
    },
    async sendRating(data) {
      try {
        await http.post('/api/ratings', {
          user_id: this.uid,
          movie_id: this.movieID,
          rating: this.rating,
          ...data,
          has_spoilers: data.has_spoilers === 'on',
        })
      } catch (e) {
        console.log(e.message)
      } finally {
        this.$router.go()
      }
    }
  },
  components: {Field, Form},
}
</script>

<template>
  <Form @submit="sendRating">
    <div class="d-flex justify-content-center my-2">
      <h1 class="h4 me-2">{{ rating }}</h1>
      <i v-for="i in stars" @click="rating = i" class="bi" :class="starClass(i)"></i>
    </div>
    <Field type="text" name="review_title" class="form-control my-2" placeholder="Title"/>
    <Field type="text" name="review_content" class="form-control my-2" placeholder="Content"/>
    <div class="d-flex my-2">
      <label for="has_spoilers">Is your review spoiler-free?</label>
      <Field id="has_spoilers" type="checkbox" name="has_spoilers" class="form-check ms-2"/>
    </div>
    <div class="d-flex justify-content-center">
      <button type="submit" class="btn btn-success my-2">Send review</button>
    </div>
  </Form>
</template>

<style scoped>

</style>