<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $this->call(RoleSeeder::class);
        User::create([
            'name' =>'Cavidan',
            'email' =>'nasirovcavidan@gmail.com',
            'password' =>bcrypt('Cavidan_2003'),
            'role_id'=>1,
            'created_at' =>now(),
        ]);

        User::create([
            'name' =>'accountant',
            'email' =>'accountant@gmail.com',
            'password' =>bcrypt('password'),
            'role_id'=>2,
            'created_at' =>now(),
        ]);

        $this->call([
            SettingSeeder::class,
            ]);

        // \App\Models\User::factory(10)->create();
    }
}
