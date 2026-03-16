<script>
import AsideBar from "@/components/admin/AsideBar.vue";

export default {
  name: "AdminLayout",
  components: {AsideBar}
}
</script>

<template>
  <section class="admin min-vh-100">
    <div class="row">
      <div class="col-12 col-lg-2 col-md-3 col-sm-6">
        <AsideBar/>
      </div>
      <div class="col-12 col-lg-10 col-md-9 col-sm-6 d-flex align-items-center vh-100">
        <RouterView/>
      </div>
    </div>

  </section>
</template>

<style scoped>

</style>