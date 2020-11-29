<?php

namespace Database\Factories;

use App\Models\BookLoan;
use App\Models\Publisher;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookLoanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BookLoan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "date_out" => $this->faker->dateTime('now'),
            "due_date" => $this->faker->dateTimeBetween("now", "+2 month"),
            'date_in' => $this->faker->boolean ? $this->faker->dateTimeBetween('now', '+2 month') : null,
            'user_id' => User::all()->random()->id,
        ];
    }
}
