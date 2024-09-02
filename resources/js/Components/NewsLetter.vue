<template>
    <section class="py-16 sm:py-24 lg:py-32">
        <div class="mx-auto grid max-w-7xl grid-cols-1 gap-10 px-6 lg:grid-cols-12 lg:gap-8 lg:px-8">
            <div class="max-w-xl lg:col-span-7">
                <h2 class="w-full font-alumni text-6xl capitalize-first">Restez informé</h2>
                <span class="font-Dela text-xl">abonnez-vous à notre newsletter</span>
                <p class="font-abeezee leading-relaxed text-slate-700 text-sm mt-4">
                    Ne manquez plus aucune actualité ! En vous inscrivant à notre newsletter, vous recevrez
                    directement dans votre boîte mail toutes les informations sur nos prochains événements,
                    expositions, ateliers et bien plus encore. Soyez les premiers à découvrir nos nouveautés et à
                    participer à la vie artistique de notre communauté. Rejoignez-nous dès maintenant et restez
                    connecté à notre univers créatif !
                </p>
            </div>
            <div class="w-full max-w-md lg:col-span-5 lg:pt-2">
                <div class="w-full max-w-xl lg:pt-2">
                    <div class="flex gap-x-4 w-full">
                        <div class="group w-full">
                            <label for="email" class="block capitalize-first group-focus-within:text-violet-1">email</label>
                            <div v-if="errors.email" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.email }}</div>
                            <input v-model="form_create.email" id="email-address" name="email" type="email" autocomplete="email" required class="w-full bg-gray-100 border-0 border-b-2  border-gris-1 py-2 focus:ring-0 group-focus:border-violet-1 focus:border-violet-1 placeholder:italic placeholder:text-gris-2">
                        </div>
                        <button @click="create()" class="mt-6 flex-none rounded-md bg-violet-4 px-3.5 py-2.5 text-sm font-semibold text-blanc-1 shadow-sm hover:ring ring-violet-1/20 hover:scale-105 ease-in-out duration-200 hover:bg-violet-1 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">S'abonner</button>
                    </div>
                    <div class="mt-4 relative flex items-start">
                        <div class="flex h-6 items-center">
                            <input required id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        </div>
                        <div class="ml-3 text-sm leading-6 mr-28">
                            <label for="comments" class="text-sm leading-6 text-gray-600">
                                En soumettant ce formulaire, j'accepte de recevoir des communications par e-mail de la part
                                des Casas du Sud concernant les événements et les actualités, conformément à la
                                <a href="#" class="font-semibold text-violet-4 hover:text-violet-1">politique de confidentialité</a>.
                            </label>
                        </div>
                    </div>
                    <span v-if="errors.email" class="text-red-700 text-sm mx-auto flex justify-start">{{ errors.email }}</span>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            form_create: {
                email: null
            },
            errors: [],
        }
    },
    methods: {
        create() {
            this.$inertia.post(route('newsletters.store'), this.form_create, {
                preserveState: (page) => Object.keys(page.props.errors).length,
            })
        },
    },
};
</script>
