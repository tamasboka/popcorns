<script>
import {http} from '@/utils/http.js'
import Loading from "@/components/ui/Loading.vue";

export default {
  name: "AdminGenresView",
  components: {Loading},
  data() {
    return {
      genres: [],
      loading: false
    }
  },
  methods: {
    async getAllGenres() {
      this.loading = true
      try {
        const res = await http.get('/api/genres')
        this.genres = res.data.data
      } catch (e) {
        console.log(e)
      } finally {
        this.loading = false
      }
    },
    async deleteGenre(id) {
      this.loading = true
      try {
        await http.delete(`/api/genres/${id}`)
      } catch (e) {
        console.log(e)
      }
      await this.getAllGenres()
    }
  },
  mounted() {
    this.getAllGenres()
  }
}
</script>

<template>
  <section v-if="loading">
    <Loading/>
  </section>
  <section v-if="genres.length === 0">
    <div class="d-flex justify-content-center align-items-center">
      <div class="box">
        <h1>No genres!</h1>
      </div>
    </div>
  </section>
  <section v-else-if="!loading">
    <table class="table table-striped">
      <thead>
      <tr>
        <td>
          Name
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
      <tr v-for="genre in genres" :key="genre.id">
        <td>
          {{ genre.name }}
        </td>
        <td>
          <button class="btn btn-info"><i class="bi-info"></i></button>
        </td>
        <td>
          <button class="btn btn-danger" @click="deleteGenre(genre.id)"><i class="bi-x"></i></button>
        </td>
      </tr>
      </tbody>
    </table>
  </section>
</template>

<style scoped>

</style>