<template >
    <UserLayout>
                <!-- Titre + barre de filtre -->
                <div>
                    <h2 class="mt-20 text-6xl font-alumni text-center">Prochains événements</h2>
                    <!-- barre de filtres  -->
                    <div class="w-4/12 ml-40 flex font-abeezee justify-between">
                        <button class="capitalize-first pr-20 hover:font-bold">tout</button>
                        <button class="capitalize-first pr-20 hover:font-bold">evenements</button>
                        <button class="capitalize-first pr-20 hover:font-bold">présentations</button>
                        <button class="capitalize-first pr-20 hover:font-bold">actualités</button>
                        <button class="capitalize-first pr-20 hover:font-bold">articles</button>
                    </div>
                </div>

                <!-- cartes evenements -->
                <div class="lg:flex flex-wrap justify-between mx-6 mt-20">
                    <a v-for="(article, index) in articles"  :key="article.id" :href="`/articles/${article.id}`"
                        :class="['w-3/12 rounded-lg relative z-50 mx-8 my-4 hover:scale-105 ease-in-out duration-100 group', index === 0 ? 'after:bg-orange-2 after:rounded-lg after:absolute after:w-full after:h-full after:bottom-6 after:right-6 after:-z-50' : '', index === articles.length - 1 ? 'after:bg-violet-2 after:rounded-lg after:absolute after:w-full after:h-full after:top-6 after:left-6 after:-z-50' : '']">
                        <!-- date -->

                        <!-- Si l'evenement n'a qu'une seule date -->
                        <div v-if="article.date_fin === null " class="px-2 py-1 absolute bg-rouge-1 rounded-br-lg rounded-tl-lg font-abeezee text-white text-center">
                           le {{ article.date_debut }}
                        </div>
                        <!-- Si l'evenement a 2 dates -->
                        <div v-else  class="px-2 py-1 absolute bg-rouge-1 rounded-br-lg rounded-tl-lg font-abeezee text-white text-center">
                           du {{ article.date_debut }} au {{ article.date_fin }}
                        </div>



                        <!-- image -->
                        <img class="w-full rounded-t-lg" :src="article.url">
                        <!-- titre -->
                        <h4 class="bg-white/30 backdrop-blur-sm font-Dela text-2xl relative bottom-8 text-center text-blanc-orange-1 group-hover:bg-violet-2/90">
                            {{ article.titre.length > 16 ? article.titre.slice(0, 16) + '...' : article.titre }}
                        </h4>
                        <!-- contenu -->
                        <p class="font-abeezee px-2 bottom pt-4 pb-6 -mt-8 rounded-b-lg relative z-50 bg-blanc-bleu-1 ">
                            {{ article.contenu.length > 270 ? article.contenu.slice(0, 270) + '...' : article.contenu }}
                        </p>
                    </a>
                </div>
    </UserLayout>
</template>

<script>
import UserLayout from '@/Layouts/UserLayout.vue'

export default {
    props: ['articles'],

    components: {
        UserLayout,
    },
}
</script>

