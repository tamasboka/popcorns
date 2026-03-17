<script>
import {http} from '@/utils/http.js'
import {ErrorMessage, Field, Form} from "vee-validate";

export default {
  name: "CreateMovieView",
  components: {ErrorMessage, Form, Field},
  data() {
    return {
      spamCount: 0
    }
  },
  methods: {
    async createMovie(values) {
      console.log(values)
      try {
        await http.post('/api/movies', values)
        this.$router.push({name: 'public-movies'})
      } catch (e) {
        console.log(e)
      }
    },
    async spamMovies(count) {
      for (let i = 0; i < count; i++) {
        await http.post('/api/movies', {
          title: `Movie ${crypto.randomUUID().substring(0, 8)}`,
          release_year: Math.floor(Math.random() * (2026 - 1900) + 1900),
          release_month: Math.floor(Math.random() * (12 - 1) + 1),
          release_day: Math.floor(Math.random() * (31 - 1) + 1),
          length_hours: Math.floor(Math.random() * (6 - 1) + 1),
        }).then(() => console.log('done'))
      }
    }
  }
}
</script>

<template>
  <section class="container p-5 box">
    <h1 class="text-center mb-5">Create new movie</h1>
    <Form @submit="createMovie">
      <div class="input-group mb-3">
        <label for="title" class="form-label me-5">Title</label>
        <Field id="title" class="form-control" name="title" rules="required|min:2|max:100"/>
        <ErrorMessage name="title" as="div" class="alert alert-danger"/>
      </div>
      <div class="input-group my-3">
        <label for="year" class="form-label me-5">Release year</label>
        <Field id="year" class="form-control" name="release_year" type="number" rules="required|integer|between:1900,2026"/>
        <ErrorMessage name="release_year" as="div" class="alert alert-danger"/>
      </div>
      <div class="input-group my-3">
        <label for="month" class="form-label me-5">Release month</label>
        <Field id="month" class="form-control" name="release_month" type="number" rules="integer|between:1,12"/>
        <ErrorMessage name="release_month" as="div" class="alert alert-danger"/>
      </div>
      <div class="input-group my-3">
        <label for="day" class="form-label me-5">Release day</label>
        <Field id="day" class="form-control" name="release_day" type="number" rules="integer|between:1,31"/>
        <ErrorMessage name="release_day" as="div" class="alert alert-danger"/>
      </div>
      <div class="input-group my-3">
        <label for="hours" class="form-label me-5">Runtime (h)</label>
        <Field id="hours" class="form-control" name="length_hours" type="number" rules="numeric|between:1,6"/>
        <ErrorMessage name="length_hours" as="div" class="alert alert-danger"/>
      </div>
      <button type="submit" class="btn btn-primary">Send</button>
    </Form>
    <div class="mt-5">
      <button @click="spamMovies(spamCount)" class="btn btn-danger">SPAM</button>
      <input type="number" v-model="spamCount">
    </div>
  </section>

</template>

<style scoped>

</style>