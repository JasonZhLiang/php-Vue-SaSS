export default{
    template:'<div><h1>{{message|capitalize}}{{note}}</h1></div>',
    props:['message'],//<notification message="thank you"></notification>
    data(){
        return{
            message:'Hello World'
        };
    },
    filters:{
        capitalize(message){
            return message.toUpperCase();
        }
    },
    computed:{
        note(){
            return this.message.toUpperCase();
        }
    }
};