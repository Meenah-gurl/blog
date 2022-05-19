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
                    <p class="text-lg lg:text-justify md:w-lg text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, accusantium</p>
                </div>
                <!-- second grid -->
                <div>
                    <div class="flex gap-3">
                        <h3 class="lg:text-md text-md font-semibold mb-4 uppercase">trending</h3>
                        <hr class="w-10 border-blue-600 mt-3">
                    </div>

                    <div class="flex gap-3 mb-3">
                        <div class="hover:border-blue-600 hover:border" v-for="(trendItem, i) in trend" :key="i">
                            <div class="flex items-center">
                                <img :src="'/storage/categories/images/' + trendItem.image" alt="No image" class="h-20 w-20 rounded-md">
                            </div>
                        </div>
                        <div class="hidden lg:block">
                            <p class="text-sm font-semibold lg:mb-2 mb-0 lg:mt-3 md:mt-1">Beautiful Ankara Style</p>
                            <small class="lg:text-sm text-xs max-w-lg">25 November, 2021</small>
                        </div>
                    </div>

                    <div class="flex gap-3 mb-3 g:flex md:flex-row">
                        <div class="hover:border-blue-600 hover:border" v-for="(trendItem, i) in trend" :key="i">
                            <img :src="'/storage/categories/images/' + trendItem.image"  alt="No image" class="h-20 w-20 rounded-md">
                        </div>
                        <div class="hidden lg:block">
                            <p class="text-sm font-semibold lg:mb-2 mb-0 lg:mt-3 md:mt-1">Perfect Asoebi Style</p>
                            <small class="lg:text-sm text-xs max-w-lg">25 November, 2021</small>
                        </div>
                    </div>

                    <div class="flex gap-3 g:flex md:flex-row">
                        <div class="hover:border-blue-600 hover:border" v-for="(trendItem, i) in trend" :key="i">
                            <img :src="'/storage/categories/images/' + trendItem.image"  alt="No image" class="h-20 w-20 rounded-md">
                        </div>
                        <div class="hidden lg:block">
                            <p class="text-sm font-semibold lg:mb-2 mb-0 lg:mt-3 md:mt-1">Beautiful Ankara Style</p>
                            <small class="lg:text-sm text-xs max-w-lg">25 November, 2021</small>
                        </div>
                    </div>
                </div>
                <!-- third grid -->
                <div>
                    <div class="flex gap-4">
                        <h3 class="text-md font-semibold mb-4 uppercase">recent post</h3>
                        <hr class="w-10 border-blue-600 mt-3">
                    </div>

                    <div class="flex gap-3 mb-3 g:flex md:flex-row">
                        <div class="hover:border-blue-600 hover:border">
                            <img src="/imgs/shortgown.jpg" alt="No image" class="h-20 w-20 rounded-md">
                        </div>
                        <div class="hidden lg:block">
                            <p class="text-sm font-semibold lg:mb-2 mb-0 lg:mt-3 md:mt-1">Beautiful Ankara Style</p>
                            <small class="lg:text-sm text-xs max-w-lg">25 November, 2021</small>
                        </div>
                    </div>

                    <div class="flex gap-3 mb-3 g:flex md:flex-row">
                        <div class="hover:border-blue-600 hover:border">
                            <img src="/imgs/shortgown.jpg" alt="No image" class="h-20 w-20 rounded-md">
                        </div>
                        <div class="hidden lg:block">
                            <p class="text-sm font-semibold lg:mb-2 mb-0 lg:mt-3 md:mt-1">Beautiful Ankara Style</p>
                            <small class="lg:text-sm text-xs max-w-lg">25 November, 2021</small>
                        </div>
                    </div>

                    <div class="flex gap-3 mb-3 g:flex md:flex-row">
                        <div class="hover:border-blue-600 hover:border">
                            <img src="/imgs/shortgown.jpg" alt="No image" class="h-20 w-20 rounded-md">
                        </div>
                        <div class="hidden lg:block">
                            <p class="text-sm font-semibold lg:mb-2 mb-0 lg:mt-3 md:mt-1">Beautiful Ankara Style</p>
                            <small class="lg:text-sm text-xs max-w-lg">25 November, 2021</small>
                        </div>
                    </div>
                </div>
                <!-- fourth grid -->
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

<script>
export default {
    components:{

    },

    props:{
         gallery_home:Array,
    },

    data(){
        return{
            trend: [],
        }
    },

     beforeMount() {
        this.fetchStyles()
    },
    methods: {
        fetchStyles(){
            axios.post(route('fetch_styles'))
            .then((res) => {
                this.childrenstyle = res.data.childrenStyle;
                this.trend = res.data.trend;
            })
            .catch((error) => {
                console.log(error);
            })
        }
    },
}
</script>

