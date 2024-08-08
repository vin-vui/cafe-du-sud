<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{

    public function run(): void
    {
        // eventS
        Article::create([
            'title' => 'Atelier theatre improvisation',
            'content' => "Dans ce monde en perpétuelle agitation, où la routine étouffe parfois notre créativité, nous vous invitons à une expérience artistique unique, à un voyage vers l'inconnu, à une aventure où les mots et les gestes se fondent dans un ballet spontané. Bienvenue à notre atelier de théâtre d'improvisation, un espace de liberté, de découverte et d'expression personnelle.

            L'improvisation, c'est l'art de la spontanéité, la danse de l'instant, où chaque acteur est également un créateur. Dans ce sanctuaire de la créativité, les règles traditionnelles sont balayées par le vent de la liberté. Ici, il n'y a pas de mauvaises répliques, seulement des opportunités de rebondir et d'innover. Les acteurs, novices ou expérimentés, se mêlent dans une symbiose artistique, où l'émotion brute devient l'âme de la performance.

            Mais l'atelier théâtre d'improvisation est bien plus qu'une simple expérience artistique. C'est un espace où la diversité est célébrée, où les voix marginales trouvent leur place. C'est un terrain de jeu où l'art transcende les barrières sociales, où l'authenticité est le maître-mot, et où chaque participant contribue à tisser la toile d'une œuvre collective.

            L'atelier est un refuge pour les esprits créatifs, les rêveurs, les révolutionnaires de l'âme. Il est ouvert à tous, quel que soit votre parcours, votre âge, ou votre origine. Rejoignez-nous dans cette quête de l'inconnu, de la spontanéité, et de l'authenticité.",
            'type' => 'event',
            'url' => 'https://images.unsplash.com/photo-1493118679111-17759f85f8ff?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8dXJiYW4lMjBhcnR8ZW58MHx8MHx8fDA%3D',
            'publication_date' => '2024/04/09',
            'begin_date' => '2024/11/14',
            'status' => 'published',
        ]);

        Article::create([
            'title' => "Ateliers d'Art Urbain",
            'content' => "Les 'Ateliers d'Art Urbain pour les Jeunes' sont une initiative éducative qui vise à inspirer la prochaine génération d'artistes urbains. Ces ateliers offrent aux jeunes l'opportunité d'apprendre les techniques du street art, de participer à la création de fresques murales colorées et d'explorer leur créativité dans un environnement positif et supervisé.

            L'objectif est double : d'une part, transmettre des compétences artistiques aux jeunes générations et, d'autre part, embellir les espaces urbains en transformant les murs en toiles artistiques. Les participants découvrent les méthodes du street art, de la conception à la réalisation, tout en s'exprimant librement.

            C'est une opportunité de sensibiliser les jeunes à l'art public, à la créativité et à l'importance de la communauté. Ces ateliers favorisent l'inclusivité, l'expression individuelle et la collaboration. Ils ouvrent de nouvelles perspectives sur la ville et offrent aux jeunes un moyen de s'engager positivement dans leur environnement.

            'Ateliers d'Art Urbain pour les Jeunes' promet d'inspirer, d'éduquer et de décorer, tout en favorisant la créativité chez les plus jeunes.",
            'type' => 'event',
            'url' => 'https://images.unsplash.com/photo-1640104281629-856e645ed113?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXJiYW4lMjBhcnR8ZW58MHx8MHx8fDA%3D',
            'publication_date' => '2024/04/09',
            'begin_date' => '2024/11/15',
            'end_date' => '2024/12/22',
            'status' => 'published',
        ]);

        Article::create([
            'title' => 'Rencontre par delà les ages',
            'content' => "Dans le tourbillon de la vie moderne, où le temps file et les relations se tissent et se défont au gré des écrans, nous vous invitons à une aventure unique, à un voyage à travers le temps, à une célébration des liens intemporels. Bienvenue à nos 'Rencontres par-delà les Âges', un événement magique où les générations se rencontrent, se mêlent, et partagent des histoires qui transcendent les époques.

            Rencontrer par-delà les âges, c'est plonger dans un océan d'expériences, c'est un dialogue intergénérationnel où les récits de vie se mêlent à la sagesse des anciens. Dans cet espace sacré, les jeunes écoutent les contes des anciens, les aînés se laissent emporter par l'énergie de la jeunesse, et les conversations deviennent des ponts entre les époques. C'est un moment où le présent danse avec le passé, où les souvenirs se lient aux rêves d'avenir.

            Mais 'Rencontres par-delà les Âges' est bien plus qu'un simple rassemblement. C'est une ode à la mémoire collective, à la transmission du savoir, et à l'importance de la connexion humaine. Ici, les sourires des enfants illuminent les visages des aînés, les questions des jeunes ouvrent des portes vers le passé, et les récits de vie deviennent des trésors à partager. C'est un endroit où les générations se rejoignent pour célébrer la richesse de l'expérience humaine.

            L'événement est un lieu de partage, d'inspiration, et de création, où chacun peut apporter sa contribution, quel que soit son âge. C'est une déclaration d'amour à la diversité intergénérationnelle, où la créativité et l'authenticité sont à l'honneur. Vous êtes tous invités à rejoindre cette mosaïque d'histoires et de sourires, à prendre place autour de la grande table de la vie.",
            'type' => 'event',
            'url' => 'https://images.unsplash.com/photo-1518578315474-bc9ce7151ce4?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dXJiYW4lMjBhcnR8ZW58MHx8MHx8fDA%3D',
            'publication_date' => '2024/04/09',
            'begin_date' => '2024/11/16',
            'end_date' => '2024/12/18',
            'status' => 'published',
        ]);

        Article::create([
            'title' => "Festival d'Arts de Rue 'SudArt'",
            'content' => "Le festival 'SudArt' est un événement annuel qui transforme notre ville en une scène artistique vivante. Pendant trois jours, les rues résonnent de la créativité et de l'expression artistique. Des artistes locaux et internationaux, qu'ils soient musiciens, danseurs, peintres, sculpteurs ou acrobates, se réunissent pour présenter des performances spectaculaires en plein air. C'est une célébration de l'art sous toutes ses formes.

            'SudArt' a pour objectif de rendre l'art accessible à tous, de briser les barrières entre les artistes et leur public. Il favorise l'inclusivité et l'ouverture d'esprit, encourageant la participation du public. Vous pouvez vous attendre à des spectacles de rue surprenants, des ateliers interactifs, des stands d'artisanat et de la nourriture délicieuse. C'est une occasion unique de se laisser emporter par l'art et de célébrer la créativité.

            Que vous soyez un amateur d'art ou simplement en quête de divertissement, 'SudArt' vous invite à vous joindre à cette fête artistique, à découvrir de nouvelles formes d'expression et à participer à un événement communautaire mémorable.",
            'type' => 'event',
            'url' => 'https://images.unsplash.com/photo-1523198887930-a93d4517c622?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHVyYmFuJTIwYXJ0fGVufDB8fDB8fHww',
            'publication_date' => '2024/04/09',
            'begin_date' => '2024/12/12',
            'end_date' => '2024/12/16',
            'status' => 'published',
        ]);

        Article::create([
            'title' => "Semaine de l'Art Engagé",
            'content' => "La 'Semaine de l'Art Engagé' est une manifestation artistique unique qui réunit des artistes engagés socialement pour sensibiliser à des problématiques cruciales. Tout au long de la semaine, la créativité est au service du changement. Des expositions d'art percutantes, des performances scéniques captivantes et des discussions inspirantes se multiplient, toutes centrées sur des questions urgentes telles que l'égalité des genres, le changement climatique, les droits de l'homme et bien d'autres.

            Les artistes utilisent leur talent pour éveiller les consciences, susciter la réflexion et stimuler le dialogue. 'La Semaine de l'Art Engagé' transcende les frontières de l'art conventionnel pour devenir une plateforme puissante de plaidoyer social. C'est l'occasion d'explorer la façon dont l'art peut être un moteur de changement et un outil de sensibilisation.

            Tous sont invités à participer, à dialoguer avec les artistes et à apporter leur contribution à la discussion. C'est un moment pour se laisser inspirer, pour s'engager et pour découvrir comment l'art peut être un agent du changement social positif.",
            'type' => 'event',
            'url' => 'https://images.unsplash.com/photo-1518637862995-75e3f7107bb7?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8dXJiYW4lMjBhcnR8ZW58MHx8MHx8fDA%3D',
            'publication_date' => '2024/04/09',
            'begin_date' => '2024/12/18',
            'end_date' => '2024/12/23',
            'status' => 'published',
        ]);
        Article::create([
            'title' => "Nuit de l'Improvisation Théâtrale",
            'content' => "La 'Nuit de l'Improvisation Théâtrale' est une soirée d'humour et de créativité spontanée. Les troupes locales d'improvisation théâtrale se réunissent pour offrir des performances hilarantes basées sur les suggestions du public. Les spectateurs sont invités à proposer des thèmes, des lieux et des idées, ce qui conduit à des scènes inattendues et souvent hilarantes.

            C'est un événement où l'interaction est à l'honneur, où le public joue un rôle essentiel dans la création du spectacle. Les acteurs relèvent des défis comiques, inventent des personnages sur-le-champ et tissent des histoires extravagantes. Chaque moment est unique et imprévisible, ce qui crée une atmosphère d'excitation constante.

            Que vous soyez un amateur de théâtre ou simplement à la recherche de divertissement, 'La Nuit de l'Improvisation Théâtrale' promet de vous faire rire aux éclats et de vous laisser pantois face à la créativité humaine. C'est une soirée de légèreté et de comédie qui réchauffe le cœur et l'âme.",
            'type' => 'event',
            'url' => 'https://images.unsplash.com/photo-1521661437940-03934b2c57a7?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fHVyYmFuJTIwYXJ0fGVufDB8fDB8fHww',
            'publication_date' => '2024/04/09',
            'begin_date' => '2024/01/03',
            'end_date' => '2024/01/08',
            'status' => 'published',
        ]);

        // post
        Article::create([
            'title' => "L'Art de la Photographie : Capturer l'Âme d'un Instant",
            'content' => "La photographie est un art qui transcende les limites du temps. C'est la magie de figer un instant, de capturer une émotion, de raconter une histoire sans un seul mot. Dans cet article, nous plongeons profondément dans l'art de la photographie. Des techniques de composition aux secrets de l'éclairage, nous explorons les astuces qui transforment une simple image en une œuvre d'art. Les photographes professionnels partagent leur passion et leur vision de l'art de la photographie, vous invitant dans un monde où chaque instant devient une opportunité artistique. La photographie va au-delà de la technique, c'est l'art de voir le monde sous un nouvel angle, de révéler la beauté dans les détails les plus simples, de transmettre des émotions profondes et de susciter la réflexion.",
            'type' => 'post',
            'url' => 'https://images.unsplash.com/photo-1517508106105-feb70e05d60a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHVyYmFuJTIwYXJ0fGVufDB8fDB8fHww',
            'publication_date' => '2024/04/09',
            'begin_date' => null,
            'end_date' => null,
            'status' => 'published',
        ]);

        Article::create([
            'title' => "Le Pouvoir de l'Art dans la Vie Quotidienne",
            'content' => "L'art ne se limite pas aux musées et aux galeries. Il peut être un compagnon quotidien qui égaye notre vie, suscite la créativité et enrichit notre âme. Dans cet article, nous explorons le pouvoir de l'art dans notre vie de tous les jours. Des graffitis colorés qui ornent les murs de nos villes aux objets artisanaux qui décorent nos maisons, découvrez comment l'art peut inspirer, apaiser et enrichir nos expériences quotidiennes. Nous plongeons dans le monde des artistes de rue, des artisans locaux et des amateurs de bricolage passionnés qui apportent la créativité dans chaque coin de notre vie. Explorez comment vous pouvez intégrer davantage d'art dans votre quotidien, transformant ainsi chaque jour en une œuvre d'art.",
            'type' => 'post',
            'url' => 'https://images.unsplash.com/photo-1512482170774-d19aa2390114?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fHVyYmFuJTIwYXJ0fGVufDB8fDB8fHww',
            'publication_date' => '2024/04/09',
            'begin_date' => null,
            'end_date' => null,
            'status' => 'published',
        ]);

        Article::create([
            'title' => "La Magie de la Danse : Émotions à l'État Pur",
            'content' => "La danse est un langage universel de l'âme, une expression de l'émotion pure à travers le mouvement. Dans cet article, nous nous plongeons dans la magie de la danse, explorant ses différentes formes, de la grâce du ballet classique à l'énergie explosive de la danse contemporaine. Rencontrez les danseurs et les chorégraphes qui donnent vie à des histoires sans mots, en utilisant leur corps comme pinceau et la scène comme toile. Découvrez comment la danse transcende les barrières culturelles, évoque des émotions profondes et nous connecte à notre essence humaine. Plongez dans un monde où chaque mouvement est une histoire, chaque pas est une émotion et chaque danseur est un artiste de l'âme.",
            'type' => 'post',
            'url' => 'https://images.unsplash.com/photo-1700529119544-e68bb19f5821?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fHVyYmFuJTIwYXJ0fGVufDB8fDB8fHww',
            'publication_date' => '2024/04/09',
            'begin_date' => null,
            'end_date' => null,
            'status' => 'published',
        ]);

        Article::create([
            'title' => "Le Langage de la Couleur : Comprendre l'Impact Émotionnel de la Palette",
            'content' => "Les couleurs sont bien plus que des pigments sur une toile, ce sont des moyens de communication émotionnelle. Dans cet article, nous explorons la signification des couleurs, de l'apaisement du bleu à la passion du rouge en passant par la sérénité du vert. Nous plongeons dans la psychologie des couleurs, révélant comment elles influencent nos émotions, nos réactions et nos perceptions. Des artistes et des designers aux psychologues et aux marketeurs, tout le monde utilise la palette de couleurs pour susciter des émotions spécifiques. Découvrez comment les couleurs transforment notre environnement, influencent nos choix et nous immergent dans des expériences visuelles captivantes. Plongez dans le monde fascinant du langage des couleurs et explorez comment vous pouvez utiliser ce langage pour améliorer votre vie quotidienne.",
            'type' => 'post',
            'url' => 'https://drive.google.com/uc?export=view&id=1iMGZNM0-7sUCU1wAFML43sUncLcsDrNU',
            'publication_date' => '2024/04/09',
            'begin_date' => null,
            'end_date' => null,
            'status' => 'published',
        ]);

        Article::create([
            'title' => "L'Art de la Poterie : Créer des Œuvres uniques de la Terre",
            'content' => "La poterie est une forme d'art millénaire qui unit la créativité à l'élément terre. Dans cet article, nous explorons l'art de la poterie, en révélant les techniques de modelage, de tournage et de décoration qui transforment l'argile en œuvres d'art fonctionnelles et esthétiques. Rencontrez les potiers qui créent des pièces uniques, des bols élégants aux sculptures expressives, en utilisant leur habileté et leur imagination. Découvrez le processus de création, de la première touche à la cuisson en passant par l'émaillage, et comment chaque pièce raconte une histoire. Plongez dans un monde de beauté tactile, où la terre devient une toile pour l'expression artistique, où chaque poterie est une ode à la créativité humaine.",
            'type' => 'post',
            'url' => 'https://images.unsplash.com/photo-1518484216091-ee6c0d93d7e1?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHVyYmFuJTIwYXJ0fGVufDB8fDB8fHww',
            'publication_date' => '2024/04/09',
            'begin_date' => null,
            'end_date' => null,
            'status' => 'published',
        ]);

        Article::create([
            'title' => "L'Art de la Calligraphie : Écrire avec Beauté et Signification",
            'content' => " La calligraphie est un art de l'écriture qui marie la beauté à la signification. Dans cet article, nous explorons la calligraphie, une pratique artistique séculaire qui élève les mots à un niveau supérieur. Découvrez comment les calligraphes manient la plume avec grâce et précision pour créer des œuvres d'art littéraire. Chaque ligne, chaque courbe devient une danse sur la page, ajoutant une dimension visuelle à l'écriture. Découvrez comment la calligraphie transforme les mots en images, ajoute une touche artistique à l'expression écrite et véhicule des messages profonds. Plongez dans l'univers de la beauté des mots, où chaque lettre devient une œuvre d'art en soi, et explorez comment la calligraphie peut être une source d'inspiration dans l'art de la communication.",
            'type' => 'post',
            'url' => 'https://images.unsplash.com/photo-1568578728400-95dd4f33a85b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHVyYmFuJTIwYXJ0fGVufDB8fDB8fHww',
            'publication_date' => '2024/04/09',
            'begin_date' => null,
            'end_date' => null,
            'status' => 'published',
        ]);

    }
}
