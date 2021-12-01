<template>
    <Head title="About Page" />

    <web-layout>
        <div class="w-full lg:py-5 py-3 max-w-4xl mx-auto mt-10 lg:px-0 px-10">
            <div class="mx-auto bg-blue-900 rounded-md lg:py-12 py-8 shadow-2xl md:px-10 px-4">
                <div class="mx-auto text-center">
                    <h3 class="uppercase lg:text-5xl text-lg lg:font-semibold font-extrabold text-gray-100 lg:mb-2">About</h3>
                    <h3 class="uppercase lg:text-4xl text-lg lg:font-semibold font-extrabold  text-gray-100 mb-3">Mimi stiches</h3>
                </div>
                <div class="rounded-full">
                    <img src="/imgs/mimi 1.jpg" alt="" class="rounded-full w-60 h-60 mx-auto">
                </div>
        
                <div class="text-center lg:mx-auto">
                    <p class="lg:text-md text-sm  text-gray-100">Lorem ipsum dolor, sit amet consectetur</p>
                    <p class="lg:text-md text-sm text-gray-100">Lorem ipsum dolor, sit amet consectetur</p>
                </div>
            </div>
        </div>
        
    </web-layout>
</template>

<script>
import WebLayout from '../Layouts/WebLayout.vue'
import {Head} from "@inertiajs/inertia-vue3";
    export default {
        components: { WebLayout, Head },
            
    }
</script>