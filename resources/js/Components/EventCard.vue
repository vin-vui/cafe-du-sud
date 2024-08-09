<template>
    <a :href="route(`${article.type}.show`, article)"
        :class="[
            'rounded-lg relative z-40 hover:scale-105 ease-in-out duration-200 group w-full',
            index === 0 ? 'after:bg-orange-2 after:rounded-lg after:absolute after:w-full after:h-full after:bottom-12 after:right-6 after:-z-50' : '',
            index === length - 1 ? 'after:bg-bleu-1 after:rounded-lg after:absolute after:w-full after:h-full after:top-6 after:left-6 after:-z-50' : '']">

        <div v-if="article.type === 'event'">
            <!-- date -->
            <!-- Si l’événement n'a qu'une seule date -->
            <div v-if="article.end_date === null"
                class="px-2 py-1 absolute bg-rouge-2 rounded-br-lg rounded-tl-lg font-abeezee text-white text-center">
                <span itemprop="date">
                    Prévu le {{ moment(article.begin_date).format('DD/MM/YYYY') }}
                </span>
            </div>
            <!-- Si l’événement a 2 dates -->
            <div v-else
                class="px-2 py-1 absolute bg-rouge-2 rounded-br-lg rounded-tl-lg font-abeezee text-blanc-1 text-center">
                <span itemprop="date">
                    Prévu du {{ moment(article.begin_date).format('DD/MM/YYYY') }} au {{ moment(article.end_date).format('DD/MM/YYYY') }}
                </span>
            </div>
        </div>

        <!-- image -->
        <img class="w-full sm:h-96 h-64 object-cover object-center rounded-t-lg " :src="article.url" alt="Image d'illustration de l'article">

        <!-- titre -->
        <h3 class="bg-black/70 backdrop-blur-sm whitespace-nowrap truncate w-full px-4 font-Dela sm:text-2xl py-4 relative bottom-16 text-center text-blanc-orange-1 group-hover:bg-violet-4">
            {{ article.title }}
        </h3>

        <!-- contenu -->
        <div class="font-abeezee leading-relaxed px-4 bottom-8 pt-4 pb-6 -mt-8 rounded-b-lg relative z-50 bg-white text-slate-900">
            <div v-if="article.content.length > 270">
                <P>{{ article.content.slice(0, 270) + '...' }}</P>
                <div class="flex items-center gap-1 justify-end text-violet-4 mt-3">
                    Lire la suite
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M16.15 13H5q-.425 0-.712-.288T4 12t.288-.712T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.312t.712.287L19.3 11.3q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7z"/></svg>
                </div>
            </div>
            <div v-else>
                <p>{{ article.content }}</p>
            </div>
        </div>
    </a>
</template>

<script>
import moment from 'moment'

export default {
    props: {
        article: {
            type: Object,
        },
        index: {
            type: Number,
        },
        length: {
            type: Number,
        },
    },

    data() {
        return {
            moment: moment,
        }
    },
}
</script>
