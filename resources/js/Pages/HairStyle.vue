<template>
    <web-layout>
        <div class="py-6 px-3">
            <center class="px-3 py-1 rounded-lg shadow-lg bg-gradient-to-br from-blue-600 via-blue-400 to-blue-500 max-w-2xl mx-auto">
                <h3 class="capitalize lg:text-2xl text-lg font-semibold text-gray-100">explore different hair styles</h3>
            </center>

            <div  class="grid md:grid-cols-5 grid-cols-2 gap-4  py-7 px-4">
                <div class="space-y-4" v-for="(hairStyle, i) in 10 " :key="i">
                    <div class="hover:translate-y-1">
                        <img src="/imgs/hair.jpg" alt="" class="rounded-lg w-60">
                    </div>
                    <div class="mt-5">
                        <p class="text-gray-800 text-md font-semibold capitalize ">beautiful bold braids</p>
                    </div>
                </div>
            </div>
        </div>
    </web-layout>
</template>

<script>
    import WebLayout from "../Layouts/WebLayout.vue";
    export default {
        components: { WebLayout},

        props:{
            hairStyle:Array
        },
    }
</script>