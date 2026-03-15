import axios from 'axios'

export async function getAllMovies() {
    return await axios(
        {
            method: 'get',
            url: 'http://127.0.0.1:8000/api/movies',
            headers: {
                'accept': 'application/json',
            }
        }
    )
}