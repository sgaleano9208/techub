<?php

namespace Database\Seeders;

use App\Models\CropType;
use Illuminate\Database\Seeder;

class CropTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CropType::factory()
            ->count(5)
            ->create();
    }
}
