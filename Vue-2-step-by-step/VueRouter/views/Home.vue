<template>
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-8">

                <div class="message" v-for="status in statuses">

                    <div class="message-header">
                        <p>
                            {{status.FirstName}} {{status.LastName}} said...
                        </p>
                        <p>
                            <!--{{postedOn(status)}}-->
                            <!--we use | syntax to reference a filter that the previous string should be sent through into, you can stack it as many as you want, for each filter must be defined in filters object of component-->
                            {{status.created_at | ago | capitalize}}

                        </p>
                    </div>
                    <div class="message-body" v-text="status.Email"></div>
                </div>

                <add-to-stream @completed="addStatus"></add-to-stream>

            </div>
        </div>
    </div>
</template>

<script>
    //we want to use momont.js as time stamp, so we pull it in to our project dependencies: npm install moment --save
    import moment from 'moment';

    import AddToStream from './AddToStream.vue';


    export default{
        components:{
            AddToStream
        },
        data(){
            return{
                statuses:[]
            }
        },
        filters:{
            ago(date){
                return moment(date).fromNow();
            },
            capitalize(value){
                return value.toUpperCase();
            }
        },
        created(){
            console.log('Home Component mounted.');
            axios.get('./statuses.php')
//                .then(response => this.statuses = response.data)
                .then(({data})=>{
                    console.log(data);
                    this.statuses = data;
                });//this is es6 object destructure syntax(if you only care about data property), is equivalent to above
        },
        methods:{
            postedOn(status){
                return moment(status.created_at).fromNow();//this is moment.js Syntax
            },
            addStatus(sta){
                console.dir(sta);
                alert('what is status : '+ sta);
//                this.statuses.push(status);
                this.statuses.unshift(sta);//unshift will put to the first, is opposite of push
                alert('Your status has been added to the stream.');
                window.scrollTo(0,0);//let window scroll to the top.
            }
        }
    }
</script>