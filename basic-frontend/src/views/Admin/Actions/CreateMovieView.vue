<script>
import {http} from '@/utils/http.js'
import {ErrorMessage, Field, Form, Form as VeeForm} from "vee-validate";

export default {
  name: "CreateMovieView",
  components: {Form, Field, VeeForm},
  data() {
    return {}
  },
  methods: {
    async createMovie(values) {
      try {
        await http.post('/api/movies', values)
        this.$router.push({name: 'public-movies'})
      } catch (e) {
        console.log(e)
      }
    },
    async spamMovies(count = 10) {
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
  <section class="container p-5">
    <VeeForm @submit="createMovie">
      <div class="input-group mb-3">
        <label for="title" class="form-label me-5">Cím</label>
        <Field id="title" class="form-control" name="title"/>
      </div>
      <div class="input-group my-3">
        <label for="year" class="form-label me-5">Kiadás éve</label>
        <Field id="year" class="form-control" name="release_year" type="number"/>
      </div>
      <div class="input-group my-3">
        <label for="month" class="form-label me-5">Kiadás hónapja</label>
        <Field id="month" class="form-control" name="release_month" type="number"/>
      </div>
      <div class="input-group my-3">
        <label for="day" class="form-label me-5">Kiadás napja</label>
        <Field id="day" class="form-control" name="release_day" type="number"/>
      </div>
      <div class="input-group my-3">
        <label for="hours" class="form-label me-5">Runtime óra</label>
        <Field id="hours" class="form-control" name="length_hours" type="number"/>
      </div>
      <button type="submit" class="btn btn-primary">Send</button>
    </VeeForm>
  </section>
  <section>
    <button @click="spamMovies(10)" class="btn btn-danger">SPAM</button>
  </section>
</template>

<style scoped>

</style>