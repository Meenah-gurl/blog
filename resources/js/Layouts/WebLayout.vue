<template>
    <div>
        <slot name="header"></slot>
        <nav-bar></nav-bar>

        <div class="min-h-screen">
          <slot></slot>
         
        </div>
        <reviews></reviews>
        <footers></footers>
    </div>
</template>
<script>
import Footers from '../Pages/Inc/Footers.vue'
import Reviews from '../Pages/Inc/Reviews.vue'
import NavBar from '../Pages/Inc/NavBar.vue'
    export default {
       components: { NavBar,  Reviews, Footers, } 
    }
</script>