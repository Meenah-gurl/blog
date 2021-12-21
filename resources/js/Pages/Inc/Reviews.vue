<template>
    <div class="bgReview py-10 px-3">
     <div class="max-w-4xl mx-auto">
        <div>
            <!-- <div class="text-center">
                <h3 class="uppercase text-3xl text-blue-600 font-extrabold animate-bounce">customers review</h3>
            </div> -->
            <!-- <Splide :options="options5">
                <SplideSlide>
                   <div class="flex gap-5 flex-col md:flex-row ">
                        <div>
                            <img src="/imgs/software.jpg" alt="Sample 1" class="imgs w-40 h-40 rounded-full md:mx-0 mx-auto" />
                        </div>
                        <div class="md:mt-6">
                            <h3 class="md:text-left  text-center text-lg font-semibold text-gray-900">Meenah Sani</h3>
                            <p class="mb-33 md:text-left  text-center text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil </p>
                            <small class="md:float-left float-right text-base text-900">1st December, 2021</small>

                        </div>
                   </div>
                </SplideSlide> -->
               
            <!-- </Splide> -->
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
            options5: {
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
    }
}
</script>

<style scoped>
    /* .bgReview{
        background-image: url('/imgs/background2.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    } */
</style>