<script>

export default {
  name: "NavBar",
  data() {
    return {
      routes: [
        {
          path: 'public-movies',
          title: 'Movies',
          icon: 'bi-film'
        },
        {
          path: 'about',
          title: 'About',
          icon: 'bi-info-square'
        }
      ],
      isDarkTheme: localStorage.getItem('theme') === 'dark'
    }
  },
  methods: {
    toggleTheme() {
      this.isDarkTheme = !this.isDarkTheme;
      const theme = this.isDarkTheme ? 'dark' : 'light';
      document.documentElement.setAttribute('data-bs-theme', theme);
      localStorage.setItem('theme', theme);
    }
  },
}
</script>

<template>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid mx-5 my-2">
        <RouterLink :to="{name: 'public-home'}" class="navbar-brand">
          <i class="bi bi-house"></i> Home
        </RouterLink>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-collapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-collapse">
          <ul class="navbar-nav me-auto">
            <li v-for="r in routes" :key="r.path" class="nav-item">
              <RouterLink :to="{name: r.path}" class="nav-link">
                <i class="bi" :class="r.icon"></i> {{ r.title }}
              </RouterLink>
            </li>
          </ul>
          <RouterLink :to="{name: 'login'}" class="btn btn-primary mx-2 rounded-pill">Login</RouterLink>
          <RouterLink :to="{name: 'register'}" class="btn btn-secondary mx-2 rounded-pill">Register</RouterLink>
          <button @click="toggleTheme" class="btn ms-2" :class="{'btn-dark': isDarkTheme, 'btn-light': !isDarkTheme}">
            <i class="bi" :class="{'bi-brightness-high': isDarkTheme, 'bi-moon': !isDarkTheme}"></i>
          </button>
        </div>
      </div>
    </nav>
  </header>
</template>

<style scoped>
.navbar-brand:hover, .nav-link:hover, .btn:hover {
  transform: translateY(-5px);
}

.navbar-brand, .nav-link, .btn {
  transition: transform 0.25s
}
</style>
