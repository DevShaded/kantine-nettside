<?php

declare(strict_types=1);

namespace App\Filament\Resources\DishResource\Pages;

use App\Filament\Resources\DishResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Cache;

final class CreateDish extends CreateRecord
{
    protected static string $resource = DishResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }

    protected function afterCreate(): void
    {
        Cache::forget('dishes_index');
    }
}
