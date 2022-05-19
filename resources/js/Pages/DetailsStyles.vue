<template>
    <div class="bg-white w-full py-10">
        <div class="max-w-6xl mx-auto px-3">
            <div class="grid md:grid-cols-3 grid-cols-1 gap-10">
                <div class="col-span-2 ">
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-5" data-aos="fade-down" data-aos-duration="700">
                        <div class="order-2 lg:order-1" v-for="(itemtrend, i) in trend" :key="i">
                           <div class="md:max-h-52 max-h-60 overflow-hidden items-center rounded-md">
                                <img :src="'/storage/categories/images/' + itemtrend.image"  alt="" class="rounded-md">
                           </div>
                        </div>

                        <div class="order-1 px-3 lg:order-2">
                            <Link :href="route('trending')" class="cursor-pointer">
                                <span class="bg-gray-300 text-black py-1 px-2 font-sans text-sm font-extrabold">TRENDS</span>
                            </Link>
                            
                            <div>
                                <h3 class="capitalize text-black font-san text-2xl font-bold mb-4 mt-3">stay busy with our amazing trends</h3>
                                
                                <p>We keep you occupied by just exploring our lastest trends.</p>
                                <button class="mt-4 py-1 px-4 bg-white text-black border-2 border-black hover:bg-black hover:text-white ">See more</button>
                            </div>
                        </div>
                    </div>
                     <hr class="bg-gray-600 mt-12 mb-4">

                     <!-- second row -->
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-5 mt-8" data-aos="fade-up" data-aos-duration="700">
                        <div class="order-2 lg:order-1" v-for="(itemMakeover, i) in makeOver" :key="i">
                            <div class="md:max-h-52 max-h-60 overflow-hidden rounded-md">
                                <img :src="'/storage/categories/images/' + itemMakeover.image"  alt="">
                            </div>
                        </div>

                        <div class="order-1 px-3 lg:order-2">
                            <Link :href="route('trending')" class="cursor-pointer">
                                <span class="bg-gray-300 text-black py-1 px-2 font-sans text-sm font-extrabold uppercase">TRENDS</span>
                            </Link>

                            <Link :href="route('hairStyle')" class="cursor-pointer">
                                <span class="bg-gray-300 text-black py-1 px-2 font-sans text-sm font-extrabold uppercase ml-3">HAIR STYLE</span>
                            </Link>
                            <Link :href="route('makeover')" class="cursor-pointer">
                                <span class="bg-gray-300 text-black py-1 px-2 font-sans text-sm font-extrabold uppercase ml-3">MAKE OVER</span>
                            </Link>    
                            <div>
                                <h3 class="capitalize text-black font-san text-2xl font-bold mt-3 mb-4">Check out our beautiful designs</h3>
                             
                                <p>We give you mind blowing trends, hairStyle and Make up.</p>
                                <button class="mt-4 py-1 px-4 bg-white text-black border-2 border-black hover:bg-black hover:text-white ">See more</button>
                            </div>
                        </div>
                    </div>
                    <hr class="bg-gray-600 mt-12 mb-4">

                    <!-- third row -->
                    <div class=" grid md:grid-cols-4  grid-cols-2 gap-3" data-aos="zoom-out" data-aos-duration="700">
                        <div class="grid-gallery" v-for="(gallery, i) in gallery_home" :key="i">
                            <div>
                                <img :src="'/storage/categories/images/' + gallery.image"  alt="" class="rounded-lg w-40 mx-auto">
                            </div>
                            <p class="text-gray-800 text-md font-semibold capitalize ml-4">{{ gallery.description }}</p>
                        </div>
                    </div>
                </div>


                <div class="lg:col-span-1 col-span-2 mx-auto w-full" data-aos="flip-left" data-aos-duration="700">
                    <div class="relative border border-gray-400  py-3 lg:w-full w-full">
                        <div class="absolute left-8  right-0 -top-7 px-4 py-3 bg-gray-300 w-72 text-center shadow-lg hover:bg-white hover:text-gray-700 cursor-pointer">
                            <span class="text-black font-bold uppercase ">About Me</span>
                        </div>
                        <div class="rounded-full mt-6">
                            <img src="/imgs/mimi 1.jpg" alt="" class="rounded-full w-48 h-48 mx-auto">
                        </div>
                        <div class="px-3 ">
                            <h4 class="text-black font-extrabold font-san text-lg text-center mt-2">Ezeocha Miracle</h4>
                            <p class="text-center text-lg font-san text-gray-800">Ezeocha Joy Miracle is a fashion designer that has great passion for it,
                                Ezeocha Joy Miracle is a fashion designer that has great passion for it
                            </p>

                            <h4 class="text-black font-extrabold font-san text-lg text-center mt-7">Mimi Stiches</h4>
                            <hr class="bg-gray-600 mt-2">
                        </div>

                        <div class="sm:flex-row flex md:flex-col lg:flex-row">
                            <a href="https://www.facebook.com/eze.mimistitches" :class="navclasses">
                                <font-awesome :icon="['fab', 'facebook']" /> 
                            </a>

                            <Link :href="route('home')" :class="navclasses">
                                <font-awesome :icon="['fab', 'instagram']" /> 
                            </Link>

                            <Link :href="route('home')" :class="navclasses">
                                <font-awesome :icon="['fab', 'twitter']" /> 
                            </Link>

                            <Link :href="route('home')" :class="navclasses" >
                                <font-awesome :icon="['fab', 'whatsapp']" /> 
                            </Link>
                        </div>
                    </div>

                    <div class="mx-auto lg:mx-0" data-aos="" data-aos-duration="700">
                        <div class="bg-gray-300 px-3 py-3 text-center mt-5 shadow-lg hover:bg-white hover:text-gray-700 cursor-pointer" >
                            <span class="uppercase text-black font-bold font-san text-lg">categories</span>
                        </div>

                        <Splide :options="options8">
                            <SplideSlide v-for="(itemlace, i) in lacestyle" :key="i">
                                <div class=" relative py-3">
                                    <div class="md:max-h-40 max-h-40 overflow-hidden items-center">
                                        <img :src="'/storage/categories/images/' + itemlace.image" alt="">
                                    </div>
                                    <div class="absolute top-20 left-0 right-0 py-2 px-3 text-center bg-white bg-opacity-70 text-gray-800 mx-auto w-40 hover:bg-black hover:text-white rounded-lg shadow-lg">
                                        <Link :href="route('laceStyle')" class="">
                                            <span class="text-sm font-san font-bold">Lace Style</span>
                                        </Link>
                                    </div>
                                </div>
                            </SplideSlide> 
                        </Splide>

                        <Splide :options="options9">
                            <SplideSlide v-for="(childrenitem,i) in childrenstyle" :key="i">
                                <div class="relative py-3">
                                    <div class="md:max-h-40 max-h-40 overflow-hidden items-center">
                                        <img class="mx-0" :src="'/storage/categories/images/' + childrenitem.image" alt="">
                                    </div>
                                    <div class="absolute top-20 left-0 right-0 py-2 px-3 text-center bg-white bg-opacity-70 text-gray-800 mx-auto w-40 hover:bg-black hover:text-white rounded-lg shadow-lg">
                                        <Link :href="route('childrenStyle')" class="">
                                        <span class="text-sm font-san font-bold">Children Outfit</span>
                                        </Link>
                                    </div>
                                </div>
                            </SplideSlide> 
                        </Splide>

                        <Splide :options="options10">
                            <SplideSlide v-for="(itemAnkara, i) in ankarastyle " :key="i">
                                <div class="relative py-3">
                                    <div class="md:max-h-40 max-h-40 overflow-hidden items-center">
                                        <img  :src="'/storage/categories/images/' + itemAnkara.image" alt="">
                                    </div>
                                    <div class="absolute top-20 left-0 right-0 py-2 px-3 text-center bg-white bg-opacity-70 text-gray-800 mx-auto w-40 hover:bg-black hover:text-white rounded-lg shadow-lg">
                                        <Link :href="route('ankaraStyle')" class="">
                                            <span class="text-sm font-san font-bold">Ankara Outfit</span>
                                        </Link>
                                    </div>
                                </div>
                            </SplideSlide> 
                        </Splide>

                        

                    </div>
                    <!-- for advert -->
                    <div>
                        <div class="bg-gray-300 px-3 py-3 text-center mt-5 shadow-lg hover:bg-white hover:text-gray-700 cursor-pointer">
                            <span class="uppercase text-black font-bold font-san text-lg">advertisments</span>
                        </div>

                        <div class="mt-5">
                            <Splide :options="options3">
                                <SplideSlide v-for="(slideAdvert, i) in advert" :key="i">
                                    <div class="">
                                        <img :src="'/storage/advert/images/' + slideAdvert.image" alt="Sample 1" class="imgs w-full" />
                                    </div>
                                </SplideSlide>
                            </Splide>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import {Link} from "@inertiajs/inertia-vue3";
