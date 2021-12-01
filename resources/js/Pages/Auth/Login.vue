<template>
    <div class="min-h-screen w-full flex items-center justify-center bg-indigo-300">
        <div class="formCon w-11/12 sm:w-9/12 md:w-2/5 lg:w-1/3  rounded-lg py-4 bg-gradient-to-br from-pink-300 via-gray-300 to-blue-500">
            <div class="flex items-center justify-center mb-4">
               <jet-authentication-card-logo />
            </div>
            <form @submit.prevent="loginUser()" action="">
                <div :class="form_group">
                    <input type="email" id="email" :class="inputs" v-model="form.email" placeholder="email" required autofocus>
                </div>
                <div :class="form_group">
                    <input type="password" id="password" :class="inputs" v-model="form.password" placeholder="password" required>
                </div>

                <div :class="form_group">
                    <button type="submit" :class="button" class="bg-white-800 text-white">
                        Sign In
                    </button>
                </div>
               
            </form>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
import axios from 'axios';

export default {
    components:{
        Link,
        JetAuthenticationCardLogo
    },
    data(){
        return {
            form_group:'mb-4 rounded-lg px-3',
            inputs:'w-full h-8 rounded-2xl shadow-2xl placeholder-gray-700 px-3 block py-5',
            button:'px-3 py-2 rounded-2xl bg-blue-600 shadow-lg hover:bg-pink-200 text-white',
            form: this.$inertia.form({
                email : '',
                password : '',
                remember: false,
            }),
            errors:{
                email:[],
                password:[]
            }
           
        
        }
    },
    methods: {
        loginUser(){
            axios.get('/sanctum/csrf-cookie') //Set thr session cookies for CSRF-Token
            .then(() => {
                this.form.transform(data => ({
                        ... data,
                        remember: this.form.remember ? 'on' : ''
                }))
                    .post(this.route('login'), {
                        onFinish : () => {
                            this.form.reset('email', 'password');
                        }
                    })
            });
        }
    }
}
</script>

<style scoped>
    .formCon{
        box-shadow: -9px -9px -9px #cbced1, 9px 9px 9px #fff  ;
        background-color: #ecf0f3

    }

    
    input{
        box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px -8px #fff !important;
        outline: none;
        border: none;
        background-color: none;
        margin-bottom: 30px;
    }
</style> 
