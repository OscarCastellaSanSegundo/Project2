/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

// import { createApp } from 'vue'
// import map from './map.vue'

// createApp(map).mount('#map')

// export default map

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('trucada-component', require('./components/TrucadaComponent.vue').default);


// Vue.component('pop-content', require('./components/PopupContent.vue').default);
Vue.component('mapa', require('./components/mapa.vue').default);
// Vue.component('mapa-expedients', require('./components/mapaExpedients.vue').default);

// Vue.component('vue-bootstrap-typeahead', VueBootstrapTypeahead);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
