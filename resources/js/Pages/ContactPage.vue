<template>
    <Head title="Contact Page" />
    <web-layout>
        <div class=" w-full h-full">
            <div class="w-full lg:py-10 py-3 md:relative max-w-4xl mx-auto mt-10 lg:px-0 px-10">
                <div class="mx-auto bg-blue-900 rounded-md lg:py-28 py-8 shadow-2xl lg:px-10 md:px-14 px-">
                    <div class="flex">
                        <div class="md:absolute lg:-left-20 md:left-0 left-0 md:bg-white py-4 px-4 shadow-lg rounded-md">
                            <div class="md:max-w-none max-w-xl md:flex md:flex-col justify-center items-center hidden">
                                <h3 class="uppercase lg:text-5xl text-lg  lg:font-semibold font-extrabold text-gray-800 lg:mb-2 lg:mt-4 mt-10">Welcome to</h3>
                                <h3 class="uppercase lg:text-2xl text-lg lg:font-semibold font-extrabold  text-gray-800 mb-3 text-center"> Mimi stiches</h3>
                            </div>
                        </div>
                        <div class="text-center lg:mx-auto  md:mt-32">
                            <p class="lg:text-md text-sm  text-gray-100">Lorem ipsum dolor, sit amet consectetur</p>
                            <p class="lg:text-md text-sm text-gray-100">Lorem ipsum dolor, sit amet consectetur</p>
                        </div>
                        <div>
                            <img src="/imgs/gray.jpg" alt="" class="absolute lg:h-full h-64 top-0 lg:right-5 lg:w-72 w-40 right-3 rounded-md lg:block hidden">
                        </div>
                    </div>
            </div>
        </div>
        </div>
        <div class="mt-10 bg-gray-300 py-10 mx-auto">
            <div class="text-center mb-6">
                <span class="capitalize text-blue-900 text-4xl font-semibold">give it a try</span>
            </div>

            <div class="max-w-2xl mx-auto">
                <form @submit.prevent="saveContactUs()" class="text-center">
                    <div class="flex lg:flex-row md:flex-col flex-col gap-10 mb-3 px-4">
                        <div>
                            <div class="block mb-3">
                                <label for="" class="text-white text-lg block">Fullname</label>
                                <input type="text" v-model="fullname" class="shadow-md appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="">
                            </div>

                            <div class="block mb-3">
                                <label for="" class="text-white text-lg block">Email</label>
                                <input type="text" v-model="email" class="shadow-md appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="">
                            </div>

                            <div class="block mb-3">
                                <label for="" class="text-white text-lg block">Phone</label>
                                <input type="text" v-model="phone" class="shadow-md appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="">
                            </div>
                        </div>
                        <div>
                            <div class="block mb-3">
                                <label for="" class="text-white text-lg block">Message</label>
                                <textarea v-model="message" name="" id="" cols="30" rows="7"  class="rounded-lg w-full"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class=" mx-auto">
                        <button type="submit" class="text-center bg-blue-900 text-gray-100 py-1 rounded-lg w-60 ">Send it</button>
                    </div>
                </form>
            </div>
        </div>
    </web-layout>
</template>

<script>
import WebLayout from '../Layouts/WebLayout.vue'
import {Head} from "@inertiajs/inertia-vue3";
    export default {
        components: { WebLayout, Head },

        props:{
            errors:Object
        },

        data(){
            return{
                fullname:'',
                email:'',
                phone: '',
                message: '',
            }
        },

        methods: {
            saveContactUs(){
                let data = new FormData();
                data.append('fullname', this.fullname)
                data.append('email', this.email)
                data.append('phone', this.phone)
                data.append('message', this.message)
                axios.get(route('add_contact_us'), data)
                .then((res) => {
                    console.log(res)
                })
                .catch(error => {
                    if(error.response){
                    alert(error.response.data.message);
                }else{
                    alert('Network Error! Please check your internet connection');
                }
                })
            },

            handleSuccess(response_data){
                this.modal_type = 'success';
                this.modal_msg = response_data.message;
                this.showModal = true;
            },

            handleError(errorsObj){
                this.errors = errorsObj.response;
                this.modal_msg = 'An Unexpected Error Occured!';
                this.modal_type = 'error';
                this.showModal = true;
                console.log(this.errors);
            },


            resetForm(){
            this.phone = '';
            this.message = '';
            this.email = '';
            this.fullname= '';
            this.$refs.frmMessage.reset();
        },
        },
            
    }

</script>