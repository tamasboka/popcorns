<script>
import {isDarkTheme} from "@/utils/methods.js";
import {Form, Field} from 'vee-validate'
import {http} from '@/utils/http.js'
export default {
  name: "LoginView",
  data() {
    return {
      loading: false
    }
  },
  components: {Field, Form},
  methods: {
    async finishLogin(data) {
      await this.login(data)
      this.routeToHome()
    },
    async login(data) {
      this.loading = true
      try {
        await http.post('/api/login', data)
            .then((res) => {
              localStorage.setItem('popcorns_bearer', res.data.token)
              localStorage.setItem('popcorns_uid', res.data.uid)
              localStorage.setItem('popcorns_name', data.name)
            })
      } catch (e) {
        console.log(e.message)
      } finally {
        this.loading = false
      }
    },
    routeToHome() {
      this.$router.push({name: 'public-home'})
    }
  },
  computed: {
    isDarkTheme
  }
}
</script>

<template>
<div :class="{'box': !isDarkTheme, 'box-dark': isDarkTheme}">
  <RouterLink :to="{name: 'public-home'}" class="btn btn-primary btn-sm mb-3"><i class="bi bi-arrow-left-circle"></i></RouterLink>
  <Form @submit="finishLogin">
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