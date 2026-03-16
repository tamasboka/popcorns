<script>
import {Form, Field} from 'vee-validate'
export default {
  name: "LoginView",
  components: {Field, Form}
}
</script>

<template>
<div class="box">
  <RouterLink :to="{name: 'public-home'}" class="btn btn-primary btn-sm mb-3"><i class="bi bi-arrow-left-circle"></i></RouterLink>
  <Form>
    <h1 class="h4 text-center">Login</h1>
    <label for="name">Name</label>
    <Field name="name" id="name" class="form-control mb-2"/>
    <label for="password">Password</label>
    <Field name="password" id="password" class="form-control mb-2" type="password"/>
    <div class="d-flex justify-content-center mt-5">
      <button class="btn btn-success">Login</button>
    </div>
  </Form>
</div>
</template>

<style scoped>

</style>