<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

/** @mixin Dish */
final class DishesResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'price' => $this->price,
            'image_url' => $this->image_url ? Storage::url($this->image_url) : null,
        ];
    }
}
