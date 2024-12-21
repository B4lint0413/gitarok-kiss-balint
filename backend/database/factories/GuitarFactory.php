<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guitar>
 */
class GuitarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "model" => fake()->regexify('[A-Z]{3}-[0-9]{3}'),
            "manufacturer" => fake()->randomElement(["Ibanez", "Cort", "Gibson", "Fender", "ESP"]),
            "body" => fake()->randomElement(["Super stratocaster", "Stratocaster", "Telecaster", "Les Paul", "Snakebyte", "Flying V"]),
            "color" => fake()->randomElement(["white", "sunburst", "black", "red", "blue", "turqoise"]),
            "strings" => fake()->numberBetween(6,8)
        ];
    }
}
