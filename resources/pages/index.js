import 'babel-polyfill'
import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from '@/store'
import i18n from '@/i18n'
import iView from 'iview'
import locale from 'iview/dist/locale/en-US'
import 'iview/dist/styles/iview.css'

Vue.use(iView, {locale});

import highlight from '@/plugins/highlight'

Vue.use(highlight);


Vue.config.productionTip = false;

// 注册全局消息提示
Vue.prototype.$Message.config({
    duration: 2
});

Vue.prototype.$error = (s) => Vue.prototype.$Message.error(s);
Vue.prototype.$info = (s) => Vue.prototype.$Message.info(s);
Vue.prototype.$success = (s) => Vue.prototype.$Message.success(s);

new Vue(Vue.util.extend({router, store, i18n}, App)).$mount('#app');
