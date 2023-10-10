<script setup>
import { Head, } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <UserLayout>

    <!-- Section 1  -->
    <div class="bg-[url('/images/bgImgLanding.png')] h-screen bg-no-repeat bg-cover bg-center flex">
        <h1 class="mx-auto mt-96 text-center font-alumni text-8xl text-white">Les Casas <br> atelier du sud - café du sud</h1>

    </div>

    <!-- Section 2 -->
    <div class="h-screen bg-red-300">
    </div>

    <!-- Section 3 -->
    <div class="h-screen bg-blue-300">
    </div>
    </UserLayout>
</template>


<script>
import UserLayout from '@/Layouts/UserLayout.vue'

</script>
