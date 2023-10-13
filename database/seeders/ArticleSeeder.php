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
            'contenu' => "Dans ce monde en perpétuelle agitation, où la routine étouffe parfois notre créativité, nous vous invitons à une expérience artistique unique, à un voyage vers l'inconnu, à une aventure où les mots et les gestes se fondent dans un ballet spontané. Bienvenue à notre atelier de théâtre d'improvisation, un espace de liberté, de découverte et d'expression personnelle.

            L'improvisation, c'est l'art de la spontanéité, la danse de l'instant, où chaque acteur est également un créateur. Dans ce sanctuaire de la créativité, les règles traditionnelles sont balayées par le vent de la liberté. Ici, il n'y a pas de mauvaises répliques, seulement des opportunités de rebondir et d'innover. Les acteurs, novices ou expérimentés, se mêlent dans une symbiose artistique, où l'émotion brute devient l'âme de la performance.

            Mais l'atelier théâtre d'improvisation est bien plus qu'une simple expérience artistique. C'est un espace où la diversité est célébrée, où les voix marginales trouvent leur place. C'est un terrain de jeu où l'art transcende les barrières sociales, où l'authenticité est le maître-mot, et où chaque participant contribue à tisser la toile d'une œuvre collective.

            L'atelier est un refuge pour les esprits créatifs, les rêveurs, les révolutionnaires de l'âme. Il est ouvert à tous, quel que soit votre parcours, votre âge, ou votre origine. Rejoignez-nous dans cette quête de l'inconnu, de la spontanéité, et de l'authenticité.",
            'type' => 'evenement',
            'url' => 'https://www.theatreinparis.com/uploads/images/article/la-nouvelle-seine-petits-theatres-paris-header.jpg',
            'date_publication' => '2023/04/09',
            'date_debut' => '2023/11/12',
            'date_fin' => '2023/12/11',
            'statut' => 'en ligne',
        ]);

        DB::table('articles')->insert([
            'titre' => 'Rencontre par delà les ages',
            'contenu' => "Dans le tourbillon de la vie moderne, où le temps file et les relations se tissent et se défont au gré des écrans, nous vous invitons à une aventure unique, à un voyage à travers le temps, à une célébration des liens intemporels. Bienvenue à nos 'Rencontres par-delà les Âges', un événement magique où les générations se rencontrent, se mêlent, et partagent des histoires qui transcendent les époques.

            Rencontrer par-delà les âges, c'est plonger dans un océan d'expériences, c'est un dialogue intergénérationnel où les récits de vie se mêlent à la sagesse des anciens. Dans cet espace sacré, les jeunes écoutent les contes des anciens, les aînés se laissent emporter par l'énergie de la jeunesse, et les conversations deviennent des ponts entre les époques. C'est un moment où le présent danse avec le passé, où les souvenirs se lient aux rêves d'avenir.

            Mais 'Rencontres par-delà les Âges' est bien plus qu'un simple rassemblement. C'est une ode à la mémoire collective, à la transmission du savoir, et à l'importance de la connexion humaine. Ici, les sourires des enfants illuminent les visages des aînés, les questions des jeunes ouvrent des portes vers le passé, et les récits de vie deviennent des trésors à partager. C'est un endroit où les générations se rejoignent pour célébrer la richesse de l'expérience humaine.

            L'événement est un lieu de partage, d'inspiration, et de création, où chacun peut apporter sa contribution, quel que soit son âge. C'est une déclaration d'amour à la diversité intergénérationnelle, où la créativité et l'authenticité sont à l'honneur. Vous êtes tous invités à rejoindre cette mosaïque d'histoires et de sourires, à prendre place autour de la grande table de la vie.",
            'type' => 'evenement',
            'url' => 'https://www.theatreinparis.com/uploads/images/article/la-nouvelle-seine-petits-theatres-paris-header.jpg',
            'date_publication' => '2023/04/09',
            'date_debut' => '2023/11/12',
            'date_fin' => '2023/12/11',
            'statut' => 'en ligne',
        ]);

        DB::table('articles')->insert([
            'titre' => 'Rencontre par delà les ages',
            'contenu' => "Dans le tourbillon de la vie moderne, où le temps file et les relations se tissent et se défont au gré des écrans, nous vous invitons à une aventure unique, à un voyage à travers le temps, à une célébration des liens intemporels. Bienvenue à nos 'Rencontres par-delà les Âges', un événement magique où les générations se rencontrent, se mêlent, et partagent des histoires qui transcendent les époques.

            Rencontrer par-delà les âges, c'est plonger dans un océan d'expériences, c'est un dialogue intergénérationnel où les récits de vie se mêlent à la sagesse des anciens. Dans cet espace sacré, les jeunes écoutent les contes des anciens, les aînés se laissent emporter par l'énergie de la jeunesse, et les conversations deviennent des ponts entre les époques. C'est un moment où le présent danse avec le passé, où les souvenirs se lient aux rêves d'avenir.

            Mais 'Rencontres par-delà les Âges' est bien plus qu'un simple rassemblement. C'est une ode à la mémoire collective, à la transmission du savoir, et à l'importance de la connexion humaine. Ici, les sourires des enfants illuminent les visages des aînés, les questions des jeunes ouvrent des portes vers le passé, et les récits de vie deviennent des trésors à partager. C'est un endroit où les générations se rejoignent pour célébrer la richesse de l'expérience humaine.

            L'événement est un lieu de partage, d'inspiration, et de création, où chacun peut apporter sa contribution, quel que soit son âge. C'est une déclaration d'amour à la diversité intergénérationnelle, où la créativité et l'authenticité sont à l'honneur. Vous êtes tous invités à rejoindre cette mosaïque d'histoires et de sourires, à prendre place autour de la grande table de la vie.",
            'type' => 'evenement',
            'url' => 'https://www.theatreinparis.com/uploads/images/article/la-nouvelle-seine-petits-theatres-paris-header.jpg',
            'date_publication' => '2023/04/09',
            'date_debut' => '2023/11/12',
            'date_fin' => '2023/12/11',
            'statut' => 'en ligne',
        ]);




    }
}
