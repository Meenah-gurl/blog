<template>
    <div class="mt-5 h-full">
          <div class="rounded-r-lg  bg-gray-100 py-4 px-3">
            <div>
              <div class="inline-block mb-6 mt-3">
              <div class="inline-block rounded-sm text-white bg-blue-700 w-5 text-center py-2 px-1"></div>
              <div class="inline-block ml-3">Mina</div>
            </div>
            <div class="bg-gray-400 rounded-lg py-2 px-2 mb-4">njxdcjdnkjds</div>

            <ul>
              <li>
                <Link
                  class="px-4 py-2 block border-b border-gray-200 active"
                  :href="route('dashboard')">
                  <font-awesome
                    :icon="['fas', 'tachometer-alt']"
                    class="text-blue-700 hover:text-blue-800 mr-3 inline-block align-middle"/>
                  <span class="inline-block align-middle text-gray-600 font-medium">Dashboard</span>
                </Link>
              </li>

              <li>
                <Link
                  class="px-4 py-2 block border-b border-gray-200 "
                  :href="route('dashboard')">
                  <font-awesome
                    icon="plus"
                    class="text-blue-700 hover:text-blue-800 mr-3 inline-block align-middle"/>
                  <span class="inline-block align-middle text-gray-600 font-medium">Categories</span>
                </Link>
              </li>

              <li>
                <Link
                  class="px-4 py-2 block border-b border-gray-200"
                  :href="route('dashboard')">
                  <font-awesome
                    icon="plus"
                    class="text-blue-700 hover:text-blue-800 mr-3 inline-block align-middle"/>
                  <span class="inline-block align-middle text-gray-600 font-medium">Add post</span>
                </Link>
              </li>

              <li>
                <Link
                  class="px-4 py-2 block border-b border-gray-200"
                  :href="route('dashboard')">
                  <font-awesome
                    icon="tachometer-alt"
                    class="text-blue-700 hover:text-blue-800 mr-3 inline-block align-middle"/>
                  <span class="inline-block align-middle text-gray-600 font-medium">Published</span>
                </Link>
              </li>

              <li>
                <Link
                  class="px-4 py-2 block border-b border-gray-200"
                  :href="route('dashboard')">
                  <font-awesome
                    icon="tachometer-alt"
                    class="text-blue-700 hover:text-blue-800 mr-3 inline-block align-middle"/>
                  <span class="inline-block align-middle text-gray-600 font-medium">Published</span>
                </Link>
              </li>
            </ul>
          </div>

          <!--User profile-->
          <div class="py-12 px-2 rounded-2xl mt-5 bg-blue-700 shadow-2xl h-60">
            <div class="rounded-full bg-white w-16 h-16 mx-auto text-center">
              <img :src="user.profile_photo_path" alt class="rounded-full w-16 h-16" />
            </div>
            <p class="capitalize text-center text-white">{{ user.firstname }} {{ user.lastname }}</p>
            <p class="text-center text-white">{{ user.level }}</p>
  
            <div class="mt-7 cursor-pointer inline-block">
              <div
                class="rounded-lg text-gray-700 inline-block bg-white px-2 py-1 text-xs shadow-lg  hover:bg-blue-600 hover:text-white"
                  @click="displayModal()">Upload Image
              </div>
              <div class="ml-20 inline-block">
                <div class="text-center text-white px-2 py-1 mb-7 inline-block">
                  <Link href="" class="inline-block" @click.prevent="logout()"> 
                    <font-awesome icon="sign-out-alt" class="text-red-600 hover:text-white mr-3  align-middle" size='1x'/>
                  </Link>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

        
    </div>
      <!-- Modal -->
      <div class="mx-auto text-center">
        <modal-component :prop-show="showModal" :prop-size="'sm'" @closeModal="closeModal()">
          <div class="rounded-lg">
            <form action>
              <label for="picture" class="mb-2">Choose a profile picture</label>
              <input type="file" class="bg-gray-200 block mb-5 mt-3 "/>
  
              <button class="bg-green-700 rounded-lg text-white block py-1 px-1 ml-40 mb-3" type="submit">
                  Upload
              </button>
            </form>
          </div>
        </modal-component>
      </div>
  </template>
  
  
  <script>
  import { defineComponent } from "vue";
  import ModalComponent from "../Inc/ModalComponent";
  import { Link } from '@inertiajs/inertia-vue3';
  
  export default defineComponent({
    components: {
      Link,
      ModalComponent,
    },
    props:{
      Array: Object
    },
    data() {
      return {
        showModal: false,
        user:this.$page.props.user,
      };
    },
  
    methods: {
      displayModal() {
        this.showModal = true;
      },
      closeModal() {
        this.showModal = false;
      },
      logout() {
        axios.post(route("logout")).then(() => {
          this.$inertia.visit(route("login"), { method: "get" });
        });
      },
    },
  });
  </script>

  <style scoped>
    ul li {
        list-style-type: none;
    }
  </style>