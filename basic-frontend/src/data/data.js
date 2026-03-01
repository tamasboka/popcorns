import axios from 'axios'

let data;

await axios(
        {
          method: 'get',
          url: 'http://127.0.0.1:8000/api/movies',
          headers: {
            'accept': 'application/json',
          }
        }
    ).then((res) => data = res.data)
    .then((res) => console.log(res.data))
    

export default data
