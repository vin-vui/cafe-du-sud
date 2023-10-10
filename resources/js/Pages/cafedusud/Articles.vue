<template>
    <AppLayout>
        <Navbar />

        <!-- INDEX ARTICLES -->
        <div class="flex flex-row flex-wrap">
            <div v-for="article in articles" class="w-1/4 justify-evenly">
                <!-- ARTICLE CARD -->
                <div class="bg-slate-200 shadow-md border-2 border-slate-300 rounded-xl mx-4 my-2">
                    <!-- CARD CONTENT -->
                    <div class="mx-4 my-2 flex flex-col">
                        <div class="flex justify-between">
                            <h3 class="text-2xl text-slate-700 text-center"> {{ article.titre }} </h3>
                            <!-- EDIT BUTTON -->
                            <button @click="edit(article)" class="">
                                <svg class="feather feather-edit" fill="none" height="24" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                    width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                                </svg>
                            </button>
                        </div>



                        <p class="text-slate-700 mt-3"> {{ article.contenu }} </p>
                        <span class=" mt-3"> {{ article.type }} </span>
                        <img :src=article.url class="h-">
                        <!-- <p class="mt-3"> {{ article.url }} </p> -->
                        <span class="mt-3"> du {{ article.date_debut }} au {{ article.date_fin }} </span>

                        <div class="flex gap-2">
                            <div v-for="tag in article.tags"
                                class="bg-yellow-50 px-2 py-1 text-yellow-700 ring-1 ring-inset ring-yellow-600/30 rounded text-md ">
                                {{ tag.nom }}
                            </div>
                        </div>

                        <!-- STATUS + DATE -->
                        <div class="flex justify-between">
                            <span
                                :class="{ 'text-green-700': article.statut === 'en ligne', 'text-yellow-600': article.statut === 'en attente' }">
                                {{ article.statut }}</span>

                            <span class="flex"> {{ article.date_publication }} </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- MODALE CREATE -->
        <div v-if="isOpenCreate" class="fixed top-0 bg-black/20 w-full h-full justify-center  flex backdrop-blur-md">
            <div>
                <button @click="isOpenCreate = false" class="bg-red-700 mr-auto">CLOSE</button>
                <div>
                    <div v-if="errors.titre" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.titre }}
                    </div>
                    <label>Titre</label>
                    <input v-model="form_create.titre" type="text">
                </div>

                <div>
                    <div v-if="errors.contenu" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.contenu }}
                    </div>
                    <label>Contenu</label>
                    <input v-model="form_create.contenu" type="text">
                </div>

                <div>
                    <div v-if="errors.type" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.type }}</div>
                    <label>Type</label>
                    <select v-model="form_create.type">
                        <option value="evenement">Évenement</option>
                        <option value="actualite">Actualité</option>
                    </select>
                </div>

                <div>
                    <div v-if="errors.url" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.url }}</div>
                    <label>url</label>
                    <input v-model="form_create.url" type="url">
                </div>

                <div>
                    <div v-if="errors.date_publication" class="text-red-700 text-lg mx-auto flex justify-center">{{
                        errors.date_publication }}</div>
                    <label>Date de publication</label>
                    <input v-model="form_create.date_publication" type="date">
                </div>

                <div>
                    <div v-if="errors.date_debut" class="text-red-700 text-lg mx-auto flex justify-center">{{
                        errors.date_debut }}</div>
                    <label>Date de début</label>
                    <input v-model="form_create.date_debut" type="date">
                </div>

                <div>
                    <div v-if="errors.date_fin" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.date_fin
                    }}</div>
                    <label>Date de fin</label>
                    <input v-model="form_create.date_fin" type="date">
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
                <label>tags</label>
                <div v-for="tag in tags">
                    <input type="checkbox" v-model="form_create.tags" :value="tag.id">
                    <label>{{ tag.nom }}</label>
                </div>
            </div>
            <button @click="create(form_create)" class="rounded bg-green-500 px-2 py-1">CREATE</button>
        </div>

        <!-- MODALE EDIT -->
        <div v-if="isOpenEdit" class="fixed top-0 bg-black/20 w-full h-full justify-center flex backdrop-blur-md">
            <button @click="isOpenEdit = false" class="bg-red-700 mr-auto">CLOSE</button>
            <div>
                <div>
                    <label>Titre</label>
                    <input v-model="form_update.titre" type="text">
                </div>

                <div>
                    <label>Contenu</label>
                    <input v-model="form_update.contenu" type="text">
                </div>

                <div>
                    <label>Type</label>
                    <select v-model="form_update.type">
                        <option value="evenement">Évenement</option>
                        <option value="actualite">Actualité</option>
                    </select>
                </div>

                <div>
                    <label>url</label>
                    <input v-model="form_update.url" type="url">
                </div>

                <div>
                    <label>Date de publication</label>
                    <input v-model="form_update.date_publication" type="date">
                </div>

                <div>
                    <label>Date de début</label>
                    <input v-model="form_update.date_debut" type="date">
                </div>

                <div>
                    <label>Date de fin</label>
                    <input v-model="form_update.date_fin" type="date">
                </div>

                <div>
                    <label>Statut</label>
                    <select v-model="form_update.statut">
                        <option value="en attente">En attente</option>
                        <option value="en ligne">En ligne</option>
                    </select>
                </div>

                <div>
                    <label>tags</label>
                    <div v-for="tag in tags">
                        <input type="checkbox" v-model="form_update.tags" :value="tag.id" :id="tag.id">
                        <label :for="tag.id">{{ tag.nom }}</label>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue'