import { Splide, SplideSlide } from "@splidejs/vue-splide";
import "@splidejs/splide/dist/css/themes/splide-default.min.css";
import axios from 'axios';
export default {
    components: { Link,  Splide, SplideSlide},
    props:{
        gallery_home:Array,
        advert:Array,

    },
    data(){
        return {
            lacestyle:[],
            childrenstyle:[],
            ankarastyle:[],
            trend:[],
            makeOver:[],
            gallery_home:[],
            advert: [],

            navclasses : 'text-md text-black  hover:text-gray-300 font-semibold mx-auto',
            options3: {
                rewind: true,
                gap: "1rem",
                autoplay: true,
                perPage:1,
                perMove:1,
                // resetProgress: true,
                // rewindSpeed: 1000,
                type: "loop",
                width: "100vw",
                // pauseOnHover: false,
                arrows      : false,
                pagination : false,
                breakpoints: {
                    640: {
                    perPage:1,  
                    },
                },

            },

            options8: {
                rewind: true,
                gap: "1rem",
                autoplay: true,
                perPage:1,
                perMove:1,
                // resetProgress: true,
                // rewindSpeed: 1000,
                type: "loop",
                width: "100vw",
                // pauseOnHover: false,
                arrows      : false,
                pagination : false,
                breakpoints: {
                    640: {
                    perPage:1,  
                    },
                },
            },

             options9: {
                rewind: true,
                gap: "1rem",
                autoplay: true,
                perPage:1,
                perMove:1,
                // resetProgress: true,
                // rewindSpeed: 1000,
                type: "loop",
                width: "100vw",
                // pauseOnHover: false,
                arrows      : false,
                pagination : false,
                breakpoints: {
                    640: {
                    perPage:1,  
                    },
                },
            },

             options10: {
                rewind: true,
                gap: "1rem",
                autoplay: true,
                perPage:1,
                perMove:1,
                // resetProgress: true,
                // rewindSpeed: 1000,
                type: "loop",
                width: "100vw",
                // pauseOnHover: false,
                arrows      : false,
                pagination : false,
                breakpoints: {
                    640: {
                    perPage:1,  
                    },
                },
            }

          
        }
    },
    beforeMount() {
        this.fetchStyles()
    },
    methods: {
        fetchStyles(){
            axios.post(route('fetch_styles'))
            .then((res) => {
                this.lacestyle = res.data.lacestyle;
                this.childrenstyle = res.data.childrenStyle;
                this.ankarastyle = res.data.ankaraStyle;
                this.trend = res.data.trend;
                this.makeOver = res.data.makeOver;
                this.gallery_home = res.data.gallery;
                this.advert = res.data.advert;
            })
            .catch((error) => {
                console.log(error);
            })
        }
    },
}
</script>


<style scoped>
    .grid-gallery img {
        /* border-radius: 4px; */
        height: auto;
        width: 100%;
        position: relative;
        display: block;
    }
</style>
