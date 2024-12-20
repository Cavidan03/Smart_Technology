<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'key' => 'title',
                'value' => 'Smart Technology'
            ],
            [
                'key' => 'business_email',
                'value' => 'nasirovcavidan@gmail.com'
            ],
            [
                'key' => 'address',
                'value' => 'Bakı, Səbail'
            ],
            [
                'key' => 'business_phone',
                'value' => '+994508208314'
            ],
            [
                'key' => 'working_horse',
                'value' => '08:00 - 18:00'
            ],
            [
                'key' => 'description',
                'value' => 'Təhlükəsizlik sistemlərinin təmin edilməsi, İnformasiya Texnologiyaları üzrə layihələr, Proqram təminatının təhlili, layihələşdirilməsi və hazırlanması'
            ],
            [
                'key' => 'logo',
                'value' => 'logo.png'
            ],
            [
                'key' => 'icon',
                'value' => 'icon.png'
            ],
            [
                'key' => 'facebook',
                'value' => '#'
            ],
            [
                'key' => 'twitter',
                'value' => '#'
            ],
            [
                'key' => 'instagram',
                'value' => '#'
            ],
            [
                'key' => 'linkedin',
                'value' => '#'
            ],
            [
                'key' => 'youtube',
                'value' => '#'
            ],
            [
                'key' => 'pinterest',
                'value' => '#'
            ]
        ];

        foreach ($settings as $setting) {
            \App\Models\Settings::firstOrCreate($setting);
        }
    }
}
