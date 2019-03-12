<template>
    <div @mouseover="active = true" @mouseout="active = false">
        <a  href="/series?curated"
            class="text-grey-dark block md:px-8 md:flex-1 uppercase text-transparent-50 font-bold hover:text-white pb-8"
            :class="active? 'text-white' : 'text-transparent-50'"
        >
            Series
        </a>
        <portal to="nav-after">
            <div v-show="active"
                 class="series-dropdown absolute w-full z-10"
                 @mouseover="active = true"
                 @mouseout="active = false"
            >
                <div class="bg-blue-lighter py-8">
                    <div class="container mx-auto py-8">
                        <div class="flex">
                            <div class="border-r border-grey-lighter border-solid pr-10 mr-10">
                                <a href="#"
                                   class="block font-bold uppercase mb-6 hover:text-blue"
                                   :class="selected ===skill? 'text-blue' : 'text-grey-darkest'"
                                   v-for="skill in skills"
                                   v-text="skill"
                                   @mouseover="showSkill(skill)"
                                ></a>
                            </div>

                            <div>
                                <ul class="flex flex-wrap">
                                    <li class="w-1/2 m-3" v-for="serie in serielist">
                                        <a :href="'/series/' + serie.slug"
                                           v-text="serie.title"
                                           class="text-sm text-grey-darker hover:text-blue"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </portal>

    </div>
</template>
<script>
    export default {
        props:['items'],

        data(){
            return{
                active:false,
                selected: Object.keys(this.items)[2]
//                selected: 'PHP',
//                series:[]
            };
        },

        created(){
//            $.getJSON('api/series', series => (this.series = series))
        },

        computed:{
            skills(){
//                return['PHP', 'C#', 'Testing', 'JavaScript', 'Tooling'];
                return Object.keys(this.items);
            },

            serielist(){
                return this.items[this.selected];

            }
        },

        methods:{
            showSkill(name){
                this.selected = name;
            }
        }
    }

</script>

<style>
    .series-dropdown{
        box-shadow:0 6px 15px 0 rgba(36, 37, 38, 0.88);
    }
</style>