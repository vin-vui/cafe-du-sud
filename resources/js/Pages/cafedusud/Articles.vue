<template>
    <AppLayout>
        <!-- INDEX ARTICLES -->
        <div class="h-16 bg-slate-400 flex items-center">
            <div class="w-8/12 mx-auto flex justify-between">
                <h2 class="text-2xl font-semibold text-slate-800">Articles</h2>
                <button @click="this.isOpenCreate = true" class="text-white bg-slate-600 rounded-md px-2 py-1">AJOUTER UN
                    ARTICLE</button>
            </div>
        </div>

        <div class="flex flex-row flex-wrap">
            <div v-for="article in articles" class="w-1/4 justify-evenly">
                <!-- ARTICLE CARD -->
                <div class="bg-slate-200 shadow-md border-2 border-slate-300 rounded-xl mx-4 my-2">
                    <!-- CARD CONTENT -->
                    <div class="mx-4 my-2 flex flex-col">
                        <!-- EDIT BUTTON -->
                        <button @click="edit(article)" class="flex justify-end group">
                            <svg class="feather feather-edit group-hover:stroke-violet-1" fill="none" height="24"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                            </svg>
                        </button>
                        <div class="flex ">
                            <h3 class="text-4xl font-alumni mb-4"> {{ article.title }} </h3>
                        </div>

                        <!-- STATUS + DATE + TYPE -->
                        <div class="flex-col py-2 border-t-2 border-t-black/50">
                            <span class="flex"
                                :class="{ 'text-green-700': article.status === 'en ligne', 'text-yellow-600': article.status === 'en attente' }">
                                {{ article.status }}</span>
                            <span class="flex my-3">Publié le : {{ moment(article.publication_date).format('DD/MM/YYYY')
                            }}</span>
                            <!-- Type -->
                            <span class="flex">type : <span class="text-purple-600"> {{ article.type }}</span></span>
                        </div>

                        <!-- CONTENT -->
                        <p class="text-slate-700 border-t-2 border-t-black/50 font-abeezee pt-8 whitespace-pre-line"> {{ article.content }}
                        </p>
                        <img :src=article.url class="">

                        <!-- DATES -->
                        <div class="py-2">
                            <!-- Si l'article est un billet de blog -->
                            <p v-if="article.type === 'blog'" class="">
                                Billet de blog
                            </p>

                            <!-- Si l'article est un évenement avec seulement seule date_début -->
                            <p v-else-if="article.type === 'evenement' && article.end_date === null" class="">
                                Événement prévu le {{ moment(article.begin_date).format('DD/MM/YYYY') }}
                            </p>

                            <!-- Si l'article est un évenement avec date_début et end_date -->
                            <p v-else class="">
                                Événement  prévu du {{ moment(article.begin_date).format('DD/MM/YYYY') }} au {{
                                    moment(article.end_date).format('DD/MM/YYYY') }}
                            </p>
                        </div>

                        <div class="flex gap-2">
                            <span>tags :</span>
                            <div v-for="tag in article.tags"
                                class="bg-yellow-50 px-2 py-1 text-yellow-700 ring-1 ring-inset ring-yellow-600/30 rounded text-md ">
                                {{ tag.name }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODALE CREATE -->
        <div v-if="isOpenCreate"
            class="fixed top-0 bg-black/20 w-full h-full justify-center flex backdrop-blur-md overflow-auto">
            <!-- CREATE CARD -->
            <div class=" w-6/12 p-6 bg-white my-auto rounded-lg">
                <!-- CLOSE BUTTONS -->
                <div class="flex items-center justify-end mb-3">
                    <button @click="closeCreateModale" class="">
                        <svg class="w-6 h-6  fill-red-700 hover:fill-red-600" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 48 48">
                            <path
                                d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z" />
                        </svg>
                    </button>
                </div>

                <!-- FORM -->
                <h3
                    class="mb-6 uppercase text-xl leading-6 font-semibold tracking-widest border-b-2 pb-1 border-cyan-600  text-cyan-600 relative">
                    créer un article</h3>

                <!-- title -->
                <div class="mt-3">
                    <div v-if="errors.title" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.title }}
                    </div>
                    <label class="block font-medium text-gray-700 capitalize">Titre</label>
                    <input
                        class="block mt-1 w-full rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                        v-model="form_create.title" type="text">
                </div>

                <!-- content -->
                <div class="mt-3">
                    <div v-if="errors.content" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.content }}
                    </div>
                    <label class="block font-medium text-gray-700 capitalize">Contenu</label>
                    <textarea
                        class="block mt-1 w-full rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                        v-model="form_create.content" type="text">
                    </textarea>
                </div>

                <!-- TYPE -->
                <div class="mt-3">
                    <div v-if="errors.type" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.type }}</div>
                    <label class="block font-medium text-gray-700 capitalize">type</label>
                    <select
                        class="block mt-1 w-full rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                        v-model="form_create.type">
                        <option value="evenement">Évenement</option>
                        <option value="blog">Blog</option>
                    </select>
                </div>

                <!-- URL -->
                <div class="mt-3">
                    <div v-if="errors.url" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.url }}</div>
                    <label class="block font-medium text-gray-700 capitalize-first">Lien de l'image</label>
                    <input
                        class="block mt-1 w-full rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                        v-model="form_create.url" type="url">
                </div>

                <!-- DATE DEBUT + FIN -->
                <div class="flex justify-between mt-3">
                    <!-- DATE DEBUT -->
                    <div>
                        <div v-if="errors.begin_date" class="text-red-700 text-lg mx-auto flex justify-center">{{
                            errors.begin_date }}</div>
                        <label class="block  mt-3 font-medium text-gray-700 capitalize-first">Date de début</label>
                        <input
                            class="block mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                            v-model="form_create.begin_date" type="date">
                    </div>
                    <!-- DATE FIN -->
                    <div>
                        <div v-if="errors.end_date" class="text-red-700 text-lg mx-auto flex justify-center">{{
                            errors.end_date
                        }}</div>
                        <label class="block  mt-3 font-medium text-gray-700 capitalize-first">Date de fin</label>
                        <input
                            class="block mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                            v-model="form_create.end_date" type="date">
                    </div>
                </div>

                <!-- STATUT -->
                <div class="mt-3">
                    <div v-if="errors.status" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.status }}
                    </div>
                    <label class="block font-medium text-gray-700 capitalize-first">Statut</label>
                    <select
                        class="block mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                        v-model="form_create.status">
                        <option value="en attente">En attente</option>
                        <option value="en ligne">En ligne</option>
                    </select>
                </div>

                <!-- TAGS -->
                <label class="block  mt-3 font-medium text-gray-700 capitalize-first">Tags</label>
                <div class="flex items-center" v-for="tag in tags">
                    <input class="rounded mr-1 focus:ring-0 focus:ring-offset-0" type="checkbox" v-model="form_create.tags"
                        :value="tag.id">
                    <label class="capitalize-first">{{ tag.name }}</label>
                </div>
                <button @click="create(form_create)"
                    class="mt-4 rounded border focus:ring-cyan-500 focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-50 active:bg-cyan-900 bg-cyan-800 hover:bg-cyan-700 font-medium w-full text-white px-2 py-1 uppercase">Créer
                    un article</button>
            </div>
        </div>

        <!-- MODALE EDIT -->
        <div v-if="isOpenEdit"
            class="fixed top-0 bg-black/20 w-full h-full justify-center flex backdrop-blur-md overflow-auto">
            <!-- EDIT CARD -->
            <div class=" w-6/12 p-6 bg-white my-auto rounded-lg">
                <!-- CLOSE AND DELETE BUTTONS -->
                <div class="flex items-center justify-between mb-3">
                    <button @click="destroy(selectedArticle)"
                        class="rounded text-red-800 hover:text-red-600 hover:underline px-2 py-1 capitalize-first">supprimer
                        l'article</button>
                    <button @click="closeEditModale" class="">
                        <svg class="w-6 h-6  fill-red-700 hover:fill-red-600" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 48 48">
                            <path
                                d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z" />
                        </svg>
                    </button>

                </div>

                <!-- FORM -->
                <div class="">
                    <h3
                        class="mb-6 uppercase text-xl leading-6 font-semibold tracking-widest border-b-2 pb-1 border-cyan-600  text-cyan-600 relative">
                        modifier un article
                    </h3>

                    <!-- title -->
                    <div class="mt-3">
                        <div v-if="errors.title" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.title }}
                        </div>
                        <label class="block font-medium text-gray-700 capitalize">Titre</label>
                        <input
                            class="block mt-1 w-full rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                            v-model="form_update.title" type="text">
                    </div>

                    <!-- content -->
                    <div class="mt-3">
                        <div v-if="errors.content" class="text-red-700 text-lg mx-auto flex justify-center">{{
                            errors.content }}</div>
                        <label class="block mt-3 font-medium text-gray-700 capitalize">Contenu</label>
                        <textarea
                            class="block mt-1 w-full rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                            v-model="form_update.content" type="text"></textarea>
                    </div>

                    <!-- TYPE -->
                    <div class="mt-3">
                        <div v-if="errors.type" class="text-red-700 text-lg mx-auto flex justify-center">{{
                            errors.type }}</div>
                        <label class="block  mt-3 font-medium text-gray-700 capitalize">Type</label>
                        <select
                            class="block mt-1 w-full rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                            v-model="form_update.type">
                            <option value="evenement">Évenement</option>
                            <option value="actualite">Actualité</option>
                        </select>
                    </div>

                    <!-- IMAGE -->
                    <div class="mt-3">
                        <div v-if="errors.url" class="text-red-700 text-lg mx-auto flex justify-center">{{
                            errors.url }}</div>
                        <label class="block mt-3 font-medium text-gray-700 capitalize-first">Lien de l'image</label>
                        <input
                            class="block w-full mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                            v-model="form_update.url" type="url">
                    </div>

                    <!-- DATE PUBLICATION -->
                    <div class="mt-3">
                        <div v-if="errors.publication_date" class="text-red-700 text-lg mx-auto flex justify-center">{{
                            errors.publication_date }}</div>
                        <label class="block mt-3 font-medium text-gray-700 capitalize-first">date de
                            publication</label>
                        <input
                            class="block w-full mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                            v-model="form_update.publication_date" type="date">
                    </div>

                    <!-- DATE DEBUT + FIN -->
                    <div class="flex justify-between mt-3">
                        <!-- DATE DEBUT -->
                        <div>
                            <div v-if="errors.begin_date" class="text-red-700 text-lg mx-auto flex justify-center">
                                {{
                                    errors.begin_date }}</div>
                            <label class="block mt-1 font-medium text-gray-700 my-auto capitalize-first">Date de
                                début</label>
                            <input
                                class="block mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                                v-model="form_update.begin_date" type="date">
                        </div>
                        <!-- DATE FIN -->
                        <div>
                            <div v-if="errors.end_date" class="text-red-700 text-lg mx-auto flex justify-center">{{
                                errors.end_date }}</div>
                            <label class="block mt-1 font-medium text-gray-700 my-auto capitalize-first">Date de
                                fin</label>
                            <input
                                class="block mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                                v-model="form_update.end_date" type="date">
                        </div>
                    </div>

                    <!-- status -->
                    <div class="mt-3">
                        <div v-if="errors.status" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.status
                        }}
                        </div>
                        <label class="block font-medium text-gray-700 capitalize-first">Statut</label>
                        <select
                            class="block mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                            v-model="form_update.status">
                            <option value="en attente">En attente</option>
                            <option value="en ligne">En ligne</option>
                        </select>
                    </div>

                    <!-- TAGS -->
                    <div>
                        <div v-if="errors.tags" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.tags }}
                            <label class="block mt-3 font-medium text-gray-700 capitalize-first">Tags</label>
                            <div class="items-center flex gap-2">
                                <div class="flex items-center" v-for="tag in tags">
                                    <input class="rounded mr-1 focus:ring-0 focus:ring-offset-0" type="checkbox"
                                        v-model="form_update.tags" :value="tag.id" :id="tag.id">
                                    <label class="capitalize-first" :for="tag.id">{{ tag.name }}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button @click="update(selectedArticle)"
                        class="mt-4 rounded border focus:ring-cyan-500 focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-50 active:bg-cyan-900 bg-cyan-800 hover:bg-cyan-700 font-medium w-full text-white px-2 py-1 uppercase">mettre
                        à jour</button>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue'
