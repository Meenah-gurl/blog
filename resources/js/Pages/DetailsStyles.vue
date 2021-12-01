<template>
    <div class="bg-white w-full py-10">
        <div class="max-w-6xl mx-auto px-3">
            <div class="grid md:grid-cols-3 grid-cols-1 gap-10">
                <div class="col-span-2 ">
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-5">
                        <div class="order-2 lg:order-1">
                            <img src="/imgs/twoOne.jpg" alt="" class="rounded-md">
                        </div>

                        <div class="order-1 px-3 lg:order-2">
                            <Link :href="route('trending')" class="cursor-pointer">
                                <span class="bg-gray-300 text-black py-1 px-2 font-sans text-sm font-extrabold">TRENDS</span>
                            </Link>
                            
                            <div>
                                <h3 class="capitalize text-black font-san text-2xl font-bold mt-3">How she became a Millionaire at a young age</h3>
                                <small class="text-gray-700 mb-2">by Meenah Sani, on October, 2021</small>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit adipisicing elit.</p>
                                <button class="mt-4 py-1 px-4 bg-white text-black border-2 border-black hover:bg-black hover:text-white ">See more</button>
                            </div>
                        </div>
                    </div>
                     <hr class="bg-gray-600 mt-12 mb-4">

                     <!-- second row -->
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-5 mt-8">
                        <div class="order-2 lg:order-1 ">
                            <img src="/imgs/twoOne.jpg" class="rounded-md" alt="">
                        </div>

                        <div class="order-1 px-3 lg:order-2">
                            <Link :href="route('trending')" class="cursor-pointer">
                                <span class="bg-gray-300 text-black py-1 px-2 font-sans text-sm font-extrabold uppercase ml-3">TRENDS</span>
                            </Link>

                            <Link :href="route('hairStyle')" class="cursor-pointer">
                                <span class="bg-gray-300 text-black py-1 px-2 font-sans text-sm font-extrabold uppercase ml-3">HAIR STYLE</span>
                            </Link>
                            <Link :href="route('makeover')" class="cursor-pointer">
                                <span class="bg-gray-300 text-black py-1 px-2 font-sans text-sm font-extrabold uppercase ml-3">MAKE OVER</span>
                            </Link>    
                            <div>
                                <h3 class="capitalize text-black font-san text-2xl font-bold mt-3">How she became a Millionaire at a young age</h3>
                                <small class="text-gray-700 mb-2">by Meenah Sani, on October, 2021</small>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit adipisicing elit.</p>
                                <button class="mt-4 py-1 px-4 bg-white text-black border-2 border-black hover:bg-black hover:text-white ">See more</button>
                            </div>
                        </div>
                    </div>
                    <hr class="bg-gray-600 mt-12 mb-4">

                    <!-- third row -->
                    <div class="grid md:grid-cols-4  grid-cols-2 gap-3 lg:mx-0 mx-auto px-3">
                        <div class="">
                            <div>
                                <img src="/imgs/joy.png" alt="" class="rounded-lg w-40 mx-auto">
                            </div>
                            <p class="text-gray-800 text-md font-semibold capitalize ml-4">Ankara style with hair Bonnet</p>
                        </div>

                        <div class="">
                            <div>
                                <img src="/imgs/mina.jpg" alt="" class="rounded-lg w-40 mx-auto">
                            </div>
                            <p class="text-gray-800 text-md font-semibold capitalize ml-4">a cut lace outfit</p>
                        </div>

                        <div class="">
                            <div>
                                <img src="/imgs/hub.jpg" alt="" class="rounded-lg w-40 mx-auto">
                            </div>
                            <p class="text-gray-800 text-md font-semibold capitalize ml-4">ogaza sleeve with fishtail palazo</p>
                        </div>

                        <div class="">
                            <div class=" mx-auto">
                                <img src="/imgs/ogaza3.png" alt="" class="rounded-lg w-40 mx-auto">
                                <p class="text-gray-800 text-md font-semibold capitalize ml-4">ogaza sleeve with fishtail palazo</p>
                            </div>
                        </div>

                        <div class="">
                           <div class="lg:-mt-14">
                                <img src="/imgs/greenAK.jpg" alt="" class="rounded-lg w-40 mx-auto">
                                <p class="text-gray-800 text-md font-semibold capitalize ml-4">ogaza sleeve with fishtail palazo</p>
                           </div>
                        </div>

                        <div class="">
                            <div class="lg:-mt-14">
                                <img src="/imgs/hair.jpg" alt="" class="rounded-lg w-40 mx-auto">
                            </div>
                            <p class="text-gray-800 text-md font-semibold capitalize ml-4">ogaza sleeve with fishtail palazo</p>
                        </div>

                        <div class="">
                            <div class="lg:-mt-14">
                                <img src="/imgs/white.jpg" alt="" class="rounded-lg w-40 mx-auto">
                            </div>
                            <p class="text-gray-800 text-md font-semibold capitalize ml-4">ogaza sleeve with fishtail palazo</p>
                        </div>

                        <div class="">
                            <div>
                                <img src="/imgs/gray.jpg" alt="" class="rounded-lg w-40 mx-auto">
                            </div>
                            <p class="text-gray-800 text-md font-semibold capitalize ml-4">ogaza sleeve with fishtail palazo</p>
                        </div>

                        <div class="">
                            <div class="lg:-mt-24">
                                <img src="/imgs/blue.jpg" alt="" class="rounded-lg w-40 mx-auto">
                            </div>
                            <p class="text-gray-800 text-md font-semibold capitalize ml-4">ogaza sleeve with fishtail palazo</p>
                        </div>

                        <div class="">
                            <div class="lg:-mt-24">
                                <img src="/imgs/mimi 3.jpg" alt="" class="rounded-lg w-40 mx-auto">
                            </div>
                            <p class="text-gray-800 text-md font-semibold capitalize ml-4">ogaza sleeve with fishtail palazo</p>
                        </div>
                        <div class="">
                            <div class="lg:-mt-24">
                                <img src="/imgs/nnene.jpeg" alt="" class="rounded-lg w-40 mx-auto">
                            </div>
                            <p class="text-gray-800 text-md font-semibold capitalize ml-4">ogaza sleeve with fishtail palazo</p>
                        </div>

                        <div class="">
                            <div class="">
                                <img src="/imgs/palazo.jpg" alt="" class="rounded-lg w-40 mx-auto">
                            </div>
                            <p class="text-gray-800 text-md font-semibold capitalize ml-4">palazzo pants for women</p>
                        </div>
                        
                    </div>

                </div>

               

                <div class="lg:col-span-1 mx-auto w-full">
                    <div class="relative border border-gray-400  py-3 lg:w-80 w-full">
                        <div class="absolute left-5 right-0 -top-7 px-4 py-3 bg-gray-300 w-72 text-center shadow-lg hover:bg-white hover:text-gray-700 cursor-pointer">
                            <span class="text-black font-bold uppercase ">About Me</span>
                        </div>
                        <div class="rounded-full mt-6">
                            <img src="/imgs/mimi 1.jpg" alt="" class="rounded-full w-48 h-48 mx-auto">
                        </div>
                        <div>
                            <h4 class="text-black font-extrabold font-san text-lg text-center mt-2">Ezeocha Miracle</h4>
                            <p class="text-center text-lg font-san text-gray-800">Ezeocha Joy Miracle is a fashion designer that has great passion for it,
                                Ezeocha Joy Miracle is a fashion designer that has great passion for it
                            </p>

                            <h4 class="text-black font-extrabold font-san text-lg text-center mt-7">Mimi Stiches</h4>
                            <hr class="bg-gray-600 mt-2">
                        </div>

                        <div class="sm:flex-row flex md:flex-col lg:flex-row">
                            <Link :href="route('home')" :class="navclasses">
                                <font-awesome :icon="['fab', 'facebook']" /> 
                            </Link>

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

                    <div class="mx-auto lg:mx-0">
                        <div class="bg-gray-300 px-3 py-3 text-center mt-5 shadow-lg hover:bg-white hover:text-gray-700 cursor-pointer" >
                            <span class="uppercase text-black font-bold font-san text-lg">categories</span>
                        </div>

                        <div class="cat mt-8 py-12">
                            <div class="py-2 px-3 text-center bg-white bg-opacity-70 text-gray-800 mx-auto w-40 hover:bg-black hover:text-white rounded-lg shadow-lg">
                                <Link :href="route('laceStyle')" class="">
                                   <span class="text-sm font-san font-bold">Lace Outfit</span>
                                </Link>
                                
                            </div>
                        </div>

                        <div class="cat2 mt-4 py-12">
                           <div class="py-2 px-3 text-center bg-white bg-opacity-70 text-gray-800 mx-auto w-40 hover:bg-black hover:text-white rounded-lg shadow-lg">
                                <Link :href="route('childrenStyle')" class="">
                                   <span class="text-sm font-san font-bold">Children Outfit</span>
                                </Link>
                            </div>
                        </div>

                        <div class="cat3 mt-4 py-12">
                            <div class="py-2 px-3 text-center bg-white bg-opacity-70 text-gray-800 mx-auto w-40 hover:bg-black hover:text-white rounded-lg shadow-lg">
                                <Link :href="route('childrenStyle')" class="">
                                   <span class="text-sm font-san font-bold">Ankara Outfit</span>
                                </Link>
                            </div>
                        </div>

                    </div>
                    <div>
                        <div class="bg-gray-300 px-3 py-3 text-center mt-5 shadow-lg hover:bg-white hover:text-gray-700 cursor-pointer">
                            <span class="uppercase text-black font-bold font-san text-lg">advertisments</span>
                        </div>

                        <div class="mt-5">
                            <Splide :options="options3">
                                <SplideSlide>
                                    <img src="/imgs/software.jpg" alt="Sample 1" class="imgs w-full" />
                                </SplideSlide>

                                <SplideSlide>
                                    <img src="/imgs/graphics.jpg" alt="Sample 1" class="imgs w-full" />
                                </SplideSlide>

                                <SplideSlide>
                                    <img src="/imgs/software2.jpg" alt="Sample 1" class="imgs w-full" />
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
export default {
    components: { Link,  Splide, SplideSlide},
    props:{
        
    },
    data(){
        return {
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

                // breakpoints: {
                //     812: {
                //     perPage:2,  
                //     },
                // },
            }
        }
    }
}
</script>

<style scoped>
    .cat{
      background-image: url('/imgs/twoOne.jpg');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 20vh;
      
    }

     .cat2{
      background-image: url('/imgs/twoOne.jpg');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 20vh;
     
    }

     .cat3{
      background-image: url('/imgs/twoOne.jpg');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 20vh;
      
    }

 
</style>