<?php

namespace Database\Factories;

use App\Models\Tripcost;
use Illuminate\Database\Eloquent\Factories\Factory;

class TripcostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tripcost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'businfo_id' => $this->faker->word,
        'bookseat_id' => $this->faker->word,
        'fuel' => $this->faker->word,
        'price_per_liter' => $this->faker->word,
        'toll_cost' => $this->faker->word,
        'maintenance' => $this->faker->word,
        'driver_salary' => $this->faker->word,
        'helper_salary' => $this->faker->word,
        'supervisor_salary' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
