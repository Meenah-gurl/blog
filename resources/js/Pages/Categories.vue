<template>
   <app-layout title="Dashboard">
       <div class="py-12">
            <div class="mx-auto sm:px-6 lg:px-5 py-6">
                <form @submit.prevent="addImages()" enctype="multipart/form-data">
                    <div class="overflow-hidden grid md:grid-cols-2 grid-cols-1 gap-5">
                        <!-- first grid -->
                        <div class="bg-white shadow-md  py-3 px-3 rounded-lg">
                            <div class="text-lg text-gray-900 font-semibold mb-3">
                                Add Lace Styles
                            </div>
                            
                            <div class="mb-4">
                                <label for="" class="mb-3 font-semibold text-gray-900 text-lg">Upload Image</label>
                                <div class="bg-white rounded-lg py-2 px-2 shadow-lg mt-4">
                                    <input type="file" @input="image = $event.target.files[0]" @change="previewImage">
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label for="" class="mb-3 font-semibold text-gray-900 text-lg">Style Type</label>
                                <div class="bg-white rounded-lg py-2 px-2 shadow-lg mt-4">
                                    <select v-model="style" class="w-full outline-none border-none">
                                        <option value="" selected disabled>Select Category</option>
                                        <option value="Lace">Lace</option>
                                        <option value="Ankara">Ankara</option>
                                        <option value="Children">Children</option>
                                        <option value="Asoebi">Asoebi</option>
                                        <option value="Trends">Trends</option>
                                        <option value="Makeover">Makeover</option>
                                        <option value="Advert">Advert</option>
                                        <option value="HairStyles">HairStyles</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label for="" class="mb-3 font-semibold text-gray-900 text-lg">Description</label>
                                <div class="py-2 mt-1">
                                   <textarea v-model="description" rows="3" class="w-full"></textarea>
                                </div>
                            </div>
                                
                            <div>
                                <button class="bg-blue-900 py-2 px-2 text-gray-100 text-center rounded-lg mx-auto w-44" type="submit">Add</button>
                            </div>
                        </div>

                        <div class="">
                            <div class="text-lg text-gray-900 font-semibold mb-3">
                                Preview Image
                            </div>
                                <img :src="preview" alt="No image" class="max-w-full max-h-72 mx-auto">
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
                style: '',
                preview: '/storage/categories/images/',
            }
        },

        methods: {
            addImages(){
                const config = { headers: { 'content-type': 'multipart/form-data' }}
                let data = new FormData();
                data.append('image', this.image);
                data.append('description', this.description);
                data.append('style', this.style);

                // axios.post(route('api.add_book'), data, config)
                axios.post(route('add.gallery'), data, config)
                .then((res) => {
                    alert('Saved')
                    if (res.data.status == 'success') {
                        alert(res.data.msg)
                        this.description ='';
                        this.image ='';
                        this.style ='';
                     } else {
                        alert(res.data.msg)
                    }
                })
                .catch((ex) => {
                    console.log(ex);
                })
            },

            previewImage(e){
                let file = e.target.files[0];
                let reader = new FileReader();
                reader.onload = (r_ev) => {
                    this.preview = r_ev.target.result;
                }
                reader.readAsDataURL(file);
            },
        }
    }
</script>