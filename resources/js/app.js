require('./bootstrap');
window.Vue = require("vue");

import DataTable from "vue-materialize-datatable";
import excel from 'vue-excel-export';
import VueAxios from "vue-axios";
import axios from "axios";

Vue.component(DataTable);
Vue.use(excel);
Vue.use(VueAxios, axios);

Vue.component('reporte1-component', require('./components/Reporte1').default);
Vue.component('reporte2-component', require('./components/Reporte2').default);
Vue.component('reporte3-component', require('./components/Reporte3').default);
Vue.component('reporte4-component', require('./components/Reporte4').default);

axios.defaults.baseURL = 'http://172.16.52.162:82/';

const app = new Vue({
    el: "#app",
});
