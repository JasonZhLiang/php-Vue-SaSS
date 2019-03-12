<template>
    <div>
        <ul>
            <!--<li v-for="item in items" v-text="item" @mouseover="alert">-->
            <li v-for="item in items" @click="alt">
                <!--<slot :item="item">{{item}}</slot>-->
                <!--<slot thing="foo" bar="pass many and any thing you want">{{item}}</slot>--> <!--see here, foo is string but using :item will pass a variable-->
                <slot name="menu-item" :item="item" bar="pass many and any thing you want" >{{item}}</slot>
            </li>
        </ul>
    </div>

</template>

<script>
    import _ from 'lodash';
    export default{
        props:['items'],
        methods:{
//            alert(){
//                alert('hello world');
//            },
            alert: _.debounce(function(){
                alert('lodash debounce');
            },1000),//debounce will not trigger this function until the last one which meet the 1000 stay condition.

            alert1: _.throttle(function(){
                alert('lodash debounce');
            },1000),//throttle will trigger this function every interval : 1000 millisecond, this means 1000 is not the stay condition.

            alt(){
                setTimeout(()=>{
                    alert('setTimeout');
                },500)
            }
        }
    }
</script>