<template>
    <!--<div data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true}'>-->
        <!--<slot></slot>-->
    <!--</div>-->

    <div>
        <slot></slot>
    </div>
</template>
<script>
    import Flickity from 'flickity';
    import 'flickity/dist/flickity.min.css';//this will pull in the css and included with compile. or you can extract it if you need to
    export default{
        props:{
            wraparound: {default:true},
            autoplay: {default:false}
        },
        mounted(){
            new Flickity(this.$el,{//this.$el is the root element of vue
                wrapAround:this.wraparound,
                autoPlay:this.autoplay,
                cellAlign:'left',
                contain:true
            })
        }
    }
</script>