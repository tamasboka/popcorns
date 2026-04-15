<script>
import {getAllUsers} from "@/data/data.js";
import Loading from "@/components/ui/Loading.vue";
import {http} from '@/utils/http.js'
export default {
  name: "UsersView",
  components: {Loading},
  data() {
    return {
      users: [],
      loading: false,
      error: false
    }
  },
  methods: {
    async getAllUsers() {
      this.loading = true
      try {
        const res = await getAllUsers()
        this.users = res.data.data
      } catch (e) {
        this.error = true
      } finally {
        this.loading = false
        console.log(this.users)
      }
    },
    async deleteUser(id) {
      try {
        await http.delete(`/api/users/${id}`)
      } catch (e) {
        console.log(e)
      }
      await this.getAllUsers()
    }
  },
  mounted() {
    this.getAllUsers()
  }
}
</script>

<template>
  <section v-if="loading">
    <Loading class="min-vh-100"/>
  </section>
  <section v-else-if="users.length === 0">
    <div class="d-flex justify-content-center align-items-center">
      <div class="box">
        <h1>No users!</h1>
      </div>
    </div>
  </section>
  <section v-else>
    <table class="table table-striped">
      <thead>
      <tr>
        <td>
          ID
        </td>
        <td>
          Name
        </td>
        <td>
          Join date
        </td>
        <td>
          Joined since
        </td>
        <td>
          Details
        </td>
        <td>
          Delete
        </td>
      </tr>
      </thead>
      <tbody>
      <tr v-for="user in users" :key="user.id">
        <td>
          {{ user.id }}
        </td>
        <td>
          {{ user.name }}
        </td>
        <td>
          {{ user.join_date }}
        </td>
        <td>
          {{ user.joined_since }}
        </td>
        <td>
          <button class="btn btn-info"><i class="bi-info"></i></button>
        </td>
        <td>
          <button class="btn btn-danger" @click="deleteUser(user.id)"><i class="bi-x"></i></button>
        </td>
      </tr>
      </tbody>
    </table>
  </section>
</template>

<style scoped>

</style>