<template>
    <web-layout>
        <div class="w-full lg:py-10 py-3 relative max-w-4xl mx-auto mt-10 lg:px-0 px-10">
            <div class="mx-auto bg-blue-900 rounded-md lg:py-28 py-8 shadow-2xl md:px-10 px-4">
               <div class="flex">
                    <div class="absolute lg:-left-20 left-2">
                        <div class="">
                            <h3 class="uppercase lg:text-5xl text-lg lg:font-semibold font-extrabold text-gray-100 lg:mb-2 lg:mt-4 mt-10"><span class="text-blue-900">We</span>lcome to</h3>
                            <h3 class="uppercase lg:text-4xl text-lg lg:font-semibold font-extrabold  text-gray-100 mb-3"><span class="text-blue-900"> Mim</span>  i stiches</h3>
                        </div>
                    </div>
                    <div class="text-center lg:mx-auto  mt-32">
                        <p class="lg:text-md text-sm  text-gray-100">Lorem ipsum dolor, sit amet consectetur</p>
                        <p class="lg:text-md text-sm text-gray-100">Lorem ipsum dolor, sit amet consectetur</p>
                    </div>
                    <div>
                        <img src="/imgs/gray.jpg" alt="" class="absolute lg:h-full h-64 top-0 lg:right-5 lg:w-72 w-40 right-3 rounded-md lg:block hidden">
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-10 bg-gray-300 py-10 mx-auto">
            <div class="text-center mb-6">
                <span class="capitalize text-blue-900 text-4xl font-semibold">give it a try</span>
            </div>

            <div class="max-w-2xl mx-auto">
                <form action="" class="text-center">
                    <div class="flex gap-10 mb-3">
                        <div>
                            <div class="block mb-3">
                                <label for="" class="text-white text-lg block">Fullname</label>
                                <input type="text" class="border-outline-none rounded-lg shadow-lg text-gray-900 bg-white" placeholder="">
                            </div>

                            <div class="block mb-3">
                                <label for="" class="text-white text-lg block">Email</label>
                                <input type="text" class="outline-none rounded-lg shadow-lg text-gray-900 bg-white" placeholder="">
                            </div>

                            <div class="block mb-3">
                                <label for="" class="text-white text-lg block">Phone</label>
                                <input type="text" class="outline-none rounded-lg shadow-lg text-gray-900 bg-white" placeholder="">
                            </div>
                        </div>
                        <div>
                            <div class="block mb-3">
                                <label for="" class="text-white text-lg block">Message</label>
                                <textarea name="" id="" cols="30" rows="7" class="rounded-lg"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="bg-blue-900 text-gray-100 py-1 rounded-lg w-60 mx-auto">
                        <button type="submit" class="text-center ">Send it</button>
                    </div>
                </form>
            </div>
        </div>
    </web-layout>
</template>

<script>
import WebLayout from '../Layouts/WebLayout.vue'
    export default {
        components: { WebLayout },
            
    }
</script>