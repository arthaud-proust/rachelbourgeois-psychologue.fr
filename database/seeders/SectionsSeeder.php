<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            'order' => 1,
            'anchor' => true,
            'appointement_before' => true,
            'type' => 'text',
            'title' => 'Présentation',
            'content' => 'Mes compétences de psychologue clinicienne au service de votre bien-être et de votre santé psychique.<br>Consultations Thérapeutiques:  thérapie brève, thérapie de soutien, thérapie analytique, thérapie de couple.<br>Ateliers:<br>Art-thérapie, écriture autobiographique, relaxation et méditation.',
        ]);

        DB::table('sections')->insert([
            'order' => 2,
            'type' => 'text',
            'title' => 'Le cabinet',
            'image_url' => '1.jpg',
            'content' => 'Le cabinet est situé au premier étage sans ascenseur (consultations à domicile possibles) du 489 Avenue du Maréchal de Lattre de Tassigny, à Bordeaux (33520). <br><br>À proximité de la ligne 3 et pas très loin des lignes 2 et 35 et 41. Il y a également une place de parking gratuite pour les voitures.',
        ]);

        DB::table('sections')->insert([
            'order' => 3,
            'type' => 'text',
            'title' => 'Espace enfant',
            'image_url' => '2.jpg',
            'content' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, ',
        ]);

        DB::table('sections')->insert([
            'order' => 4,
            'type' => 'list',
            'title' => 'Formations et expérience',
            'content' => '[["1994",["D.E.S.S. Psychologie clinique - Université Bordeaux Segalen"]],["1995",["D.E.A. Psychologie et sciences de l\'éducation - Université Bordeaux Segalen "]],["2016",["D.U. de psychogérontologie clinique et pathologique - Université de Bordeau"]],["Depuis 2012",["Cabinet à Bordeaux"]],["2015 - 2018",["Praticienne - EHPAD Ma Maison Petites sœurs de pauvres - Bordeaux - Psychologie"]]]',
        ]);

        DB::table('sections')->insert([
            'order' => 5,
            'anchor' => true,
            'type' => 'cards',
            'title' => 'Consultations',
            'content' => '[["Adultes et Seniors","Stress, anxiété, bouleversement (changement de travail, naissance d\'un enfant, départ en retraite), troubles du sommeil, troubles alimentaires, problèmes relationnels, maladie, rupture, deuil"],["Enfants","inhibition/phobie scolaire, harcèlement/problèmes relationnels, haut potentiel intellectuel, troubles du comportement, agressivité, troubles du sommeil, troubles anxieux, trouble somatiques (mal de tête, au ventre... ), troubles de l\'attachement, séparation/divorce, deuil"],["Couple","Thérapie conjugale, soutien parental, aide à la co-parentalité (familles recomposées)"],["Adoslescents","Troubles relationnels, anxiété, isolement, transgressions, conduites à risque, addictions (écrans, alcool... ), agressivité, difficultés scolaire, harcèlement, accès progressif à l\'autonomie, questionnement sur l\'identité"]]',
        ]);

        DB::table('sections')->insert([
            'order' => 6,
            'type' => 'cards',
            'title' => 'Ateliers',
            'content' => '[["Psy et Plumes","Pour adultes ou seniors souhaitant revisiter leur vie et la raconter pour en garder une trace, au moyen d\'exercices facilitant le passage à l\'écrit. Édition annuelle d\'un livret compilant les textes choisis par les écrivains.<br>Atelier mensuel par petits groupes (essai gratuit)"],["Relaxation, méditation","Pour les adultes souhaitant prendre le temps de souffler et de se détendre, après le travail. Initiation à la relaxation et à la méditation, tous les 15 jours. <br>Séance d\'essai gratuite."],["Art-thérapie","Consultations à médiation artistique, dessin, peinture, collage, photo-montage.<br>Séance d\'une heure, expression libre, puis analyse. <br>Matériel fourni."]]',
        ]);

        DB::table('sections')->insert([
            'order' => 7,
            'appointement_before' => true,
            'type' => 'list',
            'title' => 'Horaires',
            'content' => '[["Consultation du lundi au vendredi",["9h à 12h","13h à 19h"]],["Psy et Plume un mercredi par mois",["10h à 12h ou 18h à 20h"]],["Relaxation et méditation un jeudi sur deux",["19h à 20h"]],["Art-thérapie",["Prendre rendez-vous"]]]',
        ]);

        DB::table('sections')->insert([
            'order' => 8,
            'anchor' => true,
            'type' => 'list',
            'title' => 'Contact',
            'content' => '[["Téléphone", ["06 70 80 90 81"]], ["Email", ["rbourgeois.psy@free.fr"]], ["Adresse", ["489 Avenue du Maréchal de Lattre de Tassigny"]]]',
        ]);

        DB::table('sections')->insert([
            'order' => 9,
            'anchor' => true,
            'type' => 'tarifs',
            'title' => 'Tarifs',
            'content' => '[["Première consultation de psychologie,<br>consultation familiale,<br>Consultation de suivi de psychologie","45€"],["Première consultation de thérapie de couple,<br>Consultation de suivi de thérapie de couple","80€"],["Bilan psychologique (2-3 consultations de 2h)","365€"],["Bilan d\'orientation scolaire (2-3 consultations de 2h)","260€"],["Trimestre atelier Psy et Plumes","90€"],["Trimestre atelier Relaxation et méditation","120€"],["Séance Art-thérapie","80€"]]',
        ]);
    }
}
