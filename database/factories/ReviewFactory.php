<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content'=>$this->faker->text,
            'user_id'=>$this->faker->randomDigitNotNull,
            'city_id'=>$this->faker->randomDigitNotNull,
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
    }
}
