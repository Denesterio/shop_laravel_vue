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
        $this->call([
            UserSeeder::class,
            AuthorSeeder::class,
            CategorySeeder::class,
            SubcategorySeeder::class,
            TagSeeder::class,
            CoverSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
