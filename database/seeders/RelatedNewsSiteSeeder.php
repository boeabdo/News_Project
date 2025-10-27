<?php

namespace Database\Seeders;

use App\Models\RelatedNewsSite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RelatedNewsSiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 7; $i++) {

            RelatedNewsSite::create([
                'name' =>$faker->sentence(1),
                'url' =>$faker->url(),

            ]);
        }
    }
}
