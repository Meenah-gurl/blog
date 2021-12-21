<template>
    <div class="w-full bg-black py-20 px-5 mx-auto mt-9">
        <div class="text-center">
            <h1 class="lg:text-4xl text-3xl text-white font-san font-extrabold">Welcome to our Shop!</h1>
            <hr class="border-blue-600 w-20 mx-auto border-2 mt-2">
        </div>
        <div class="mt-7 mx-auto py-7 max-w-6xl">
          <Splide :options="options1">
            <SplideSlide v-for="(SalesItem, i) in shop" :key="i">
                <div class="items-center mb-9">
                    <img :src="'/storage/shop/images/' + SalesItem.image" alt="Sample 1" class="imgs w-full h-80" />
                </div>
                <div class="text-white font-san text-center block">
                    <span class="block">{{ SalesItem.description }}</span>
                    <small class="text-md font-semibold">&#8358;{{ SalesItem.price }}</small>
                </div>
            </SplideSlide>
        </Splide>
        </div>
    </div>
</template>

<script>

import { Splide, SplideSlide } from "@splidejs/vue-splide";
import "@splidejs/splide/dist/css/themes/splide-default.min.css";

export default {
  components: {  Splide, SplideSlide },
    props:{
        salesItems:Array,
    },
  data() {
    return {
        shop: [],
        options1: {
            rewind: true,
            gap: "1rem",
            autoplay: true,
            perPage:5,
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

            breakpoints: {
                812: {
                  perPage:2,  
                },
            },
        }
    }
  },
    beforeMount() {
        this.fetchStyleShop()
    },
   methods: {
        fetchStyleShop(){
            axios.post(route('fetch_styles_shop'))
            .then((res) => {
                this.shop = res.data.shop;
            })
            .catch((error) => {
                console.log(error);
            })
        }
    },
};
</script>

