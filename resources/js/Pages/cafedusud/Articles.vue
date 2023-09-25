<template>
    <AppLayout>
        <Navbar />

        <!-- INDEX ARTICLES -->
        <div class="flex flex-row flex-wrap">
            <div v-for="article in articles" class="w-1/4 justify-evenly">
                <div class="bg-cyan-200 text-center mx-4 my-2">
                    <p> {{ article.titre }} </p>
                    <p> {{ article.contenu }} </p>
                    <p> {{ article.type }} </p>
                    <p> {{ article.url }} </p>
                    <p> {{ article.date_publication }} </p>
                    <p> {{ article.date_debut }} </p>
                    <p> {{ article.date_fin }} </p>
                    <p> {{ article.statut }} </p>

                    <div v-for="tag in article.tags">
                        <p class="bg-yellow-700 rounded w-1/4 mx-2 text-md"> {{ tag.nom }} </p>
                    </div>
                    <button @click="show(article)" class="rounded bg-cyan-600 px-2 py-1">SHOW</button>
                    <button @click="edit(article)" class="rounded bg-yellow-400 px-2 py-1">EDIT</button>
                </div>
            </div>
        </div>
        <button @click="this.isOpenCreate = true" class="rounded bg-green-500 px-2 py-1">ADD</button>

        <!-- MODALE SHOW -->
        <div v-if="isOpenShow" class="fixed top-0 bg-black/20 w-full h-full justify-center flex backdrop-blur-md">
            <div class="bg-cyan-100/50">
                <button @click="isOpenShow = false" class="bg-red-700 mr-auto">CLOSE</button>
                <div>
                    <p> {{ selectedArticle.titre }} </p>
                    <p> {{ selectedArticle.contenu }} </p>
                    <p> {{ selectedArticle.type }} </p>
                    <p> {{ selectedArticle.image }} </p>
                    <p> {{ selectedArticle.date_publication }} </p>
                    <p> {{ selectedArticle.date_debut }} </p>
                    <p> {{ selectedArticle.date_fin }} </p>
                    <p> {{ selectedArticle.statut }} </p>

                    <div v-for="tag in selectedArticle.tags">
                        <p class="bg-yellow-700 rounded w-1/4 mx-2 text-md"> {{ tag.nom }} </p>
                    </div>
                </div>
                <button @click="destroy(selectedArticle)" class="rounded bg-red-500 px-2 py-1">DELETE</button>
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

                <!-- <div v-for="tag in selectedArticle.tags">
                    <p class="bg-yellow-700 rounded w-1/4 mx-2 text-md"> {{ tag.nom }} </p>
                </div>
                <input v-model="form_update_tags"> -->

                <div>
                    <label>tags</label>
                    <div v-for="tag in tags">
                        <input type="checkbox" v-model="form_update.tags" :value="tag.id">
                        <label>{{ tag.nom }}</label>
                    </div>
                </div>

            </div>
            <button @click="console.log(selectedArticle.tags)" class="rounded bg-pink-500 px-2 py-1">selectedArticle</button>
            <button @click="console.log(tags)" class="rounded bg-violet-500 px-2 py-1">tags</button>
            <button @click="update(selectedArticle)" class="rounded bg-amber-500 px-2 py-1">UPDATE</button>
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
                tags:[],
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

                    // this.form_update.tags = this.selectedArticle.tags.map(tag => tag.id);
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
