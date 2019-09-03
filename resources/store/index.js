import Vue from 'vue'
import Vuex from 'vuex'

import user from './modules/user'
import contest from './modules/work'

import api from '@/pages/api'
// import types from './types'

Vue.use(Vuex);
const debug = process.env.NODE_ENV !== 'production';

const rootState = {
    website: {},
    modalStatus: {
        mode: 'login', // or 'register',
        visible: false
    }
};

const rootGetters = {
    'website'(state) {
        return state.website
    },
    'modalStatus'(state) {
        return state.modalStatus
    }
};

const rootMutations = {
    //更新一个模块的状态
    updateModalStatus(state, payload) {
        state.modalStatus = payload;
    }
};

const rootActions = {

    changeModalStatus({commit}, payload) {
        commit('updateModalStatus', payload);
    },
//     changeDomTitle ({commit, state}, payload) {
//         if (payload && payload.title) {
//             window.document.title = state.website.website_name_shortcut + ' | ' + payload.title
//         } else {
//             window.document.title = state.website.website_name_shortcut + ' | ' + state.route.meta.title
//         }
//     }
};

export default new Vuex.Store({
    modules: {
        user,
        contest
    },
    state: rootState,
    getters: rootGetters,
    mutations: rootMutations,
    actions: rootActions,
    strict: debug
})

// export { types }
