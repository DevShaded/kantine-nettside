<?php

declare(strict_types=1);

use App\Models\Menu;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('returns 404 when no menus are published', function (): void {
    Menu::factory()->create([
        'is_published' => false,
    ]);

    $response = $this->getJson('/api/menus');

    $response->assertStatus(404)
        ->assertJson([
            'code' => 404,
            'message' => 'No menus have been published yet.',
        ]);
});

it('returns a list of published menus', function (): void {
    $menus = Menu::factory()->count(3)->create([
        'is_published' => true,
    ]);

    $response = $this->getJson('/api/menus');

    $response->assertStatus(200)
        ->assertJson([
            'code' => 200,
            'data' => [
                [
                    'id' => $menus[0]->id,
                    'day_of_week' => $menus[0]->day_of_week,
                    'name' => $menus[0]->name,
                    'description' => $menus[0]->description,
                    'is_published' => $menus[0]->is_published,
                    'dishes' => [],
                ],
                [
                    'id' => $menus[1]->id,
                    'day_of_week' => $menus[1]->day_of_week,
                    'name' => $menus[1]->name,
                    'description' => $menus[1]->description,
                    'is_published' => $menus[1]->is_published,
                    'dishes' => [],
                ],
                [
                    'id' => $menus[2]->id,
                    'day_of_week' => $menus[2]->day_of_week,
                    'name' => $menus[2]->name,
                    'description' => $menus[2]->description,
                    'is_published' => $menus[2]->is_published,
                    'dishes' => [],
                ],
            ],
        ]);
});

it('returns 404 when the menu is not published', function (): void {
    $menu = Menu::factory()->create([
        'is_published' => false,
    ]);

    $response = $this->getJson("/api/menus/{$menu->day_of_week}");

    $response->assertStatus(404)
        ->assertJson([
            'code' => 404,
            'message' => 'The menu has not been published yet.',
        ]);
});
