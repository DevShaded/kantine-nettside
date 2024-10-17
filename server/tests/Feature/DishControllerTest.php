<?php

declare(strict_types=1);

use App\Models\Dish;
use Illuminate\Support\Facades\Cache;
use Illuminate\Testing\Fluent\AssertableJson;

it('stores the dishes in cache if not cached', function (): void {
    $dishes = Dish::factory()->count(3)->create();

    Cache::shouldReceive('remember')
        ->once()
        ->with('dishes_index', 3600, Closure::class)
        ->andReturn($dishes);

    $response = $this->getJson(route('dishes.index'));

    $response->assertStatus(200)
        ->assertJson(
            fn(AssertableJson $json) =>
        $json->where('code', 200)
            ->has('data', 3)
            ->etc(),
        );
});

it('retrieves dishes from cache if cached', function (): void {
    $dishes = Dish::factory()->count(3)->create();

    Cache::shouldReceive('remember')
        ->once()
        ->with('dishes_index', 3600, Closure::class)
        ->andReturn($dishes);

    $response = $this->getJson(route('dishes.index'));

    $response->assertStatus(200)
        ->assertJson(
            fn(AssertableJson $json) =>
        $json->where('code', 200)
            ->has('data', 3)
            ->etc(),
        );
});

it('returns a 404 if no dishes are found', function (): void {
    Cache::shouldReceive('remember')
        ->once()
        ->with('dishes_index', 3600, Closure::class)
        ->andReturn(collect());

    $response = $this->getJson(route('dishes.index'));

    $response->assertStatus(404)
        ->assertJson(
            fn(AssertableJson $json) =>
        $json->where('code', 404)
            ->where('message', 'No dishes have been found.')
            ->etc(),
        );
});

it('stores the dish in cache if not cached', function (): void {
    $dish = Dish::factory()->create();
    $cacheKey = 'dish_' . $dish->id;

    Cache::shouldReceive('remember')
        ->once()
        ->with($cacheKey, 3600, Closure::class)
        ->andReturn($dish);

    $response = $this->getJson(route('dishes.show', $dish->slug));

    $response->assertStatus(200)
        ->assertJson(
            fn(AssertableJson $json) =>
        $json->where('code', 200)
            ->where('data.id', $dish->id)
            ->etc(),
        );
});

it('retrieves the dish from cache if cached', function (): void {
    $dish = Dish::factory()->create();
    $cacheKey = 'dish_' . $dish->id;

    Cache::shouldReceive('remember')
        ->once()
        ->with($cacheKey, 3600, Closure::class)
        ->andReturn($dish);

    $response = $this->getJson(route('dishes.show', $dish->slug));

    $response->assertStatus(200)
        ->assertJson(
            fn(AssertableJson $json) =>
        $json->where('code', 200)
            ->where('data.id', $dish->id)
            ->etc(),
        );
});

it('returns the dish data in the correct JSON format', function (): void {
    $dish = Dish::factory()->create();
    $cacheKey = 'dish_' . $dish->id;

    Cache::shouldReceive('remember')
        ->once()
        ->with($cacheKey, 3600, Closure::class)
        ->andReturn($dish);

    $response = $this->getJson(route('dishes.show', $dish->slug));

    $response->assertStatus(200)
        ->assertJsonStructure([
            'code',
            'data' => [
                'id',
                'name',
                'slug',
                'description',
                'price',
                'image_url',
            ],
        ]);
});
