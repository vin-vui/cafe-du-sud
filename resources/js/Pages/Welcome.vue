<template>
    <UserLayout>

        <!-- Section 1  -->
        <div class="bg-[url('/images/bgImgLanding.png')] h-screen bg-no-repeat bg-cover bg-center flex">
            <h1 class="mx-auto mt-96 text-center font-alumni text-8xl text-blanc-1">Les Casas <br> atelier du sud - café du
                sud</h1>
        </div>

<!-- Section 2  - Atelier Du Sud -->
<section class="w-10/12 mx-auto">
    <h2 class="capitalize font-alumni text-6xl justify-center flex mt-8 mb-4">l'Atelier du sud</h2>
    <h3 class="font-Dela text-xl capitalize-first justify-center flex">en quelques points, qu'est-ce que c'est ?</h3>
    <div class="w-full justify-between my-12 flex-col">
        <!-- Point 1 -->
        <div class="w-10/12 flex border-bleu-1 border-8 border-double rounded-xl px-4 py-2">
            <div>
                <h4 class="font-Dela text-lg capitalize-first justify-center flex">🎨 L'Art sans limites 🎨</h4>
                <p class="font-abeezee text-lg mt-2 p-2"> Plongez dans une programmation artistique qui n'a pas de
                    règles. Tout le monde est le bienvenu, peu importe votre âge, genre ou niveau de compétence. L'Atelier du Sud vous pousse à explorer, collaborer et créer des projets novateurs. Osez l'expérience artistique sans frontières.</p>
            </div>
            <span class="ml-12 text-8xl">🖌️</span>
        </div>

        <!-- Point 2 -->
        <div class="w-10/12 flex ml-auto mt-20 border-jaune-1 border-8 border-double rounded-xl  px-4 py-2">
            <span class="mr-12 text-8xl">👐</span>
            <div>
                <h4 class="font-Dela text-lg capitalize-first justify-center flex">🤝 Nous pour Vous 🤝</h4>
                <p class="font-abeezee text-lg mt-2 p-2">Ce nouveau projet est un lieu de vie commun où chacun peut
                    s'exprimer et s'épanouir. Ce bel avenir est porté par des valeurs fortes d'accessibilité,
                    d'inclusivité et de collectif. Elle souhaite créer un monde meilleur, un monde où la culture est
                    accessible à tous. Ce monde meilleur est un lieu où les arts se décloisonnent et où les cultures se
                    rencontrent. C'est un lieu où chacun peut s'exprimer et s'épanouir.</p>
            </div>
        </div>

        <!-- Point 3 -->
        <div class="w-10/12 flex mt-20 border-rouge-1 border-8 border-double rounded-xl px-4 py-2">
            <div>
                <h4 class="font-Dela text-lg capitalize-first justify-center flex">🌟 Créativité et partage 🌟</h4>
                <p class="font-abeezee text-lg mt-2 p-2">L'Atelier du Sud, l'incubateur artistique de Besançon. Une
                    association née de la passion, un lieu où chacun peut libérer son talent et se connecter. Explorez
                    une programmation dynamique : ateliers créatifs, spectacles, débats et rencontres. Un espace
                    foisonnant d'opportunités artistiques, à partager sans retenue.</p>
            </div>
            <span class="ml-12 text-8xl">✨</span>
        </div>
    </div>
            <!-- contenu 1 -->
            <div class="flex mt-28 justify-between">
                <!-- Conteneur de l'image avec bordure -->
                <div
                    class="w-5/12 flex relative after:bg-bleu-1 after:rounded-lg after:absolute after:w-full after:h-full after:top-6 after:left-6 after:z-0">
                    <img class="rounded-lg relative z-10 h-full w-full" src="/images/image1.png" alt="Image 1">
                </div>

                <!-- texte -->
                <div class="w-1/2 flex-col">
                    <p class="font-Dela text-3xl justify-center w-full inline-flex">Une programmation ouverte
                        à tous</p>
                    <p class="font-abeezee text-lg mt-8">Cette programmation riche et variée s'adresse à tous, sans
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
                    class="w-5/12 flex relative after:bg-orange-2 after:rounded-lg after:absolute after:w-full after:h-full after:top-6 after:right-6 after:z-0">
                    <img class="rounded-lg relative z-10 h-full w-full" src="/images/image2.png" alt="Image 1">
                </div>
            </div>

            <!-- contenu 3 -->
            <div class="flex mt-28 justify-between">
                <!-- Conteneur de l'image avec bordure -->
                <div
                    class="w-5/12 flex relative after:bg-vert-1 after:rounded-lg after:absolute after:w-full after:h-full after:top-6 after:left-6 after:z-0">
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

            <!-- CARTES EVENEMENTS -->
            <!-- <div class="flex justify-between mx-6">
                <div
                    class="w-3/12 h-[25rem] rounded-lg relative z-50 after:bg-violet-400 after:rounded-lg after:absolute after:w-full after:h-full after:bottom-6 after:right-6 after:-z-50">
                    <div class="absolute bg-red-400 rounded-br-lg rounded-tl-lg font-abeezee text-blanc-1 text-center">
                        7 <br>septembre
                    </div>
                    <img class="w-full" src="/images/image 7.png">
                    <h4 class="bg-white/50 backdrop-blur-sm font-Dela text-2xl relative bottom-8 text-center">Atelier super
                    </h4>
                    <p class="font-abeezee px-2 bottom-8 pt-4 pb-6 rounded-b-lg relative z-50 bg-red-200">Découvrez l'art de
                        l'improvisation théâtrale lors de notre prochain atelier ! Laissez libre cours à votre créativité et
                        libérez votre...</p>
                </div>

                <div class="w-3/12 h-[25rem] rounded-lg relative z-50">
                    <div class="absolute bg-[#CE7373] rounded-br-lg rounded-tl-lg font-abeezee text-blanc-1 text-center">
                        7 <br>septembre
                    </div>
                    <img class="w-full" src="/images/image 7.png">
                    <h4 class="bg-white/50 backdrop-blur-sm font-Dela text-2xl relative bottom-8 text-center">Atelier super
                    </h4>
                    <p class="font-abeezee px-2 bottom-8 pt-4 pb-6 rounded-b-lg relative z-50 bg-red-200">Découvrez l'art de
                        l'improvisation théâtrale lors de notre prochain atelier ! Laissez libre cours à votre créativité et
                        libérez votre...</p>
                </div>

                <div
                    class="w-3/12 h-[25rem] rounded-lg relative z-50 after:bg-violet-400 after:rounded-lg after:absolute after:w-full after:h-full after:top-6 after:left-6 after:-z-50">
                    <div class="absolute bg-red-400 rounded-br-lg rounded-tl-lg font-abeezee text-blanc-1 text-center">
                        7 <br>septembre
                    </div>
                    <img class="w-full" src="/images/image 7.png">
                    <h4 class="bg-white/50 backdrop-blur-sm font-Dela text-2xl relative bottom-8 text-center">Atelier super
                    </h4>
                    <p class="font-abeezee px-2 bottom-8 pt-4 pb-6 rounded-b-lg relative z-50 bg-red-200">Découvrez l'art de
                        l'improvisation théâtrale lors de notre prochain atelier ! Laissez libre cours à votre créativité et
                        libérez votre...</p>
                </div>
            </div> -->

            <div class="flex justify-between mx-6 mt-20">
                <a v-for="(article, index) in articles" :key="article.id" :href="`/articles/${article.id}`" :class="['w-3/12 rounded-lg relative z-50 hover:scale-105 ease-in-out duration-100 group', index === 0 ? 'after:bg-orange-2 after:rounded-lg after:absolute after:w-full after:h-full after:bottom-6 after:right-6 after:-z-50' : '', index === articles.length - 1 ? 'after:bg-bleu-1 after:rounded-lg after:absolute after:w-full after:h-full after:top-6 after:left-6 after:-z-50' : '']
                    ">
                    <!-- date -->
                    <div class="absolute bg-rouge-1 rounded-br-lg rounded-tl-lg font-abeezee text-blanc-1 text-center">
                        {{ article.date_debut }} - {{ article.date_fin }}
                    </div>
                    <!-- image -->
                    <img class="w-full rounded-t-lg " :src="article.url">
                    <!-- titre -->
                    <h4
                        class="bg-white/30 backdrop-blur-sm font-Dela text-2xl relative bottom-8 text-center text-blanc-orange-1 group-hover:bg-violet-2/90">
                        {{ article.titre.length > 16 ? article.titre.slice(0, 16) + '...' : article.titre }}
                    </h4>
                    <!-- contenu -->
                    <p class="font-abeezee px-2 bottom pt-4 pb-6 -mt-8 rounded-b-lg relative z-50 bg-blanc-1 ">
                        {{ article.contenu.length > 270 ? article.contenu.slice(0, 270) + '...' : article.contenu }}
                    </p>
                </a>
            </div>

            <button
                class=" px-2 py-1 bg-violet-2 rounded-lg font-abeezee mx-auto flex mt-20 text-xl text-blanc-1 hover:bg-violet-1 hover:ring">Découvrir
                notre calendrier entier</button>

        </section>

        <!-- Section 4 - Newsletter partenaires footer -->
        <section>
            <!-- Newsletter -->
            <div class="flex-col w-full text-center mt-20">
                <h4 class="font-alumni text-6xl ">Restons connectés</h4>
                <p class="font-Dela w-full text-3xl mt-6">Inscrivez-vous à notre newsletter</p><br>
                <p class="font-abeezee w-full text-lg mt-2">Pour recevoir toutes nos actualités directement dans votre boite
                    mail</p>
                <div class="flex justify-center items-center">
                    <form class="">
                        <input class="h-11 rounded-l-lg w-96" type="email" name="email" placeholder="exemple@gmail.com">
                    </form>
                    <button
                        class="px-2 py-2 bg-violet-2 rounded-r-lg font-abeezee text-xl text-blanc-1 hover:bg-violet-1 hover:ring">S'inscrire</button>
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
            <nav class="w-10/12 mx-auto">
                <div class="flex justify-between">
                    <!-- Pages Légales -->
                    <div class="w-1/3 p-4">
                        <h4 class="capitalize-first font-Dela my-4">pages légales</h4>
                        <p class="capitalize-first font-abeezee"><a>politique de confidentialité</a></p>
                        <p class="capitalize-first font-abeezee my-1"><a>conditions générales d'utilisation</a></p>
                        <p class="capitalize-first font-abeezee"><a>mentions légales</a></p>
                    </div>

                    <!-- Nous -->
                    <div class="w-1/ p-4 text-center">
                        <h4 class="capitalize-first font-Dela my-4">Nous</h4>
                        <p class="capitalize-first font-abeezee"><a>le café du sud</a></p>
                        <p class="capitalize-first font-abeezee my-1"><a>l'atelier du sud</a></p>
                        <p class="capitalize-first font-abeezee"><a>nous contacter</a></p>
                    </div>

                    <!-- L'atelier -->
                    <div class="w-1/3 p-4 ml-aut text-right font-abeezee">
                        <img class="ml-auto" src="/images/logo.png">
                        <p>04 60 85 42 01</p>
                        <p>contact@AtelierDuSud.fr</p>
                        <p>6 rue Bersot - 25000 Besançon</p>
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



export default {

    components: {
        UserLayout,
    },

    props: {
        articles: {
            type: Array,
        },
    },

    mounted() {
        console.log('Le composant Welcome est monté');
        console.log(articles);
    }
};

</script>
