<script>
import AsideBar from "@/components/admin/AsideBar.vue";
import {isDarkTheme} from "@/utils/methods.js";

export default {
  name: "AdminLayout",
  data() {
    return {
      dark: isDarkTheme()
    }
  },
  components: {AsideBar},
  computed: {
    isDarkTheme
  },
  methods: {
    updateTheme() {
      this.dark = isDarkTheme()
    }
  }
}
</script>

<template>
  <section class="min-vh-100" :class="{'admin': !dark, 'admin-dark': dark}">
    <div class="row">
      <div class="col-12 col-lg-2 col-md-3 col-sm-6">
        <AsideBar @toggle-theme="updateTheme"/>
      </div>
      <div class="col-12 col-lg-10 col-md-9 col-sm-6 p-5">
        <RouterView/>
      </div>
    </div>
  </section>
</template>

<style scoped>

</style>