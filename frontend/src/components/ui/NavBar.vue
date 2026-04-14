<script>
import {http} from "@/utils/http.js";

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
          path: 'public-shows',
          title: 'Shows',
          icon: 'bi-collection-play'
        },
        {
          path: 'about',
          title: 'About',
          icon: 'bi-info-square'
        },
      ],
      isDarkTheme: localStorage.getItem('theme') === 'dark',
      isAdmin: false,
      mailCount: ''
    }
  },
  methods: {
    toggleTheme() {
      this.isDarkTheme = !this.isDarkTheme;
      const theme = this.isDarkTheme ? 'dark' : 'light';
      localStorage.setItem('theme', theme);
      this.$emit('toggle-theme')
    },
    async checkAdmin() {
      if (this.isLoggedIn)
      {
        try {
          const res = await http.post('/api/role', {}, {
            headers: {
              Authorization: `Bearer ${localStorage.getItem('popcorns_bearer')}`
            }
          })
          console.log(res)
          this.isAdmin = res.data.role === 'admin'
        } catch (e) {
          console.log(e.message)
        }
      }
    },
    async getMailCount() {
      if (this.isLoggedIn) {
        try {
          const res = await http.get('/api/mailcount', {
            headers: {
              Authorization: `Bearer ${localStorage.getItem('popcorns_bearer')}`
            }
          })
          console.log(res)
          if (res.data.count > 9) {
            this.mailCount = '9+'
          } else {
            this.mailCount = res.data.count
          }
        } catch (e) {
          console.log(e.message)
        }
      }
    }
  },
  computed: {
    isLoggedIn() {
      return localStorage.getItem('popcorns_bearer') && localStorage.getItem('popcorns_uid') && localStorage.getItem('popcorns_name')
    },
    uid() {
      return localStorage.getItem('popcorns_uid')
    },
    name() {
      return localStorage.getItem('popcorns_name')
    }
  },
  emits: ['toggle-theme'],
  mounted() {
    this.checkAdmin()
    this.getMailCount()
  }
}
</script>

<template>
  <header>
    <nav class="navbar navbar-expand-lg">
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
          <div v-if="isLoggedIn">
            <RouterLink v-if="isAdmin" :to="{name: 'admin-home'}" class="btn btn-outline-warning mx-2 rounded-pill">Admin Home</RouterLink>
            <RouterLink :to="{name: 'user-profile', params: {userID: uid}}" class="btn btn-primary mx-2 rounded-pill">{{ name }}</RouterLink>
            <RouterLink :to="{name: 'user-mails'}" class="btn btn-outline-light mx-2 rounded-pill">{{ mailCount }} <i class="bi bi-envelope"></i></RouterLink>
          </div>
          <div v-else>
            <RouterLink :to="{name: 'login'}" class="btn btn-primary mx-2 rounded-pill">Login</RouterLink>
            <RouterLink :to="{name: 'register'}" class="btn btn-secondary mx-2 rounded-pill">Register</RouterLink>
          </div>
          <button class="btn ms-2 btn-dark text-white" @click="toggleTheme">
            <i class="bi" :class="{'bi-moon': !isDarkTheme, 'bi-brightness-high': isDarkTheme}"></i>
          </button>
        </div>
      </div>
    </nav>
  </header>
</template>

<style scoped>

</style>
