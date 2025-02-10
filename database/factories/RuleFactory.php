<?php

namespace Database\Factories;

use App\Models\Rule;
use Illuminate\Database\Eloquent\Factories\Factory;

class RuleFactory extends Factory
{
    protected $model = Rule::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'agency_id' => rand(1, 2),
            'conditions' => json_encode([
                [
                    'field' => 'countries.id',
                    'operator' => '!=',
                    'value' => $this->faker->randomDigitNotNull
                ],
                [
                    'field' => 'hotel_agreements.discount_percent',
                    'operator' => '>',
                    'value' => $this->faker->numberBetween(5, 20)
                ],
                [
                    'field' => 'hotel_agreements.comission_percent',
                    'operator' => '<',
                    'value' => $this->faker->numberBetween(20, 50)
                ],
            ]),
            'manager_text' => $this->faker->sentence(10),
            'is_active' => $this->faker->boolean,
        ];
    }
}
