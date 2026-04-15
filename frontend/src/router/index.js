import {createRouter, createWebHistory} from 'vue-router'
import {getMovieById, getUserById, getSeriesById, getMail} from "@/data/data.js";
import {http} from "@/utils/http.js";

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
                        path: ':showID',
                        component: () => import('@/views/Public/ShowView.vue'),
                        name: 'public-show',
                        beforeEnter: async (to) => {
                            const show = await getSeriesById(to.params.showID)
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
            },
        ],
    },
    {
        path: '/settings',
        component: () => import('@/layouts/UserLayout.vue'),
        children: [
            {
                path: '',
                name: 'user-settings',
                component: () => import('@/views/User/SettingsView.vue'),
                meta: {
                    requiresAuth: true,
                    title: 'Settings'
                }
            }
        ]
    },
    {
        path: '/mails',
        component: () => import('@/layouts/MailLayout.vue'),
        children: [
            {
                path: '',
                name: 'user-mails',
                component: () => import('@/views/User/MailsView.vue'),
                meta: {
                    requiresAuth: true,
                    title: 'Mails'
                }
            },
            {
                path: ':mailID',
                name: 'mail-details',
                component: () => import('@/views/User/MailView.vue'),
                beforeEnter: async (to) => {
                    const mail = await getMail(to.params.mailID)
                    if (!mail) {
                        await router.push({name: 'not-found'})
                        return
                    }
                    to.meta.prefetched = {mail}
                    to.meta.title = mail.data.data.title
                    return true
                },
                meta: {
                    requiresAuth: true
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
                    title: 'Register',
                    guestOnly: true
                }
            },
            {
                path: 'login',
                component: () => import('@/views/Auth/LoginView.vue'),
                name: 'login',
                meta: {
                    title: 'Login',
                    guestOnly: true
                }
            },
            {
                path: '',
                redirect: {name: 'register'}
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
                    title: 'Admin Home',
                    requiresAdmin: true
                }
            },
            {
                path: 'movies',
                component: () => import('@/views/Admin/AdminMoviesView.vue'),
                name: 'admin-movies',
                meta: {
                    title: 'Admin Movie List',
                    requiresAdmin: true
                }
            },
            {
                path: 'users',
                component: () => import('@/views/Admin/AdminUsersView.vue'),
                name: 'admin-users',
                meta: {
                    title: 'Admin User List',
                    requiresAdmin: true
                }
            },
            {
                path: 'genres',
                component: () => import('@/views/Admin/AdminGenresView.vue'),
                name: 'admin-genres',
                meta: {
                    title: 'Admin Genre List',
                    requiresAdmin: true
                }
            },
            {
                path: 'create-movie',
                component: () => import('@/views/Admin/Actions/CreateMovieView.vue'),
                name: 'create-movie',
                meta: {
                    title: 'Create Movie',
                    requiresAdmin: true
                }
            },
            {
                path: 'create-series',
                component: () => import('@/views/Admin/Actions/CreateShowView.vue'),
                name: 'create-series',
                meta: {
                    title: 'Create Series',
                    requiresAdmin: true
                }
            },
            {
                path: 'create-person',
                component: () => import('@/views/Admin/Actions/CreatePersonView.vue'),
                name: 'create-person',
                meta: {
                    title: 'Create Person',
                    requiresAdmin: true
                }
            },
            {
                path: 'create-genre',
                component: () => import('@/views/Admin/Actions/CreateGenresView.vue'),
                name: 'create-genre',
                meta: {
                    title: 'Create Genre',
                    requiresAdmin: true
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

const isLoggedIn = !!localStorage.getItem('popcorns_bearer')

const isAdmin = async () => {
    if (!isLoggedIn) return false
    try {
        const res = await http.post('/api/role', {})
        return res.data.role === 'admin'
    } catch (e) {
        return false
    }
}

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes
})

router.beforeEach(async (to, from, next) => {
    if (to.meta.requiresAuth) {
        if (isLoggedIn) next()
        else next({
            name: 'register'
        })
        return
    }
    if (to.meta.requiresAdmin) {
        if (await isAdmin()) next()
        else next({
            name: 'unauthorized'
        })
        return
    }
    if (to.meta.guestOnly) {
        if (!isLoggedIn) next()
        else next({
            name: 'public-home'
        })
    }
    next()
})

router.afterEach((to) => {
    const site = " - Popcorns!"
    document.title = to.meta.title + site
})

export default router
