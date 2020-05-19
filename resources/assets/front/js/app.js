
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
//require all laravel and vue locales here they need to have the same letters

Vue.component('search', require('./search/Search').default);
Vue.component('searchfree', require('./search/partials/SearchFree').default);
Vue.component('select-form', require('./search/partials/Select').default);
Vue.component('counter', require('./search/partials/Counter').default);
Vue.component('calendar', require('./search/partials/Calendar').default);

// MODAL
Vue.component('fixedbtns', require('./modal/FixedBtns').default);
Vue.component('modalsearch', require('./modal/partials/ModalSearch').default);
Vue.component('modalsocial', require('./modal/partials/ModalSocial').default);

// MENU
Vue.component('navbar', require('./nav/Main').default);
Vue.component('Submenu', require('./nav/partials/Submenu').default);
Vue.component('whitemap', require('./nav/partials/Whitemap').default);


// MAP
Vue.component('bluemap', require('./bluemap/Main').default);
Vue.component('imagemap', require('./bluemap/partials/Imagemap').default);
Vue.component('cardmap', require('./bluemap/partials/Cardmap').default);
Vue.component('responsivecardmap', require('./bluemap/partials/Responsivecardmap').default);

Vue.component('filters', require('./filters/Main').default);
Vue.component('dropdown', require('./filters/partials/Dropdown').default);

Vue.component('login', require('./login/Main').default);
Vue.component('loginForm', require('./login/partials/loginForm').default);

Vue.component('myguide', require('./myguide/Main').default);
Vue.component('product', require('./myguide/partials/product').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
