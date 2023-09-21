<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorie::create([
            'name'=> "chaire",
        ]);
        Categorie::create([
            'name'=> "tables",
        ]);
        Categorie::create([
            'name'=> "sofa",
        ]);
        Categorie::create([
            'name'=> "autre",
        ]);
    }
}
