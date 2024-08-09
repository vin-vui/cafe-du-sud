<template>
    <GuestLayout :title="title">
        <section
            class="bg-[url('https://images.unsplash.com/photo-1526764279915-c9f6a84f10d1?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] h-screen bg-no-repeat bg-cover bg-center">
            <div class="absolute bottom-0 h-48 w-full bg-gradient-to-t from-white from-20%"></div>
            <div class="h-full flex items-center justify-center">
                <h1 class="mx-4 text-center font-alumni text-blanc-1 backdrop-blur-3xl bg-black/30 md:p-12 p-6 rounded-3xl -rotate-2 flex flex-col border-8 border-double border-blanc-1">
                    <span class="md:text-9xl text-7xl bg-gradient-to-bl from-indigo-200 via-red-200 to-yellow-100 bg-clip-text text-transparent">Contactez-nous !</span>
                    <span class="font-Dela md:text-3xl text-xl">une question, une remarque, <br> une suggestion, une demande ?</span>
                </h1>
            </div>
        </section>

        <ShapeTop />

        <div class="bg-gradient-to-tl from-indigo-200 via-red-200 to-yellow-100">
            <div class="max-w-7xl sm:mx-auto py-48 mx-4">
                <div class="lg:w-10/12 mx-auto lg:flex relative z-40  lg:after:bg-orange-2 after:rounded-lg after:absolute after:w-full after:h-full after:top-8 after:left-8 after:-z-50">
                    <!-- Informations de contact -->
                    <div class="lg:w-1/2 bg-orange-3 md:rounded-l-xl md:rounded-tr-none rounded-t-xl md:px-12 px-4 flex flex-col justify-center">
                        <h4 class="mt-8 text-xl font-Dela">Informations de contact</h4>
                        <p class="mt-4 font-abeezee leading-relaxed">
                            Remplissez ce formulaire pour nous envoyer un message.
                            Nous vous répondrons dès que possible.
                            Ou contactez-nous directement par email ou téléphone.
                            Vous pouvez aussi nous suivre sur les réseaux sociaux.
                            Et bien sûr, vous pouvez venir nous voir !
                        </p>
                        <!-- Renseignements -->
                        <div class="my-12 font-abeezee">
                            <!-- email -->
                            <div class="flex flex-col sm:flex-row justify-between">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z">
                                        </path>
                                        <path d="M3 7l9 6l9 -6"></path>
                                    </svg>
                                    <p class="ml-2">email</p>
                                </div>
                                <a class="ml-8 md:ml-0 text-violet-4 hover:text-violet-1/50 font-abeezee" href="mailto:contact@atelierdusud.fr">contact@atelierdusud.fr</a>
                            </div>
                            <!-- téléphone -->
                            <div class="flex flex-col sm:flex-row justify-between my-2">
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
                                <a class="ml-8 md:ml-0 text-violet-4 hover:text-violet-1/50 font-abeezee" href="tel:+33460854201">04 60 85 42 01</a>
                            </div>
                            <!-- adresse -->
                            <div class="flex flex-col sm:flex-row justify-between">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                        <path
                                            d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                        </path>
                                    </svg>
                                    <p class="ml-2">adresse</p>
                                </div>
                                <a class="ml-8 md:ml-0 text-violet-4 hover:text-violet-1/50 font-abeezee" href="https://maps.app.goo.gl/cPR9Md9rR4xuo5QG9">6 rue Bersot - 25000 Besançon</a>
                            </div>
                        </div>
                        <!-- Réseaux sociaux -->
                        <div class="flex justify-between gap-4 w-4/12 mx-auto mb-8 md:md-0">
                            <a href="https://www.facebook.com/atelierdusudbesancon/" aria-label="Page Facebook de l'Atelier du Sud Besançon" class="group">
                                <svg xmlns="http://www.w3.org/2000/svg" class="rounded-full text-blanc-1 shadow-sm hover:ring ring-violet-1/20 hover:scale-105 ease-in-out duration-200 hover:bg-violet-1 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white bg-violet-4 size-12 p-2" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/latelierdusudbesancon/" aria-label="Compte Instagram de l'Atelier du Sud Besançon" class="group">
                                <svg xmlns="http://www.w3.org/2000/svg" class="rounded-full text-blanc-1 shadow-sm hover:ring ring-violet-1/20 hover:scale-105 ease-in-out duration-200 hover:bg-violet-1 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white bg-violet-4 size-12 p-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                                    <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                    <path d="M16.5 7.5l0 .01"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Formulaire de contact  -->
                    <div class="lg:w-1/2 w-full bg-blanc-1 font-abeezee md:rounded-r-xl md:rounded-bl-none rounded-b-xl md:p-12 px-4 py-8 flex flex-col gap-8 justify-center">
                        <!-- Prénom + Nom -->
                        <div class="lg:flex justify-between gap-4">
                            <!-- Prénom -->
                            <div class="group">
                                <div v-if="errors.surname" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.surname }}</div>
                                <label for="first_name" class="block capitalize-first group-focus-within:text-violet-1">prénom</label>
                                <input v-model="form.surname" autocomplete="family-name" type="text" id="first_name" name="first_name"
                                    class="w-full bg-gray-100 border-0 border-b-2 border-gris-1 py-2 focus:ring-0 group-focus:border-violet-1 focus:border-violet-1 placeholder:italic placeholder:text-gris-2">
                            </div>
                            <!-- Nom -->
                            <div class="group my-6 lg:my-0">
                                <div v-if="errors.name" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.name }}</div>
                                <label for="last_name" class="block capitalize-first group-focus-within:text-violet-1">nom</label>
                                <input type="text" id="last_name" name="last_name" v-model="form.name" autocomplete="name"
                                    class="w-full bg-gray-100 border-0 border-b-2 border-gris-1 py-2 focus:ring-0 group-focus:border-violet-1 focus:border-violet-1 placeholder:italic placeholder:text-gris-2">
                            </div>
                        </div>
                        <!-- Email + Téléphone -->
                        <div class="lg:flex justify-between gap-4">
                            <!-- Email -->
                            <div class="group">
                                <label for="email" class="block capitalize-first group-focus-within:text-violet-1">email</label>
                                <div v-if="errors.email" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.email }}</div>
                                <input type="email" v-model="form.email"
                                    class="w-full bg-gray-100 border-0 border-b-2 border-gris-1 py-2 focus:ring-0 group-focus:border-violet-1 focus:border-violet-1 placeholder:italic placeholder:text-gris-2">
                            </div>

                            <!-- Téléphone -->
                            <div class="group my-6 lg:my-0">
                                <label for="telephone" class="block capitalize-first group-focus-within:text-violet-1">téléphone</label>
                                <div v-if="errors.phone" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.phone }}</div>
                                <input type="text" v-model="form.phone"
                                    class="w-full bg-gray-100 border-0 border-b-2 border-gris-1 py-2 focus:ring-0 group-focus:border-violet-1 focus:border-violet-1 placeholder:italic placeholder:text-gris-2">
                            </div>
                        </div>
                        <!-- Message -->
                        <div class="group">
                            <label for="message" class="block capitalize-first group-focus-within:text-violet-1">message</label>
                            <textarea v-model="form.content" rows="5" id="message" name="message"
                                class="w-full bg-gray-100 border-0 border-b-2 border-gris-1 py-2 focus:ring-0 group-focus:border-violet-1 focus:border-violet-1 placeholder:italic placeholder:text-gris-2"></textarea>
                        </div>

                        <div class="mt-4 relative flex items-start">
                            <div class="flex h-6 items-center">
                                <input required id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="ml-3 text-sm leading-6">
                                <label for="comments" class="text-sm leading-6 text-gray-600">
                                    En soumettant ce formulaire, j'accepte que mes informations soient utilisées par les Casas du Sud pour répondre à ma demande, conformément à la <a href="#" class="font-semibold text-violet-4 hover:text-violet-1">politique de confidentialité</a>.
                                </label>
                            </div>
                        </div>

                        <button @click="create()"
                            class="rounded-md bg-violet-4 px-3.5 py-2.5 text-sm font-semibold text-blanc-1 shadow-sm hover:ring ring-violet-1/20 hover:scale-105 ease-in-out duration-200 hover:bg-violet-1 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                            Envoyer mon message
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <ShapeBottom />

        <Footer />

    </GuestLayout>
</template>

<script>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import Footer from '@/Components/Footer.vue'
import ShapeTop from '@/Components/ShapeTop.vue'
import ShapeBottom from '@/Components/ShapeBottom.vue'

export default {
    components: {
        GuestLayout,
        Footer,
        ShapeTop, ShapeBottom
    },

    props: {
        errors: {
            type: Array,
        },
    },

    data() {
        return {
            title: "Contacter-nous !",
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
