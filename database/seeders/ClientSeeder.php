<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'name' => 'Juan',
            'second_name' => 'Perez',
            'cc' => '123456789',
            'neighborhood' => 'La Floresta',
            'cellphone' => '0987654321',
        ]);

        Client::create([
            'name' => 'Maria',
            'second_name' => 'Garcia',
            'cc' => '987654321',
            'neighborhood' => 'El Bosque',
            'cellphone' => '0123456789',
        ]);

        Client::create([
            'name' => 'Pedro',
            'second_name' => 'Fernandez',
            'cc' => '456789123',
            'neighborhood' => 'San Rafael',
            'cellphone' => '1122334455',
        ]);
    }
}
