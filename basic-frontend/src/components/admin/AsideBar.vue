<script>
export default {
  name: "AsideBar",
  data() {
    return {
      routes: [
        {
          path: 'public-home',
          title: 'Public Home',
          icon: 'bi-house'
        },
        {
          path: 'admin-home',
          title: 'Admin Home',
          icon: 'bi-house'
        },
        {
          path: 'admin-movies',
          title: 'Admin Movie List',
          icon: 'bi-film'
        },
        {
          path: 'admin-genres',
          title: 'Genres',
          icon: 'bi-tags'
        },
        {
          path: 'admin-users',
          title: 'Admin User List',
          icon: 'bi-person-circle'
        },
        {
          path: 'create-movie',
          title: 'Create Movie',
          icon: 'bi-plus bi-film'
        },
        {
          path: 'create-series',
          title: 'Create Series',
          icon: 'bi-plus bi-collection-play'
        },
        {
          path: 'create-genre',
          title: 'Create Genre',
          icon: 'bi-plus bi-tags'
        },
        {
          path: 'create-person',
          title: 'Create Person',
          icon: 'bi-plus bi-person'
        },
      ]
    }
  },
  methods: {
    toggleTheme() {
      this.isDarkTheme = !this.isDarkTheme;
      const theme = this.isDarkTheme ? 'dark' : 'light';
      localStorage.setItem('theme', theme);
      this.$emit('toggle-theme')
    }
  },
  emits: ['toggle-theme']
}
</script>

<template>
  <aside>
    <ul class="list-group">
      <li class="list-group-item" @click="toggleTheme">
        <span class="text-decoration-none text-dark"><i class="bi-moon">Toggle theme</i></span>
      </li>
      <li class="list-group-item" v-for="r in routes" :key="r.path" @click="$router.push({name: r.path})">
        <RouterLink :to="{name: r.path}" class="text-decoration-none text-dark">
          <i v-if="r.icon.includes(' ')" v-for="icon in r.icon.split(' ')" :class="icon" class="me-2"></i>
          <i v-else :class="r.icon" class="me-2">
          </i>{{ r.title }}
        </RouterLink>
      </li>
    </ul>
  </aside>
</template>

<style scoped>

</style>