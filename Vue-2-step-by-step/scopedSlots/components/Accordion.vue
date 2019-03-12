<template>
    <div>
        <accordion-item
                v-for="(item, index) in items"
                :title="item[titleName]"
                :body="item[bodyName]"
                :key="index"
                :is-open="activeItemIndex == index"
                @toggled="onToggle"
        ></accordion-item>
    </div>
</template>

<script>
    import AccordionItem from './AccordionItem.vue';

    export default {
        props: {
            items: { default: {} },
            titleName: { default: 'title' },
            bodyName: { default: 'body' }
        },

        components: { AccordionItem },

        data() {
            return {
                activeItemIndex: null
                //alternatively, you can set activeItemIndex = true, bind :is-open = "activeItemIndex" instead of "activeItemIndex == index"
                // and inside onToggle method, set this.activeItemIndex = ! this.activeItemIndex; like so, we don't need the index parameter passed from child
                //NO, the above two lines idea will NOT work, it will open or close all the accordion-item at same time.
            };
        },

        methods: {
            onToggle(index) {
                console.log('from parent component------the index of ' + index + ' was active.');
                if (this.activeItemIndex == index) {
                    return (this.activeItemIndex = null);
                }

                this.activeItemIndex = index;
            }
        }
    };
</script>
