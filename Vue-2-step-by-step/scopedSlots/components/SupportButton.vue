<template>
    <div>
        <a class="text-transparent-50 hover:text-white"
           @click="$modal.show('contact-support-modal')"
        >
            Support
        </a>

        <modal name="contact-support-modal"
               height="auto"
               width="100%"
               :pivotY="1"
               classes="bg-blue rounded-none shadow-inner"
        >
            <!--default pivotY bind to 0.5, that means 50% way down; if you want add more class to this element, using classes attribute-->
            <div class="text-white py-6 container mx-auto">
                <h1 class="text-center text-2xl">Have a Question?</h1>
                <form
                    autocomplete="off"
                    class="p-8 lg:w-1/2 md:mx-auto"
                    @submit.prevent="contactSupport"
                >
                    <div class="control">
                        <input
                                type="text"
                                name="name"
                                id="name"
                                class="input is-minimal w-full"
                                placeholder="what's your name?"
                                v-model="message.name"
                                @keydown="delete errors.name"
                                required>
                    </div>

                    <div class="control">
                        <input
                                type="text"
                                name="email"
                                id="email"
                                class="input is-minimal w-full"
                                placeholder="which email address should we respond to?"
                                v-model="message.email"
                                @keydown="delete errors.email"
                                required>
                    </div>

                    <div class="control py-2">
                        <textarea
                                id="body"
                                class="textarea is-minimal w-full"
                                name="question"
                                data-autosize
                                placeholder="what's your question?"
                                v-model="message.question"
                                @keydown="delete errors.question"
                                required>
                        </textarea>
                    </div>

                    <div class="control">
                        <input
                                name="verification"
                                id="verification"
                                class="input is-minimal w-full"
                                placeholder="what is 1 + 4?"
                                v-model="message.verification"
                                @keydown="delete errors.verification"
                                required>
                    </div>

                    <div class="flex justify-end">
                        <a
                                class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded-full is-default mr-4 py-1"
                                @click="cancel"
                        ><!--@click="$modal.hide('contact-support-modal')"-->
                            Cancel
                        </a>
                        <button
                                class="bg-blue-darker hover:bg-blue-dark text-white font-bold py-2 px-4 rounded-full is-blue py-1"
                                type="submit"
                                :disabled="submitted"
                        >
                            Send
                        </button>
                    </div>

                </form>
            </div>
        </modal>
    </div>
</template>
<script>
    export default {
        data(){
            return{
                message:{},
                submitted:false
            };
        },
        methods:{
            cancel(){
                this.$modal.hide('contact-support-modal');
                this.resetForm();
            },
            contactSupport(){
                this.submitted = true;
//                axios
//                    .post('/contact', this.message)
//                    .catch(errors=>{
//                        console.log(errors.response.data.errors);
//                    })
//                    .then(()=>{
//                        this.$modal.hide('contact-support-modal');
//                        swal('Thanks! We will be in touch soon.');//refer to https://sweetalert.js.org/guides/
//                        this.resetForm();
//                    });  // we
            },
            resetForm(){
                this.message = {};
                this.submitted=false;
            }
        }
    }
</script>