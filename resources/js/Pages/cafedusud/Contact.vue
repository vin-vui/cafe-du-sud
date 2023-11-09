<template >
    <UserLayout>
        <div class="flex-col justify-center">
            <h2 class="mt-20 text-6xl font-alumni text-center">Contactez-nous !</h2>
            <p class="mt-8 text-3xl font-Dela text-center w-8/12 mx-auto">Une question, une remarque, une suggestion, une
                demande ?
                Envoyez-nous simplement un message !</p>
        </div>

        <!-- Carte de contact -->
        <div
            class="lg:w-10/12 mx-auto lg:flex mt-20 relative z-50  lg:after:bg-orange-2 after:rounded-lg after:absolute after:w-full after:h-full after:top-8 after:left-8 after:-z-50">
            <!-- Informations de contact -->
            <div class="lg:w-1/2 bg-orange-3 rounded-l-xl">
                <h4 class="mt-8 text-xl font-Dela text-center w-8/12 mx-auto capitalize-"> informations de contact</h4>
                <p class="mt-4 font-abeezee mx-auto w-8/12 capitalize-first">remplissez ce formulaire pour nous envoyer un
                    message, nous vous
                    répondrons dès que possible.</p>

                <!-- Renseignements -->
                <div class="lg:w-8/12 -w mx-auto mt-12 font-abeezee w-10/12">
                    <!-- email -->
                    <div class="flex justify-between">
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z">
                                </path>
                                <path d="M3 7l9 6l9 -6"></path>
                            </svg>
                            <p class="ml-2">email</p>
                        </div>
                        <p>contact@atelierdusud.fr</p>
                    </div>

                    <!-- téléphone -->
                    <div class="flex justify-between my-6">
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                </path>
                            </svg>
                            <p class="ml-2">téléphone</p>
                        </div>
                        <p>0606060606</p>
                    </div>


                    <!-- adresse -->
                    <div class="flex justify-between">
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                </path>
                            </svg>
                            <p class="ml-2">adresse</p>
                        </div>
                        <p>6 rue bersot, 25000 Besançon</p>
                    </div>
                </div>

                <!-- Réseaux sociaux -->
                <div class="flex justify-between w-4/12 mx-auto mt-16 ">
                    <a href="https://www.facebook.com/atelierdusudbesancon/" class="group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="group-hover:stroke-violet-1 rounded-full bg-orange-2 w-10 h-10 p-1" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                        </svg>
                    </a>

                    <a href="https://www.instagram.com/latelierdusudbesancon/" class="group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="group-hover:stroke-violet-1 rounded-full bg-orange-2 w-10 h-10 p-1" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                            <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                            <path d="M16.5 7.5l0 .01"></path>
                        </svg>
                    </a>

                </div>

            </div>

            <!-- Formulaire de contact  -->
            <div class="lg:w-1/2 w-full bg-blanc-1 font-abeezee rounded-r-xl">
                <form>
                    <!-- Prénom + Nom -->
                    <div class="lg:flex mb-4 justify-between px-4 py-8">
                        <!-- Prénom -->
                        <div class="group">
                            <div v-if="errors.surname" class="text-red-700 text-lg mx-auto flex justify-center">{{
                                errors.surname }}</div>
                            <label for="prenom"
                                class="block capitalize-first group-focus-within:text-violet-1">prénom</label>
                            <input v-model="form.surname"
                                class="bg-transparent border-0 border-b-2  border-gris-1 py-2 focus:ring-0 group-focus:border-violet-1 focus:border-violet-1 placeholder:italic placeholder:text-gris-2"
                                placeholder="Pierre" type="text" id="prenom" name="prenom">
                        </div>


                        <!-- Nom -->
                        <div class="group my-6 lg:my-0">
                            <div v-if="errors.name" class="text-red-700 text-lg mx-auto flex justify-center">{{
                                errors.name }}</div>
                            <label for="nom" class="block capitalize-first group-focus-within:text-violet-1">nom</label>
                            <input type="text" id="nom" name="nom" placeholder="Dupont" v-model="form.name"
                                class="bg-transparent border-0 border-b-2  border-gris-1 py-2 focus:ring-0 group-focus:border-violet-1 focus:border-violet-1 placeholder:italic placeholder:text-gris-2">
                        </div>
                    </div>

                    <!-- Email + Téléphone -->
                    <div class="lg:flex mb-4 justify-between px-4 py-8">
                        <!-- Email -->
                        <div class="group">
                            <label for="email" class="block capitalize-first group-focus-within:text-violet-1">email</label>
                            <div v-if="errors.email" class="text-red-700 text-lg mx-auto flex justify-center">{{
                                errors.email }}</div>
                            <input type="email" placeholder="Pierre.Dupont@gmail.com" v-model="form.email"
                                class="bg-transparent border-0 border-b-2  border-gris-1 py-2 focus:ring-0 group-focus:border-violet-1 focus:border-violet-1 placeholder:italic placeholder:text-gris-2">
                        </div>

                        <!-- Téléphone -->
                        <div class="group my-6 lg:my-0">
                            <label for="telephone"
                                class="block capitalize-first group-focus-within:text-violet-1">téléphone</label>
                            <div v-if="errors.phone" class="text-red-700 text-lg mx-auto flex justify-center">{{
                                errors.phone }}</div>
                            <input type="number" placeholder="06XXXXXXXX" v-model="form.phone"
                                class="bg-transparent border-0 border-b-2  border-gris-1 py-2 focus:ring-0 group-focus:border-violet-1 focus:border-violet-1 placeholder:italic placeholder:text-gris-2">
                        </div>
                    </div>

                    <!-- Message -->
                    <div class="mb-4 px-4 py-8 group">
                        <label for="message" class="block capitalize-first group-focus-within:text-violet-1">message</label>
                        <input v-model="form.content" type="text"
                            placeholder="Bonsoir, prévoyez-vous l'organisation d'un atelier pâte à crêpe ?"
                            class="w-full border-2 rounded  border-gris-1 py-2 focus:ring-0 group-focus:border-violet-1 focus:border-violet-1 placeholder:italic placeholder:text-gris-2 ">
                    </div>

                    <button @click="create()"
                        class=" px-2 py-1 mb-8 bg-violet-4 rounded-lg font-abeezee mx-auto flex mt-8 text-xl text-blanc-1 hover:bg-violet-1 hover:ring">
                        Envoyer mon message</button>
                </form>
            </div>



        </div>

    </UserLayout>
</template>

<script>
import UserLayout from '@/Layouts/UserLayout.vue'
import moment from 'moment'

export default {
    props: ['articles', 'errors'],

    components: {
        UserLayout,
    },

    data() {
        return {
            moment: moment,
            form: {
                surname: null,
                name: null,
                email: null,
                phone: null,
                content: null,
            },
        }
    },

    methods: {
        create() {
            this.$inertia.post(route('messages.store'), this.form, {
                preserveState: (page) => Object.keys(page.props.errors).length,
            })
        },
    }
}
</script>
