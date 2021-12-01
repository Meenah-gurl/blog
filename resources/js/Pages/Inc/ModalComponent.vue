<template>
    <transition name="fade">
        <div v-if="showModal" id="modal" class="h-full fixed top-0 left-0 w-full flex content-center flex-wrap">
            <!-- Modal Content -->
            <div :class="'modal-'+propSize" class="bg-white modal-dialog shadow rounded mx-auto flex flex-col w-full  mt-8 transform transition-all" style="max-height:96vh;">
                <div>
                    <button class="float-right mt-4 mr-6 font-light" @click="closeModal" >
                        <font-awesome icon="times" class="font-light" style="font-size:1.3rem; font-weight:normal;" />
                    </button>
                </div>
                <div class="modal-body py-3 px-4 overflow-y-auto transform transition-all"> 
                    <slot></slot>
                </div>
            </div>
        </div>
  </transition>
</template>

<script>
export default {
    name: 'ModalComponent',
    props: {
        propShow: Boolean,
        propSize: {
            default: 'md',
            type: String
        }
    },
    data() {
        return {
        showModal: false,
        };
    },
    watch: {
        propShow: function (state) {
        this.showModal = state;
        },
    },
    methods: {
        closeModal(){
            this.$emit('closeModal')
        }
    },
};
</script>

<style scoped>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to { /* .fade-leave-active below version 2.1.8 */
        opacity: 0;
    }
    #modal {
        z-index: 1000;
        background-color: rgba(0, 0, 0, 0.5);
        /* display: none; */
        align-items: center;
    }
    .modal-dialog{
        max-width: 95%;
    }
    .modal-lg{
        width: 900px;
    }
    .modal-md{
        width: 640px;
    }
    .modal-sm{
        width: 400px;
    }
</style>