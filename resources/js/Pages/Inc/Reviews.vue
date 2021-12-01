<template>
    <div class="bgReview py-10">
     <div class="max-w-6xl mx-auto px-7">
        <div>
            <Splide :options="options3">
                <SplideSlide>
                    <img src="/imgs/software.jpg" alt="Sample 1" class="imgs w-full rounded-full" />
                    <div>
                        <h3>Meenah Sani</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil </p>
                    </div>
                </SplideSlide>

                <SplideSlide>
                    <img src="/imgs/software.jpg" alt="Sample 1" class="imgs w-full rounded-full" />
                    <div>
                        <h3>Meenah Sani</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil </p>
                    </div>
                </SplideSlide>

                <SplideSlide>
                    <img src="/imgs/software.jpg" alt="Sample 1" class="imgs w-full rounded-full" />
                    <div>
                        <h3>Meenah Sani</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil </p>
                    </div>
                </SplideSlide>
            </Splide>
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
            options4: {
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
    .bgReview{
        /* background-attachment: fixed; */
        background-image: url('/imgs/background2.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>