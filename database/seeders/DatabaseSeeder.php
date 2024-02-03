<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Category;
use App\Models\Car;
use App\Models\Message;
// use App\Models\Listing;
use App\Models\Testimonial;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
   
        public function run(): void
        {

            // User::factory(10)->create(); 
            // Testimonial::factory(10)->create();
            // Message::factory(10)->create();
     
            // Category::factory(10)->create();
              Car::factory(30)->create();
            
           
            
             

        }
    
}