import moment from 'moment'


export default {
    components: {
        AppLayout,
    },

    props: ['articles', 'errors', 'tags'],

    data() {
        return {
            moment: moment,
            isOpenCreate: false,
            isOpenEdit: false,
            selectedArticle: null,
            form_create: {
                title: null,
                content: null,
                type: null,
                url: null,
                publication_date: null,
                begin_date: null,
                end_date: null,
                status: null,
                tags: [],
            },
            form_update: {
                title: null,
                content: null,
                type: null,
                url: null,
                publication_date: null,
                begin_date: null,
                end_date: null,
                status: null,
                tags: [],
            },

        }
    },

    watch: {
        selectedArticle: {
            handler() {
                if (this.selectedArticle) {
                    this.form_update.title = this.selectedArticle.title;
                    this.form_update.content = this.selectedArticle.content;
                    this.form_update.type = this.selectedArticle.type;
                    this.form_update.url = this.selectedArticle.url;
                    this.form_update.publication_date = this.selectedArticle.publication_date;
                    this.form_update.begin_date = this.selectedArticle.begin_date;
                    this.form_update.end_date = this.selectedArticle.end_date;
                    this.form_update.status = this.selectedArticle.status;
                    this.form_update.tags = this.selectedArticle.tags.map(tag => tag.id);
                }
            },
            deep: true,
            immediate: true
        }
    },



    methods: {
        closeCreateModale() {
            this.resetCreateForm();
            this.isOpenCreate = false;
        },

        closeEditModale() {
            this.resetEditForm();
            this.isOpenEdit = false;
        },

        resetCreateForm() {
            // reinitialize form
            this.form_create.title = null;
            this.form_create.content = null;
            this.form_create.type = null;
            this.form_create.url = null;
            this.form_create.publication_date = null;
            this.form_create.begin_date = null;
            this.form_create.end_date = null;
            this.form_create.status = null;
            this.form_create.tags = [];

            // reinitialize errors
            this.errors.title = null;
            this.errors.content = null;
            this.errors.type = null;
            this.errors.url = null;
            this.errors.publication_date = null;
            this.errors.begin_date = null;
            this.errors.end_date = null;
            this.errors.status = null;
            this.errors.tags = null;
        },

        resetEditForm() {
            // reinitialize errors
            this.errors.title = null;
            this.errors.content = null;
            this.errors.type = null;
            this.errors.url = null;
            this.errors.publication_date = null;
            this.errors.begin_date = null;
            this.errors.end_date = null;
            this.errors.status = null;
            this.errors.tags = null;
        },

        edit(article) {
            this.selectedArticle = article;
            this.isOpenEdit = true;
        },

        update(article) {
            this.$inertia.put(route('articles.update', article), this.form_update, {
                preserveState: (page) => Object.keys(page.props.errors).length,
                onSuccess: () => this.isOpenEdit = false,
            })
        },

        create() {
            this.$inertia.post(route('articles.store'), this.form_create, {
                preserveState: (page) => Object.keys(page.props.errors).length,
                onSuccess: () => this.isOpenCreate = false,
            })
        },

        destroy(article) {
            const confirmed = window.confirm('Êtes-vous sûr de vouloir supprimer cet article ?');

            if (confirmed) {
                // L'utilisateur a confirmé la suppression, alors appelez la suppression ici
                this.$inertia.delete(route('articles.destroy', article));
            } else {
                // L'utilisateur a annulé la suppression
                // Vous pouvez ajouter ici du code à exécuter si l'utilisateur annule la suppression
            }
        }


    },
}
</script>
