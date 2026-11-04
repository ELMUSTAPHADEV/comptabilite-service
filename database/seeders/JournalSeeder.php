<?php

namespace Database\Seeders;

use App\Models\Journal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $journaux = [
        'ACH' => 'Journal des achats',
        'VTE' => 'Journal des ventes',
        'BQ'  => 'Journal de banque',
        'CAI' => 'Journal de caisse',
        'OD'  => 'Opérations diverses',
    ];

    foreach ($journaux as $code => $libelle) {
        Journal::updateOrCreate(['code' => $code], ['libelle' => $libelle]);
    }
    }
}
