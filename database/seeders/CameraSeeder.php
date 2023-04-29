<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camera;
use App\Models\Movie;

class CameraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $movies = Movie::pluck('id');
         Camera::create([
            'brand' => 'Canon',
            'model' => 'EOS 5D Mark IV',
            'support_flash' => true,
            'status' => 1,
            'movie_id' => $movies->random(),
        ]);
    
        Camera::create([
            'brand' => 'Nikon',
            'model' => 'D850',
            'support_flash' => true,
            'status' => 1,
            'movie_id' => $movies->random(),
        ]);
    
        Camera::create([
            'brand' => 'Sony',
            'model' => 'Alpha A7R IV',
            'support_flash' => false,
            'status' => 1,
            'movie_id' => $movies->random(),
        ]);
    }
}
