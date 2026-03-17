import {http} from '@/utils/http.js'

export async function getAllMovies() {
    return await http.get('/api/movies')
}
export async function getAllShows() {
    return await http.get('/api/shows')
}
export async function getMovieById(id) {
    try {
        return await http.get(`/api/movies/${id}`)
    } catch (e) {
        return undefined
    }
}
export async function getShowById(id) {
    try {
        return await http.get(`/api/shows/${id}`)
    } catch (e) {
        return undefined
    }
}
export async function getUserById(id) {
    return await http.get(`/api/users/${id}`)
}
export async function getAllUsers() {
    return await http.get('/api/users')
}