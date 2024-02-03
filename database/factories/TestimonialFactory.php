<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment'     => fake()->text(),
            'image'     => fake()->randomElement(['person_1.jpg', 'person_2.jpg', 'person_3.jpg']),
            'name'      => fake()->RandomElement([ 
                'Mike Fisher', 'Jean Stanley', 'Katie Rose']
            ),
              
            'job'       => fake()->RandomElement([
                 'Owner, Ford', 'Traveler', 'Customer']
            ),
            'published' =>	fake()->numberBetween(0, 1)
        ];
    }
}



