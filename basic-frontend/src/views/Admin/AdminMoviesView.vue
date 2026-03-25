<script>
import Loading from "@/components/ui/Loading.vue";
import {http} from "@/utils/http.js";
import {getAllMovies} from "@/data/data.js";

export default {
  name: "AdminMoviesView",
  components: {Loading},
  data() {
    return {
      movies: [],
      loading: false
    }
  },
  methods: {
    async getAllMovies() {
      this.loading = true
      try {
        const res = await getAllMovies()
        this.movies = res.data.data
      } catch (e) {
        console.log(e)
      } finally {
        this.loading = false
      }
    },
    async deleteMovie(id) {
      this.loading = true
      try {
        await http.delete(`/api/movies/${id}`)
      } catch (e) {
        console.log(e)
      }
      await this.getAllMovies()
    }
  },
  mounted() {
    this.getAllMovies()
  }
}
</script>

<template>
  <section v-if="loading">
    <Loading/>
  </section>
  <section v-else-if="movies.length === 0">
    <div class="d-flex justify-content-center align-items-center">
      <div class="box">
        <h1>No movies!</h1>
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
          Title
        </td>
        <td>
          Release date
        </td>
        <td>
          Length (h)
        </td>
        <td>
          Created at
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
      <tr v-for="movie in movies" :key="movie.id">
        <td>
          {{ movie.id }}
        </td>
        <td>
          {{ movie.title }}
        </td>
        <td>
          {{ movie.release_year }} {{ movie.release_month }} {{ movie.release_day }}
        </td>
        <td>
          {{ movie.hours }}h
        </td>
        <td>
          {{ movie.created_at }}
        </td>
        <td>
          <button class="btn btn-info"><i class="bi-info"></i></button>
        </td>
        <td>
          <button class="btn btn-danger" @click="deleteMovie(movie.id)"><i class="bi-x"></i></button>
        </td>
      </tr>
      </tbody>
    </table>
  </section>
</template>

<style scoped>

</style>