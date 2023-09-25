<template>
    <AppLayout>
        <Navbar />

        <!-- INDEX ARTICLES -->
        <div class="h-[60px] bg-slate-400 flex items-center">
            <div class="w-8/12 mx-auto flex justify-between">
                <h1 class="text-2xl font-semibold text-slate-800">Articles</h1>
                <button @click="this.isOpenCreate = true" class="text-white bg-slate-600 rounded-md px-2 py-1">AJOUTER UN
                    ARTICLE</button>
            </div>
        </div>

        <div class="flex flex-row flex-wrap">
            <div v-for="article in articles" class="w-1/4 justify-evenly">
                <!-- ARTICLE CARD -->
                <div class="bg-slate-200 shadow-md border-2 border-slate-300 rounded-xl  mx-4 my-2">
                    <!-- CARD CONTENT -->
                    <div class="mx-4 my-2 flex flex-col">
                        <div class="flex justify-between">
                            <p class="text-2xl text-slate-700 text-center"> {{ article.titre }} </p>
                            <!-- EDIT BUTTON -->
                            <button @click="edit(article)" class=""><svg class="feather feather-edit" fill="none"
                                    height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                                </svg></button>
                        </div>

                        <p class="text-slate-700 mt-3"> {{ article.contenu }} </p>
                        <p class=" mt-3"> {{ article.type }} </p>
                        <p class="mt-3"> {{ article.url }} </p>
                        <p class="mt-3"> du {{ article.date_debut }} au {{ article.date_fin }} </p>

                        <div v-for="tag in article.tags">
                            <p
                                class="bg-yellow-50 px-2 py-1 text-yellow-700 ring-1 ring-inset ring-yellow-600/30 rounded w-1/3 mx-2 text-md mt-3">
                                {{ tag.nom }} </p>
                        </div>


                        <!-- STATUS + SHOW BUTTON + DATE -->
                        <div class="flex justify-between">
                            <p
                                :class="{ 'text-green-700': article.statut === 'en ligne', 'text-yellow-600': article.statut === 'en attente' }">
                                {{ article.statut }}</p>
                            <button @click="show(article)" class="rounded bg-blue-400 px-2 py-1">Afficher</button>
                            <p class="flex"> {{ article.date_publication }} </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

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
        <div v-if="isOpenEdit" class="fixed top-0 bg-black/20 w-full h-full justify-center flex backdrop-blur-md overflow-auto">            <!-- EDIT CARD -->
            <div class=" w-6/12 p-6 bg-white my-auto rounded-lg">
                <button @click="isOpenEdit = false" class="mr-auto">
                    <svg class="w-[24px] ml-1 mt-1 fill-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <path
                            d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z" />
                    </svg>
                </button>
                <!-- TEXT AREA / INPUT -->
                <div class="">
                    <h3 class=" mb-6 text-xl leading-6 font-semibold tracking-widest text-cyan-600 relative">
                        MODIFIER UN ARTICLE
                        <span class="absolute left-0 bottom-0 w-full h-[2px] bg-cyan-800"></span>
                    </h3>

                    <!-- TITRE -->
                    <label class="block font-medium text-gray-700">Titre</label>
                    <input
                        class="block mt-1 w-full rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                        v-model="form_update.titre" type="text">

                    <!-- CONTENU -->
                    <label class="block mt-3 font-medium text-gray-700">Contenu</label>
                    <input
                        class="block mt-1 w-full rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                        v-model="form_update.contenu" type="text">

                    <!-- TITRE -->
                    <label class="block  mt-3 font-medium text-gray-700">Type</label>
                    <select
                        class="block mt-1 w-full rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                        v-model="form_update.type">
                        <option value="evenement">Évenement</option>
                        <option value="actualite">Actualité</option>
                    </select>

                    <!-- URL -->
                    <label class="block mt-3 font-medium text-gray-700">Lien image</label>
                    <input
                        class="block w-full mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                        v-model="form_update.url" type="url">

                    <!-- DATE PUBLICATION -->
                    <label class="block  mt-3 font-medium text-gray-700">Date de publication</label>
                    <input
                        class="block w-full mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                        v-model="form_update.date_publication" type="date">
                    <div class="flex justify-between">
                        <!-- DATE DEBUT -->
                        <div cla="mt-3">
                            <label  class="block mt-1 font-medium text-gray-700 my-auto">Date de début</label>
                            <input class="block mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                                v-model="form_update.date_debut" type="date">
                        </div>
                        <!-- DATE FIN -->
                        <div>
                            <label class="block mt-1 font-medium text-gray-700 my-auto">Date de fin</label>
                            <input class="block mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                                v-model="form_update.date_fin" type="date">
                        </div>
                    </div>

                    <!-- STATUT -->
                    <label class="block  mt-3 font-medium text-gray-700">Statut</label>
                    <select class="block mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                        v-model="form_update.statut">
                        <option value="en attente">En attente</option>
                        <option value="en ligne">En ligne</option>
                    </select>

                    <!-- TAGS -->
                    <label class="block mt-3 font-medium text-gray-700">Tags</label>
                    <div class="items-center flex" v-for="tag in tags">
                        <input class="rounded mr-2 focus:ring-0 focus:ring-offset-0" type="checkbox" v-model="form_update.tags" :value="tag.id" :id="tag.id">
                        <label :for="tag.id">{{ tag.nom }}</label>
                    </div>
                </div>
                <button @click="update(selectedArticle)" class="rounded border focus:ring-cyan-500 focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-50 active:bg-cyan-900 bg-cyan-800 hover:bg-cyan-700 font-medium w-full text-white px-2 py-1">UPDATE</button>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue'
import Navbar from '@/Components/CafeDuSud/Navbar.vue'

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
