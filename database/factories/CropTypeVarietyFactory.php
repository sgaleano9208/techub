<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\CropTypeVariety;
use Illuminate\Database\Eloquent\Factories\Factory;

class CropTypeVarietyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CropTypeVariety::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'crop_type_id' => \App\Models\CropType::factory(),
        ];
    }
}
