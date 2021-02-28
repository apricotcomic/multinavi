require('./bootstrap');
import Vue from 'vue'
import MapFlag from './components/MapFlag'

window.Vue = require('vue');

Vue.component('mapflag-component', require('./components/MapFlag.vue').default)

const app = new Vue({
  el: '#app',
})
