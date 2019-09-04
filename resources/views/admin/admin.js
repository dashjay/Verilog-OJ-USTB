import Vue from 'vue'
import iview from 'iview'
import App from './App.vue'
import 'iview/dist/styles/iview.css'

Vue.use(iview);


new Vue({
    el: '#hello',
    delimiter: ['${', '}'],
    render: h => h(App)
});
