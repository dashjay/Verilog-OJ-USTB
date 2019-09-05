import 'babel-polyfill'
import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from '@/store'
import i18n from '@/i18n'
import iView from 'iview'
import locale from 'iview/dist/locale/zh-CN'
import 'iview/dist/styles/iview.css'
import katex from '@/plugins/katex'
import '@/style/index.less'


import Kane from '@/pages/components/Panel.vue'
import VerticalMenu from '@/pages/components/verticalMenu/verticalMenu.vue'
import VerticalMenuItem from '@/pages/components/verticalMenu/verticalMenu-item.vue'


import ECharts from 'vue-echarts/components/ECharts.vue'
import 'echarts/lib/chart/bar'
import 'echarts/lib/chart/line'
import 'echarts/lib/chart/pie'
import 'echarts/lib/component/title'
import 'echarts/lib/component/grid'
import 'echarts/lib/component/dataZoom'
import 'echarts/lib/component/legend'
import 'echarts/lib/component/tooltip'
import 'echarts/lib/component/toolbox'
import 'echarts/lib/component/markPoint'


Vue.component('ECharts', ECharts);
Vue.component(VerticalMenu.name, VerticalMenu);
Vue.component(VerticalMenuItem.name, VerticalMenuItem);
Vue.component(Kane.name, Kane);

Vue.use(iView, {locale});

import highlight from '@/plugins/highlight'

Vue.use(highlight);
Vue.use(katex);
Vue.config.productionTip = false;

// 注册全局消息提示
Vue.prototype.$Message.config({
    duration: 2
});

Vue.prototype.$error = (s) => Vue.prototype.$Message.error(s);
Vue.prototype.$info = (s) => Vue.prototype.$Message.info(s);
Vue.prototype.$success = (s) => Vue.prototype.$Message.success(s);

// new Vue(Vue.util.extend({router, store, i18n}, App)).$mount('#app');


const app = new Vue({
    router,
    store,
    i18n,
    render: h => h(App),
    el: '#app',
});
