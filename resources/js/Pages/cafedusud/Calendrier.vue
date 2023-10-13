<template >
    <UserLayout>
                <!-- Titre + barre de filtre -->
                <div>
                    <h2 class="mt-20 text-6xl font-alumni text-center">Prochains événements</h2>
                    <!-- barre de filtres  -->
                    <div class="bg-red-100 w-4/12 ml-40 flex font-abeezee justify-between">
                        <button class="capitalize-first pr-20 hover:font-bold ">tout</button>
                        <button class="capitalize-first pr-20 hover:font-bold ">evenements</button>
                        <button class="capitalize-first pr-20 hover:font-bold ">présentations</button>
                        <button class="capitalize-first pr-20 hover:font-bold ">actualités</button>
                        <button class="capitalize-first pr-20 hover:font-bold ">articles</button>
                    </div>
                </div>

                <!-- cartes evenements -->
                <div class="flex justify-between mx-6 mt-20 bg-blue-200">
                    <div v-for="(article, index) in articles"
                        :class="['w-3/12 rounded-lg relative z-50', index === 0 ? 'after:bg-orange-400 after:rounded-lg after:absolute after:w-full after:h-full after:bottom-6 after:right-6 after:-z-50' : '', index === articles.length - 1 ? 'after:bg-violet-400 after:rounded-lg after:absolute after:w-full after:h-full after:top-6 after:left-6 after:-z-50' : '']">
                        <!-- date -->
                        <div class="absolute bg-[#CE7373] rounded-br-lg rounded-tl-lg font-abeezee text-white text-center">
                            {{ article.date_debut }} - {{ article.date_fin }}
                        </div>
                        <!-- image -->
                        <img class="w-full rounded-t-lg" :src="article.url">
                        <!-- titre -->
                        <h4 class="bg-white/50 backdrop-blur-sm font-Dela text-2xl relative bottom-8 text-center">
                            {{ article.titre.length > 16 ? article.titre.slice(0, 16) + '...' : article.titre }}
                        </h4>
                        <!-- contenu -->
                        <p class="font-abeezee px-2 bottom pt-4 pb-6 -mt-8 rounded-b-lg relative z-50 bg-red-200">
                            {{ article.contenu.length > 270 ? article.contenu.slice(0, 270) + '...' : article.contenu }}
                        </p>
                    </div>
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

