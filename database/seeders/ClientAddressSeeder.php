<?php

namespace Database\Seeders;

use App\Models\ClientAddress;
use Illuminate\Database\Seeder;

class ClientAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClientAddress::factory()
            ->count(5)
            ->create();
    }
}
