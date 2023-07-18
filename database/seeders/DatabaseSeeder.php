<?php

namespace Database\Seeders;

use App\Models\Tes;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Tes::factory(10)->create();
        Tes::create([
            'nama' => 'tes',
            'no_hp' => '01924012'
        ]);
    }
}
