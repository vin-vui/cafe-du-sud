<template>
    <GuestLayout :title="title">
        <section
            class="bg-[url('https://images.unsplash.com/photo-1506784983877-45594efa4cbe?q=80&w=1768&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] h-screen bg-no-repeat bg-cover bg-center">
            <div class="absolute bottom-0 h-48 w-full bg-gradient-to-t from-white from-20%"></div>
            <div class="h-full flex items-center justify-center">
                <h1
                    class="mx-4 text-center font-alumni text-blanc-1 backdrop-blur-3xl bg-black/30 md:p-12 p-6 rounded-3xl -rotate-2 flex flex-col border-8 border-double border-blanc-1">
                    <span
                        class="md:text-9xl text-7xl bg-gradient-to-bl from-indigo-200 via-red-200 to-yellow-100 bg-clip-text text-transparent">Calendrier</span>
                    <span class="font-Dela md:text-3xl text-xl">nos prochains moments forts</span>
                </h1>
            </div>
        </section>

        <ShapeTop />

        <div class="bg-gradient-to-tl from-indigo-200 via-red-200 to-yellow-100">
            <div class="max-w-7xl sm:mx-auto py-48 mx-4">
                <!-- barre de filtres des tags  -->
                <!-- <div class="w-4/12 ml-40 flex font-abeezee justify-between">
                    <button class="capitalize-first pr-20 hover:font-bold">tout</button>
                    <button class="capitalize-first pr-20 hover:font-bold">evenements</button>
                    <button class="capitalize-first pr-20 hover:font-bold">présentations</button>
                    <button class="capitalize-first pr-20 hover:font-bold">actualités</button>
                    <button class="capitalize-first pr-20 hover:font-bold">articles</button>
                </div> -->
                <!-- cartes événements -->
                <div class="grid sm:grid-cols-3 grid-cols-1 gap-4">
                    <EventCard v-for="(article, index) in articles" :key="article.id"
                        :article="article"
                        :index="index"
                        :length="articles.length" />
                </div>
            </div>
        </div>

        <ShapeBottom />

        <Footer />

    </GuestLayout>
</template>

<script>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import EventCard from '@/Components/EventCard.vue'
import Footer from '@/Components/Footer.vue'
import ShapeTop from '@/Components/ShapeTop.vue'
import ShapeBottom from '@/Components/ShapeBottom.vue'

export default {
    components: {
        GuestLayout,
        EventCard,
        Footer,
        ShapeTop, ShapeBottom
    },

    props: {
        articles: {
            type: Array,
        },
    },

    data() {
        return {
            title: "Tous les événements",
        }
    },
}
</script>
