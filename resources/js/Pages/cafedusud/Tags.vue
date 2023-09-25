<template>
    <AppLayout>
        <Navbar/>

        <!-- INDEX TAGS -->
        <div v-for="tag in tags" class="w-1/4 justify-evenly">
            <div class=" bg-cyan-200 text-center mx-4 my-2">
                <p> {{ tag.nom }} </p>
                <p> {{ tag.statut }} </p>
                <p> {{ tag.description }} </p>

                <button @click="show(tag)" class="rounded bg-cyan-600 px-2 py-1">SHOW</button>
                <button @click="edit(tag)" class="rounded bg-yellow-400 px-2 py-1">EDIT</button>
            </div>
        </div>
        <button @click="this.isOpenCreate = true" class="rounded bg-green-500 px-2 py-1">ADD</button>

        <!-- MODALE SHOW -->
        <div v-if="isOpenShow" class="fixed top-0 bg-black/20 w-full h-full justify-center flex backdrop-blur-md">
            <div class="bg-cyan-100/50">
                <button @click="isOpenShow = false" class="bg-red-700 mr-auto">CLOSE</button>
                <div>
                    <p> {{ selectedTag.nom }} </p>
                    <p> {{ selectedTag.statut }} </p>
                    <p> {{ selectedTag.description }} </p>
                </div>
                <button @click="destroy(selectedTag)" class="rounded bg-red-500 px-2 py-1">DELETE</button>
            </div>
        </div>

        <!-- MODALE CREATE -->
        <div v-if="isOpenCreate" class="fixed top-0 bg-black/20 w-full h-full justify-center  flex backdrop-blur-md">
            <div>
                <button @click="isOpenCreate = false" class="bg-red-700 mr-auto">CLOSE</button>
                <button @click="create(form_create)" class="rounded bg-green-500 px-2 py-1">CREATE</button>

                <div>
                    <div v-if="errors.nom" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.nom }}</div>
                    <label>nom</label>
                    <input v-model="form_create.nom" type="text">
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
                    <div v-if="errors.description" class="text-red-700 text-lg mx-auto flex justify-center">{{
                        errors.description }}</div>
                    <label>Description</label>
                    <input v-model="form_create.description" type="text">
                </div>

            </div>
        </div>

        <!-- MODALE EDIT -->
        <div v-if="isOpenEdit" class="fixed top-0 bg-black/20 w-full h-full justify-center flex backdrop-blur-md">
            <button @click="isOpenEdit = false" class="bg-red-700 mr-auto">CLOSE</button>
            <div>
                <div>
                    <label>Nom</label>
                    <input v-model="form_update.nom" type="text">
                </div>
                <div>
                    <label>Statut</label>
                    <select v-model="form_update.statut">
                        <option value="en attente">En attente</option>
                        <option value="en ligne">En ligne</option>
                    </select>
                </div>

                <div>
                    <label>Description</label>
                    <input v-model="form_update.description" type="text">
                </div>
            </div>
            <button @click="update(selectedTag)" class="rounded bg-amber-500 px-2 py-1">UPDATE</button>
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

    props: ['tags', 'errors',],

    data() {
        return {
            isOpenShow: false,
            isOpenCreate: false,
            isOpenEdit: false,
            form_create: {
                nom: null,
                statut: null,
                description: null,
            },
            form_update: {
                nom: this.selectedTag ? this.selectedTag.nom : '',
                statut: this.selectedTag ? this.selectedTag.statut : '',
                description: this.selectedTag ? this.selectedTag.description : '',
            }
        }
    },

    methods: {
        show(tag) {
            this.selectedTag = tag;
            this.isOpenShow = true;
        },

        edit(tag) {
            this.selectedTag = tag;
            this.isOpenEdit = true;
        },

        update(tag) {
            this.$inertia.put(route('tags.update', tag), this.form_update);
            this.isOpenEdit = false;
        },

        create() {
            this.$inertia.post(route('tags.store'), this.form_create);
        },

        destroy(tag) {
            this.$inertia.delete(route('tags.destroy', tag))
        },
    }
}
</script>
