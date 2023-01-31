<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\ClientContact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClientContact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'role' => $this->faker->text(255),
            'client_id' => \App\Models\Client::factory(),
        ];
    }
}
