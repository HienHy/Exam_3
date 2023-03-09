<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'author_id'=>random_int(1,50),
            'title'=>$this->faker->unique()->name,
            'ISBN'=>$this->faker->postcode,
            'pub_year'=>$this->faker->year,
            'available'=>random_int(1,4),
            //
        ];
    }
}
