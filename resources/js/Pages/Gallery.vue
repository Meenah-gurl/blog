<template>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
      <div class="grid grid-cols-2 gap-5">
        <div>
          <form @submit.prevent="addImage" enctype="multipart/form-data">
            <div class="mb-3">
              <label for>Single Image</label>
            </div>
            <div class="mb-3">
              <input
                type="file"
                @input="form.image = $event.target.files[0]"
                @change="previewImage"
              />
            </div>

            <div>
              <div
                class="bg-white overflow-hidden shadow-xl sm:rounded-lg inline-block"
                v-for="(imgsrc, i) in ImagesBinary"
                :key="i"
              >
                <img :src="imgsrc" alt class="h-12 w-12 inline-block" />
              </div>
            </div>

            <div class="mb-3">
              <button>Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'
    import axios from 'axios'

    export default defineComponent({
        components: {
            AppLayout,
            Welcome,
        },
        props:{
            user:Array,
            gallery:Array
        },
        mounted(){

        },
        data(){
            return {
                form : this.$inertia.form({
                    image : '',
                }),
                form2 : this.$inertia.form({
                    images : [],
                    _method: 'put',
                }),
                ImagesBinary: [],
                ImagesBinarys: [],
            }
        },
        methods:{
            addImage(){
                let data = new FormData();
                data.append('image', this.form.image)
                axios.post(route('api.gallery.upload'), data)
                .then(res => {
                    console.log(res.data);
                })
            },
            addImages(){
                // let data = new FormData();
                // this.form2.images.forEach((image, i) => {
                //     data.append('images[' + i + ']', image)
                // });

                // console.log(this.form2);
                // axios.put(route('api.gallery.uploads'), data)
                // .then(res => {
                //     console.log(res.data);
                // })

                // Fake Images Upload
                this.form2.images.forEach((image, i) => {
                    let data = new FormData();
                    data.append('image', image)
                    axios.post(route('api.gallery.upload'), data)
                    .then(res => {
                        this.$inertia.visit('');
                    })
                    .catch(err => {
                        // err.response.data
                    })
                });
            },
            previewImage(e){
                // Single Image
                let file = e.target.files[0];
                let reader = new FileReader();
                reader.onload = (r_ev) => {
                    this.ImagesBinary.push(r_ev.target.result)
                }
                reader.readAsDataURL(file);
            },
            
        }
    })
</script>
