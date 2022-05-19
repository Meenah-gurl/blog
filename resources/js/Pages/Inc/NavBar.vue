<template>
    <div class="header h-12 bg-blue-900 py-3 relative sticky top-0 z-50">
        <!-- <div  @click="showSide = !showSide" v-if="showSide" class="fixed z-30 h-screen w-screen bg-black bg-opacity-70 top-0"></div> -->
        <span @click="showSide = !showSide" class="absolute top-1 right-4 bg-white cursor-pointer px-2 py-1 rounded-lg lg:hidden">
             <font-awesome :icon="['fas', 'bars']" /> 
        </span>
        <div :class="showSide?'-left-0 lg:left-0':'-left-72 lg:left-0'" class="container transition-all duration-700 bg-blue-900 z-50 fixed lg:relative top-0 w-72 h-screen lg:h-auto lg:w-auto max-w-6xl mx-auto">
            
            <div class="grid grid-cols-1 gap-y-4 lg:grid-cols-3 lg:mx-auto">
                <div class="col-span-2 pt-8 lg:pt-0 gap-y-1 flex flex-col lg:flex-row lg:mx-auto">
                    <Link :href="route('home')" :class="navclasses" class="mx-3">
                        <font-awesome :icon="['fas', 'home']" /> Home
                    </Link>
                    <Link :href="route('trending')" :class="navclasses" class="mx-3">
                        <font-awesome :icon="['fas', 'thumbs-up']" /> Trending
                    </Link>

                    <div @click="dropDown = !dropDown" class=" md:h-auto relative mx-3 inline-block cursor-pointer" :class="navclasses">
                        <div class="relative cursor-pointer lg:-ml-0 -ml-3" :class="navclasses">
                             <font-awesome :icon="['fas', 'layer-group']" /> Categories 
                        </div>
                        <div v-show="dropDown" class="transition-all duration-500 md:absolute static top-10 left-1 bg-blue-700 md:bg-blue-600 shadow-lg rounded-md md:rounded-md  w-40  text-md">
                            <Link :href="route('laceStyle')" class="block py-2 text-md  px-3 hover:text-gray-700 hover:bg-white font-semibold text-gray-100">
                                <span>Lace Styles</span>
                            </Link>
                            <Link :href="route('asoebiStyle')" class="block py-2 text-md  px-3 hover:text-gray-700 hover:bg-white font-semibold text-gray-100">
                                <span>Aseobi Styles</span>
                            </Link>
                            <Link :href="route('ankaraStyle')" class="block py-2 text-md  px-3 hover:text-gray-700 hover:bg-white font-semibold text-gray-100">
                                <span>Ankara Styles</span>
                            </Link>
                            <Link :href="route('childrenStyle')" class="block py-2 text-md  px-3 hover:text-gray-700 hover:bg-white font-semibold text-gray-100">
                                <span>Children Styles</span>
                            </Link>
                        </div>
                    </div>

                    <Link :href="route('contactPage')" :class="navclasses" class="mx-3">
                        <font-awesome :icon="['fas', 'phone-alt']" /> Contact
                    </Link>

                     <Link :href="route('aboutPage')" :class="navclasses" class="mx-3">
                        <font-awesome :icon="['fas', 'info']" /> About
                    </Link>
                    
                </div>
                
                <div class="lg:justify-end  gap-y-4 sm:flex-row flex md:flex-col lg:flex-row">
                    <a :class="navclasses" href="https://www.facebook.com/eze.mimistitches"><font-awesome :icon="['fab', 'facebook']" /> </a>
    
                   <a :class="navclasses" href="https://www.facebook.com/eze.mimistitches"><font-awesome :icon="['fab', 'instagram']" /> </a>
                   

                    <Link :href="route('home')" :class="navclasses">
                        <font-awesome :icon="['fab', 'twitter']" /> 
                    </Link>

                    <Link :href="route('home')" :class="navclasses" class="">
                        <font-awesome :icon="['fab', 'whatsapp']" /> 
                    </Link>

                     <Link :href="route('home')" :class="navclasses" class="ml-5">
                        <font-awesome :icon="['fas', 'search']" /> 
                    </Link>

                     <Link :href="route('home')" :class="navclasses">
                        <font-awesome :icon="['fas', 'cart-plus']" /> 
                    </Link>
                </div>
            </div>
        </div>
        
    </div>
</template>

<script>
import NavLink from '../../Jetstream/NavLink.vue'
import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
import {Link} from "@inertiajs/inertia-vue3";
export default {
    components: { NavLink, Link, JetAuthenticationCardLogo },
    props:{
        canMakePost : Boolean
    },
    data(){
        return {
            showSide:false,
            dropDown: false,
            navclasses : 'text-md text-white px-3 hover:text-gray-300 font-semibold lg:py-0 py-1'
        }
    }
}
</script>

<style scoped>
   
</style>