<?php

namespace Database\Seeders;

use App\Models\BookLoan;
use Illuminate\Database\Seeder;

class BookLoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookLoan::factory(60)->create();
    }
}
