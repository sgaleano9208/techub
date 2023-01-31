<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'admin@admin.com',
                'password' => \Hash::make('admin'),
            ]);

        $this->call(CitySeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(ClientAddressSeeder::class);
        $this->call(ClientContactSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(CropSeeder::class);
        $this->call(CropTypeSeeder::class);
        $this->call(CropTypeVarietySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(TreatmentSeeder::class);
        $this->call(TreatmentPassSeeder::class);
        $this->call(TreatmentReportSeeder::class);
        $this->call(UserSeeder::class);
    }
}
