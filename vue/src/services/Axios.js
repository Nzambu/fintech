import axios from 'axios'

    const access_token = sessionStorage.getItem('token');
    let token = access_token ? JSON.parse(access_token) : null

    const Axios = axios.create({
        baseURL : 'http://localhost/fintech/laravel/public/api/',
        // timeout : 1000,
        headers: { common : {
            'Accept' : 'application/json',
            'Content-type' : 'application/json',
            'Authorization' : 'Bearer '+ token
        }}
    });
export default Axios;