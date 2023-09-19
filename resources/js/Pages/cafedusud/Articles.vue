<template>
    <!-- INDEX  -->
    <div class="flex flex-row flex-wrap">
        <div v-for="article in articles" class="w-1/4 justify-evenly">
            <div class=" bg-cyan-200 text-center mx-4 my-2">
                <p> {{ article.titre }} </p>
                <p> {{ article.contenu }} </p>
                <p> {{ article.type }} </p>
                <p> {{ article.url }} </p>
                <p> {{ article.date_publication }} </p>
                <p> {{ article.date_debut }} </p>
                <p> {{ article.date_fin }} </p>
                <p> {{ article.statut }} </p>
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
                <!-- <p>Titre</p> -->
                <p> {{ selectedArticle.titre }} </p>
                <p> {{ selectedArticle.contenu }} </p>
                <p> {{ selectedArticle.type }} </p>
                <p> {{ selectedArticle.image }} </p>
                <p> {{ selectedArticle.date_publication }} </p>
                <p> {{ selectedArticle.date_debut }} </p>
                <p> {{ selectedArticle.date_fin }} </p>
                <p> {{ selectedArticle.statut }} </p>
            </div>
            <button @click="destroy(selectedArticle)" class="rounded bg-red-500 px-2 py-1">DELETE</button>
        </div>
    </div>

    <!-- MODALE CREATE -->
    <div v-if="isOpenCreate" class="fixed top-0 bg-black/20 w-full h-full justify-center  flex backdrop-blur-md">
        <div>
            <button @click="isOpenCreate = false" class="bg-red-700 mr-auto">CLOSE</button>
            <div>
                <label>Titre</label>
                <input v-model="form_create.titre" type="text">
            </div>

            <div>
                <label>Contenu</label>
                <input v-model="form_create.contenu" type="text">
            </div>

            <div>
                <label>Type</label>
                <select v-model="form_create.type">
                    <option value="evenement">Évenement</option>
                    <option value="actualite">Actualité</option>
                </select>
            </div>

            <div>
                <label>url</label>
                <input v-model="form_create.url" type="url">
            </div>

            <div>
                <label>Date de publication</label>
                <input v-model="form_create.date_publication" type="date">
            </div>

            <div>
                <label>Date de début</label>
                <input v-model="form_create.date_debut" type="date">
            </div>

            <div>
                <label>Date de fin</label>
                <input v-model="form_create.date_fin" type="date">
            </div>

            <div>
                <label>Statut</label>
                <select v-model="form_create.statut">
                    <option value="en attente">En attente</option>
                    <option value="en ligne">En ligne</option>
                </select>
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
                <input v-model="form_edit.titre" type="text">
            </div>

            <div>
                <label>Contenu</label>
                <input v-model="form_edit.contenu" type="text">
            </div>

            <div>
                <label>Type</label>
                <select v-model="form_edit.type">
                    <option value="evenement">Évenement</option>
                    <option value="actualite">Actualité</option>
                </select>
            </div>

            <div>
                <label>url</label>
                <input v-model="form_edit.url" type="url">
            </div>

            <div>
                <label>Date de publication</label>
                <input v-model="form_edit.date_publication" type="date">
            </div>

            <div>
                <label>Date de début</label>
                <input v-model="form_edit.date_debut" type="date">
            </div>

            <div>
                <label>Date de fin</label>
                <input v-model="form_edit.date_fin" type="date">
            </div>

            <div>
                <label>Statut</label>
                <select v-model="form_edit.statut">
                    <option value="en attente">En attente</option>
                    <option value="en ligne">En ligne</option>
                </select>
            </div>
        </div>
        <button @click="update(form_edit)" class="rounded bg-amber-500 px-2 py-1">UPDATE</button>
        <button @click="console.log(this.selectedArticle.id)" class="rounded bg-rose-500 px-2 py-1">CONSOLE LOG</button>
    </div>
</template>

<script>
export default {
    props: ["articles"],

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
            },
            form_edit: {
                titre: this.selectedArticle ? this.selectedArticle.titre : '',
                contenu: this.selectedArticle ? this.selectedArticle.contenu : '',
                type: this.selectedArticle ? this.selectedArticle.type : '',
                url: this.selectedArticle ? this.selectedArticle.image : '',
                date_publication: this.selectedArticle ? this.selectedArticle.date_publication : '',
                date_debut: this.selectedArticle ? this.selectedArticle.date_debut : '',
                date_fin: this.selectedArticle ? this.selectedArticle.date_fin : '',
                statut: this.selectedArticle ? this.selectedArticle.statut : '',
            }
        }
    },

    methods: {
        show(article) {
            this.selectedArticle = article;
            this.isOpenShow = true;
        },

        edit(article){
            this.selectedArticle = article;
            this.isOpenEdit = true;
        },


        update: function (form_edit) {
            this.$inertia.put('/articles/' + this.selectedArticle.id, form_edit.id)
        },

        // update: function (form_edit) {
        //     this.$inertia.put('/articles/' + form_edit.id, form.id)
        // },

        create: function () {
            this.$inertia.post('/articles', this.form_create);
        },

        destroy(article) {
            this.$inertia.delete('/articles/' + article.id, article)
        },

    },
}
</script>
