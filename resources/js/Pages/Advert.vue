<template>
   <app-layout title="Dashboard">
       <div class="py-12">
            <div class="mx-auto sm:px-6 lg:px-5 py-6">
                <form @submit.prevent="addAdvert()" enctype="multipart/form-data">
                    <div class="overflow-hidden">
                        <!-- first grid -->
                        <div class="bg-white shadow-md py-3 px-3 rounded-lg mx-auto max-w-2xl mb-7">
                            <div class="text-lg text-gray-900 font-semibold mb-3">
                                Add Advert
                            </div>
                            
                            <div class="mb-4">
                                <label for="" class="mb-3 font-semibold text-gray-900 text-lg">Upload Image</label>
                                <div class="bg-white rounded-lg py-2 px-2 shadow-lg mt-4">
                                    <input type="file" @input="image = $event.target.files[0]">
                                </div>
                            </div>
                          
                            <div class="text-center">
                                <button class="bg-blue-900 py-2 px-2 text-gray-100 text-center rounded-lg mx-auto w-44" type="submit">Add</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="bg-white shadow-md py-3 px-3 rounded-lg max-w-5xl mx-auto">
                    <div class="text-lg text-gray-900 font-semibold mb-3">
                        View all Images
                    </div>
                    
                    <div class="grid md:grid-cols-5 grid-cols-2 gap-3">
                        <div v-for="(slideAdvert, i) in advert" :key="i" class=""> 
                            <div>
                            <img :src="'/storage/advert/images/' + slideAdvert.image" alt="" class="rounded-lg shadow-sm w-full mx-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </app-layout>
</template>


<script>
    import AppLayout from '@/Layouts/AppLayout.vue'
   
    export default {
        components: {
            AppLayout,
        },
        props: {
        user: Object,
        advert: Array
        },

        data(){
            return{
                image: '',
                
            }
        },

        methods: {
            addAdvert(){
                const config = { headers: { 'content-type': 'multipart/form-data' }}
                let data = new FormData();
                data.append('image', this.image);

              
                axios.post(route('add.advert'), data, config)
                .then((res) => {
                    alert('Saved')
                    if (res.data.status == 'success') {
                        alert(res.data.msg)
                        this.image ='';
                        
                     } else {
                        alert(res.data.msg)
                    }
                })
                .catch((ex) => {
                    console.log(ex);
                })
            }
        }
    }
</script>