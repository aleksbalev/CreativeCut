// window.Vue = require('../../libs/vue/vue');
window.Vue = require('../../libs/vue/vue.min');

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('animate-number', require('./components/AnimateNumber.vue').default);


const factoid = new Vue({
    el: '.vue-js-factoid'
});