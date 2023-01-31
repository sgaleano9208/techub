<?php

namespace Database\Factories;

use App\Models\Treatment;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class TreatmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Treatment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'start_date' => $this->faker->date,
            'end_date' => $this->faker->date,
            'type' => 'treatment',
            'status' => 'active',
            'note' => $this->faker->text,
            'attachment' => $this->faker->text(255),
            'crop_id' => \App\Models\Crop::factory(),
            'client_id' => \App\Models\Client::factory(),
        ];
    }
}
