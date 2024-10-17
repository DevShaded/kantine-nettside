<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Dish;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

final class DishFactory extends Factory
{
    protected $model = Dish::class;

    public function definition(): array
    {
        $name = $this->faker->name();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'image_url' => $this->faker->imageUrl(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'menu_id' => Menu::factory(),
        ];
    }
}
