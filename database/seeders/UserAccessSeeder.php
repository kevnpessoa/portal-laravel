<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserAccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\UserAccess::factory(15000)->create();
    }
}
