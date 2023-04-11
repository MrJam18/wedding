



// @ts-ignore
export const api: AxiosInstance  = axios.create({
    baseURL: '/api',
    timeout: 3000,
    headers: {
        Accept: 'application/json'
    }
})
