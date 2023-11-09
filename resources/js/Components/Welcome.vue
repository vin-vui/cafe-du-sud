<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
            <ApplicationLogo class="block h-12 w-auto" />

            <h1 class="mt-8 text-2xl font-medium text-gray-900">
                Bienvenue sur votre application Les Casas du Sud !
            </h1>

            <p class="mt-6 text-gray-500 leading-relaxed">
                Cette application vous permet de gérer les évènements et les articles de blog qui seront affichés sur le site internet.
            </p>
        </div>

        <div class="bg-gray-200 bg-opacity-25 p-8">
            <div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                    </svg>
                    <h2 class="ml-3 text-xl font-semibold text-gray-900">
                        <span href="https://laravel.com/docs">Articles</span>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    C'est depuis cet onglet que vous creez ou modifiez vos articles.
                    Pour créer un article cliquez sur le bouton "Ajouter un article".
                    <br>
                    <br>
                    Insérez dans titre et dans contenu le titre et le contenu de l'article.
                    <br>
                    Sélectionnez ensuite le titre, évènement ou blog.
                    <br>
                    Dans le champ "Lien de l'image" vous pouvez mettre le lien d'une image se trouvant dans le dossier "Images" du Google Drive que nous
                    avons utilisé tout au long du projet, cette image servira d'illustration à l'article.
                    <br>
                    Concernant les dates si c'est un billet de blog ne mettez rien.
                    <br>
                    Si c'est un évènement vous pouvez choisir de mettre une date de début et de fin, pour une exposition qui dure plusieurs semaines par exemple.
                    Si c'est un évènement qui ne déroule qu'un seul jour vous pouvez mettre une date de début et pas de date de fin.
                    Le statut détermine si l'article est en ligne ou pas, si vous définissez le statut "en attente" l'article n'apparaitra plus sur le site. Utilisez
                    Cette option si vous désirez le mettre temporairement hors-ligne.
                    <br>
                    remplissez les champs puis valider en cliquant sur "créer un article".
                    <br>
                    Si vous souhaitez supprimer un article existant vous pouvez le faire en cliquant sur le bouton de modification puis en ciquant sur "supprimer l'article"
                    <br>
                    en cas de reussite un message de reussite apparaitra en tout de la page et l'article apparaitra dans la liste.
                </p>
            </div>
        </div>
    </div>
</template>
