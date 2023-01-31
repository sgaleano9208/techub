<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\ClientAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientAddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClientAddress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address' => $this->faker->address,
            'type' => 'physical',
            'status' => $this->faker->boolean,
            'observation' => $this->faker->sentence(15),
            'country_id' => \App\Models\Country::factory(),
            'state_id' => \App\Models\State::factory(),
            'town_id' => \App\Models\Town::factory(),
            'client_id' => \App\Models\Client::factory(),
        ];
    }
}
