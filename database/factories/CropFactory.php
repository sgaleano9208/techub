<?php

namespace Database\Factories;

use App\Models\Crop;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CropFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Crop::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'area' => $this->faker->randomNumber(1),
            'tecnical_information' => [],
            'problems' => $this->faker->text,
            'client_id' => \App\Models\Client::factory(),
            'crop_type_id' => \App\Models\CropType::factory(),
        ];
    }
}
