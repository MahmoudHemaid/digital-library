<?php

namespace Database\Seeders;

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
        User::factory(20)->create();
        $this->call([
            PublisherSeeder::class,
            BookSeeder::class,
            AuthorSeeder::class,
            CategorySeeder::class,
            BookLoanSeeder::class,
            BookAuthorSeeder::class,
            BookCategorySeeder::class,
        ]);
    }
}
