/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


import InvoiceMaker from './components/InvoiceMaker.vue';
import ImUploadmodal from './components/ImUploadmodal.vue';
import ImLeftSidebar from './components/ImLeftSidebar.vue';
import ImRightSidebar from './components/ImRightSidebar.vue';
import ImInvoice from './components/ImInvoice.vue';




Vue.component('invoicemaker', InvoiceMaker);
Vue.component('im-uploadmodal', ImUploadmodal);
Vue.component('im-left-sidebar', ImLeftSidebar);
Vue.component('im-right-sidebar', ImRightSidebar);
Vue.component('im-invoice', ImInvoice);

const app = new Vue({
    el: '#app'
});