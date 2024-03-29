<?php

namespace Database\Factories;
use App\Models\Ville;


use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name,
            'adresse'=> $this->faker->address,
            'phone'=> $this->faker->phoneNumber,
            'email'=> $this->faker->email,
            'date_naissance'=> $this->faker->dateTimeInInterval($startDate = '-30 years', $interval = '+ 10 years'),
            'ville_id'=> Ville::factory()

        ];
    }
}