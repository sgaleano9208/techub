<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CropTypeVariety;

class CropTypeVarietySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CropTypeVariety::factory()
            ->count(5)
            ->create();
    }
}
