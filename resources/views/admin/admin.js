import Vue from 'vue'
import iview from 'iview'
import App from './App.vue'
import 'iview/dist/styles/iview.css'
import axios from 'axios'

Vue.use(iview);
Vue.prototype.$http = axios;


new Vue({
    el: '#hello',
    delimiter: ['${', '}'],
    render: h => h(App)
});
