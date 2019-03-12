// import Vue from 'vue';//this is using the runtime-only build of Vue where the template compiler is not available
import Vue from 'vue/dist/vue.js';//so we just reference the standalone build file, make sure don't do this in production
import test from 'ava';
import Notification from '../src/Notification';//since ava allow to use es2015 syntax but not allow to apply any other source file imported, so we need install babel-register plugin, then need babel preset plugin


let vm;

test.beforeEach(t=>{
    let N = Vue.extend(Notification);
    vm = new N({propsData:{
        message:'foobar'
    }}).$mount();
});


test('that it render a notification', t=>{
    // t.is(Notification.data().message,'Hello World');
    new Vue(Notification).$mount();
    let n = new Vue(Notification).$mount();
    console.log(n.$el.textContent);
    console.log(n.$el.innerHTML);

    // t.is(n.$el.textContent,'Foobar');

    let N = Vue.extend(Notification);
    let vm = new N({propsData:{
        message:'Foobar'
    }}).$mount();//we need mounted to vue explicitly

    t.is(vm.$el.textContent,'Foobar');
});
//since we are not runing in the browser, the test is thought node.js, it doesn't know what is resource document.body is. the Vue code el === document.body || el == document.documentElement is going wrong
//and we need to mock the browser environment,  npm install browser-env --save-dev
//"./test/helper/setup-browser-env.js" //set up in package.json to tell ava to automatically require a littel helper file for test


test('that it capitalizes the message', t =>{
    let N = Vue.extend(Notification);
    let vm = new N({propsData:{
        message:'foobar'
    }}).$mount();

    t.is(vm.$el.textContent,'FOOBAR');
});

test('that it computes the notification', t =>{
    // let N = Vue.extend(Notification);
    // let vm = new N({propsData:{
    //     message:'foobar'
    // }}).$mount();

    t.is(vm.$el.textContent,'FOOBARFOOBAR');
});


test('that it computes the notification', t =>{
    t.is(vm.note,'FOOBAR');
});


//typing node_modules\.bin\ava to run the test