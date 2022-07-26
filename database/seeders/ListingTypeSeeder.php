<?php

namespace Database\Seeders;

use App\Models\ListingType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ListingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ListingType::factory()->count(3)
            ->state(new Sequence(
                ['name' => 'Apartment'],
                ['name' => 'Loft'],
                ['name' => 'Studio'],
            ))
            ->create();

    }
}
