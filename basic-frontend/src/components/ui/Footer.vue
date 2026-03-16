<script>
export default {
  name: "Footer"
}
</script>

<template>
  <footer class="p-5">
    <div class="row">
      <div class="col-12 col-lg-6 col-md-6 col-sm-6 text-center">
        <h1 class="h4">Developer</h1>
        <div class="inline-flex m-3">
          <img src="https://avatars.githubusercontent.com/u/114821563?v=4" alt="tamasboka profile picture" class="mx-2">
          <a href="https://github.com/tamasboka">tamasboka</a>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-md-6 col-sm-6 text-center">
        <h1 class="h4">GitHub Repository</h1>
        <a href="https://github.com/tamasboka/laravel-vue" target="_blank" class="btn btn-secondary"><i
            class="bi bi-github me-2"></i>laravel-vue</a>
      </div>
    </div>
  </footer>
</template>

<style scoped>
footer {
  background: darkgray
}

img {
  width: 5%;
  height: 5%;
  border-radius: 50%;
  border: 2px solid black;
}

a {
  text-decoration: none;
  color: black;
}
</style>