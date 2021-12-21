<template>
   <app-layout title="Dashboard">
       <div class="py-12 px-5">
          <div class="grid lg:grid-cols-5 md:grid-cols-3 grid-cols-2 gap-4 py-3">
            <!-- first grid -->
            <div class="bg-white rounded-lg shadow-lg px-3 py-3 mx-auto" v-for="(item, i) in gallery " :key="i">
              <div class="mx-auto mb-3">
                  <img :src="'/storage/categories/images/' + item.image" alt="" class="rounded-lg shadow-sm h-60 w-full mx-auto">
              </div>
              <div class="flex gap-4">
                  <div class="md:mx-auto flex-grow">
                      <p>{{ item.style }}</p>
                  </div>
                  <div class="flex-initial flex-shrink-0"> 
                      <button type="submit" class="bg-red-500 text-gray-100 rounded-lg px-2" @click="deleteImg(item.id)">Delete</button>
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
        gallery: Array,
        },
        methods: {
            deleteImg(id){
               if(confirm('Are you sure you want to delete this image')){
                   axios.post(route('delete_img'), {id: id})
                    .then((res) => {
                        alert('Success');
                        window.location.reload()
                    })
                    .catch((error) => {
                        this.handleError(error);
                    });
               }else{
                   alert('Keep Image')
               }
            },
            handleError(errorsObj){
                alert( 'An Unexpected Error Occured!');
            }, 
            
        },
       
    }
</script>
