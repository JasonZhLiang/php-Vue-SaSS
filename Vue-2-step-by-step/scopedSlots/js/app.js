
/**
* First we will load all of this project's JavaScript dependencies which
* includes Vue and other libraries. It is a great startin point when
* building robust, powerful web application using Vue.
*/




require('./bootstrap.js');
// windows.Vue = require('vue');

import Vue from 'vue';// above line: window.Vue = require('vue') doesn't work, so using import instead of require

import Menulist from '../components/Example.vue';

import Carousel from '../components/Carousel.vue';

import SeriesDropdown from '../components/SeriesDropdown.vue';

import PortalVue from 'portal-vue';

import SupportButton from '../components/SupportButton.vue';

import VModal from 'vue-js-modal';

import Accordion from '../components/Accordion.vue';

Vue.use(VModal);


Vue.use(PortalVue);//register it as a plugin


/**
 * Next, we will creat a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


// Vue.component('Menulist', require('../components/Example.vue'));


const app = new Vue({
    el:'#app',
// above line: Vue.component('Menulist', require('../components/Example.vue')); doesn't work, so registering the component inside Vue instance
    components:{
        Menulist,Carousel,SeriesDropdown,SupportButton,Accordion
    }
    // render: h => h(App)
});




// import Vue from 'vue';
//
// import Example from '../components/Example.vue';

// new Vue({
//     el:'#app',
//     components:{
//         Example //we registered a child component
//     }
// });
