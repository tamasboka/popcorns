<script>
export default {
  methods: {
    setTheme() {
      const savedTheme = localStorage.getItem('theme');
      document.documentElement.setAttribute('data-bs-theme', savedTheme);
    }
  },
  mounted() {
    this.setTheme()
  }
}
</script>

<template>
  <RouterView/>
</template>

<style>

</style>
