<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'      => fake()->RandomElement([
                'Mazda LaPuta', 'Buick LaCrosse', 'Skoda Laura',
                'Honda Fitta', 'Mitsubishi Pajero', 
                'Nissan Moco']
            ), 
            'comment'     => fake()->text(), 
            'luggage'     => fake()->numberBetween(0, 100),
            'doors'        => fake()->numberBetween(0, 100),
            'passenger'     => fake()->numberBetween(0, 100),  
            'price'     => fake()->numberBetween(0, 100),
            'published' =>	fake()->numberBetween(0, 1),
            
            'image'       => fake()->randomElement(['car_1.jpg', 'car_2.jpg', 'car_3.jpg', 'car_4.jpg', 'car_5.jpg', 'car_6.jpg']),
            
            'category_id'=> fake()->numberBetween(1, 100),
           
         
        ];
    }
}
