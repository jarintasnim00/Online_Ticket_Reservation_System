<?php

namespace Database\Factories;

use App\Models\Businfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class BusinfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Businfo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bustyp_id' => $this->faker->word,
        'leaving_from' => $this->faker->word,
        'going_to' => $this->faker->word,
        'name' => $this->faker->word,
        'seattype' => $this->faker->word,
        'seatcapacity' => $this->faker->word,
        'fare' => $this->faker->word,
        'day' => $this->faker->word,
        'description' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
