<?php

namespace Database\Seeders;

use App\Models\Compte;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $comptes = [
        // Classe 1 : financement permanent
        ['1111', 'Capital social', 1, 'passif'],
        ['1140', 'Réserve légale', 1, 'passif'],
        ['1481', 'Emprunts auprès des établissements de crédit', 1, 'passif'],

        // Classe 2 : actif immobilisé
        ['2321', 'Bâtiments', 2, 'actif'],
        ['2340', 'Matériel de transport', 2, 'actif'],
        ['2355', 'Matériel informatique', 2, 'actif'],

        // Classe 3 : actif circulant
        ['3111', 'Marchandises', 3, 'actif'],
        ['3421', 'Clients', 3, 'actif'],
        ['3455', 'État - TVA récupérable', 3, 'actif'],

        // Classe 4 : passif circulant
        ['4411', 'Fournisseurs', 4, 'passif'],
        ['4432', 'Rémunérations dues au personnel', 4, 'passif'],
        ['4441', 'Caisse nationale de sécurité sociale', 4, 'passif'],
        ['4455', 'État - TVA facturée', 4, 'passif'],

        // Classe 5 : trésorerie
        ['5141', 'Banques', 5, 'actif'],
        ['5161', 'Caisses', 5, 'actif'],

        // Classe 6 : charges
        ['6111', 'Achats de marchandises', 6, 'charge'],
        ['6131', 'Locations et charges locatives', 6, 'charge'],
        ['6171', 'Rémunérations du personnel', 6, 'charge'],
        ['6174', 'Charges sociales', 6, 'charge'],

        // Classe 7 : produits
        ['7111', 'Ventes de marchandises au Maroc', 7, 'produit'],
        ['7124', 'Ventes de services produits au Maroc', 7, 'produit'],
    ];
    foreach ($comptes as [$numero, $libelle, $classe, $type]) {
        Compte::updateOrCreate(
            ['numero' => $numero],
            ['libelle' => $libelle, 'classe' => $classe, 'type' => $type]
        );
    }
    }
}
