import {createRouter, createWebHistory} from 'vue-router'
import {getMovieById, getUserById} from "@/data/data.js";

const routes = [
    {
        path: '/',
        component: () => import("@/layouts/PublicLayout.vue"),
        children: [
            {
                path: '',
                component: () => import('@/views/Public/HomeView.vue'),
                name: 'public-home',
                meta: {
                    title: 'Home'
                }
            },
            {
                path: 'movies',
                children: [
                    {
                        path: '',
                        component: () => import('@/views/Public/MoviesView.vue'),
                        name: 'public-movies',
                        meta: {
                            title: 'Movies'
                        }
                    },
                    {
                        path: ':movieID',
                        component: () => import('@/views/Public/MovieView.vue'),
                        name: 'public-movie',
                        beforeEnter: async (to) => {
                            const movie = await getMovieById(to.params.movieID)
                            if (!movie) return {name: 'not-found'}
                            to.meta.prefetched = {movie}
                            console.log(movie)
                            to.meta.title = movie.data.data.title
                            return true
                        }
                    }
                ]
            },
            {
                path: 'user/:userID',
                component: () => import('@/views/Public/User/UserView.vue'),
                name: 'public-user',
                beforeEnter: async (to) => {
                    const user = await getUserById(to.params.userID)
                    if (!user) return {name: 'not-found'}
                    to.meta.prefetched = {user}
                    console.log(user)
                    to.meta.title = user.data.data.name
                    return true
                }
            },
            {
                path: 'about',
                component: () => import('@/views/Public/AboutView.vue'),
                name: 'about',
                meta: {
                    title: 'About'
                }
            }
        ]
    },
    {
        path: '/error',
        component: () => import('@/layouts/ErrorLayout.vue'),
        children: [
            {
                path: '403',
                component: () => import('@/views/Error/Forbidden.vue'),
                name: 'forbidden',
                meta: {
                    title: '403 Forbidden'
                }
            },
            {
                path: '401',
                component: () => import('@/views/Error/Unauthorized.vue'),
                name: 'unauthorized',
                meta: {
                    title: '401 Unauthorized'
                }
            },
            {
                path: '500',
                component: () => import('@/views/Error/ServerError.vue'),
                name: 'internal-server-error',
                meta: {
                    title: '500 Internal Server Error'
                }
            }
        ]
    },
    {
        path: '/auth',
        component: () => import('@/layouts/AuthLayout.vue'),
        children: [
            {
                path: 'register',
                component: () => import('@/views/Auth/RegisterView.vue'),
                name: 'register',
                meta: {
                    title: 'Register'
                }
            },
            {
                path: 'login',
                component: () => import('@/views/Auth/LoginView.vue'),
                name: 'login',
                meta: {
                    title: 'Login'
                }
            }
        ]
    },
    {
        path: '/:pathMatch(.*)*',
        name: 'not-found',
        component: () => import('@/views/Error/NotFound.vue'),
        meta: {
            title: '404 Not Found'
        }
    }
]

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes
})

router.beforeEach((to, from, next) => {
    next()
})

router.afterEach((to) => {
    const site = " - PopCorn-o-meter"
    document.title = to.meta.title + site
})

export default router
