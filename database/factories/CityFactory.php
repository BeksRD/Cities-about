<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->text(20),
            'describe'=>$this->faker->text,
            'user_id'=>$this->faker->randomDigitNotNull,
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
    }
}
