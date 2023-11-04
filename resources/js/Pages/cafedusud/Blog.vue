<template >
    <UserLayout>
        <!-- title + barre de filtre -->
        <div>
            <h2 class="mt-20 text-6xl font-alumni text-center">Nos articles</h2>
            <!-- barre de filtres  -->
            <div class="w-4/12 ml-40 flex font-abeezee justify-between">
                <button class="capitalize-first hover:border-b hover:border-violet-1">tout</button>
                <button class="capitalize-first hover:border-b hover:border-violet-1">evenements</button>
                <button class="capitalize-first hover:border-b hover:border-violet-1">présentations</button>
                <button class="capitalize-first hover:border-b hover:border-violet-1">actualités</button>
                <button class="capitalize-first hover:border-b hover:border-violet-1">articles</button>
            </div>

            <!-- cartes blog -->
            <div class="lg:flex flex-wrap justify-between mx-6 mt-20">
                <a v-for="(article, index) in articles" :key="article.id" :href="`/articles/${article.id}`"
                    :class="['w-3/12 rounded-lg relative z-40 mx-8 my-4 hover:scale-105 ease-in-out duration-100 group', index === 0 ? 'after:bg-orange-2 after:rounded-lg after:absolute after:w-full after:h-full after:bottom-6 after:right-6 after:-z-50' : '', index === articles.length - 1 ? 'after:bg-jaune-1 after:rounded-lg after:absolute after:w-full after:h-full after:top-6 after:left-6 after:-z-50' : '']">
                    <!-- image -->
                    <img class="w-full rounded-t-lg" :src="article.url">
                    <!-- title -->
                    <h4 class="bg-white/30 backdrop-blur-sm font-Dela text-2xl relative bottom-16 text-center text-blanc-orange-1 group-hover:bg-violet-2/90"
                        :class="article.title.length < 25 ? 'py-4' : ''">
                        {{ article.title.length > 37 ? article.title.slice(0, 47) + '...' : article.title }}
                    </h4>
                    <!-- content -->
                    <p
                        class="whitespace-pre-line font-abeezee px-2 bottom-8 pt-4 pb-6 -mt-8 rounded-b-lg relative z-50 lg:bg-blanc-bleu-1 bg-red-100 mb-20 lg:mb-0">
                        {{ article.content.length > 270 ? article.content.slice(0, 270) + '...' : article.content }}
                    </p>
                </a>
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
