import {http} from '@/utils/http.js'

export async function getAllMovies() {
    return await http.get('/api/movies')
}

export async function getMovieById(id) {
    return await http.get(`/api/movies/${id}`)
}

export async function getUserById(id) {
    return await http.get(`/api/users/${id}`)
}