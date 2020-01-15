require('./bootstrap');

window.Vue = require('vue');


import Header from './components/Header.vue'
import Propos from './components/Propos.vue'
import Service from './components/Service.vue'
import Portfolio from './components/Portfolio.vue'
import Confians from './components/Confians.vue'
import Footer from './components/Footer.vue'
import Contact from './components/Contact.vue'
import Confirm from './components/Confirm.vue'
Vue.component('myheader', Header);
Vue.component('propos', Propos);
Vue.component('service', Service);
Vue.component('portfolio', Portfolio);
Vue.component('confian', Confians);
Vue.component('myfooter', Footer);
Vue.component('contact', Contact);
Vue.component('confirm', Confirm);
const app = new Vue({
    el: '#app'
});