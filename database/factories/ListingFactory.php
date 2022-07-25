<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $availability = array_rand(array_flip(Array("Sale", "Rent")),1);
        $square_meters = rand(40,500);
        if ($availability == "Rent"){
            $price = mt_rand(4,6)*$square_meters;
        } else {
            $price = mt_rand(400, 3000)*$square_meters;
        }
            

        
        return [
            'description' => fake()->text,
            'availability' => $availability,
            'location' => array_rand(array_flip(Array("Athens", "Patra", "Thessaloniki")),1),
            'square_meters' => $square_meters,
            'price' => $price,            
        ];
    }
}
