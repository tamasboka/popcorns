import {http} from '@/utils/http.js'

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

export async function getUserById(id) {
    return await http.get(`/api/users/${id}`)
}