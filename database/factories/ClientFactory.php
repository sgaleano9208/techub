<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'logo' => $this->faker->text,
            'name' => $this->faker->name(),
            'email' => $this->faker->unique->email,
            'phone' => $this->faker->unique->phoneNumber,
            'vat' => $this->faker->unique->text(255),
            'origin' => $this->faker->text(255),
            'status' => 'active',
            'type' => $this->faker->text(255),
            'technician_id' => \App\Models\User::factory(),
        ];
    }
}
