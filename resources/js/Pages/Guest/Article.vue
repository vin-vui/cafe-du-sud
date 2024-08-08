<template>
    <GuestLayout :title="article.title">

        <!-- Bouton retour -->
        <button class="flex group fixed top-24 left-8 z-50 bg-violet-4 text-blanc-1 py-2 px-4 rounded-xl hover:bg-violet-1" @click="back">
            <!-- Icône retour -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M5 12l14 0"></path>
                <path d="M5 12l6 6"></path>
                <path d="M5 12l6 -6"></path>
            </svg>
            <span class="ml-2">Retour</span>
        </button>

        <div class="relative bg-white">
            <div class="mx-auto max-w-7xl lg:flex lg:justify-between lg:px-8 xl:justify-end">
                <div class="lg:flex lg:w-1/2 lg:shrink lg:grow-0 xl:absolute xl:inset-y-0 xl:right-1/2 xl:w-1/2">
                    <div class="relative h-80 lg:-ml-8 lg:h-auto lg:w-full lg:grow xl:ml-0">
                        <img :src="article.url" :alt="article.title" class="absolute inset-0 h-full w-full bg-gray-50 object-cover">
                    </div>
                </div>
                <div class="px-6 lg:contents">
                    <div class="mx-auto max-w-2xl pb-24 pt-16 sm:pb-32 sm:pt-20 lg:ml-8 lg:mr-0 lg:w-full lg:max-w-lg lg:flex-none lg:pt-32 xl:w-1/2">
                        <div class="shadow-2xl">
                            <div class="font-abeezee text-blanc-1 bg-rouge-2 rounded-t-lg rounded-tl-lg px-6 py-2">
                                <!-- Si l'article est un billet de blog -->
                                <p v-if="article.type === 'post'">
                                    Billet de blog
                                </p>
                                <!-- Si l'article est un évenement avec seulement seule date_début -->
                                <p v-else-if="article.type === 'event' && article.end_date === null">
                                    Événement prévu le {{ moment(article.begin_date).format('DD/MM/YYYY') }}
                                </p>
                                <!-- Si l'article est un évenement avec date_début et end_date -->
                                <p v-else>
                                    Événement prévu du {{ moment(article.begin_date).format('DD/MM/YYYY') }} au {{ moment(article.end_date).format('DD/MM/YYYY') }}
                                </p>
                            </div>
                            <div :class="[
                                    'py-8 px-6',
                                    article.type === 'event' ? 'bg-orange-2' : 'bg-bleu-1'
                                ]">
                                <h1 class="font-alumni text-6xl">
                                    {{ article.title }}
                                </h1>
                                <p class="mt-6 font-abeezee text-gray-800 whitespace-pre-line">{{ article.content }}</p>
                            </div>
                            <div class="font-abeezee text-blanc-1 bg-rouge-2 rounded-b-lg px-6 py-2">
                                Publié le {{ moment(article.publication_date).format('DD/MM/YYYY') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>


<script>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import moment from 'moment'

export default {
    components: {
        GuestLayout,
    },

    props: {
        article: {
            type: Object,
        },
    },

    data() {
        return {
            moment: moment,
        }
    },

    methods: {
        back() {
            window.history.go(-1)
        },
    },
}
</script>
