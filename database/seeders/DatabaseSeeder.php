<?php

namespace Database\Seeders;

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
        $this->call(
            PublisherSeeder::class
        );
        $this->call(
            StatusSeeder::class
        );
        $this->call(
            TypeSeeder::class
        );
        $this->call(
            UserSeeder::class
        );
    }
}
