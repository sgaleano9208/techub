<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TreatmentReport;

class TreatmentReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TreatmentReport::factory()
            ->count(5)
            ->create();
    }
}
