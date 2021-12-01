<template>
    <app-layout title="Dashboard">
        <template #header>
            <div class="fixed">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Dashboard
                </h2>
            </div>
        </template>
        
        <div class="py-12">
            <div class="mx-auto sm:px-6 lg:px-5">
                <div class="overflow-hidden">
                   
                dfszfeaesrawetq34e5q43
                </div>
                
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'

    export default {
        components: {
            AppLayout,
            Welcome,
        },
        props: {
        user: Object,
        },
    }
</script>
