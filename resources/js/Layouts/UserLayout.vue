<script setup>
import { Head, Link, router } from '@inertiajs/vue3';
import Banner from '@/Components/Banner.vue';
import NavLink from '@/Components/NavLink.vue';


defineProps({
    title: String,
});

</script>

<template>
    <div>
        <Head :title="title" />

        <div class="">
            <nav class="backdrop-blur-sm bg-blanc-orange-1/60 w-full fixed top-0 z-50">
                <Banner />
                <div class="w-10/12 mx-auto py-2 flex justify-between">
                    <img src="/images/logo.png" alt="Logo de L'Atelier du Sud">

                    <!-- <NavLink :href="route('/')" :active="route().current('/')">
                        Accueil
                    </NavLink> -->
                    <a class="capitalize my-auto font-abeezee" href="/">accueil</a>
                    <a class="capitalize my-auto font-abeezee" href="/blog">blog</a>
                    <a class="capitalize my-auto font-abeezee" href="/calendrier">calendrier</a>
                    <a class="capitalize my-auto font-abeezee" href="/contact">contact</a>
                </div>
            </nav>

            





            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
