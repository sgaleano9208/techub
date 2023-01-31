<?php

namespace Database\Seeders;

use App\Models\TreatmentPass;
use Illuminate\Database\Seeder;

class TreatmentPassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TreatmentPass::factory()
            ->count(5)
            ->create();
    }
}
