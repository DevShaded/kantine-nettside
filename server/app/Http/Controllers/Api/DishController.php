<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DishesResource;
use App\Models\Dish;
use Illuminate\Support\Facades\Cache;

final class DishController extends Controller
{
    public function index()
    {
        $dishes = Cache::remember('dishes_index', 3600, function () {
            return Dish::all();
        });

        if ($dishes->isEmpty()) {
            return response()->json([
                'code' => 404,
                'message' => 'No dishes have been found.',
            ], 404);
        }

        return response()->json([
            'code' => 200,
            'data' => DishesResource::collection($dishes),
        ]);
    }

    public function show(Dish $dish)
    {
        $cacheKey = 'dish_' . $dish->id;

        $cachedDish = Cache::remember($cacheKey, 3600, function () use ($dish) {
            return $dish;
        });

        return response()->json([
            'code' => 200,
            'data' => new DishesResource($cachedDish),
        ]);
    }
}
