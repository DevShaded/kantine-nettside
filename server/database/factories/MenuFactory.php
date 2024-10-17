<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

final class MenuFactory extends Factory
{
    protected $model = Menu::class;

    public function definition(): array
    {
        // Define specific days of the week
        $daysOfWeek = ['Mandag', 'Tirsdag', 'Onsdag', 'Torsdag', 'Fredag'];

        return [
            // Get a random day from the specific array
            'day_of_week' => $this->faker->randomElement($daysOfWeek),
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'is_published' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
