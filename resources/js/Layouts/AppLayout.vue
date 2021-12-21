<template>
  <div class="min-h-screen lg:flex">
    <div class="fixed lg:pl-64 py-2 flex bg-blue-900 w-screen drop-shadow-xl">
      <div class="flex-grow px-4 ">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
          Dashboard
        </h2>
      </div>
      <div class="pr-8"  @click="sidebar = !sidebar">
        <span class=" bg-white cursor-pointer px-2 py-1 rounded-lg lg:hidden ">
          <!-- |||  -->
           <font-awesome :icon="['fas', 'bars']" /> 
        </span>
      </div>
    </div>
   

     
     <div :class="sidebar? '' : '-ml-96' "  class="fixed w-64 md:top-0 lg:left-0 lg:ml-0 lg:flex md:min-h-screen transition-all duration-700 z-50">
        <div class="min-h-full w-full">
            <side-bar></side-bar>
        </div>
      </div>
      
    <div class="min-h-screen lg:ml-64 ml-0 w-full bg-blue-50 lg:px-0 px-4">
      <!-- Page Content -->
      <main>
          <slot></slot>
      </main>
    </div>
    
  </div>
</template>

<script>
  import { defineComponent } from 'vue'
  import { Link } from '@inertiajs/inertia-vue3';
  import axios from 'axios';
  import sideBar from '../Pages/Inc/sideBar.vue';
  export default defineComponent({
    props: {
        title: String,

    },

    components: {
      sideBar,
    },

    data(){
        return {
            sidebar: false,
        
        }
    }

})
</script>

<style>
  #sideCol{
      width: 230px;
      
  }
</style>