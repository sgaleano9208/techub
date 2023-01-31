<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\TreatmentPass;
use Illuminate\Database\Eloquent\Factories\Factory;

class TreatmentPassFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TreatmentPass::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(255),
            'date' => $this->faker->date,
            'status' => 'pendiente',
            'treatment_id' => \App\Models\Treatment::factory(),
        ];
    }
}
