<template>
  <Head title="Home Page" />
  <web-layout>
    <template></template>
    <div class="text-center mt-5">
      <h1 class="font-sans italic font-extrabold text-5xl text-black">Mimi Stiches</h1>
    </div>

    <!-- <div id="banner" class="w-full mt-8 h-72">
      <div class="grid grid-cols-3">
        <div class="col-span-2">
          <Splide :options="options">
            <SplideSlide v-for="(slideImg, i) in gallery_home" :key="i">
              <div class="max-h-96 flex items-center">
                <img :src="'/storage/categories/images/' + slideImg.image" alt="Sample 1" class="imgs w-full" />
              </div>
            </SplideSlide>
          </Splide>
        </div>

        <div  class="bg-blue-700 col-span-1">

        </div>
      </div>
     
    </div> -->

    <div class="max-w-6xl mx-auto px-2 py-2 mt-8">
      <div class="grid md:grid-cols-3 gap-5 grid-cols-1 px-2">

          <div class="relative text-center" v-for="(itemAnkara, i) in ankarastyle" :key="i">
            <div class="md:max-h-96 max-h-96 overflow-hidden items-center rounded-md flex">
              <img :src="'/storage/categories/images/' + itemAnkara.image"  alt="" class="rounded-md">
            </div>
             <div class="absolute top-36 left-0 right-0  font-san rounded-md bg-white text-center text-gray-900 py-4  w-44 mx-auto hover:animate-bounce duration-150 hover:bg-blue-600 hover:text-white">
               <Link :href="route('ankaraStyle')" class="">
                  <span> Ankara Styles</span>
                </Link>
             </div>
          </div>

          <div class="relative text-center" v-for="(itemAsoebi, i) in asoebiStyle" :key="i">
              <div class="md:max-h-96 max-h-96 overflow-hidden items-center rounded-md">
                <img :src="'/storage/categories/images/' + itemAsoebi.image"  alt="" class="rounded-md flex">
              </div>
              <div class="absolute top-36 left-0 right-0  font-san rounded-md bg-white text-center text-gray-900 py-4  w-44 mx-auto hover:animate-bounce duration-150 hover:bg-blue-600 hover:text-white">
               <Link :href="route('asoebiStyle')" class="">
                  <span>Asoebi Styles</span>
                </Link>
              </div>
          </div>

          <div class="relative text-center rounded-md" v-for="(itemLace, i) in lacestyle" :key="i" >
            <div class="md:max-h-96 max-h-96 overflow-hidden items-center rounded-md flex">
               <img :src="'/storage/categories/images/' + itemLace.image"  alt="" class="rounded-md">
            </div>
              <div class="absolute top-36 left-0 right-0 font-san rounded-md bg-white text-center text-gray-900 py-4  w-44 mx-auto hover:animate-bounce duration-150 hover:bg-blue-600 hover:text-white">
                <Link :href="route('laceStyle')" class="">
                  <span>Lace Styles</span>
                </Link>
              </div>
          </div>
      </div>

     <div class="bg-blue-100 mt-7 mx-auto py-20 rounded-md px-5">
        <div class="text-center">
          <h4 class="text-2xl font-extrabold font-sans text-gray-600">Newsletter</h4>
          <p class="text-gray-600">Sign up to get weekly emails with new updates in your inbox.</p>
        </div>

        <div class="max-w-2xl mx-auto mt-4 px-5">
          <form action="">
            <div class="mt-5 grid md:grid-cols-3 grid-cols-1 gap-3">
              <div class="bg-white text-gray-800  rounded-md mb-3">
                <input type="text" id="name" v-model="name" class="py-2 w-full px-4 outline-none border-0 rounded-md shadow-lg h-12" placeholder="Enter your fullname" required>
              </div>

              <div class="bg-white text-gray-800  rounded-md mb-3">
                <input type="email" id="email" v-model="email" class="py-2 w-full px-4 outline-none border-0 rounded-md shadow-lg h-12" placeholder="Email" required>
              </div>

              <div class="">
                <button class="bg-black text-white py-3 px-5 rounded-md">Subscribe</button>
              </div>
            </div>

            <div class="text-center text-gray-600 text-xs md:text-lg lg:text-lg mt-4">
              <input type="checkbox" class="" required>  By checking this, you agree to our Privacy Policy.
            </div>
          </form>
        </div>
    </div>
    </div>

    <shop></shop>
    <details-styles></details-styles>
  </web-layout>
</template>

<script>
import WebLayout from "../Layouts/WebLayout.vue";
import { Splide, SplideSlide } from "@splidejs/vue-splide";
import {Link, Head} from "@inertiajs/inertia-vue3";
import Shop from './Shop.vue';
import DetailsStyles from './DetailsStyles.vue';
import "@splidejs/splide/dist/css/themes/splide-default.min.css";

export default {
  components: { WebLayout, Splide, SplideSlide, Link, Head, Shop, DetailsStyles,},

  props:{
    gallery_home: Array,
  },

  data() {
    return {
      asoebiStyle: [],
      lacestyle: [],
      ankarastyle: [],
      trend: [],
      options: {
        rewind: true,
        gap: "1rem",
        autoplay: true,
        rewindSpeed: 1000,
        type: "loop",
        // pauseOnHover: false,
        arrows      : false,
        // pagination : false,
      },
    };
  },

  beforeMount() {
      this.fetchStyles()
  },

  methods: {
        fetchStyles(){
            axios.post(route('fetch_styles'))
            .then((res) => {
                this.lacestyle = res.data.lacestyle;
                this.asoebiStyle = res.data.asoebiStyle;
                this.ankarastyle = res.data.ankaraStyle;
                this.trend = res.data.trend;
            })
            .catch((error) => {
                console.log(error);
            })
        }
    },
};
</script>

<style scoped>



</style>