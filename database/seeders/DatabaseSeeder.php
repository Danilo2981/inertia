<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
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

        User::factory()->create([
            "name" => "danilo",
            "email" => "danilo.vega.lopez@gmail.com",
            "password" => bcrypt("123456789"),
        ]);

        User::factory()->create([
            "name" => "tachita",
            "email" => "tachita@gmail.com",
            "password" => bcrypt("123456789"),
        ]);

        Project::factory(200)->create();
    }
}
