<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Menu extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'day_of_week',
        'name',
        'description',
        'is_published',
    ];

    public function dishes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Dish::class, 'menu_id');
    }

    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
        ];
    }
}
