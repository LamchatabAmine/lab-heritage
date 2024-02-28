<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stagiaire;

class StagiaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = \Carbon\Carbon::now();
        Stagiaire::create([
            'nom' => 'Ahmed',
            'prenom' => 'Ben ali',
            'email' => 'ahmed@gmail.com',
            'type' => 'stagiaire',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        Stagiaire::create([
            'nom' => 'Karim',
            'prenom' => 'Souiri',
            'email' => 'karim@gmail.com',
            'type' => 'stagiaire',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        Stagiaire::create([
            'nom' => 'Imane',
            'prenom' => 'Alami',
            'email' => 'imane@gmail.com',
            'type' => 'stagiaire',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        Stagiaire::create([
            'nom' => 'Salah',
            'prenom' => 'Kamari',
            'email' => 'salah@gmail.com',
            'type' => 'stagiaire',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
