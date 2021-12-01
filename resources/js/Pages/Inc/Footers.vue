<template>
    <div class="bg-black py-14 text-gray-200">
        <div class="py-6 max-w-6xl px-7 mx-auto">
            <div class="grid md:grid-cols-4 grid-cols-1 gap-10">
                <!-- first grid -->
                <div>
                    <div class="flex gap-4">
                        <h3 class="text-md font-semibold mb-4 uppercase">Mimi Stiches</h3>
                        <hr class="w-10 border-blue-600 mt-3">
                    </div>
                    <p class="text-lg text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, accusantium reprehenderit</p>
                </div>
                <!-- second grid -->
                <div>
                    <div class="flex gap-4">
                        <h3 class="text-md font-semibold mb-4 uppercase">trending Post</h3>
                        <hr class="w-10 border-blue-600 mt-3">
                    </div>

                    <div class="flex gap-3 mb-3">
                        <div class="hover:border-blue-600 hover:border">
                            <img src="/imgs/mimi 3.jpg" alt="No image" class="h-20 w-20 rounded-md">
                        </div>
                        <div>
                            <p class="text-sm font-semibold mb-2 mt-3">Beautiful Ankara Style</p>
                            <small class="text-sm">25 November, 2021</small>
                        </div>
                    </div>

                    <div class="flex gap-3 mb-3">
                        <div class="hover:border-blue-600 hover:border">
                            <img src="/imgs/mina.jpg" alt="No image" class="h-20 w-20 rounded-md">
                        </div>
                        <div>
                            <p class="text-sm font-semibold mb-2 mt-3">Perfect Asoebi Style</p>
                            <small class="text-sm">25 November, 2021</small>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <div class="hover:border-blue-600 hover:border">
                            <img src="/imgs/mimi 3.jpg" alt="No image" class="h-20 w-20 rounded-md">
                        </div>
                        <div>
                            <p class="text-sm font-semibold mb-2 mt-3">Beautiful Ankara Style</p>
                            <small class="text-sm">25 November, 2021</small>
                        </div>
                    </div>
                </div>
                <!-- third grid -->
                <div>
                    <div class="flex gap-4">
                        <h3 class="text-md font-semibold mb-4 uppercase">recent post</h3>
                        <hr class="w-10 border-blue-600 mt-3">
                    </div>

                    <div class="flex gap-3 mb-3">
                        <div class="hover:border-blue-600 hover:border">
                            <img src="/imgs/shortgown.jpg" alt="No image" class="h-20 w-20 rounded-md">
                        </div>
                        <div>
                            <p class="text-sm font-semibold mb-2 mt-3">Beautiful Ankara Style</p>
                            <small class="text-sm">25 November, 2021</small>
                        </div>
                    </div>

                    <div class="flex gap-3 mb-3">
                        <div class="hover:border-blue-600 hover:border">
                            <img src="/imgs/shortgown.jpg" alt="No image" class="h-20 w-20 rounded-md">
                        </div>
                        <div>
                            <p class="text-sm font-semibold mb-2 mt-3">Beautiful Ankara Style</p>
                            <small class="text-sm">25 November, 2021</small>
                        </div>
                    </div>

                    <div class="flex gap-3 mb-3">
                        <div class="hover:border-blue-600 hover:border">
                            <img src="/imgs/shortgown.jpg" alt="No image" class="h-20 w-20 rounded-md">
                        </div>
                        <div>
                            <p class="text-sm font-semibold mb-2 mt-3">Beautiful Ankara Style</p>
                            <small class="text-sm">25 November, 2021</small>
                        </div>
                    </div>
                </div>
                <!-- fourt grid -->
                <div>
                    <div class="flex gap-4">
                        <h3 class="text-md font-semibold mb-4 uppercase lg:flex-grow lg:flex-shrink-0">subscribe and follow</h3>
                        <hr class="w-10 border-blue-600 mt-3">
                    </div>

                    <div class="flex gap-6 mb-5">
                        <div class="rounded-md bg-gray-200 shadow-md py-1 w-10 text-center text-blue-600 hover:border-red-600 hover:border">
                            <font-awesome :icon="['fab', 'facebook']" size=2x /> 
                        </div>

                        <div class="rounded-md bg-gray-200 shadow-md py-1 w-10 text-center text-blue-600 hover:border-red-600 hover:border">
                            <font-awesome :icon="['fab', 'instagram']" size=2x /> 
                        </div>

                        <div class="rounded-md bg-gray-200 shadow-md py-1 w-10 text-center text-blue-600 hover:border-red-600 hover:border">
                            <font-awesome :icon="['fab', 'whatsapp']" size=2x /> 
                        </div>
                    </div>

                    <div class="mt-12">
                        <p class="mb-3 text-md font-semibold capitalize">Hurry Now and call</p>
                        <span class="block text-md">
                            <font-awesome :icon="['fas', 'phone-alt']" />  +234 9034464675
                        </span>
                        <span class="block text-md">
                            <font-awesome :icon="['fas', 'phone-alt']" />  +234 9034464675
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-10 w-full">
        <div class="text-center">
            <p class="mt-4 text-md">&copy; Copyright 2021 Sani Amina</p>
        </div>
    </div>
</template>

