<template>
   <app-layout title="Dashboard">
       <div class="py-12">
            <div class="mx-auto sm:px-6 lg:px-5 py-6">
                <form @submit.prevent="addShop()" enctype="multipart/form-data">
                    <div class="overflow-hidden grid md:grid-cols-2 grid-cols-1 gap-5">
                        <!-- first grid -->
                        <div class="bg-white shadow-md  py-3 px-3 rounded-lg">
                            <div class="text-lg text-gray-900 font-semibold mb-3">
                                Add Item for Sale
                            </div>
                            
                            <div class="mb-4">
                                <label for="" class="mb-3 font-semibold text-gray-900 text-lg">Upload Image</label>
                                <div class="bg-white rounded-lg py-2 px-2 shadow-lg mt-4">
                                    <input type="file" @input="image = $event.target.files[0]">
                                </div>
                            </div>
                            
                            <div>
                                <label for="" class="mb-3 font-semibold text-gray-900 text-lg">Description</label>
                                <div class="py-2 mt-1">
                                   <textarea v-model="description" rows="3" class="w-full"></textarea>
                                </div>
                            </div>

                            <div>
                                <label for="" class="mb-3 font-semibold text-gray-900 text-lg">Price</label>
                                <div class="py-2 mt-1">
                                  <input type="text" class="bg-white text-gray-900 rounded-lg py-2 px-2 shadow-lg border-none w-full" v-model="price" placeholder="Enter fixed amount">
                                </div>
                            </div>
                                
                            <div>
                                <button class="bg-blue-900 py-2 px-2 text-gray-100 text-center rounded-lg mx-auto w-44" type="submit">Add</button>
                            </div>
                        </div>

                        <div class="bg-white shadow-md py-3 px-3 rounded-lg">
                            <div class="text-lg text-gray-900 font-semibold mb-3">
                                Preview Image
                            </div>
                            
                            <div>
                                
                            </div>
                        </div>
                    </div>
                    
                    
                </form>
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
        },

        data(){
            return{
                image: '',
                description: '',
                price: '',
            }
        },

        methods: {
            addShop(){
                const config = { headers: { 'content-type': 'multipart/form-data' }}
                let data = new FormData();
                data.append('image', this.image);
                data.append('description', this.description);
                data.append('price', this.price);

                // axios.post(route('api.add_book'), data, config)
                axios.post(route('add.shop'), data, config)
                .then((res) => {
                    alert('Saved')
                    if (res.data.status == 'success') {
                        alert(res.data.msg)
                        this.description ='';
                        this.image ='';
                        this.price = '';
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