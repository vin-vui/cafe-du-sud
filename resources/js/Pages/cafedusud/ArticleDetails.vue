<template>
    <UserLayout>
        <!-- Bouton retour -->
        <button class="flex mt-20 lg:ml-12 group fixed z-50 " @click="Retour()">
            <!-- Icone retour -->
            <svg xmlns="http://www.w3.org/2000/svg" class="group-hover:stroke-violet-1" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M5 12l14 0"></path>
                <path d="M5 12l6 6"></path>
                <path d="M5 12l6 -6"></path>
            </svg>
            <span class="ml-2 hidden lg:block">Retour</span>
        </button>

        <!-- Carte article détails -->
        <div
            class="lg:w-7/12 mx-auto flex-col relative after:bg-orange-2 after:rounded-lg lg:after:absolute after:w-full after:h-full after:top-6 after:left-6 after:-z-50">
            <!-- Partie haute image / date -->
            <div class="flex-col relative text-center">
                <img :src="article.url" class="w-full mx-auto rounded-t-xl" />
                <div class="flex justify-center">
                    <!-- Si l'article est un billet de blog -->
                    <p v-if="article.type === 'blog'"
                        class="font-abeezee text-blanc-1 bottom-0 absolute bg-rouge-1 rounded-t-lg rounded-tl-lg px-6 py-2">
                        Billet de blog
                    </p>

                    <!-- Si l'article est un évenement avec seulement seule date_début -->
                    <p v-else-if="article.type === 'evenement' && article.end_date === null"
                        class="font-abeezee text-blanc-1 bottom-0 absolute bg-rouge-1 rounded-t-lg rounded-tl-lg px-6 py-2">
                        Événement prévu le {{ moment(article.begin_date).format('DD/MM/YYYY') }}
                    </p>

                    <!-- Si l'article est un évenement avec date_début et end_date -->
                    <p v-else
                        class="font-abeezee text-blanc-1 bottom-0 absolute bg-rouge-1 rounded-t-lg rounded-tl-lg px-6 py-2">
                        Événement prévu du {{ moment(article.begin_date).format('DD/MM/YYYY') }} au {{ moment(article.end_date).format('DD/MM/YYYY') }}
                    </p>

                </div>
            </div>

            <!-- Partie basse / Texte -->
            <div class="bg-orange-3 rounded-b-xl">
                <p class="justify-center font-abeezee flex">
                    Publié le {{ moment(article.publication_date).format('DD/MM/YYYY') }}
                </p>
                <h2 class="justify-center font-alumni flex text-6xl text-center ">
                    {{ article.titre }}
                </h2>
                <p class="w-10/12 flex mx-auto font-abeezee whitespace-pre-line py-8">{{ article.content }}</p>
            </div>
        </div>
    </UserLayout>
</template>


<script>
import UserLayout from '@/Layouts/UserLayout.vue'
import moment from 'moment'

export default {
    props: ['article'],

    data: () => ({
      moment: moment
   }),

    methods: {
        Retour() {
            window.history.go(-1)
        },
    },

    components: {
        UserLayout,
    },
}
</script>
