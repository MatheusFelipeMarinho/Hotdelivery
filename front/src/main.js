
import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue';
import * as VueGoogleMaps from 'vue2-google-maps';
import VueTouch from 'vue-touch';
import Trend from 'vuetrend';
import Toasted from 'vue-toasted';
import VueApexCharts from 'vue-apexcharts';
import TextInput from './components/Section/TextInput.vue'
import { library } from './../node_modules/@fortawesome/fontawesome-svg-core'
import { faUserSecret } from './../node_modules/@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from './../node_modules/@fortawesome/vue-fontawesome'
 
library.add(faUserSecret)

 


import store from './store';
import router from './Routes';
import App from './App';

Vue.use(BootstrapVue);
Vue.use(VueTouch);
Vue.use(Trend);
Vue.use(VueGoogleMaps, {
  load: {
    key: 'AIzaSyB7OXmzfQYua_1LEhRdqsoYzyJOPh9hGLg',
  },
});
Vue.use(Toasted, {duration: 10000});
Vue.component('apexchart', VueApexCharts);
Vue.component('text-input', require('./components/Section/TextInput.vue').default);
Vue.component('table-paginator', require('./components/Section/TablePaginator.vue').default);
Vue.component('font-awesome-icon', FontAwesomeIcon)


Vue.config.productionTip = false;

/* eslint-disable no-new */
new Vue({
  el: '#app',
  store,
  router,
  render: h => h(App),
});
