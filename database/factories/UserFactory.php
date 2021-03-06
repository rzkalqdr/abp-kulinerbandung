<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $now = Carbon::now()->toDateTimeString();
        return [
            'username' => $this->faker->userName(),
            'password' => $this->faker->password(),
            'full_name' => $this->faker->name(),
            'profpic' => $this->faker->imageUrl(640, 480),
            'email' => $this->faker->unique()->safeEmail(),
            'created_at' => $now,
            'updated_at' => $now
        ];
    }
}
