<?php

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\SubCategory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Profile::create(['role'=>"admin"]);
        Profile::create(['role'=>"Particulier"]);
        Profile::create(['role'=>"Busness"]);

        $Category3  =  Category::create(['name'=>'Immobilier']);

        SubCategory::create(['name'=> 'Appartements à Louer','category_id'=> $Category3->id]);
        SubCategory::create(['name'=> 'Appartements à meublés','category_id'=> $Category3->id]);
        SubCategory::create(['name'=> 'Chambres à Louer','category_id'=> $Category3->id]);
        SubCategory::create(['name'=> 'Terrains à Vendre','category_id'=> $Category3->id]);
        SubCategory::create(['name'=> 'Maisons à Louer','category_id'=> $Category3->id]);
        SubCategory::create(['name'=> 'Maisons à Vendre','category_id'=> $Category3->id]);
        SubCategory::create(['name'=> 'Appartements à Vendre','category_id'=> $Category3->id]);
        SubCategory::create(['name'=> 'Maisons de vacances','category_id'=> $Category3->id]);
        SubCategory::create(['name'=> 'Propriétés Commerciales','category_id'=> $Category3->id]);
        SubCategory::create(['name'=> 'Propriétés Commerciales à Vendre','category_id'=> $Category3->id]);

        $Category4  = Category::create(['name'=>'Multimedia']);

        SubCategory::create(['name'=> 'Ordinateurs','category_id'=> $Category4->id]);
        SubCategory::create(['name'=> 'Téléphones','category_id'=> $Category4->id]);
        SubCategory::create(['name'=> 'Tablettes','category_id'=> $Category4->id]);
        SubCategory::create(['name'=> ' TV & Home Cinema','category_id'=> $Category4->id]);
        SubCategory::create(['name'=> 'Appareils Photos','category_id'=> $Category4->id]);
        SubCategory::create(['name'=> 'Equipement Vidéo et Audio','category_id'=> $Category4->id]);
        SubCategory::create(['name'=> 'Imprimantes & Photocopieurs','category_id'=> $Category4->id]);
        SubCategory::create(['name'=> ' Accessoires multimédia','category_id'=> $Category4->id]);
        SubCategory::create(['name'=> 'Jeux Vidéos & Consoles','category_id'=> $Category4->id]);

        $Category9  = Category::create(['name'=>'Mode & Beauté']);

        SubCategory::create(['name'=> 'Vêtements Homme','category_id'=> $Category9->id]);
        SubCategory::create(['name'=> 'Vêtements Femme','category_id'=> $Category9->id]);
        SubCategory::create(['name'=> 'Instruments de musique','category_id'=> $Category9->id]);
        SubCategory::create(['name'=> 'Parfums & produits cosmétiques','category_id'=> $Category9->id]);
        SubCategory::create(['name'=> 'Montres & Bijoux','category_id'=> $Category9->id]);
        SubCategory::create(['name'=> 'Chaussures Homme','category_id'=> $Category9->id]);
        SubCategory::create(['name'=> 'Chaussures Femme','category_id'=> $Category9->id]);
        SubCategory::create(['name'=> 'Enfant & Bébé','category_id'=> $Category9->id]);
        SubCategory::create(['name'=> 'Lingerie','category_id'=> $Category9->id]);
        SubCategory::create(['name'=> 'Valises & Sacs','category_id'=> $Category9->id]);
        SubCategory::create(['name'=> 'Accessoires de Mode','category_id'=> $Category9->id]);
        SubCategory::create(['name'=> 'Cheveux et Coiffure','category_id'=> $Category9->id]);


        $Category7  = Category::create(['name'=>'Emplois']);

        SubCategory::create(['name'=> 'Management, direction','category_id'=> $Category7->id]);
        SubCategory::create(['name'=> 'Ingénierie','category_id'=> $Category7->id]);
        SubCategory::create(['name'=> 'Gestion de projet','category_id'=> $Category7->id]);
        SubCategory::create(['name'=> 'Services à la personne','category_id'=> $Category7->id]);
        SubCategory::create(['name'=> 'Légal/juridique','category_id'=> $Category7->id]);
        SubCategory::create(['name'=> 'Business Developpement','category_id'=> $Category7->id]);
        SubCategory::create(['name'=> 'Gestion, Administration, Assistanat','category_id'=> $Category7->id]);
        SubCategory::create(['name'=> 'Comptabilité/finances/audit','category_id'=> $Category7->id]);
        SubCategory::create(['name'=> 'Enseignement et formation','category_id'=> $Category7->id]);
        SubCategory::create(['name'=> 'Informatique & Télécoms','category_id'=> $Category7->id]);
        SubCategory::create(['name'=> 'Logistique, transport, achats','category_id'=> $Category7->id]);
        SubCategory::create(['name'=> 'Marketing, communication, Design','category_id'=> $Category7->id]);
        SubCategory::create(['name'=> 'Médical et santé','category_id'=> $Category7->id]);
        SubCategory::create(['name'=> 'Etudes, recherche et développement','category_id'=> $Category7->id]);
        SubCategory::create(['name'=> 'Contrôle qualité, hygiène, sécurité','category_id'=> $Category7->id]);
        SubCategory::create(['name'=> 'Vente et commercial','category_id'=> $Category7->id]);

      $Category1  = Category::create(['name'=>'Services']);

      SubCategory::create(['name'=> 'Cours particuliers','category_id'=> $Category1->id]);
      SubCategory::create(['name'=> 'Prestations de service','category_id'=> $Category1->id]);
      SubCategory::create(['name'=> 'Formations','category_id'=> $Category1->id]);
      SubCategory::create(['name'=> 'Objets perdus / retrouvés','category_id'=> $Category1->id]);

      $Category2  = Category::create(['name'=>'Vehicules']);

      SubCategory::create(['name'=> 'Motos & Scooters','category_id'=> $Category2->id]);
      SubCategory::create(['name'=> 'Équipements & Pièces','category_id'=> $Category2->id]);
      SubCategory::create(['name'=> 'Location de Véhicules','category_id'=> $Category2->id]);
      SubCategory::create(['name'=> 'Bateaux','category_id'=> $Category2->id]);
      SubCategory::create(['name'=> 'Cars & Camions','category_id'=> $Category2->id]);
      SubCategory::create(['name'=> 'Taxis','category_id'=> $Category2->id]);
      SubCategory::create(['name'=> 'Vélos','category_id'=> $Category2->id]);





      $Category5  = Category::create(['name'=>'Maison']);

      SubCategory::create(['name'=> 'Mobilier','category_id'=> $Category5->id]);
      SubCategory::create(['name'=> 'Electromenager','category_id'=> $Category5->id]);
      SubCategory::create(['name'=> 'Décoration, Linge de Maison','category_id'=> $Category5->id]);
      SubCategory::create(['name'=> 'Vaisselles','category_id'=> $Category5->id]);
      SubCategory::create(['name'=> 'Jardinage, bricolage','category_id'=> $Category5->id]);

      $Category6  = Category::create(['name'=>'Événements & loisirs']);

      SubCategory::create(['name'=> 'Matériel de Sport','category_id'=> $Category6->id]);
      SubCategory::create(['name'=> 'CDs, DVDs & Livres','category_id'=> $Category6->id]);
      SubCategory::create(['name'=> 'Instruments de musique','category_id'=> $Category6->id]);
      SubCategory::create(['name'=> 'Événements','category_id'=> $Category6->id]);
      SubCategory::create(['name'=> 'Art & Artisanat, bricolage','category_id'=> $Category6->id]);
      SubCategory::create(['name'=> 'Tourisme & Activités, bricolage','category_id'=> $Category6->id]);


      $Category8  = Category::create(['name'=>'Demandes d’emploi']);

      SubCategory::create(['name'=> 'Chauffeur, Conducteur','category_id'=> $Category8->id]);
      SubCategory::create(['name'=> 'Restauration','category_id'=> $Category8->id]);
      SubCategory::create(['name'=> 'Nettoyage, personnel','category_id'=> $Category8->id]);
      SubCategory::create(['name'=> 'Nounous, garde d’enfants','category_id'=> $Category8->id]);
      SubCategory::create(['name'=> 'Stages','category_id'=> $Category8->id]);
      SubCategory::create(['name'=> 'Autres demandes d’emplois','category_id'=> $Category8->id]);


      $Category10 = Category::create(['name'=>'Matériaux & outils ']);

      SubCategory::create(['name'=> 'Matériel Pro','category_id'=> $Category10->id]);
      SubCategory::create(['name'=> 'Materiel de construction','category_id'=> $Category10->id]);
      SubCategory::create(['name'=> 'Energie & Groupes Electrogènes','category_id'=> $Category10->id]);
      SubCategory::create(['name'=> 'Caméras de Surveillance','category_id'=> $Category10->id]);
      SubCategory::create(['name'=> 'Equipement Restauration','category_id'=> $Category10->id]);
      SubCategory::create(['name'=> 'Equipement Medical','category_id'=> $Category10->id]);

      $Category11 = Category::create(['name'=>'Animaux']);

      SubCategory::create(['name'=> 'Chiens & Chiots','category_id'=> $Category11->id]);
      SubCategory::create(['name'=> 'Moutons','category_id'=> $Category11->id]);
      SubCategory::create(['name'=> 'Pigeons','category_id'=> $Category11->id]);
      SubCategory::create(['name'=> 'Lapins','category_id'=> $Category11->id]);
      SubCategory::create(['name'=> 'Chats & Chatons','category_id'=> $Category11->id]);
      SubCategory::create(['name'=> 'Autres Animaux','category_id'=> $Category11->id]);
      SubCategory::create(['name'=> 'Accessoires Animaux','category_id'=> $Category11->id]);

      $Category12 = Category::create(['name'=>'Agroalimentaire']);

      SubCategory::create(['name'=> 'Alimentation','category_id'=> $Category12->id]);
      SubCategory::create(['name'=> 'Agriculture','category_id'=> $Category12->id]);


    }
}
