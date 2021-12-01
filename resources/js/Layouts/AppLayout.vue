<template>
  <div class="min-h-screen lg:flex">
    <slot name="header"></slot>

     
     <div class="fixed w-64 md:top-0 md:left-0 py-3 hidden lg:flex md:min-h-screen">
        <div class="min-h-full w-full">
            <side-bar></side-bar>
        </div>
      </div>
      
    <div class="min-h-screen ml-64 top-0">
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

})
</script>

<style>
  #sideCol{
      width: 230px;
      
  }
</style>