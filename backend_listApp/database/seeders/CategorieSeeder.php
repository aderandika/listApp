<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorie = [
            [
                'id_user' => 1,
                'nama_kategori' => 'kerjaan kantor',
                'warna_label' => 'merah',
            ]
        ];

        foreach ($categorie as $reminderItem) {
            Category::create($reminderItem);
        }
    }
}
