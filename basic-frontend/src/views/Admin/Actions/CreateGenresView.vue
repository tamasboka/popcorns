<script>
import {Field, Form} from "vee-validate";

export default {
  name: "CreateGenresView",
  components: {Field, Form},
  data() {
    return {
      spamCount: 0
    }
  },
  methods: {
    createGenre() {

    },
    spamGenres(count) {

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
        <Field id="name" class="form-control" name="name"/>
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