/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });

let megaBtn = document.getElementById("mega").addEventListener('click', function() {
    document.querySelector('.mega').style.display = "flex";
    document.querySelector('#mega').style.color = "#008FFF";
    // document.querySelector('.mega').style.position = "static";
    document.querySelector('.macro').style.display = "none";
    document.querySelector('.meso').style.display = "none";
    document.querySelector('.micro').style.display = "none";
    document.querySelector('.nano').style.display = "none";
})

let macroBtn = document.getElementById("macro").addEventListener('click', function() {
    document.querySelector('.mega').style.display = "none";
    document.querySelector('.macro').style.display = "flex";
    document.querySelector('#macro').style.color = "#008FFF";
    document.querySelector('.meso').style.display = "none";
    document.querySelector('.micro').style.display = "none";
    document.querySelector('.nano').style.display = "none";
})

let mesoBtn = document.getElementById("meso").addEventListener('click', function() {
    document.querySelector('.mega').style.display = "none";
    document.querySelector('.macro').style.display = "none";
    document.querySelector('.meso').style.display = "flex";
    document.querySelector('#meso').style.color = "#008FFF";
    document.querySelector('.micro').style.display = "none";
    document.querySelector('.nano').style.display = "none";
})

let microBtn = document.getElementById("micro").addEventListener('click', function() {
    document.querySelector('.mega').style.display = "none";
    document.querySelector('.macro').style.display = "none";
    document.querySelector('.meso').style.display = "none";
    document.querySelector('.micro').style.display = "flex";
    document.querySelector('#micro').style.color = "#008FFF";
    document.querySelector('.nano').style.display = "none";
})

let nanoBtn = document.getElementById("nano").addEventListener('click', function() {
    document.querySelector('.mega').style.display = "none";
    document.querySelector('.macro').style.display = "none";
    document.querySelector('.meso').style.display = "none";
    document.querySelector('.micro').style.display = "none";
    document.querySelector('.nano').style.display = "flex";
    document.querySelector('#nano').style.color = "#008FFF";
})
