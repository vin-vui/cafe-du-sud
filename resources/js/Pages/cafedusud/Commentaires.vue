<template>
    <AppLayout>
        <!-- INDEX COMMENTAIRES -->
        <div v-for="commentaire in commentaires" class="w-1/4 justify-evenly">
            <div class=" bg-cyan-200 text-center mx-4 my-2">
                <p> {{ commentaire.pseudo }} </p>
                <p> {{ commentaire.date_publication }} </p>
                <p> {{ commentaire.statut }} </p>
                <p> {{ commentaire.contenu }} </p>

                <button @click="show(commentaire)" class="rounded bg-cyan-600 px-2 py-1">SHOW</button>
                <button @click="edit(commentaire)" class="rounded bg-yellow-400 px-2 py-1">EDIT</button>
            </div>
        </div>
        <button @click="this.isOpenCreate = true" class="rounded bg-green-500 px-2 py-1">ADD</button>

        <!-- MODALE SHOW -->
        <div v-if="isOpenShow" class="fixed top-0 bg-black/20 w-full h-full justify-center flex backdrop-blur-md">
            <div class="bg-cyan-100/50">
                <button @click="isOpenShow = false" class="bg-red-700 mr-auto">CLOSE</button>
                <div>
                    <p> {{ selectedCommentaire.pseudo }} </p>
                    <p> {{ selectedCommentaire.date_publication }} </p>
                    <p> {{ selectedCommentaire.statut }} </p>
                    <p> {{ selectedCommentaire.contenu }} </p>
                </div>
                <button @click="destroy(selectedCommentaire)" class="rounded bg-red-500 px-2 py-1">DELETE</button>
            </div>
        </div>

        <!-- MODALE CREATE -->
        <div v-if="isOpenCreate" class="fixed top-0 bg-black/20 w-full h-full justify-center flex backdrop-blur-md">
            <div>
                <button @click="isOpenCreate = false" class="bg-red-700 mr-auto">CLOSE</button>
                <button @click="create(form_create)" class="rounded bg-green-500 px-2 py-1">CREATE</button>

                <div>
                    <div v-if="errors.pseudo" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.pseudo }}</div>
                    <label>Pseudo</label>
                    <input v-model="form_create.pseudo" type="text">
                </div>

                <div>
                    <label>Statut</label>
                    <div v-if="errors.statut" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.statut }}
                    </div>

                    <select v-model="form_create.statut">
                        <option value="en attente">En attente</option>
                        <option value="en ligne">En ligne</option>
                    </select>
                </div>

                <div>
                    <div v-if="errors.contenu" class="text-red-700 text-lg mx-auto flex justify-center">{{
                        errors.contenu }}</div>
                    <label>Contenu</label>
                    <input v-model="form_create.contenu" type="text">
                </div>


                <div>
                    <div v-if="errors.date_publication" class="text-red-700 text-lg mx-auto flex justify-center">{{
                        errors.date_publication }}</div>
                    <label>Date de publication</label>
                    <input v-model="form_create.date_publication" type="date">
                </div>

            </div>
        </div>

        <!-- MODALE EDIT -->
        <div v-if="isOpenEdit" class="fixed top-0 bg-black/20 w-full h-full justify-center flex backdrop-blur-md">
            <button @click="isOpenEdit = false" class="bg-red-700 mr-auto">CLOSE</button>
            <div>
                <div>
                    <label>Pseudo</label>
                    <input v-model="form_update.pseudo" type="text">
                </div>

                <div>
                    <label>Date de publication</label>
                    <input v-model="form_update.date_publication" type="date">
                </div>

                <div>
                    <label>Statut</label>
                    <select v-model="form_update.statut">
                        <option value="en attente">En attente</option>
                        <option value="en ligne">En ligne</option>
                    </select>
                </div>

                <div>
                    <label>Contenu</label>
                    <input v-model="form_update.contenu" type="text">
                </div>
            </div>
            <button @click="update(selectedCommentaire)" class="rounded bg-amber-500 px-2 py-1">UPDATE</button>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue'

export default {
    components: {
        AppLayout,
    },

    props: ['commentaires', 'errors',],

    data() {
        return {
            isOpenShow: false,
            isOpenCreate: false,
            isOpenEdit: false,
            form_create: {
                pseudo: null,
                statut: null,
                date_publication: null,
                contenu: null,
            },
            form_update: {
                pseudo: this.selectedCommentaire ? this.selectedCommentaire.pseudo : '',
                statut: this.selectedCommentaire ? this.selectedCommentaire.statut : '',
                date_publication: this.selectedCommentaire ? this.selectedCommentaire.date_publication : '',
                contenu: this.selectedCommentaire ? this.selectedCommentaire.contenu : '',
            }
        }
    },

    methods: {
        show(commentaire) {
            this.selectedCommentaire = commentaire;
            this.isOpenShow = true;
        },

        edit(commentaire) {
            this.selectedCommentaire = commentaire;
            this.isOpenEdit = true;
        },

        update(commentaire) {
            this.$inertia.put(route('commentaires.update', commentaire), this.form_update);
            this.isOpenEdit = false;
        },

        create() {
            this.$inertia.post(route('commentaires.store'), this.form_create);
        },

        destroy(commentaire) {
            this.$inertia.delete(route('commentaires.destroy', commentaire))
        },
    }
}
</script>
