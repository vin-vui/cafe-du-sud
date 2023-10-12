<script setup>
import { Head, } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <UserLayout>

        <!-- Section 1  -->
        <div class="bg-[url('/images/bgImgLanding.png')] h-screen bg-no-repeat bg-cover bg-center flex">
            <h1 class="mx-auto mt-96 text-center font-alumni text-8xl text-white">Les Casas <br> atelier du sud - café du
                sud</h1>

        </div>

        <!-- Section 2  - Atelier Du Sud  -->
        <section class="w-10/12 mx-auto">
            <h2 class="capitalize font-alumni text-6xl justify-center flex my-8">l'Atelier du sud</h2>
            <!-- contenu 1 -->
            <div class="flex mt-28 justify-between">
                <!-- Conteneur de l'image avec bordure -->
                <div
                    class="w-5/12 flex relative after:bg-violet-400 after:rounded-lg after:absolute after:w-full after:h-full after:top-6 after:left-6 after:z-0">
                    <img class="rounded-lg relative z-10 h-full w-full" src="/images/image1.png" alt="Image 1">
                </div>

                <!-- texte -->
                <div class="w-1/2 flex-col">
                    <p class="font-Dela text-3xl justify-center w-full inline-flex">Une programmation ouverte
                        à tous</p>
                    <p class="font-abeezee text-lg mt-8 ">Cette programmation riche et variée s'adresse à tous, sans
                        distinction
                        d'âge, de genre ou de niveau de compétence. L'atelier du sud est un lieu d'expérimentation et de
                        décloisonnement artistique.
                        <br> <br>
                        Elle encourage les artistes à travailler ensemble et à créer des projets innovants.
                        Ce lieu d'expérimentation et de décloisonnement artistique est un espace de réflexion et de débat
                        sur les enjeux de la culture.
                    </p>
                </div>
            </div>

            <!-- contenu 2 -->
            <div class="flex mt-28 justify-between">
                <!-- texte -->
                <div class="w-1/2 flex-col">
                    <p class="font-Dela text-3xl justify-center w-full inline-flex">Un monde meilleur à travers
                        l'accessibilité culturelle</p>
                    <p class="font-abeezee text-lg mt-8">Ce nouveau projet est un lieu de vie commun où chacun peut
                        s'exprimer et s'épanouir. Ce bel avenir est porté par des valeurs fortes d'accessibilité,
                        d'inclusivité et de collectif.
                        <br> <br>
                        Elle souhaite créer un monde meilleur, un monde où la culture est accessible à tous.
                        Ce monde meilleur est un lieu où les arts se décloisonnent et où les cultures se rencontrent. C'est
                        un lieu où chacun peut s'exprimer et s'épanouir.
                    </p>
                </div>

                <!-- Conteneur de l'image avec bordure -->
                <div
                    class="w-5/12 flex relative after:bg-orange-400 after:rounded-lg after:absolute after:w-full after:h-full after:top-6 after:right-6 after:z-0">
                    <img class="rounded-lg relative z-10 h-full w-full" src="/images/image2.png" alt="Image 1">
                </div>
            </div>

            <!-- contenu 3 -->
            <div class="flex mt-28 justify-between">
                <!-- Conteneur de l'image avec bordure -->
                <div
                    class="w-5/12 flex relative after:bg-green-400 after:rounded-lg after:absolute after:w-full after:h-full after:top-6 after:left-6 after:z-0">
                    <img class="rounded-lg relative z-10 h-full w-full" src="/images/image3.png" alt="Image 1">
                </div>

                <!-- texte -->
                <div class="w-1/2 flex-col">
                    <p class="font-Dela text-3xl justify-center w-full inline-flex">Un espace de création et de
                        partage</p>
                    <p class="font-abeezee text-lg mt-8">L'atelier du sud est une association qui œuvre pour la promotion
                        des arts et de la culture à Besançon. Elle est née de la volonté d'un groupe de passionnés qui
                        souhaitent créer un espace de vie commun où chacun peut s'exprimer et partager ses talents.
                        <br><br>
                        Cet espace de vie commun est un lieu de partage et de création où chacun peut s'exprimer et partager
                        ses talents. Il propose une programmation riche et variée, allant des ateliers de création aux
                        spectacles en passant par les débats et les rencontres.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 3 - Evenement a venir -->
        <section class="mt-32 w-10/12 mx-auto">
            <h2 class="w-full text-center font-alumni text-6xl capitalize-first">événement à venir</h2>

            <!-- <button @click="console.log($articles)" class="px-2 py-1 bg-red-300 rounded">dd article</button> -->

            <!-- CARTES EVENEMENTS -->
            <div class="flex justify-between mx-6">
                <!-- Carte 1 -->
                <div
                    class="w-3/12 h-[25rem] rounded-lg relative z-50 after:bg-violet-400 after:rounded-lg after:absolute after:w-full after:h-full after:bottom-6 after:right-6 after:-z-50">
                    <!-- date -->
                    <div class="absolute bg-red-400 rounded-br-lg rounded-tl-lg font-abeezee text-white text-center">
                        7 <br>septembre
                    </div>
                    <!-- image -->
                    <img class="w-full" src="/images/image 7.png">
                    <!-- titre -->
                    <h4 class="bg-white/50 backdrop-blur-sm font-Dela text-2xl relative bottom-8 text-center">Atelier super
                    </h4>
                    <!-- contenu -->
                    <p class="font-abeezee px-2 bottom-8 pt-4 pb-6 rounded-b-lg relative z-50 bg-red-200">Découvrez l'art de
                        l'improvisation théâtrale lors de notre prochain atelier ! Laissez libre cours à votre créativité et
                        libérez votre...</p>
                </div>
                <!-- Carte 2 -->
                <div
                    class="w-3/12 h-[25rem] rounded-lg relative z-50">
                    <!-- date -->
                    <div class="absolute bg-[#CE7373] rounded-br-lg rounded-tl-lg font-abeezee text-white text-center">
                        7 <br>septembre
                    </div>
                    <!-- image -->
                    <img class="w-full" src="/images/image 7.png">
                    <!-- titre -->
                    <h4 class="bg-white/50 backdrop-blur-sm font-Dela text-2xl relative bottom-8 text-center">Atelier super
                    </h4>
                    <!-- contenu -->
                    <p class="font-abeezee px-2 bottom-8 pt-4 pb-6 rounded-b-lg relative z-50 bg-red-200">Découvrez l'art de
                        l'improvisation théâtrale lors de notre prochain atelier ! Laissez libre cours à votre créativité et
                        libérez votre...</p>
                </div>
                <!-- Carte 3 -->
                <div
                    class="w-3/12 h-[25rem] rounded-lg relative z-50 after:bg-violet-400 after:rounded-lg after:absolute after:w-full after:h-full after:top-6 after:left-6 after:-z-50">
                    <!-- date -->
                    <div class="absolute bg-red-400 rounded-br-lg rounded-tl-lg font-abeezee text-white text-center">
                        7 <br>septembre
                    </div>
                    <!-- image -->
                    <img class="w-full" src="/images/image 7.png">
                    <!-- titre -->
                    <h4 class="bg-white/50 backdrop-blur-sm font-Dela text-2xl relative bottom-8 text-center">Atelier super
                    </h4>
                    <!-- contenu -->
                    <p class="font-abeezee px-2 bottom-8 pt-4 pb-6 rounded-b-lg relative z-50 bg-red-200">Découvrez l'art de
                        l'improvisation théâtrale lors de notre prochain atelier ! Laissez libre cours à votre créativité et
                        libérez votre...</p>
                </div>
            </div>

            <button class=" px-2 py-1 bg-violet-600 rounded-lg font-abeezee mx-auto flex mt-20 text-xl text-white">Découvrir notre calendrier entier</button>


            <!-- <div v-for="article in articles" class="w-3/12 bg-red-200 p-4 top-[60px] absolute">
                    <p> {{ article.titre }} </p>
                    <p> {{ article.contenu }} </p>
                    <p> {{ article.date_debut }} </p>
                    <p> {{ article.date_fin }} </p>
                </div> -->
        </section>

        <!-- Section 4 - Newsletter partenaires footer -->
        <section>
            <!-- Newsletter -->
            <div class="flex-col w-full text-center mt-20">
                <h4 class="font-alumni text-6xl ">Restons connectés</h4>
                <p class="font-Dela w-full text-3xl mt-6">Inscrivez-vous à notre newsletter</p><br>
                <p class="font-abeezee w-full text-lg mt-2">Pour recevoir toutes nos actualités directement dans votre boite mail</p>
                <div class="flex justify-center items-center">
                    <form class="">
                        <input class="h-11 rounded-l-lg w-96" type="email" name="email" placeholder="exemple@gmail.com">
                    </form>
                    <button class="px-2 py-2 bg-violet-600 rounded-r-lg font-abeezee text-xl text-white">S'inscrire</button>
                </div>
            </div>

            <!-- Partenaires -->
            <div class="w-full bg-blue-200">

                <div class="w-10/12 mx-auto flex justify-between">

                    <!-- Partenaires institutionnels -->
                    <div>
                        <h4 class="capitalize-first font-Dela text-xl">partenaires institutionnels</h4>
                    </div>

                    <!-- Grands Partenaires -->
                    <div>
                        <h4 class="capitalize-first font-Dela text-xl">grands partenaires</h4>
                    </div>

                    <!-- Partenaires Medias -->
                    <div>
                        <h4 class="capitalize-first font-Dela text-xl">partenaires medias</h4>
                    </div>

                </div>

            </div>

            <!-- footer -->
            <nav class="w-10/12">

                <div>

                    <!-- Pages Légales -->
                    <div class="flex-col w-1/3 bg-red-100">
                        <h4 class="capitalize-first">pages légales</h4>
                        <p class="capitalize-first"><a>politique de confidentialité</a></p>
                        <p class="capitalize-first"><a>condition générales d'utilisation</a></p>
                        <p class="capitalize-first"><a>mentions légales</a></p>

                    </div>

                    <!-- Nous -->
                    <div>

                    </div>

                    <!-- L'atelier -->
                    <div>

                    </div>

                </div>

            </nav>


        </section>



    </UserLayout>
</template>




<script>
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';  // Ajoutez cette ligne

import UserLayout from '@/Layouts/UserLayout.vue'

const articles = ref([]);  // Assurez-vous que cette variable est déclarée


export default {
    props: ['articles', 'errors', 'tags'],
    mounted() {
        console.log('Le composant Welcome est monté');
        console.log(articles);
    }
};

export { articles };  // Exposez articles pour y accéder dans le template
</script>
