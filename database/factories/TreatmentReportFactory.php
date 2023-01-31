<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\TreatmentReport;
use Illuminate\Database\Eloquent\Factories\Factory;

class TreatmentReportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TreatmentReport::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'date' => $this->faker->date,
            'content' => [],
            'client_id' => \App\Models\Client::factory(),
            'treatment_id' => \App\Models\Treatment::factory(),
        ];
    }
}
