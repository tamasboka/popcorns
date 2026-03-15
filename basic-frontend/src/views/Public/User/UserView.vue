<script>
export default {
  name: "UserView",
  data() {
    return {
      user: this.$route.meta.prefetched.user.data.data
    }
  }
}
</script>

<template>

</template>

<style scoped>

</style>