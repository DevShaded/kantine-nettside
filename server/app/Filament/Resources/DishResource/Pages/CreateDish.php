<?php

declare(strict_types=1);

namespace App\Filament\Resources\DishResource\Pages;

use App\Filament\Resources\DishResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateDish extends CreateRecord
{
    protected static string $resource = DishResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
