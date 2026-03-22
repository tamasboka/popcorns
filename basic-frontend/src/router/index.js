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
                            if (!movie) {
                                await router.push({name: 'not-found'})
                                return
                            }
                            to.meta.prefetched = {movie}
                            to.meta.title = movie.data.data.title
                            return true
                        }
                    }
                ]
            },
            {
                path: 'shows',
                children: [
                    {
                        path: '',
                        component: () => import('@/views/Public/ShowsView.vue'),
                        name: 'public-shows',
                        meta: {
                            title: 'Shows'
                        }
                    },
                    {
                        path: 'showID',
                        component: () => import('@/views/Public/ShowView.vue'),
                        name: 'public-show',
                        beforeEnter: async (to) => {
                            const show = await getMovieById(to.params.showID)
                            if (!show) {
                                await router.push({name: 'not-found'})
                                return
                            }
                            to.meta.prefetched = {show}
                            to.meta.title = show.data.data.title
                            return true
                        }
                    }
                ]
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
        path: '/user/:userID',
        component: () => import('@/layouts/UserLayout.vue'),
        beforeEnter: async (to) => {
            const user = await getUserById(to.params.userID)
            if (!user) {
                await router.push({name: 'not-found'})
                return
            }
            to.meta.prefetched = {user}
            to.meta.title = user.data.data.name
            return true
        },
        children: [
            {
                path: '',
                component: () => import('@/views/User/ProfileView.vue'),
                name: 'user-profile',
            },
            {
                path: 'reviews',
                component: () => import('@/views/User/ReviewsView.vue'),
                name: 'user-reviews',
            },
            {
                path: 'watchlists',
                component: () => import('@/views/User/WatchlistView.vue'),
                name: 'user-watchlists'
            }
        ],
    },
    {
        path: '/error',
        component: () => import('@/layouts/ErrorLayout.vue'),
        children: [
            {
                path: '403',
                component: () => import('@/components/ui/ErrorBox.vue'),
                name: 'forbidden',
                meta: {
                    title: '403 Forbidden'
                }
            },
            {
                path: '401',
                component: () => import('@/components/ui/ErrorBox.vue'),
                name: 'unauthorized',
                meta: {
                    title: '401 Unauthorized'
                }
            },
            {
                path: '500',
                component: () => import('@/components/ui/ErrorBox.vue'),
                name: 'internal-server-error',
                meta: {
                    title: '500 Internal Server Error'
                }
            },
            {
                path: '',
                component: () => import('@/components/ui/ErrorBox.vue'),
                name: 'secret',
                meta: {
                    title: "You shouldn't be here"
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
        path: '/admin',
        component: () => import('@/layouts/AdminLayout.vue'),
        children: [
            {
                path: '',
                component: () => import('@/views/Admin/AdminHome.vue'),
                name: 'admin-home',
                meta: {
                    title: 'Admin Home'
                }
            },
            {
                path: 'movies',
                component: () => import('@/views/Admin/AdminMoviesView.vue'),
                name: 'admin-movies',
                meta: {
                    title: 'Admin Movie List'
                }
            },
            {
                path: 'users',
                component: () => import('@/views/Admin/AdminUsersView.vue'),
                name: 'admin-users',
                meta: {
                    title: 'Admin User List'
                }
            },
            {
                path: 'genres',
                component: () => import('@/views/Admin/AdminGenresView.vue'),
                name: 'admin-genres',
                meta: {
                    title: 'Admin Genre List'
                }
            },
            {
                path: 'create-movie',
                component: () => import('@/views/Admin/Actions/CreateMovieView.vue'),
                name: 'create-movie',
                meta: {
                    title: 'Create Movie'
                }
            },
            {
                path: 'create-person',
                component: () => import('@/views/Admin/Actions/CreatePersonView.vue'),
                name: 'create-person',
                meta: {
                    title: 'Create Person'
                }
            },
            {
                path: 'create-genre',
                component: () => import('@/views/Admin/Actions/CreateGenresView.vue'),
                name: 'create-genre',
                meta: {
                    title: 'Create Genre'
                }
            }
        ]
    },
    {
        path: '/:pathMatch(.*)*',
        component: () => import('@/layouts/ErrorLayout.vue'),
        children: [
            {
                path: '',
                name: 'not-found',
                component: () => import('@/components/ui/ErrorBox.vue'),
                meta: {
                    title: '404 Not Found'
                },
            }
        ]
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
