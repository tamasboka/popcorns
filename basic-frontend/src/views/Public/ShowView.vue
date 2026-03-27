<script>
import SeriesDetails from "@/components/ui/SeriesDetails.vue";

export default {
  name: "ShowView",
  components: {SeriesDetails},
  data() {
    return {
      series: this.$route.meta.prefetched.show.data.data
    }
  }
}
</script>

<template>
  <section class="row p-5">
    <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
      <SeriesDetails :series="series"/>
    </div>
  </section>
</template>

<style scoped>

</style>