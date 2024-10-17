<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MenuResource;
use App\Models\Menu;

final class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::where('is_published', true)
            ->with('dishes')
            ->get();

        // Return a 404 response if no menus are found
        if ($menus->isEmpty()) {
            return response()->json([
                'code' => 404,
                'message' => 'No menus have been published yet.',
            ], 404);
        }

        // Return the found menus
        return response()->json([
            'code' => 200,
            'data' => MenuResource::collection($menus),
        ]);
    }


    public function show(Menu $menu)
    {
        if ( ! $menu->is_published) {
            return response()->json([
                'code' => 404,
                'message' => 'The menu has not been published yet.',
            ], 404);
        }

        return response()->json([
            'code' => 200,
            'data' => new MenuResource($menu->load('dishes')),
        ]);
    }
}
