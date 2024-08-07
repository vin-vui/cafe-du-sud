<template>
    <UserLayout>

        <!-- Section 1  -->
        <section class="bg-[url('/images/bgImgLanding.webp')] h-screen bg-no-repeat bg-cover bg-center">
            <div class="absolute bottom-0 h-48 w-full bg-gradient-to-t from-white from-20%"></div>
            <div class="h-full flex items-center justify-center">
                <h1 class="mx-4 text-center font-alumni text-blanc-1 backdrop-blur-3xl bg-white/30 md:p-12 p-6 rounded-3xl rotate-2 flex flex-col border-8 border-double border-blanc-1">
                    <span class="md:text-9xl text-7xl bg-gradient-to-bl from-indigo-200 via-red-200 to-yellow-100 bg-clip-text text-transparent">Les Casas</span>
                    <span class="font-Dela md:text-3xl text-xl">atelier du sud - café du sud</span>
                </h1>
            </div>
        </section>

        <ShapeTop />

        <!-- Section 2  - Atelier Du Sud -->
        <section class="bg-gradient-to-tl from-indigo-200 via-red-200 to-yellow-100 ">
            <section class="w-full mx-auto px-4 sm:w-10/12 py-32">
                <h2 class="capitalize font-alumni text-7xl justify-center flex pt-16 text-center">l'Atelier du sud</h2>
                <span class="font-Dela text-xl justify-center flex text-center">en quelques points, qu'est-ce que c'est ?</span>
                <div class="w-full justify-between py-8 flex-col">
                    <!-- Point 1 -->
                    <div class="w-full my-12 bg-blanc-1 border-jaune-1 border-8 border-double rounded-xl lg:px-8 px-4 py-6 lg:w-10/12 rotate-1">
                        <h3 class="font-Dela text-xl lg:text-2xl capitalize-first justify-center flex mb-4">🤝 Un lieu 🤝</h3>
                        <p class="font-abeezee text-lg mt-2 p-2">
                            L'Atelier Du Sud c'est avant tout la maison de toutes nos associations,
                            un laboratoire dans lequel nous expérimentons les limites de l'art et un lieu de vie commun
                            où chacun peut venir s'exprimer et s'épanouir.
                        </p>
                    </div>
                    <!-- Point 2 -->
                    <div class="w-full my-12 bg-blanc-1 border-bleu-1 border-8 border-double rounded-xl lg:ml-auto lg:px-8 px-4 py-6 lg:w-10/12 -rotate-1">
                        <h3 class="font-Dela text-xl lg:text-2xl capitalize-first justify-center flex mb-4">🎨 L'Art sans limites 🎨</h3>
                        <p class="font-abeezee text-lg mt-2 p-2">
                            Explorez une programmation dynamique : ateliers créatifs, spectacles, débats et rencontres.
                            Un espace foisonnant d'opportunités artistiques, à partager sans retenue.
                            Collaborer et créer des projets novateurs. Osez l'expérience artistique sans frontières.
                        </p>
                    </div>
                    <!-- Point 3 -->
                    <div class="w-full my-12 bg-blanc-1 border-rouge-1 border-8 border-double rounded-xl lg:px-8 px-4 py-6 lg:w-10/12 skew-x-1">
                        <h3 class="font-Dela text-xl lg:text-2xl capitalize-first justify-center flex mb-4">🌟 Des valeurs fortes 🌟</h3>
                            <p class="font-abeezee text-lg mt-2 p-2">
                                Une association née de la passion, un lieu où chacun peut libérer son talent et se connecter.
                                Etant particulièrement sensible aux valeurs d'inclusivité, nous accueillons tout le monde
                                quelque soit leur parcours, expériences ou envies afin de leur
                                donner un lieux pour s'exprimer et s'épanouir.
                            </p>
                    </div>
                </div>
            </section>
        </section>

        <ShapeBottom />

        <!-- Section 3 - Les associations  -->
        <section class="bg-white pb-28 ">
            <section class="lg:w-10/12 w-full mx-auto">
                <!-- Ciconia theatre -->
                <div class="flex flex-col lg:flex-row pt-28 justify-between px-4 lg:px-0">
                    <div class="w-5/12 hidden lg:flex relative after:bg-bleu-1 after:rounded-lg after:absolute lg:after:w-full after:h-full after:top-6 after:left-6 after:z-0">
                        <img class="rounded-lg relative z-10 h-full w-full object-cover" src="/images/image1.webp" alt="Image d'illustration de l'association Ciconia theatre">
                    </div>
                    <div class="lg:w-1/2 flex-col">
                        <div class="sm:flex">
                            <div class="mb-4 flex-shrink-0 sm:mb-0 sm:mr-4">
                                <img src="/images/logo-ciconia.webp" class="h-32 w-full sm:w-32 object-contain " alt="Logo de Ciconia théatre">
                            </div>
                            <div>
                                <h3 class="font-alumni text-7xl">Ciconia Théâtre</h3>
                                <h4 class="font-Dela text-lg">Une compagnie artistique engagée, basée en Franche-Comté.</h4>
                            </div>
                        </div>
                        <p class="font-abeezee text-lg md:ml-36 ml mt-4">
                            Notre mission ? Explorer les recoins de l'art et de la créativité pour susciter la réflexion, l'expression et la révolte.
                        </p>
                        <p class="font-abeezee text-lg md:ml-36 mt-4">
                            De l'animation d'ateliers en milieu carcéral à nos performances en milieu rural, nous mettons en avant l'inclusion, la diversité et le partage.
                            Venez rejoindre notre communauté, où chaque voix compte, chaque histoire est précieuse, et chaque spectacle est une aventure.
                            Ensemble, créons un monde de poésie, de solidarité et de découverte.
                        </p>
                    </div>
                </div>
                <!-- Envida -->
                <div class="flex flex-col lg:flex-row pt-28 justify-between p-4 lg:px-0">
                    <div class="lg:w-1/2 flex-col">
                        <div class="sm:flex">
                            <div class="mb-4 flex-shrink-0 sm:mb-0 sm:mr-4">
                                <img src="/images/logo-envida.webp" class="h-32 w-full sm:w-32 object-contain " alt="Logo de l'association Envida">
                            </div>
                            <div>
                                <h3 class="font-alumni text-7xl">Envida</h3>
                                <h4 class="font-Dela text-lg">Ce nouveau projet est un lieu de vie commun où chacun peut s'exprimer et s'épanouir.</h4>
                            </div>
                        </div>
                        <p class="font-abeezee text-lg md:ml-36 mt-4">
                            Ce bel avenir est porté par des valeurs fortes d'accessibilité, d'inclusivité et de collectif.
                        </p>
                        <p class="font-abeezee text-lg md:ml-36 mt-4">
                            Elle souhaite créer un monde meilleur, un monde où la culture est accessible à tous.
                            Ce monde meilleur est un lieu où les arts se décloisonnent et où les cultures se rencontrent.
                            C'est un lieu où chacun peut s'exprimer et s'épanouir.
                        </p>
                    </div>
                    <div class="w-5/12 hidden lg:flex relative after:bg-rouge-1 after:rounded-lg after:absolute lg:after:w-full after:h-full after:top-6 after:left-6 after:z-0">
                        <img class="rounded-lg relative z-10 h-full w-full object-cover" src="/images/image2.webp" alt="Image d'illustration de l'association Envida">
                    </div>
                </div>
                <!-- Gangassa -->
                <div class="flex flex-col lg:flex-row pt-28 justify-between px-4 lg:px-0">
                    <div class="w-5/12 hidden lg:flex relative after:bg-vert-1 after:rounded-lg after:absolute lg:after:w-full after:h-full after:top-6 after:left-6 after:z-0">
                        <img class="rounded-lg relative z-10 h-full w-full object-cover" src="/images/image3.webp" alt="Image d'illustration de l'association Gangassa">
                    </div>
                    <div class="lg:w-1/2 flex-col">
                        <div class="sm:flex">
                            <div class="mb-4 flex-shrink-0 sm:mb-0 sm:mr-4">
                                <img src="/images/gangassa-logo.webp" class="h-32 w-full sm:w-32 object-contain " alt="Logo de l'association Gangassa">
                            </div>
                            <div>
                                <h3 class="font-alumni text-7xl">Gangassa</h3>
                                <h4 class="font-Dela text-lg">Rejoignez notre association, un lieu d'inspiration et de partage, où l'art et la convivialité se rencontrent.</h4>
                            </div>
                        </div>
                        <p class="font-abeezee text-lg md:ml-36 mt-4">
                            Nous encourageons la diversité des savoirs, des talents et des expériences, favorisant une recherche constante et une approche inclusive.
                        </p>
                        <p class="font-abeezee text-lg md:ml-36 mt-4">
                            Nous mettons en lumière une variété de créations artistiques, de la scène au son, de la photographie à la poésie.
                            Notre action est ouverte à tous, favorisant les rencontres intergénérationnelles et les partenariats locaux.
                        </p>
                        <p class="font-abeezee text-lg md:ml-36 mt-4">
                            Nous sommes engagés dans des actions sociales et artistiques, offrant des moments de partage au public.
                            Notre espace collectif, "le Café du Sud," est le lieu de rencontres, d'émotions et de projets communs. Rejoignez notre communauté où l'art et la solidarité s'épanouissent.
                        </p>
                    </div>
                </div>
                <!-- Shon Lua-->
                <div class="flex flex-col lg:flex-row pt-28 justify-between px-4 lg:px-0">
                    <div class="lg:w-1/2 flex-col">
                        <div class="sm:flex">
                            <div class="mb-4 flex-shrink-0 sm:mb-0 sm:mr-4">
                                <img src="/images/logo-shonlua.webp" class="h-32 w-full sm:w-32 object-contain " alt="Logo de l'association Shon Lua">
                            </div>
                            <div>
                                <h3 class="font-alumni text-7xl">Shon Lua</h3>
                                <h4 class="font-Dela text-lg">L'atelier du sud est une association qui œuvre pour la promotion des arts et de la culture à Besançon.</h4>
                            </div>
                        </div>

                        <p class="font-abeezee text-lg md:ml-36 mt-4">
                            Elle est née de la volonté d'un groupe de passionnés qui souhaitent créer un espace de vie commun où chacun peut s'exprimer et partager ses talents.
                        </p>
                        <p class="font-abeezee text-lg md:ml-36 mt-4">
                            Cet espace de vie commun est un lieu de partage et de création où chacun peut s'exprimer et partager ses talents.
                            Il propose une programmation riche et variée, allant des ateliers de création aux spectacles en passant par les débats et les rencontres.
                        </p>
                    </div>
                    <div class="w-5/12 hidden lg:flex relative after:bg-jaune-1 after:rounded-lg after:absolute lg:after:w-full after:h-full after:top-6 after:left-6 after:z-0">
                        <img class="rounded-lg relative z-10 h-full w-full" src="/images/image3.webp" alt="Image d'illustration de l'association Shonlua">
                    </div>
                </div>
            </section>
        </section>

        <ShapeTop />

        <!-- Section 4 - Événements à venir -->
        <section class="bg-gradient-to-tl from-indigo-200 via-red-200 to-yellow-100">
            <div class="pt-40 w-10/12 mx-auto pb-32">
                <h2 class="w-full text-center font-alumni text-6xl capitalize-first">événements à venir</h2>
                <span class="font-Dela text-xl justify-center flex text-center">nos prochains moments forts</span>

                <!-- CARTES EVENEMENTS -->
                <div class="grid grid-cols-3 gap-4 mt-28">
                    <EventCard v-for="(article, index) in articles" :key="article.id" :article="article" :index="index" :length="articles.length" />
                </div>

                <a :href="route('calendar')">
                    <div class="p-4 bg-violet-4 flex justify-center items-center rounded-lg font-abeezee sm:mx-12 my-20 text-xl sm:text-2xl text-blanc-1 hover:bg-violet-1 hover:ring ring-violet-1/20 hover:scale-105 ease-in-out duration-200">
                        Découvrir tous les prochains événements
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M16.15 13H5q-.425 0-.712-.288T4 12t.288-.712T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.312t.712.287L19.3 11.3q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7z"/></svg>
                    </div>
                </a>
            </div>
        </section>

        <ShapeBottom />

        <!-- Section 5 - Newsletter -->
        <section class="py-16 sm:py-24 lg:py-32">
            <div class="mx-auto grid max-w-7xl grid-cols-1 gap-10 px-6 lg:grid-cols-12 lg:gap-8 lg:px-8">
                <div class="max-w-xl lg:col-span-7">
                    <h2 class="w-full font-alumni text-6xl capitalize-first">Restez informé</h2>
                    <span class="font-Dela text-xl">abonnez-vous à notre newsletter</span>
                    <p class="font-abeezee text-slate-700 text-sm mt-4">
                        Ne manquez plus aucune actualité ! En vous inscrivant à notre newsletter, vous recevrez directement dans votre boîte mail toutes les informations sur nos prochains événements, expositions, ateliers et bien plus encore. Soyez les premiers à découvrir nos nouveautés et à participer à la vie artistique de notre communauté. Rejoignez-nous dès maintenant et restez connecté à notre univers créatif !
                    </p>
                </div>
                <div class="w-full max-w-md lg:col-span-5 lg:pt-2">
                    <div class="w-full max-w-xl lg:pt-2">
                        <div class="flex gap-x-4">
                            <label for="email-address" class="sr-only">Adresse e-mail</label>
                            <input v-model="form_create.email" id="email-address" name="email" type="email" autocomplete="email" required class="min-w-0 flex-auto rounded-md border-0 bg-white/10 px-4 py-2 text-black shadow-sm ring-1 ring-inset ring-black/80  focus:ring-2 focus:ring-inset focus:ring-violet-4 sm:text-sm sm:leading-6" placeholder="Entrez votre adresse e-mail">
                            <button @click="create()" class="flex-none rounded-md bg-violet-4 px-3.5 py-2.5 text-sm font-semibold text-blanc-1 shadow-sm hover:ring ring-violet-1/20 hover:scale-105 ease-in-out duration-200 hover:bg-violet-1 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">S'abonner</button>
                        </div>
                        <span v-if="errors.email" class="text-red-700 text-sm mx-auto flex justify-start">{{ errors.email }}</span>
                        <p class="mt-4 text-sm leading-6 text-gray-600">Nous attachons de l'importance à vos données. Lisez notre <a href="#" class="font-semibold text-violet-4 hover:text-violet-1">politique de confidentialité</a>.</p>
                    </div>
                </div>
            </div>
        </section>

        <ShapeTop />

        <!-- Section 6 - Partenaires -->
        <section class="bg-blue-200 py-32">
            <div class="">
                <div class="flex flex-col justify-center w-ful items-center mb-20">
                    <h3 class="font-alumni text-6xl capitalize-first">nos partenaires</h3>
                    <span class="font-Dela text-xl">des soutiens précieux</span>
                </div>

                <div class="lg:flex lg:flex-row flex-col lg:justify-between px-4">
                    <!-- Partenaires institutionnels -->
                    <div class="">
                        <h4 class="capitalize-first font-Dela text-lg text-center mb-4">partenaires institutionnels</h4>
                        <div class="flex justify-between gap-2">
                            <a href="https://www.besancon.fr/" target="_blank" class="group">
                                <img class="h-24 hover:bg-white hover:scale-105 ease-in-out duration-200 p-4 rounded-xl" src="/images/logo_besançon.webp" alt="Logo de la ville de Besançon">
                                <span class="group-hover:block hidden absolute bg-white py-1 px-2 rounded-lg mt-2 text-xs">La ville de Besançon</span>
                            </a>
                            <a href="https://www.doubs.fr/" target="_blank" class="group">
                                <img class="h-24 hover:bg-white hover:scale-105 ease-in-out duration-200 p-4 rounded-xl" src="/images/logo_doubs.webp" alt="Logo du département du Doubs">
                                <span class="group-hover:block hidden absolute bg-white py-1 px-2 rounded-lg mt-2 text-xs">Le département du Doubs</span>
                            </a>
                            <a href="https://www.doubs.gouv.fr/" target="_blank" class="group">
                                <img class="h-24 hover:bg-white hover:scale-105 ease-in-out duration-200 p-4 rounded-xl" src="/images/logo-prefecture-removebg-preview.png" alt="Logo de la prefecture du Doubs">
                                <span class="group-hover:block hidden absolute bg-white py-1 px-2 rounded-lg mt-2 text-xs">La prefecture du Doubs</span>
                            </a>
                        </div>
                    </div>
                    <!-- Grands Partenaires -->
                    <div class="">
                        <h4 class="capitalize-first font-Dela text-lg text-center mb-4">grands partenaires</h4>
                        <div class="flex justify-between gap-2">
                            <a href="https://lvsl.fr/" target="_blank" class="group">
                                <img class="h-24 hover:bg-white hover:scale-105 ease-in-out duration-200 p-4 rounded-xl" src="/images/logo-lvsl.webp" alt="Logo de le vent se lève">
                                <span class="group-hover:block hidden absolute bg-white py-1 px-2 rounded-lg mt-2 text-xs">Le vent se lève</span>
                            </a>
                            <a href="https://www.danse-neuchatel.ch/2023/" target="_blank" class="group">
                                <img class="h-24 hover:bg-white hover:scale-105 ease-in-out duration-200 p-4 rounded-xl" src="/images/logo-adn-removebg-preview.png" alt="Logo de adn">
                                <span class="group-hover:block hidden absolute bg-white py-1 px-2 rounded-lg mt-2 text-xs">adn</span>
                            </a>
                            <a href="https://www.justice.gouv.fr/" target="_blank" class="group">
                                <img class="h-24 hover:bg-white hover:scale-105 ease-in-out duration-200 p-4 rounded-xl" src="/images/logo-spip-removebg-preview.png" alt="Logo du SPIP">
                                <span class="group-hover:block hidden absolute bg-white py-1 px-2 rounded-lg mt-2 text-xs">SPIP</span>
                            </a>
                        </div>
                    </div>
                    <!-- Partenaires Medias -->
                    <div class="">
                        <h4 class="capitalize-first font-Dela text-lg text-center mb-4">partenaires medias</h4>
                        <div class="flex justify-between">
                            <a href="https://www.linsatiable.org/" target="_blank" class="group">
                                <img class="h-24 hover:bg-white hover:scale-105 ease-in-out duration-200 p-4 rounded-xl" src="/images/logo-linsatiable.webp" alt="Logo de l'insatiable">
                                <span class="group-hover:block hidden absolute bg-white py-1 px-2 rounded-lg mt-2 text-xs">L'insatiable</span>
                            </a>
                            <a href="https://radiosud.net/" target="_blank" class="group">
                                <img class="h-24 hover:bg-white hover:scale-105 ease-in-out duration-200 p-4 rounded-xl" src="/images/logo-radiosud.webp" alt="Logo de radiosud">
                                <span class="group-hover:block hidden absolute bg-white py-1 px-2 rounded-lg mt-2 text-xs">Radiosud</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <ShapeBottom />

        <Footer />

    </UserLayout>
</template>

<script>
import UserLayout from '@/Layouts/UserLayout.vue'
import EventCard from '@/Components/EventCard.vue'
import Footer from '@/Components/Footer.vue'
import ShapeTop from '@/Components/ShapeTop.vue'
import ShapeBottom from '@/Components/ShapeBottom.vue'

export default {

    components: {
        UserLayout,
        EventCard,
        Footer,
        ShapeTop, ShapeBottom
    },

    props: {
        articles: {
            type: Array,
        },
        newsletters: {
            type: String,
        },
        errors: {
            type: String,
        }
    },

    data() {
        return {
            pageTitle: "Les Casas du Sud - Accueil",
            form_create: {
                email: null
            },
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
