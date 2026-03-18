<script>
import {ErrorMessage, Field, Form} from "vee-validate";
import {http} from '@/utils/http.js'
import {isDarkTheme} from "@/utils/methods.js";

export default {
  name: "RegisterView",
  components: {Field, Form},
  methods: {
    registerUser() {

    }
  },
  computed: {
    isDarkTheme
  }
}
</script>

<template>
  <div :class="{'box': !isDarkTheme, 'box-dark': isDarkTheme}">
    <RouterLink :to="{name: 'public-home'}" class="btn btn-primary btn-sm mb-3"><i class="bi bi-arrow-left-circle"></i>
    </RouterLink>
    <Form>
      <h1 class="h4 text-center">Register</h1>
      <label for="name">Name</label>
      <Field name="name" id="name" class="form-control mb-2"/>
      <label for="password">Password</label>
      <Field name="password" id="password" class="form-control mb-2" type="password"/>
      <label for="password_1">Repeat password</label>
      <Field name="password_1" id="password_1" class="form-control mb-2" type="password"/>
      <label for="birthdate">Birthday</label>
      <Field name="birthdate" id="birthdate" class="form-control mb-2" type="date"/>
      <div class="d-flex justify-content-center mt-5">
        <button class="btn btn-success">Register</button>
      </div>
    </Form>
  </div>
</template>

<style scoped>

</style>