import { createRouter, createWebHistory } from 'vue-router'
import Home from "@/components/views/Home.vue";
import Movie from "@/components/views/Movie.vue";
import UserProfile from "@/components/views/UserProfile.vue";
import Register from "@/components/views/Register.vue";
import Login from "@/components/views/Login.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "home",
      component: Home,
      meta: {
        title: "Home"
      }
    },
    {
      path: "/movie/:id",
      name: "movie",
      component: Movie,
      meta: {
        title: ""
      }
    },
    {
      path: "/profile/:id",
      name: "profile",
      component: UserProfile,
      meta: {
        title: ""
      }
    },
    {
      path: "/register",
      name: "register",
      component: Register,
      meta: {
        title: "Register"
      }
    },
    {
      path: "/login",
      name: "login",
      component: Login,
      meta: {
        title: "Login"
      }
    }
  ],
})

router.beforeEach((to, from, next) => {
  document.title = to.meta.title + " - Popcorn-o-meter"
  next()
})

export default router
