<template>
    <div class="min-h-screen w-full flex items-center justify-center bg-indigo-300">
        <div class="formCon w-11/12 sm:w-9/12 md:w-2/5 lg:w-1/3 bg-white rounded-lg py-4 bg-gradient-to-br from-pink-300 via-gray-300 to-blue-500">
            <div class="flex items-center justify-center mb-4">
               <jet-authentication-card-logo />
            </div>
            <form @submit.prevent="registerUser()" action="">
                <div :class="form_group">
                    <input type="text" id="firstname" :class="inputs" v-model="firstname" placeholder="firstname" required>
                </div>

                <div :class="form_group">
                    <input type="text" id="lasttname" :class="inputs" v-model="lastname" placeholder="lastname" required>
                </div>
                <div :class="form_group">
                    <input type="email" id="email" :class="inputs" v-model="email" placeholder="email" required>
                    <div class="rounded-lg px-2 bg-red-600 text-white mt-3" v-if="error.email.length > 0">
                        <p v-for="(err, i) in error.email" :key="i">
                            {{ err }}
                        </p>
                    </div>
                </div>
                <div :class="form_group">
                    <input type="password" id="password" :class="inputs" v-model="password" placeholder="password" required>
                </div>
                
                <div :class="form_group">
                    <input type="password" id="comfirm password" :class="inputs" v-model="Comfirmpassword" placeholder="comfirm password" required>
                </div>

                <div :class="form_group">
                    <button type="submit" :class="button" class="bg-white-800 text-white">
                        Sign Up
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
            firstname :'',
            lastname : '',
            email : '',
            phone : '',
            password : '',
            Comfirmpassword : '',
            error:{
                email:[],
                password:[]
            }
        }
    },
    methods: {
        registerUser(){
            let formData = {
                firstname: this.firstname,
                lastname: this.lastname,
                email: this.email,
                password: this.password,
                password_confirmation: this.Comfirmpassword,
            }

            axios.post(route('register'), formData)
            .then(res => {
                console.log(res);
                this.$inertia.visit(route('dashboard'));
            })
            .catch(err => {
                if (err.response) {
                    if (err.response.data.errors.email) {
                        this.error.email = err.response.data.errors.email
                    }
                } else {
                    console.log('Network Error');
                }
            })
        }
    }
}
</script>

<style scoped>
    

    .form{
      box-shadow: -9px -9px 10px #eeecec, 9px 9px 10px #9b9696 !important;   
    }
    input{
        box-shadow: inset -9px -9px 10px #ffffff, inset 9px 9px 10px #cbced1 !important;
        outline: none;
        border: none;
        background-color: none;
    }
</style>
