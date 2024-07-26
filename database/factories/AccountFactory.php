<?php

namespace Database\Factories;

// use App\Models\Address;
// use App\Models\Currency;
// use App\Models\Language;
// use App\Models\Organization;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'photo' => $this->faker->imageUrl(),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'middle_name' => $this->faker->optional()->firstName(),
            'birthday' => $this->faker->optional()->date(),
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'bio' => "Bio Text",
            'phone' => $this->faker->optional()->phoneNumber(),
            'organization_id' => 1,
            'address_id' => 1,
            'language_id' => 1,
            'currency_id' => 1,
            'status' => $this->faker->randomElement(['active', 'inactive', 'unallowed', 'blocked']),
        
        ];
    }
}
