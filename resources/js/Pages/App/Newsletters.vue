<template>
    <AppLayout>
        <div class="w-6/12 bg-slate-300 mx-auto">
            <div v-for="newsletter in newsletters" class="flex justify-between border-b-2 border-b-slate-950 py-4 px-2">
                <p> {{ newsletter.email }} </p>
                <button @click="destroy(newsletter)">supprimer</button>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue'
import { capitalize } from 'vue';

export default {
    components: {
        AppLayout,
    },

    props: ['newsletters', 'errors'],

    methods: {
    destroy(newsletter) {
            const confirmed = window.confirm('Êtes-vous sûr de vouloir supprimer cet email ?');

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
