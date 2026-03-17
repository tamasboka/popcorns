<script>
import {ErrorMessage, Field, Form} from "vee-validate";
import {http} from '@/utils/http.js'

export default {
  name: "CreateGenresView",
  components: {ErrorMessage, Field, Form},
  data() {
    return {
      spamCount: 0
    }
  },
  methods: {
    async createGenre(values) {
      try {
        await http.post('/api/genres', values)
      } catch (e) {
        console.log(e)
      }
    },
    async spamGenres(count) {
      for (let i = 0; i < count; i++) {
        await http.post('/api/genres', {
          name: `Genre ${crypto.randomUUID().substring(0, 8)}`,
        }).then(() => console.log('done'))
      }
    }
  }
}
</script>

<template>
  <section class="container p-5 box">
    <h1 class="text-center mb-5">Create new genre</h1>
    <Form @submit="createGenre">
      <div class="input-group mb-3">
        <label for="name" class="form-label me-5">Genre name</label>
        <Field id="name" class="form-control" name="name" rules="required|max:20"/>
        <ErrorMessage name="name" as="div" class="alert alert-danger"/>
      </div>
      <button type="submit" class="btn btn-primary">Send</button>
    </Form>
    <div class="mt-5">
      <button @click="spamGenres(spamCount)" class="btn btn-danger">SPAM</button>
      <input type="number" v-model="spamCount">
    </div>
  </section>
</template>

<style scoped>

</style>