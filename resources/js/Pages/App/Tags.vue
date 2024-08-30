<template>
<AppLayout title="Tags">
    <!-- INDEX TAGS -->
    <div class="bg-white shadow sticky top-0 z-40">
        <div class="py-2 px-4 sm:px-6 lg:px-8 flex justify-between">
            <h2 class="text-5xl font-alumni text-slate-800">Tags</h2>
            <button @click="this.isOpenCreate = true"
                class="flex gap-2 items-center rounded-md bg-violet-4 px-3.5 py-2.5 text-sm font-semibold text-blanc-1 shadow-sm hover:ring ring-violet-1/20 hover:scale-105 ease-in-out duration-200 hover:bg-violet-1 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                <svg class="size-6" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M11 13v3q0 .425.288.713T12 17t.713-.288T13 16v-3h3q.425 0 .713-.288T17 12t-.288-.712T16 11h-3V8q0-.425-.288-.712T12 7t-.712.288T11 8v3H8q-.425 0-.712.288T7 12t.288.713T8 13zm1 9q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                </svg>
                Ajouter
            </button>
        </div>
    </div>
    <!-- TAGS LIST -->
    <div class="px-8 py-12">
        <ul role="list" class="gap-y-2 gap-x-8 grid grid-cols-4">
            <li v-for="tag in tags" @click="edit(tag)"
                class="relative rounded-xl border cursor-pointer flex justify-between gap-x-6 px-4 py-5 bg-white shadow hover:shadow-xl hover:scale-105 transition-all duration-200 ease-in-out sm:px-6 lg:px-8">
                <div class="flex min-w-0 gap-x-4">
                    <div class="min-w-0 flex-auto">
                        <p class="text-2xl font-alumni leading-6 text-gray-900">
                            {{ tag.name }}
                        </p>
                    </div>
                </div>
                <!-- ARROW -->
                <div class="flex shrink-0 items-center gap-x-4">
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </li>
        </ul>
    </div>
    <!-- CREATE MODALE -->
    <div v-if="isOpenCreate" class="relative z-50" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-black/20"></div>
        <div class="fixed inset-0 overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10 sm:pl-16">
                    <div class="pointer-events-auto w-screen max-w-2xl">
                        <div class="flex h-full flex-col overflow-y-auto bg-white shadow-xl">
                            <div class="flex-1">
                                <!-- HEADER -->
                                <div class="bg-gray-50 px-4 py-6 sm:px-6">
                                    <div class="flex items-start justify-between space-x-3">
                                        <div class="space-y-1">
                                            <h2 class="text-base font-semibold leading-6 text-gray-900"
                                                id="slide-over-title">Ajouter un nouvel article</h2>
                                        </div>
                                        <div class="flex h-7 items-center">
                                            <button @click="closeCreateModale" type="button"
                                                class="relative text-gray-400 hover:text-gray-500">
                                                <span class="absolute -inset-2.5"></span>
                                                <span class="sr-only">Close panel</span>
                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- BODY -->
                                <div class="px-6">
                                    <!-- TITLE -->
                                    <div class="mt-3">
                                        <label class="block font-medium text-gray-700 capitalize">Titre</label>
                                        <input v-model="form_create.name" type="text" class="block mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm">
                                        <div v-if="errors.name" class="text-red-700 text-sm mb-2">{{ errors.name }}</div>
                                    </div>
                                    <!-- CONTENT -->
                                    <div class="mt-3">
                                        <label class="block font-medium text-gray-700 capitalize">Contenu</label>
                                        <textarea v-model="form_create.description" type="text" rows="5" class="block mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm"></textarea>
                                        <div v-if="errors.description" class="text-red-700 text-sm mb-2">{{ errors.description }}</div>
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
    <!-- EDIT MODALE -->
    <div v-if="isOpenEdit" class="relative z-50" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-black/20"></div>
        <div class="fixed inset-0 overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10 sm:pl-16">
                    <div class="pointer-events-auto w-screen max-w-2xl">
                        <div class="flex h-full flex-col overflow-y-auto bg-white shadow-xl">
                            <div class="flex-1">
                                <!-- HEADER -->
                                <div class="bg-gray-50 px-4 py-6 sm:px-6">
                                    <div class="flex items-start justify-between space-x-3">
                                        <div class="space-y-1">
                                            <h2 class="text-base font-semibold leading-6 text-gray-900"
                                                id="slide-over-title">Modifier un article</h2>
                                        </div>
                                        <div class="flex h-7 items-center">
                                            <button @click="closeEditModale" type="button"
                                                class="relative text-gray-400 hover:text-gray-500">
                                                <span class="absolute -inset-2.5"></span>
                                                <span class="sr-only">Close panel</span>
                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- BODY -->
                                <div class="px-6">
                                    <!-- TITLE -->
                                    <div class="mt-3">
                                        <label class="block font-medium text-gray-700 capitalize">Titre</label>
                                        <input v-model=form_update.name type="text"
                                            class="block mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm">
                                        <div v-if=errors.name class="text-red-700 text-sm mb-2">{{ errors.name }}
                                        </div>
                                    </div>
                                    <!-- CONTENT -->
                                    <div class="mt-3">
                                        <label class="block font-medium text-gray-700 capitalize">Contenu</label>
                                        <textarea v-model="form_update.description" type="text" rows="5"
                                            class="block mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm"></textarea>
                                        <div v-if="errors.description" class="text-red-700 text-sm mb-2">{{ errors.description
                                            }}</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Action buttons -->
                            <div class="flex-shrink-0 border-t border-gray-200 px-4 py-5 sm:px-6">
                                <div class="flex justify-between">
                                    <button @click="destroy(selectedTag)"
                                        class="rounded text-red-800 hover:text-red-600 hover:underline py-1 capitalize-first">supprimer
                                        le tag</button>
                                    <div class="flex gap-4">
                                        <button @click="closeEditModale" type="button"
                                            class="rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Annuler</button>
                                        <button @click="update(selectedTag)" type="submit"
                                            class="inline-flex justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Modifier</button>
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

export default {
    components: {
        AppLayout
    },

    props: ['tags', 'errors',],

    data() {
        return {
            isOpenCreate: false,
            isOpenEdit: false,
            selectedTag: null,
            form_create: {
                name: null,
                description: null,
            },
            form_update: {
                name: this.selectedTag ? this.selectedTag.name : '',
                description: this.selectedTag ? this.selectedTag.description : '',
            }
        }
    },

    watch: {
        selectedTag: {
            handler() {
                if (this.selectedTag) {
                    this.form_update.name = this.selectedTag.name;
                    this.form_update.description = this.selectedTag.description;
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
            this.resetEditForm();
            this.form_create.name = null;
            this.form_create.description = null;
        },

        resetEditForm() {
            this.errors.name = null;
            this.errors.description = null;
        },

        edit(tag) {
            this.selectedTag = tag;
            this.isOpenEdit = true;
        },

        update(tag) {
            this.$inertia.put(route('tags.update', tag), this.form_update, {
                preserveState: (page) => Object.keys(page.props.errors).length,
                onSuccess: () => this.closeEditModale(),
            });
        },

        create() {
            this.$inertia.post(route('tags.store'), this.form_create, {
                preserveState: (page) => Object.keys(page.props.errors).length,
                onSuccess: () => this.closeCreateModale(),
            })
        },

        destroy(tag) {
            const confirmed = window.confirm('Êtes-vous sûr de vouloir supprimer ce tag ?');
            if (confirmed) {
                this.$inertia.delete(route('tags.destroy', tag));
                this.closeEditModale();
            } else {
                // Do nothing!
            }
        }
    }
}
</script>
