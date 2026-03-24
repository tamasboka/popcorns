<script>
export default {
  /*methods: {
    setTheme() {
      let savedTheme = localStorage.getItem('theme');
      if (!savedTheme) {
        localStorage.setItem('theme', 'dark')
        savedTheme = 'dark'
      }
      document.documentElement.setAttribute('data-bs-theme', savedTheme);
    }
  },
  mounted() {
    this.setTheme()
  }
  */
}
</script>

<template>
  <main>
    <RouterView/>
  </main>
</template>

<style>

</style>
