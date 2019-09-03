import Vue from 'vue'
import store from '@/store'
import axios from 'axios'


Vue.prototype.$http = axios;
axios.defaults.baseURL = '/api';
axios.defaults.xsrfHeaderName = 'X-CSRFToken';
axios.defaults.xsrfCookieName = 'csrftoken';


//所有的api
export default {
    register(data) {
        return ajax('user/register', 'post', {data})
    },
    checkUsernameOrEmail(username, email) {
        return ajax('user/check', 'post',
            {data: {username, email}}
        )
    },
    getUserInfo() {
        return ajax('user/get', 'get');
    },
    Login(data) {
        return ajax('user/login', 'post', {data})
    },
    Logout() {
        return ajax('user/logout', 'get')
    }
}


/**
 * @param url
 * @param method get|post|put|delete...
 * @param options
 * @returns {Promise}
 */
function ajax(url, method, options) {
    if (options !== undefined) {
        var {params = {}, data = {}} = options
    } else {
        params = data = {}
    }
    return new Promise((resolve, reject) => {
        axios({
            url, method, params, data
        }).then(res => {
            resolve(res)
        }).catch(error => {
            reject(error);
        });
    })
}
