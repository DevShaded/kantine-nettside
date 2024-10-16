<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DishesResource;
use App\Models\Dish;

final class DishController extends Controller
{
    public function index()
    {
        $dishes = Dish::all();

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
        return response()->json([
            'code' => 200,
            'data' => new DishesResource($dish),
        ]);
    }
}
