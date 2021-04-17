<?php

namespace Database\Factories;

use App\Models\Bus_owner;
use Illuminate\Database\Eloquent\Factories\Factory;

class Bus_ownerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bus_owner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bus_name' => $this->faker->word,
        'registration_no' => $this->faker->word,
        'bus_owner_name' => $this->faker->word,
        'bus_owner_mobile_no' => $this->faker->word,
        'bus_owner_email' => $this->faker->word,
        'nid' => $this->faker->word,
        'address' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