import Navbar from '@/Components/Navbar.vue'

export default {
    components: {
        AppLayout, Navbar
    },

    props: ['articles', 'errors', 'tags'],

    data() {
        return {
            isOpenShow: false,
            isOpenCreate: false,
            isOpenEdit: false,
            selectedArticle: null,
            form_create: {
                titre: null,
                contenu: null,
                type: null,
                url: null,
                date_publication: null,
                date_debut: null,
                date_fin: null,
                statut: null,
                tags: [],
            },
            form_update: {
                titre: null,
                contenu: null,
                type: null,
                url: null,
                date_publication: null,
                date_debut: null,
                date_fin: null,
                statut: null,
                tags: [],
            },
        }
    },

    watch: {
        selectedArticle: {
            handler() {
                if (this.selectedArticle) {
                    this.form_update.titre = this.selectedArticle.titre;
                    this.form_update.contenu = this.selectedArticle.contenu;
                    this.form_update.type = this.selectedArticle.type;
                    this.form_update.url = this.selectedArticle.url;
                    this.form_update.date_publication = this.selectedArticle.date_publication;
                    this.form_update.date_debut = this.selectedArticle.date_debut;
                    this.form_update.date_fin = this.selectedArticle.date_fin;
                    this.form_update.statut = this.selectedArticle.statut;
                    this.form_update.tags = this.selectedArticle.tags.map(tag => tag.id);
                }
            },
            deep: true,
            immediate: true
        }
    },



    methods: {
        show(article) {
            this.selectedArticle = article;
            this.isOpenShow = true;
        },

        edit(article) {
            this.selectedArticle = article;
            this.isOpenEdit = true;
        },

        update(article) {
            this.$inertia.put(route('articles.update', article), this.form_update);
            // this.form_update.tags = article.tags.map(tag => tag.id);

            // TODO: gérer les erreurs pour mettre la fermeture en condition if else
            // FIXME:
            this.isOpenEdit = false;
        },

        create() {
            this.$inertia.post(route('articles.store'), this.form_create);
            // this.isOpenCreate = false;
        },

        destroy(article) {
            // return confirm ('êtes-vous sûr de vouloir supprimer l'article ?');
            this.$inertia.delete(route('articles.destroy', article))
        },

    },
}
</script>
