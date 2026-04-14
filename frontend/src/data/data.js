import {http} from '@/utils/http.js'

// MOVIES
export async function getAllMovies() {
    return await http.get('/api/movies')
}
export async function getMovieById(id) {
    try {
        return await http.get(`/api/movies/${id}`)
    } catch (e) {
        return undefined
    }
}

// SERIES
export async function getAllSeries() {
    return await http.get('/api/series')
}
export async function getSeriesById(id) {
    try {
        return await http.get(`/api/series/${id}`)
    } catch (e) {
        return undefined
    }
}

// USERS
export async function getAllUsers() {
    return await http.get('/api/users')
}
export async function getUserById(id) {
    try {
        return await http.get(`/api/users/${id}`)
    } catch (e) {
        return undefined
    }
}

// GENERAL
export async function getAllMedia() {
    return await http.get('/api/allmedia')
}
export async function getMails() {
    return await http.get('/api/mails', {
        headers: {
            Authorization: `Bearer ${localStorage.getItem('popcorns_bearer')}`
        }
    })
}