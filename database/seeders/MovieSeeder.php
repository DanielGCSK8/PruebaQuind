<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::create([
            'brand' => 'Nikon',
            'name' => 'F3',
            'iso' => 200,
            'format' => '35mm',
        ]);

        Movie::create([
            'brand' => 'Canon',
            'name' => 'AE-1',
            'iso' => 400,
            'format' => '110mm',
        ]);

        Movie::create([
            'brand' => 'Pentax',
            'name' => '645N',
            'iso' => 800,
            'format' => '120mm',
        ]);
    }
}
