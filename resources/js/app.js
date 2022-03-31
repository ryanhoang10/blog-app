/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('main-component', require('./components/ExampleComponent.vue').default);
Vue.component('home', require('./components/Home.vue').default);
Vue.component('site-header', require('./components/Header.vue').default);
Vue.component('create-blog', require('./components/CreateBlog.vue').default);
Vue.component('edit-blog', require('./components/EditBlog.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 window.onload = function () {
    const app = new Vue({
        el: '#app',
    });
 }
