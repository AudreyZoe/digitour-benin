<?php

namespace Database\Seeders;

use App\Models\SiteTouristique;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteTouristiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         SiteTouristique::create([
            'nom' => 'Palais Royal d’Abomey',
            'description' => 'Site historique classé UNESCO situé à Abomey.',
            'localisation' => 'Abomey',
            'accessibilite' => true,
        ]);

        SiteTouristique::create([
            'nom' => 'Plage de Grand-Popo',
            'description' => 'Plage paisible idéale pour la détente et les activités nautiques.',
            'localisation' => 'Grand-Popo',
            'accessibilite' => false,
        ]);

        SiteTouristique::create([
            'nom' => 'Forêt sacrée de Kpassè',
            'description' => 'Lieu sacré riche en histoire et culture.',
            'localisation' => 'Dassa-Zoumé',
            'accessibilite' => false,
        ]);
    }
}
