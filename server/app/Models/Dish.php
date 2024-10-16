<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

final class Dish extends Model
{
    use HasUlids;
    protected $fillable = [
        'menu_id',
        'name',
        'description',
        'price',
        'image_url',
    ];

    public function menu(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }
}
