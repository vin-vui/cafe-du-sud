<template>
    <AppLayout>
        <!-- INDEX ARTICLES -->
        <div class="bg-white shadow sticky top-0 z-40">
            <div class="py-2 px-4 sm:px-6 lg:px-8 flex justify-between">
                <h2 class="text-5xl font-alumni text-slate-800">Billets & Événements</h2>
                <button @click="this.isOpenCreate = true" class="rounded-md bg-violet-4 px-3.5 py-2.5 text-sm font-semibold text-blanc-1 shadow-sm hover:ring ring-violet-1/20 hover:scale-105 ease-in-out duration-200 hover:bg-violet-1 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Ajouter</button>
            </div>
        </div>
        <div class="">
            <ul v-for="article in articles" role="list" class="divide-y divide-gray-100">
                <li @click="edit(article)" class="relative cursor-pointer flex justify-between gap-x-6 px-4 py-5 hover:bg-gray-50 sm:px-6 lg:px-8">
                    <div class="flex min-w-0 gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" :src=article.url alt="">
                    <div class="min-w-0 flex-auto">
                        <p class="text-2xl font-alumni leading-6 text-gray-900">
                            {{ article.title }}
                        </p>
                        <p class="mt-1 flex text-xs leading-5 text-gray-500">
                            {{ article.content.slice(0, 100) + '...' }}
                        </p>
                    </div>
                    </div>
                    <div class="flex shrink-0 items-center gap-x-4">
                    <div class="hidden sm:flex sm:flex-col sm:items-end">
                        <div v-if="article.status === 'published'" class="mt-1 flex items-center gap-x-1.5">
                            <div class="flex-none rounded-full bg-emerald-500/20 p-1">
                                <div class="h-1.5 w-1.5 rounded-full bg-emerald-500"></div>
                            </div>
                            <p class="text-xs leading-5 text-gray-500">en ligne</p>
                        </div>
                        <div v-if="article.status === 'draft'" class="mt-1 flex items-center gap-x-1.5">
                            <div class="flex-none rounded-full bg-emerald-500/20 p-1">
                                <div class="h-1.5 w-1.5 rounded-full bg-yellow-500"></div>
                            </div>
                            <p class="text-xs leading-5 text-gray-500">brouillon</p>
                        </div>
                        <div v-if="article.status === 'unpublished'" class="mt-1 flex items-center gap-x-1.5">
                            <div class="flex-none rounded-full bg-emerald-500/20 p-1">
                                <div class="h-1.5 w-1.5 rounded-full bg-red-500"></div>
                            </div>
                            <p class="text-xs leading-5 text-gray-500">corbeille</p>
                        </div>
                        <p class="mt-1 text-xs leading-5 text-gray-500">Publié le <time :datetime="article.publication_date">{{ moment(article.publication_date).format('DD/MM/YYYY') }}</time></p>
                    </div>
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                    </svg>
                    </div>
                </li>
            </ul>
        </div>
        <div v-if="isOpenCreate" class="relative z-50" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-black/20"></div>
            <div class="fixed inset-0 overflow-hidden">
                <div class="absolute inset-0 overflow-hidden">
                    <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10 sm:pl-16">
                        <div class="pointer-events-auto w-screen max-w-2xl">
                            <div class="flex h-full flex-col overflow-y-auto bg-white shadow-xl">
                                <div class="flex-1">
                                    <!-- Header -->
                                    <div class="bg-gray-50 px-4 py-6 sm:px-6">
                                        <div class="flex items-start justify-between space-x-3">
                                        <div class="space-y-1">
                                            <h2 class="text-base font-semibold leading-6 text-gray-900" id="slide-over-title">Ajouter un nouvel article</h2>
                                        </div>
                                        <div class="flex h-7 items-center">
                                            <button @click="closeCreateModale" type="button" class="relative text-gray-400 hover:text-gray-500">
                                            <span class="absolute -inset-2.5"></span>
                                            <span class="sr-only">Close panel</span>
                                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                            </button>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="px-6">
                                        <!-- title -->
                                        <div class="mt-3">
                                            <div v-if="errors.title" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.title }}</div>
                                            <label class="block font-medium text-gray-700 capitalize">Titre</label>
                                            <input class="block mt-1 w-full rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                                                v-model="form_create.title" type="text">
                                        </div>
                                        <!-- content -->
                                        <div class="mt-3">
                                            <div v-if="errors.content" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.content }}</div>
                                            <label class="block font-medium text-gray-700 capitalize">Contenu</label>
                                            <textarea rows="5" class="block mt-1 w-full rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                                                v-model="form_create.content" type="text">
                                            </textarea>
                                        </div>
                                        <!-- URL -->
                                        <div class="mt-3">
                                            <div v-if="errors.url" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.url }}</div>
                                            <label class="block font-medium text-gray-700 capitalize-first">Lien de l'image</label>
                                            <input class="block mt-1 w-full rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                                                v-model="form_create.url" type="url">
                                        </div>
                                        <!-- DATE DEBUT + FIN -->
                                        <div class="flex justify-between mt-3 gap-4">
                                            <!-- DATE DEBUT -->
                                            <div class="w-full">
                                                <div v-if="errors.begin_date" class="w-full text-red-700 text-lg mx-auto flex justify-center">{{ errors.begin_date }}</div>
                                                <label class="block font-medium text-gray-700 capitalize-first">Date de début</label>
                                                <input class="w-full block mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                                                    v-model="form_create.begin_date" type="date">
                                            </div>
                                            <!-- DATE FIN -->
                                            <div class="w-full">
                                                <div v-if="errors.end_date" class="w-full text-red-700 text-lg mx-auto flex justify-center">{{ errors.end_date }}</div>
                                                <label class="block font-medium text-gray-700 capitalize-first">Date de fin</label>
                                                <input class="w-full block mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                                                    v-model="form_create.end_date" type="date">
                                            </div>
                                        </div>
                                        <!-- STATUT -->
                                        <div class="flex justify-between mt-3 gap-4">
                                            <div class="w-full">
                                                <div v-if="errors.status" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.status }}</div>
                                                <label class="block font-medium text-gray-700 capitalize-first">Statut</label>
                                                <select class="w-full block mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                                                    v-model="form_create.status">
                                                    <option value="published">en ligne</option>
                                                    <option value="draft">brouillon</option>
                                                    <option value="unpublished">corbeille</option>
                                                </select>
                                            </div>
                                            <!-- TYPE -->
                                            <div class="w-full">
                                                <div v-if="errors.type" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.type }}</div>
                                                <label class="block font-medium text-gray-700 capitalize">type</label>
                                                <select
                                                    class="w-full block mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                                                    v-model="form_create.type">
                                                    <option value="event">Événement</option>
                                                    <option value="post">Blog</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- TAGS -->
                                        <div class="mt-3">
                                            <label class="block font-medium text-gray-700 capitalize-first">Tags</label>
                                            <div class="flex flex-row flex-wrap items-center gap-2">
                                                <div class="flex items-center" v-for="tag in tags">
                                                    <input class="rounded mr-1 focus:ring-0 focus:ring-offset-0" type="checkbox" v-model="form_create.tags" :value="tag.id">
                                                    <label class="capitalize-first">{{ tag.name }}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Action buttons -->
                                <div class="flex-shrink-0 border-t border-gray-200 px-4 py-5 sm:px-6">
                                    <div class="flex justify-end space-x-3">
                                        <button @click="closeCreateModale" type="button" class="rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Annuler</button>
                                        <button @click="create(form_create)" type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ajouter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div v-if="isOpenEdit" class="relative z-50" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-black/20"></div>
            <div class="fixed inset-0 overflow-hidden">
                <div class="absolute inset-0 overflow-hidden">
                    <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10 sm:pl-16">
                        <div class="pointer-events-auto w-screen max-w-2xl">
                            <div class="flex h-full flex-col overflow-y-auto bg-white shadow-xl">
                                <div class="flex-1">
                                    <!-- Header -->
                                    <div class="bg-gray-50 px-4 py-6 sm:px-6">
                                        <div class="flex items-start justify-between space-x-3">
                                            <div class="space-y-1">
                                                <h2 class="text-base font-semibold leading-6 text-gray-900" id="slide-over-title">Modifier un article</h2>
                                            </div>
                                            <div class="flex h-7 items-center">
                                                <button @click="closeEditModale" type="button" class="relative text-gray-400 hover:text-gray-500">
                                                    <span class="absolute -inset-2.5"></span>
                                                    <span class="sr-only">Close panel</span>
                                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-6">
                                        <!-- title -->
                                        <div class="mt-3">
                                            <div v-if="errors.title" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.title }}</div>
                                            <label class="block font-medium text-gray-700 capitalize">Titre</label>
                                            <input class="block mt-1 w-full rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                                                v-model="form_update.title" type="text">
                                        </div>
                                        <!-- content -->
                                        <div class="mt-3">
                                            <div v-if="errors.content" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.content }}</div>
                                            <label class="block font-medium text-gray-700 capitalize">Contenu</label>
                                            <textarea rows="5" class="block mt-1 w-full rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                                                v-model="form_update.content" type="text">
                                            </textarea>
                                        </div>
                                        <!-- URL -->
                                        <div class="mt-3">
                                            <div v-if="errors.url" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.url }}</div>
                                            <label class="block font-medium text-gray-700 capitalize-first">Lien de l'image</label>
                                            <input class="block mt-1 w-full rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                                                v-model="form_update.url" type="url">
                                        </div>
                                        <!-- DATE DEBUT + FIN -->
                                        <div class="flex justify-between mt-3 gap-4">
                                            <!-- DATE DEBUT -->
                                            <div class="w-full">
                                                <div v-if="errors.begin_date" class="w-full text-red-700 text-lg mx-auto flex justify-center">{{ errors.begin_date }}</div>
                                                <label class="block font-medium text-gray-700 capitalize-first">Date de début</label>
                                                <input class="w-full block mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                                                    v-model="form_update.begin_date" type="date">
                                            </div>
                                            <!-- DATE FIN -->
                                            <div class="w-full">
                                                <div v-if="errors.end_date" class="w-full text-red-700 text-lg mx-auto flex justify-center">{{ errors.end_date }}</div>
                                                <label class="block font-medium text-gray-700 capitalize-first">Date de fin</label>
                                                <input class="w-full block mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                                                    v-model="form_update.end_date" type="date">
                                            </div>
                                        </div>
                                        <!-- STATUT -->
                                        <div class="flex justify-between mt-3 gap-4">
                                            <div class="w-full">
                                                <div v-if="errors.status" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.status }}</div>
                                                <label class="block font-medium text-gray-700 capitalize-first">Statut</label>
                                                <select class="w-full block mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                                                    v-model="form_update.status">
                                                    <option value="published">en ligne</option>
                                                    <option value="draft">brouillon</option>
                                                    <option value="unpublished">corbeille</option>
                                                </select>
                                            </div>
                                            <!-- TYPE -->
                                            <div class="w-full">
                                                <div v-if="errors.type" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.type }}</div>
                                                <label class="block font-medium text-gray-700 capitalize">type</label>
                                                <select
                                                    class="w-full block mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                                                    v-model="form_update.type">
                                                    <option value="event">Événement</option>
                                                    <option value="post">Blog</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- TAGS -->
                                        <div class="mt-3">
                                            <label class="block font-medium text-gray-700 capitalize-first">Tags</label>
                                            <div class="flex flex-row flex-wrap items-center gap-2">
                                                <div class="flex items-center" v-for="tag in tags">
                                                    <input class="rounded mr-1 focus:ring-0 focus:ring-offset-0" type="checkbox" v-model="form_update.tags" :value="tag.id">
                                                    <label class="capitalize-first">{{ tag.name }}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Action buttons -->
                                <div class="flex-shrink-0 border-t border-gray-200 px-4 py-5 sm:px-6">
                                    <div class="flex justify-between">
                                        <button @click="destroy(selectedArticle)" class="rounded text-red-800 hover:text-red-600 hover:underline py-1 capitalize-first">supprimer l'article</button>
                                        <div class="flex gap-4">
                                            <button @click="closeEditModale" type="button" class="rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Annuler</button>
                                            <button @click="update(selectedArticle)" type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Modifier</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
