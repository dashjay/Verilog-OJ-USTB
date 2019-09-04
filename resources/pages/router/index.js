import Vue from 'vue'
import VueRouter from 'vue-router'
import routes from './routes'

Vue.use(VueRouter);
import storage from '@/utils/storage'

// import {sync} from 'vuex-router-sync'

import store from '@/store'
//用constants存常量
// import {STORAGE_KEY} from '@/utils/constants'


var router = new VueRouter({
    // mode: 'history',
    // scrollBehavior(to, from, savedPosition) {
    //     if (savedPosition) {
    //         return savedPosition
    //     } else {
    //         return {x: 0, y: 0}
    //     }
    // },
    routes
});

// // 全局身份确认
// router.beforeEach((to, from, next) => {
//     Vue.prototype.$Loading.start();
//     if (to.matched.some(record => record.meta.requiresAuth)) {
//         if (!storage.get(STORAGE_KEY.AUTHED)) {
//             Vue.prototype.$error('Please login first')
//             store.commit(types.CHANGE_MODAL_STATUS, {mode: 'login', visible: true})
//             next({
//                 name: 'home'
//             })
//         } else {
//             next()
//         }
//     } else {
//         next()
//     }
// });

//
// router.afterEach((to, from, next) => {
//     Vue.prototype.$Loading.finish()
// });


// sync(store, router);

export default router

