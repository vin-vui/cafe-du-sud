<template>
    <AppLayout title="Abonnés">
        <div class="bg-white shadow sticky top-0 z-40">
            <div class="py-2 px-4 sm:px-6 lg:px-8 flex justify-between">
                <h2 class="text-5xl font-alumni text-slate-800">Abonnés</h2>
            </div>
        </div>
        <div class="px-16 py-12">
            <div v-for="(emails, letter) in groupedNewsletters" :key="letter" class="mb-6">
                <h3 class="text-3xl font-bold text-gray-700 border-b">{{ letter }}</h3>
                <ul role="list" class="gap-y-2 gap-x-8 grid grid-cols-4 mt-4">
                    <li v-for="newsletter in emails" :key="newsletter.email" @click="destroy(newsletter)" class="relative rounded-xl border cursor-pointer flex justify-between gap-x-6 px-4 py-5 bg-white shadow hover:shadow-xl hover:scale-105 transition-all duration-200 ease-in-out sm:px-6 lg:px-8">
                        <div class="flex min-w-0 gap-x-4">
                            <div class="min-w-0 flex-auto">
                                <p class="text-2xl font-alumni leading-6 text-gray-900">
                                    {{ newsletter.email }}
                                </p>
                            </div>
                        </div>
                        <div class="flex shrink-0 items-center gap-x-4">
                            <svg class="h-5 w-5 flex-none text-gray-400" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="M9.17 4a3.001 3.001 0 0 1 5.66 0m5.67 2h-17m15.333 2.5l-.46 6.9c-.177 2.654-.265 3.981-1.13 4.79s-2.196.81-4.856.81h-.774c-2.66 0-3.991 0-4.856-.81c-.865-.809-.954-2.136-1.13-4.79l-.46-6.9M9.5 11l.5 5m4.5-5l-.5 5"/>
                            </svg>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </AppLayout>
</template>


<script>
import AppLayout from '@/Layouts/AppLayout.vue'

export default {
    components: {
        AppLayout,
    },

    props: ['newsletters', 'errors'],

    computed: {
        groupedNewsletters() {
            return this.newsletters.reduce((groups, newsletter) => {
                const firstLetter = newsletter.email.charAt(0).toUpperCase();
                if (!groups[firstLetter]) {
                    groups[firstLetter] = [];
                }
                groups[firstLetter].push(newsletter);
                return groups;
            }, {});
        }
    },

    methods: {
        destroy(newsletter) {
            const confirmed = window.confirm('Êtes-vous sûr de vouloir supprimer cet abonné ?');

            if (confirmed) {
                // L'utilisateur a confirmé la suppression, alors appelez la suppression ici
                this.$inertia.delete(route('newsletters.destroy', newsletter));
            } else {
                // L'utilisateur a annulé la suppression
                // Vous pouvez ajouter ici du code à exécuter si l'utilisateur annule la suppression
            }
        }
    }
}
</script>
