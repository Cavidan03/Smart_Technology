<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'name' => 'Bayıl Bay',
            'description' => 'bayil.jpg',
            'link' => 'bayil.jpg',
        ]);

        Project::create([
            'name' => 'DTX Hospital',
            'description' => 'clinic_02.jpg',
            'link' => 'clinic_02.jpg',
        ]);

        Project::create([
            'name' => 'Təmiz Şəhər',
            'description' => 'temiz-seher.jpg',
            'link'=> 'temiz-seher.jpg',
        ]);

        Project::create([
            'name' => 'Gəncliy Hotel',
            'description' => 'clinic_01.jpg',
            'link' => 'clinic_01.jpg',
        ]);
    }
}
