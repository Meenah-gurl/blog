<template>
  <web-layout>
    <template></template>
    <div class="text-center mt-5">
      <h1 class="font-sans italic font-extrabold text-5xl text-black">Mimi Stiches</h1>
    </div>
    <div id="banner" class="w-full mt-8">
      <Splide :options="options">
        <SplideSlide>
          <img src="/imgs/twoOne.jpg" alt="Sample 1" class="imgs w-full" />
        </SplideSlide>
        <SplideSlide>
          <img src="/imgs/twoOne.jpg" alt="Sample 2" class="imgs w-full" />
        </SplideSlide>
        <SplideSlide>
          <img src="/imgs/twoOne.jpg" alt="Sample 2" class="imgs w-full" />
        </SplideSlide>
      </Splide>
    </div>

    <div class="max-w-6xl mx-auto px-2 py-2 mt-8">
      <div class="grid md:grid-cols-3 gap-5 grid-cols-1 px-2">
          <div class="akStyles text-center  py-40 rounded-md">
             <div class="font-san rounded-md bg-white text-center text-gray-900 py-4  w-44 mx-auto hover:animate-bounce duration-150 hover:bg-blue-600 hover:text-white">
               <Link :href="route('ankaraStyle')" class="">
                  <span>Ankara Styles</span>
                </Link>
             </div>
          </div>

          <div class="lacestyles bg-gray-400 text-center py-40 rounded-md">
              <div class="font-san rounded-md bg-white text-center text-gray-900 py-4  w-44 mx-auto hover:animate-bounce duration-150 hover:bg-blue-600 hover:text-white">
               <Link :href="route('childrenStyle')" class="">
                  <span>Children Styles</span>
                </Link>
              </div>
          </div>

          <div class="trends bg-gray-400 text-center py-40 rounded-md">
              <div class="font-san rounded-md bg-white text-center text-gray-900 py-4  w-44 mx-auto hover:animate-bounce duration-150 hover:bg-blue-600 hover:text-white">
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
import {Link} from "@inertiajs/inertia-vue3";
import Shop from './Shop.vue';
import DetailsStyles from './DetailsStyles.vue';
import "@splidejs/splide/dist/css/themes/splide-default.min.css";

export default {
  components: { WebLayout, Splide, SplideSlide, Link, Shop, DetailsStyles,},
  data() {
    return {
      options: {
        rewind: true,
        gap: "1rem",
        autoplay: true,
        rewindSpeed: 1000,
        type: "loop",
        // pauseOnHover: false,
        // arrows      : false,
        // pagination : false,
      },
    };
  },
};
</script>

<style scoped>
  .imgs {
    height: 100vh;
  }

  .akStyles{
    background-image: url('/imgs/greenAk.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 400px;
  }

  .lacestyles{
    background-image: url('/imgs/greenAk.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 400px;

  }

  .trends{
      background-image: url('/imgs/greenAk.jpg');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 400px;
  }
</style>