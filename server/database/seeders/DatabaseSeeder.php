<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\Menu;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $days = ['mandag', 'tirsdag', 'onsdag', 'torsdag', 'fredag'];

        foreach ($days as $day) {
            $menus = Menu::factory()->create([
                'day_of_week' => $day,
            ]);

            Dish::factory(4)->create([
                'menu_id' => $menus->id,
            ]);
        }
    }
}
