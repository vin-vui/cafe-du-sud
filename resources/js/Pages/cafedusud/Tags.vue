<template>
    <AppLayout>
        <!-- INDEX TAGS -->
        <div class="h-16 bg-slate-400 flex items-center">
            <div class="w-8/12 mx-auto flex justify-between">
                <h2 class="text-2xl font-semibold text-slate-800">Tags</h2>
                <button @click="this.isOpenCreate = true" class="text-white bg-slate-600 rounded-md px-2 py-1">AJOUTER UN
                    TAG</button>
            </div>
        </div>

        <div class="flex flex-row flex-wrap">
            <div v-for="tag in tags" class="w-1/4 justify-evenly">
                <!-- TAG CARD -->
                <div class="bg-slate-200 shadow-md border-2 border-slate-300 rounded-xl mx-4 my-2">
                    <!-- CARD CONTENT -->
                    <div class="mx-4 my-2 flex flex-col">
                        <div class="flex justify-between">
                            <h3 class="text-2xl text-slate-700 text-center"> {{ tag.nom }} </h3>
                            <!-- EDIT BUTTON -->
                            <button @click="edit(tag)" class="">
                                <svg class="feather feather-edit" fill="none" height="24" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                    width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                                </svg>
                            </button>
                        </div>
                        <p class="text-slate-700 mt-3"> {{ tag.description }} </p>
                        <!-- STATUS -->
                        <div class="flex justify-between">
                            <span
                                :class="{ 'text-green-700': tag.statut === 'en ligne', 'text-yellow-600': tag.statut === 'en attente' }">
                                {{ tag.statut }}</span>
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
                    créer un tag</h3>

                <!-- NOM -->
                <div class="mt-3">
                    <div v-if="errors.nom" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.nom }}
                    </div>
                    <label class="block font-medium text-gray-700 capitalize">nom</label>
                    <input
                        class="block mt-1 w-full rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                        v-model="form_create.nom" type="text">
                </div>

                <!-- DESCRIPTION -->
                <div class="mt-3">
                    <div v-if="errors.description" class="text-red-700 text-lg mx-auto flex justify-center">{{
                        errors.description }}
                    </div>
                    <label class="block font-medium text-gray-700 capitalize">description</label>
                    <input
                        class="block mt-1 w-full rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                        v-model="form_create.description" type="text">
                </div>

                <!-- STATUT -->
                <div class="mt-3">
                    <div v-if="errors.statut" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.statut }}
                    </div>
                    <label class="block font-medium text-gray-700 capitalize-first">Statut</label>
                    <select
                        class="block mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                        v-model="form_create.statut">
                        <option value="en attente">En attente</option>
                        <option value="en ligne">En ligne</option>
                    </select>
                </div>
                <button @click="create(form_create)"
                class="mt-4 rounded border focus:ring-cyan-500 focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-50 active:bg-cyan-900 bg-cyan-800 hover:bg-cyan-700 font-medium w-full text-white px-2 py-1 uppercase">Créer un tag</button>
            </div>
        </div>

        <!-- MODALE EDIT -->
        <div v-if="isOpenEdit"
            class="fixed top-0 bg-black/20 w-full h-full justify-center flex backdrop-blur-md overflow-auto">
            <!-- EDIT CARD -->
            <div class=" w-6/12 p-6 bg-white my-auto rounded-lg">
                <!-- CLOSE AND DELETE BUTTONS -->
                <div class="flex items-center justify-between mb-3">
                    <button @click="destroy(selectedTag)"
                        class="rounded text-red-800 hover:text-red-600 hover:underline px-2 py-1 capitalize-first">supprimer
                        le tag</button>
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
                        modifier un tag
                    </h3>

                    <!-- NOM    -->
                    <div class="mt-3">
                        <div v-if="errors.nom" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.nom }}
                        </div>
                        <label class="block font-medium text-gray-700 capitalize">nom</label>
                        <input
                            class="block mt-1 w-full rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                            v-model="form_update.nom" type="text">
                    </div>

                    <!-- DESCRIPTION -->
                    <div class="mt-3">
                        <div v-if="errors.description" class="text-red-700 text-lg mx-auto flex justify-center">{{
                            errors.description }}</div>
                        <label class="block mt-3 font-medium text-gray-700 capitalize">description</label>
                        <textarea
                            class="block mt-1 w-full rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                            v-model="form_update.description" type="text"></textarea>
                    </div>

                    <!-- STATUT -->
                    <div class="mt-3">
                        <div v-if="errors.statut" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.statut
                        }}
                        </div>
                        <label class="block font-medium text-gray-700 capitalize-first">statut</label>
                        <select
                            class="block mt-1 rounded-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 shadow-sm"
                            v-model="form_update.statut">
                            <option value="en attente">En attente</option>
                            <option value="en ligne">En ligne</option>
                        </select>
                    </div>

                    <button @click="update(selectedTag)"
                        class="mt-4 rounded border focus:ring-cyan-500 focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-50 active:bg-cyan-900 bg-cyan-800 hover:bg-cyan-700 font-medium w-full text-white px-2 py-1 uppercase">mettre
                        à jour</button>
                </div>
            </div>
        </div>


    </AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue'
<<<<<<< Updated upstream

export default {
    components: {
        AppLayout,
=======


export default {
    components: {
        AppLayout
>>>>>>> Stashed changes
    },

    props: ['tags', 'errors',],

    data() {
        return {
            isOpenCreate: false,
            isOpenEdit: false,
            selectedTag: null,
            form_create: {
                nom: null,
                description: null,
                statut: null,
            },
            form_update: {
                nom: this.selectedTag ? this.selectedTag.nom : '',
                description: this.selectedTag ? this.selectedTag.description : '',
                statut: this.selectedTag ? this.selectedTag.statut : '',
            }
        }
    },

    watch: {
        selectedTag: {
            handler() {
                if (this.selectedTag) {
                    this.form_update.nom = this.selectedTag.nom;
                    this.form_update.description = this.selectedTag.description;
                    this.form_update.statut = this.selectedTag.statut;
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
            this.form_create.nom = null;
            this.form_create.description = null;
            this.form_create.statut = null;

            // reinitialize errors
            this.errors.nom = null;
            this.errors.description = null;
            this.errors.statut = null;
        },

        resetEditForm() {
            // reinitialize errors
            this.errors.nom = null;
            this.errors.description = null;
            this.errors.statut = null;
        },

        edit(tag) {
            this.selectedTag = tag;
            this.isOpenEdit = true;
        },

        update(tag) {
            this.$inertia.put(route('tags.update', tag), this.form_update, {
                preserveState: (page) => Object.keys(page.props.errors).length,
                onSuccess: () => this.isOpenEdit = false,
            });
        },

        create() {
            this.$inertia.post(route('tags.store'), this.form_create, {
                preserveState: (page) => Object.keys(page.props.errors).length,
                onSuccess: () => this.isOpenCreate = false,
            })
        },

        destroy(tag) {
            const confirmed = window.confirm('Êtes-vous sûr de vouloir supprimer ce tag ?');

            if (confirmed) {
                this.$inertia.delete(route('tags.destroy', tag));
            } else {
            }
        }
    }
}
</script>
