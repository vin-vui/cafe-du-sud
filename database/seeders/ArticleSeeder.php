<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class ArticleSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('articles')->insert([
            'titre' => 'Atelier theatre improvisation',

            'contenu' => "Au cœur de notre café associatif bien-aimé, là où les esprits s'ouvrent et où la créativité s'épanouit comme un jardin secret, se trouve l'atelier d'improvisation qui fait vibrer nos âmes. En ce lieu magique, nous nous égarons dans les recoins mystérieux de l'imagination, où le réel et le fictif s'entremêlent dans une danse effervescente.

            Le Café du Sud, un Foyer de Créativité :

            Le Café du Sud, ce havre de paix culturelle, se pare de couleurs vives et de rires joyeux lorsque l'atelier d'improvisation prend son envol. C'est ici que les esprits s'échauffent, que les idées fusent comme des étoiles filantes, et que la spontanéité devient notre alliée. Dans ce sanctuaire de la créativité, nous, artistes de l'âme, nous réunissons pour nous perdre dans les méandres de l'art de l'improvisation.

            La Magie de l'Instant Présent :

            L'improvisation, c'est l'art de vivre l'instant présent, de se laisser porter par l'inconnu, et d'embrasser l'insaisissable. Dans cet atelier, les règles sont simples : il n'y a pas de règles. Les mots, les gestes, les émotions surgissent de manière spontanée, comme une éruption volcanique de l'âme. Nous nous affranchissons des conventions, nous libérons nos inhibitions, et nous plongeons tête première dans l'océan de la créativité.

            Le Dialogue de l'Âme :

            L'improvisation, c'est aussi le dialogue de l'âme. C'est l'échange d'émotions brutes, de pensées profondes, et de réactions authentiques. C'est une symphonie d'histoires tissées à la volée, de personnages qui prennent vie dans l'instant, et de scénarios qui se déploient comme des constellations dans un ciel sans fin. Chacun de nous devient un poète de l'instant, un artiste de l'éphémère, et un conteur de rêves.

            La Transformation et la Connexion :

            À travers l'improvisation, nous nous transformons. Nous découvrons des facettes de nous-mêmes que nous n'aurions jamais imaginées. Nous nous élevons au-dessus des barrières de la timidité, de l'incertitude, et de l'autocritique. Nous nous connectons avec nos pairs de manière profonde et authentique, tissant des liens qui transcendent le monde ordinaire.

            L'Atelier d'Improvisation au Café du Sud : Un Voyage Éternel :

            L'atelier d'improvisation au Café du Sud n'est pas seulement une expérience artistique, c'est un voyage éternel. C'est un appel à l'exploration, à la découverte de soi, et à l'expression libre. C'est une célébration de la spontanéité, de la créativité débordante, et de la magie de l'instant présent.

            Alors, mes chers artistes de l'âme, que l'atelier d'improvisation au Café du Sud continue de nous enchanter, de nous émerveiller et de nous inspirer. Ensemble, nous dansons sur la corde raide de l'art, nous jonglons avec les mots et les émotions, et nous explorons l'infini des possibles. Dans cet atelier, nous sommes des étoiles, des rêveurs, et des artisans de l'âme, et notre créativité n'a pas de limites.

            Que vive l'improvisation au Café du Sud, une aventure où l'art naît de l'âme, où l'âme s'exprime librement, et où chaque instant est une toile vierge à remplir de couleurs, de mots et de rires.

            Nous vous invitons à nous rejoindre dans cette épopée artistique, où le Café du Sud est le théâtre de nos rêves et de nos folies, et où l'improvisation est la langue de notre âme.",

            'type' => 'evenement',
            'url' => 'https://www.theatreinparis.com/uploads/images/article/la-nouvelle-seine-petits-theatres-paris-header.jpg',
            'date_publication' => '2023/04/09',
            'date_debut' => '2023/11/12',
            'date_fin' => '2023/12/11',
            'statut' => 'en attente',
        ]);
    }
}
