<script>
import {Field, Form} from "vee-validate";
import {isDarkTheme} from "@/utils/methods.js";

export default {
  name: "CreatePersonView",
  components: {Field, Form},
  data() {
    return {
      spamCount: 0
    }
  },
  methods: {
    createPerson(values) {

    },
    spamPerson() {

    }
  },
  computed: {
    isDarkTheme
  }
}
</script>

<template>
  <section class="container p-5" :class="{'box': !isDarkTheme, 'box-dark': isDarkTheme}">
    <h1 class="text-center mb-5">Create new person</h1>
    <Form @submit="createPerson">
      <div class="input-group mb-3">
        <label for="name" class="form-label me-5">Name</label>
        <Field id="name" class="form-control" name="name"/>
      </div>
      <div class="input-group mb-3">
        <label for="birth_date" class="form-label me-5">Birth date</label>
        <Field id="birth_date" class="form-control" name="birth_date" type="date"/>
      </div>
      <button type="submit" class="btn btn-primary">Send</button>
    </Form>
    <div class="mt-5">
      <button @click="spamPerson(spamCount)" class="btn btn-danger">SPAM</button>
      <input type="number" v-model="spamCount">
    </div>
  </section>
</template>

<style scoped>

</style>