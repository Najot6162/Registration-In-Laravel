<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFacoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subject' => $this ->faker->text(3),
            'message' => $this ->faker->text(12),
            'client-name' => $this ->faker->text(),
            'client-email' => $this ->faker->freeEmail(),
        ];
    }
}
