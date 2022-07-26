<?php

namespace Database\Seeders;


use App\Models\Listing;
use App\Models\ListingType;
use Illuminate\Database\Seeder;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 0; $x <= 20; $x++) {
            $array = array_rand(array_flip([1,2,3]),rand(1,3));
            Listing::factory()
            ->hasAttached(
                ListingType::find($array)
                    )
            ->create();
        } 
        
    }

}
