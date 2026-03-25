<script>
import {http} from '@/utils/http.js'
import {ErrorMessage, Field, Form} from "vee-validate";
export default {
  name: "CreateShowView",
  components: {ErrorMessage, Form, Field},
  data() {
    return {
      spamCount: 0
    }
  },
  methods: {
    async createSeries(values) {
      try {
        await http.post('/api/series', values, {headers: {Authorization: 'Bearer ' + localStorage.getItem('popcorns_bearer')}})
      } catch (e) {
        console.log(e)
      }
    },
    async spamSeries() {
      for (let i = 0; i < this.spamCount; i++) {
        const values = {
          title: `Series ${crypto.randomUUID().substring(0, 8)}`,
        }
        await this.createSeries(values).then(() => console.log('done'))
      }
    }
  }
}
</script>

<template>
  <section class="container p-5 box">
    <h1 class="text-center mb-5">Create new movie</h1>
    <Form @submit="createSeries">
      <div class="input-group mb-3">
        <label for="title" class="form-label me-5">Title</label>
        <Field id="title" class="form-control" name="title" rules="required|min:2|max:100"/>
        <ErrorMessage name="title" as="div" class="alert alert-danger"/>
      </div>
      <button type="submit" class="btn btn-primary">Send</button>
    </Form>
    <div class="mt-5">
      <button @click="spamSeries()" class="btn btn-danger">SPAM</button>
      <input type="number" v-model="spamCount">
    </div>
  </section>
</template>

<style scoped>

</style>