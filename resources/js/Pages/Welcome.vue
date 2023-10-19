<template>
    <UserLayout>

        <!-- Section 1  -->
        <div class="bg-[url('/images/bgImgLanding.png')] h-screen bg-no-repeat bg-cover bg-center flex">
            <h1 class="mx-auto mt-96 text-center font-alumni text-8xl text-blanc-1">Les Casas <br> atelier du sud - café du
                sud</h1>
        </div>

        <!-- Section 2  - Atelier Du Sud -->
        <div class="bg-orange-3">
            <section class="w-full mx-auto bg-blanc-1 px-4 sm:w-10/12">
                <h2 class="capitalize font-alumni text-6xl justify-center flex pt-8 mb-4 text-center">l'Atelier du sud</h2>
                <h3 class="font-Dela text-xl capitalize-first justify-center flex text-center">en quelques points, qu'est-ce que c'est ?
                </h3>
                <div class="w-full justify-between py-12 flex-col">
                    <!-- Point 1 -->
                    <div class="w-full my-12 border-jaune-1 border-8 border-double rounded-xl lg:px-4 lg:py-2 lg:w-10/12 lg:flex">
                        <span class="mr-12 hidden lg:text-8xl lg:block">👐</span>
                        <div>
                            <h4 class="font-Dela text-xl lg:text-2xl capitalize-first justify-center flex mt-2">🤝 Un lieu 🤝</h4>
                            <p class="font-abeezee text-lg mt-2 p-2 pb-8">
                                L'Atelier Du Sud c'est avant tout la maison de toutes nos associations,
                                un laboratoire dans lequel nous experimentons les limites de l'art et un lieu de vie commun où
                                chacun peut venir s'exprimer et s'épanouir.
                                <br><br>
                            </p>

                            <!-- <p class="font-abeezee text-lg mt-2 p-2">Ce nouveau projet est un lieu de vie commun où chacun peut
                        s'exprimer et s'épanouir. Ce bel avenir est porté par des valeurs fortes d'accessibilité,
                        d'inclusivité et de collectif. Elle souhaite créer un monde meilleur, un monde où la culture est
                        accessible à tous. Ce monde meilleur est un lieu où les arts se décloisonnent et où les cultures se
                        rencontrent. C'est un lieu où chacun peut s'exprimer et s'épanouir.</p> -->
                        </div>
                    </div>
                    <!-- Point 2 -->
                    <div class="w-full my-12 border-bleu-1 border-8 border-double rounded-xl lg:px-4 lg:py-2 lg:w-10/12 lg:flex">
                        <div>
                            <h4 class="font-Dela text-xl lg:text-2xl capitalize-first justify-center flex mt-2">🎨 L'Art sans limites 🎨</h4>
                            <p class="font-abeezee text-lg mt-2 p-2">
                                Explorez une programmation dynamique : ateliers créatifs, spectacles, débats et rencontres. Un
                                espace
                                foisonnant d'opportunités artistiques, à partager sans retenue.
                                <br><br>

                                Collaborer et créer des projets novateurs. Osez
                                l'expérience artistique sans frontières.
                            </p>
                            <!-- <p class="font-abeezee text-lg mt-2 p-2"> Plongez dans une programmation artistique qui n'a pas de
                                règles. Tout le monde est le bienvenu, peu importe votre âge, genre ou niveau de compétence.
                                L'Atelier du Sud vous pousse à explorer, collaborer et créer des projets novateurs. Osez
                                l'expérience artistique sans frontières.</p> -->
                        </div>
                        <span class="mr-12 invisible text-sm lg:text-8xl lg:visible">🖌️</span>
                    </div>
                    <!-- Point 3 -->
                    <div class="w-full my-12 border-rouge-1 border-8 border-double rounded-xl lg:px-4 lg:py-2 lg:w-10/12 lg:flex">
                        <span class="mr-12 hidden lg:text-8xl lg:block">✨</span>
                            <div>
                                <h4 class="font-Dela text-xl lg:text-2xl capitalize-first justify-center flex mt-2">🌟 Des valeurs fortes 🌟</h4>
                                <p class="font-abeezee text-lg mt-2 p-2">Une association née de la passion, un lieu où chacun peut
                                    libérer son talent et se connecter. Etant particulièrement sensible aux valeurs d'inclusivité,
                                    nous accueillons tout le monde
                                    quelque soit leur parcours, expériences ou envies afin de leur
                                    donner un lieux pour s'exprimer et s'épanouir.</p>
                                </div>
                        </div>
                </div>
            </section>
        </div>


        <!-- Section 3 - Les associations  -->
        <div class="bg-blanc-1">
            <section class="lg:w-10/12 w-full mx-auto">
                <!-- Ciconia theatre -->
                <div class="flex pt-28 justify-between px-4 lg:px-0">
                    <!-- Conteneur de l'image avec bordure -->
                    <div
                        class="w-5/12 hidden lg:flex relative after:bg-bleu-1 after:rounded-lg after:absolute lg:after:w-full after:h-full after:top-6 after:left-6 after:z-0">
                        <img class="rounded-lg relative z-10 lg:h-full w-full h-40 " src="/images/image1.jpg" alt="Image 1">
                    </div>

                    <!-- texte -->
                    <div class="lg:w-1/2 flex-col">
                        <div class="flex">
                            <img src="/images/logo-ciconia.png" class="">
                            <p class="font-Dela text-3xl justify-center w-full inline-flex">Ciconia Théâtre</p>
                        </div>

                        <p class="font-abeezee text-lg mt-8">Une compagnie artistique engagée, basée en Franche-Comté. <br>
                            Notre mission ? Explorer les recoins de l'art et de la créativité pour susciter la réflexion,
                            l'expression et la révolte. <br><br> De l'animation d'ateliers en milieu carcéral à nos performances
                            en milieu rural, nous mettons en avant l'inclusion, la diversité et le partage.<br>Venez rejoindre
                            notre communauté, où chaque voix compte, chaque histoire est précieuse, et chaque spectacle est une
                            aventure. Ensemble, créons un monde de poésie, de solidarité et de découverte.
                        </p>
                    </div>
                </div>

                <!-- Envida -->
                <div class="flex mt-28 justify-between p-4 lg:px-0">
                    <!-- texte -->
                    <div class="lg:w-1/2 flex-col">
                        <div class="flex">
                            <img class="w-40 lg:w-full" src="/images/logo-envida.png">
                            <p class="font-Dela text-3xl justify-center w-full inline-flex">Envida</p>
                        </div>

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
                    class="w-5/12 hidden lg:flex relative after:bg-bleu-1 after:rounded-lg after:absolute lg:after:w-full after:h-full after:top-6 after:left-6 after:z-0">
                        <img class="rounded-lg relative z-10 h-full w-full" src="/images/image2.png" alt="Image 1">
                    </div>
                </div>

                <!-- Gangassa -->
                <div class="flex pt-28 justify-between px-4 lg:px-0">
                    <!-- Conteneur de l'image avec bordure -->
                    <div
                        class="w-5/12 hidden lg:flex relative after:bg-vert-1 after:rounded-lg after:absolute lg:after:w-full after:h-full after:top-6 after:left-6 after:z-0">
                        <img class="rounded-lg relative z-10 h-full w-full" src="/images/image3.png" alt="Image 1">
                    </div>

                    <!-- texte -->
                    <div class="lg:w-1/2 flex-col">
                        <div class="flex">
                            <p class="font-Dela text-3xl justify-center w-full inline-flex">Gangassa</p>
                        </div>

                        <div class="flex justify-between mt-4">
                            <img class="w-32 h-32" src="/images/gangassa-logo.png">
                            <p class="font-abeezee text-lg w-9/12 ">
                                Rejoignez notre association, un lieu d'inspiration et de partage,
                                où l'art et la convivialité se rencontrent. Nous encourageons la diversité des savoirs, des
                                talents
                                et des expériences, favorisant une recherche constante et une approche inclusive.
                            </p>
                        </div>
                        <p class="font-abeezee text-lg mt-4">
                            Nous mettons en lumière une variété de créations artistiques, de la scène au son, de la photographie
                            à la poésie. Notre action est ouverte à tous, favorisant les rencontres intergénérationnelles et les
                            partenariats locaux.
                            <br><br>
                            Nous sommes engagés dans des actions sociales et artistiques, offrant des moments de partage au
                            public. Notre espace collectif, "le Café du Sud," est le lieu de rencontres, d'émotions et de
                            projets communs. Rejoignez notre communauté où l'art et la solidarité s'épanouissent. 🎨🎭🎶🤝🏠
                        </p>
                    </div>
                </div>

                <!-- Shon Lua-->
                <div class="flex pt-28 justify-between px-4 lg:px-0">
                    <!-- texte -->
                    <div class="lg:w-1/2 flex-col">
                        <p class="font-Dela text-3xl justify-center w-full inline-flex">Shon Lua</p>
                        <p class="font-abeezee text-lg mt-8">L'atelier du sud est une association qui œuvre pour la promotion
                            des arts et de la culture à Besançon. Elle est née de la volonté d'un groupe de passionnés qui
                            souhaitent créer un espace de vie commun où chacun peut s'exprimer et partager ses talents.
                            <br><br>
                            Cet espace de vie commun est un lieu de partage et de création où chacun peut s'exprimer et partager
                            ses talents. Il propose une programmation riche et variée, allant des ateliers de création aux
                            spectacles en passant par les débats et les rencontres.
                        </p>
                    </div>
                    <!-- Conteneur de l'image avec bordure -->
                    <div
                    class="w-5/12 hidden lg:flex relative after:bg-vert-1 after:rounded-lg after:absolute lg:after:w-full after:h-full after:top-6 after:left-6 after:z-0">
                        <img class="rounded-lg relative z-10 h-full w-full" src="/images/image3.png" alt="Image 1">
                    </div>

                </div>

            </section>
        </div>


        <!-- Section 4 - Evenement a venir -->
        <div class="bg-blanc-1">
            <section class="pt-32 w-10/12 mx-auto bg-blanc-1">
                <h2 class="w-full text-center font-alumni text-6xl capitalize-first">événement à venir</h2>

                <!-- CARTES EVENEMENTS -->
                <div class="lg:flex justify-between mx-6 mt-20">
                    <a v-for="(article, index) in articles" :key="article.id" :href="`/articles/${article.id}`" :class="['w-3/12 rounded-lg relative z-50 hover:scale-105 ease-in-out duration-100 group', index === 0 ? 'after:bg-orange-2 after:rounded-lg after:absolute after:w-full after:h-full after:bottom-6 after:right-6 after:-z-50' : '', index === articles.length - 1 ? 'after:bg-bleu-1 after:rounded-lg after:absolute after:w-full after:h-full after:top-6 after:left-6 after:-z-50' : '']
                        ">
                        <!-- date -->
                        <div class="lg:absolute bg-rouge-1 lg:rounded-tl-lg lg:rounded-br-lg lg:rounded-tr-none lg:rounded-bl-none rounded-t-lg  font-abeezee text-blanc-1 text-center">
                            {{ article.date_debut }} - {{ article.date_fin }}
                        </div>
                        <!-- image -->
                        <img class="w-full lg:rounded-t-lg " :src="article.url">
                        <!-- titre -->
                        <h4
                            class="bg-white/30 backdrop-blur-sm font-Dela text-2xl relative bottom-8 text-center text-blanc-orange-1 group-hover:bg-violet-2/90">
                            {{ article.titre.length > 16 ? article.titre.slice(0, 16) + '...' : article.titre }}
                        </h4>
                        <!-- contenu -->
                        <p class="font-abeezee px-2 bottom pt-4 pb-6 -mt-8 rounded-b-lg relative z-50 lg:bg-blanc-1 bg-red-100 mb-20 lg:mb-0">
                            {{ article.contenu.length > 270 ? article.contenu.slice(0, 270) + '...' : article.contenu }}
                        </p>
                    </a>
                </div>

                <button
                    class=" px-2 py-1 bg-violet-2 rounded-lg font-abeezee mx-auto flex mt-20 text-xl text-blanc-1 hover:bg-violet-1 hover:ring">Découvrir
                    notre calendrier entier</button>

            </section>
        </div>


        <!-- Section 4 - Newsletter partenaires footer -->
        <div >
            <section>
                <!-- Newsletter -->
                <div class="flex-col w-full text-center pt-20 pb-20 bg-blanc-1">
                    <h4 class="font-alumni text-6xl">Restons connectés</h4>
                    <p class="font-Dela w-full text-3xl mt-6">Inscrivez-vous à notre newsletter</p><br>
                    <p class="font-abeezee w-full text-lg mt-2">Pour recevoir toutes nos actualités directement dans votre boite
                        mail</p>
                    <div class="flex justify-center items-center">
                        <form class="">
                            <input class="h-11 rounded-l-lg lg:w-96" type="email" name="email" placeholder="exemple@gmail.com">
                        </form>
                        <button
                            class="px-2 py-2 bg-violet-2 rounded-r-lg font-abeezee text-xl text-blanc-1 hover:bg-violet-1 hover:ring">S'inscrire</button>
                    </div>
                </div>
            </section>


            <section>
                <!-- Partenaires -->
                <div class="w-full bg-blue-200 pb-8">
                    <h3 class="text-center font-alumni text-6xl pt- mb-12 capitalize-first">nos partenaires</h3>

                    <div class="lg:w-10/12 mx-auto lg:flex lg:justify-between">
                        <!-- Partenaires institutionnels -->
                        <div class="lg:w-1/3 px-8 my-12 lg:my-0">
                            <h4 class="capitalize-first font-Dela text-xl text-center mb-4">partenaires institutionnels</h4>
                            <div class="flex justify-between">
                                <img class="h-14" src="/images/logo_besançon.png">
                                <img class="h-14" src="/images/logo_doubs.png">
                                <img class="h-14"  src="/images/logo-prefecture.jpg">
                            </div>
                        </div>

                        <!-- Grands Partenaires -->
                        <div class="lg:w-1/3 px-8 my-12 lg:my-0">
                            <h4 class="capitalize-first font-Dela text-xl text-center mb-4">grands partenaires</h4>
                            <div class="flex justify-between">
                                <img class="h-14 " src="/images/logo-lvsl.png">
                                <img class="h-14" src="/images/logo-adn.png">
                                <img class="h-14 " src="/images/logo-spip.png">
                            </div>
                        </div>

                        <!-- Partenaires Medias -->
                        <div class="lg:w-1/3 px-8 my-12 lg:my-0">
                            <h4 class="capitalize-first font-Dela text-xl text-center mb-4">partenaires medias</h4>
                            <div class="flex justify-between">
                                <img class="h-14" src="/images/logo-linsatiable.png">
                                <img class="h-14" src="/images/logo-radiosud.png">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
        </div>
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
