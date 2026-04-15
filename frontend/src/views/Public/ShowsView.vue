<script>
import {getAllSeries} from "@/data/data.js";
import Loading from "@/components/ui/Loading.vue";
import SeriesCard from "@/components/ui/SeriesCard.vue";

export default {
  name: "SeriesView",
  components: {SeriesCard, Loading},
  data() {
    return {
      allSeries: [],
      loading: false,
      error: false
    }
  },
  methods: {
    async getAllSeries() {
      this.loading = true
      try {
        const res = await getAllSeries()
        this.allSeries = res.data.data
      } catch (e) {
        this.error = true
      } finally {
        this.loading = false
      }
    }
  },
  mounted() {
    this.getAllSeries()
  }
}
</script>

<template>
  <section v-if="loading">
    <Loading class="min-vh-100"/>
  </section>
  <section class="p-5" v-else>
    <div v-if="!allSeries.length" class="min-vh-100 d-flex justify-content-center align-items-center">
      <div class="box">
        <h1>No series!</h1>
      </div>
    </div>
    <div v-else class="box">
      <h1 class="text-center text-white">Series</h1>
      <div class="row">
        <div class="col-12 col-xl-3 col-lg-4 col-md-6 col-sm-6" v-for="series in allSeries">
          <SeriesCard :key="series.id" :series="series" class="text-white"/>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>

</style>