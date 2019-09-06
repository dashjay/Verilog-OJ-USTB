import Vue from 'vue'
// import store from '@/store'
import axios from 'axios'


Vue.prototype.$http = axios;
axios.defaults.baseURL = '/api';
// axios.defaults.xsrfHeaderName = 'X-CSRFToken';
// axios.defaults.xsrfCookieName = 'csrftoken';


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
    login(data) {
        return ajax('user/login', 'post', {data})
    },
    Logout() {
        return ajax('user/logout', 'get');
    },
    getAnnouncement() {
        return ajax('announcement/get', 'get');
    },
    pickone() {
        return ajax('/problem/pickone', 'get');
    },
    getProblemTagList() {
        return ajax('/problem/get_tags', 'get');
    },
    getProblemList(offset, limit, query) {
        let params = {
            offset,
            limit,
            query
        };
        // Object.keys(searchParams).forEach((element) => {
        //     if (searchParams[element]) {
        //         params[element] = searchParams[element]
        //     }
        // });
        return ajax('/problem/get', 'get', {
            params: params
        })
    },
    getProblem(problem_id) {
        let params = {
            problem_id
        };

        return ajax('/problem/get', 'get', {
            params: params
        })
    },
    doSubmitSolution(id, code) {
        let data = {
            id,
            code
        };
        return ajax('/solution/add', 'post', {
            data: data
        })
    },
    getStandardWavedrom(id) {
        let params = {id};
        return ajax('/problem/get_wavedrom', 'get', {
            params: params
        })
    },
    getSolutions(id) {
        let params = {id};
        return ajax('/solution/get', 'get', {
            params: params
        })
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
