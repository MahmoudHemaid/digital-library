<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookFactory extends Factory
{
    use SoftDeletes;
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence(4, true),
            "description" => $this->faker->sentence(3, true),
            'location' => "Floor 4, Section B003",
            'number_of_copies' => $this->faker->numberBetween(0, 20),
            'date_of_publication' => $this->faker->dateTime('now'),
            'publisher_id' => Publisher::all()->random()->id,
        ];
    }
}
