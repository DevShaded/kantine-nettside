<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\DishResource\Pages;
use App\Models\Dish;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

final class DishResource extends Resource
{
    protected static ?string $model = Dish::class;

    protected static ?string $slug = 'dishes';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(2)
            ->schema([
                Select::make('menu_id')
                    ->relationship('menu', 'name')
                    ->label(__('dishes.menu'))
                    ->preload()
                    ->searchable()
                    ->required(),

                TextInput::make('name')
                    ->label(__('dishes.name'))
                    ->maxLength(255)
                    ->required(),

                TextInput::make('description')
                    ->label(__('dishes.description'))
                    ->maxLength(1000)
                    ->required(),

                TextInput::make('price')
                    ->label(__('dishes.price'))
                    ->required()
                    ->numeric(),

                FileUpload::make('image_url')
                    ->label(__('dishes.image'))
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->nullable(),

                Placeholder::make('created_at')
                    ->label(__('Created Date'))
                    ->content(fn(?Dish $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                Placeholder::make('updated_at')
                    ->label(__('Last Modified Date'))
                    ->content(fn(?Dish $record): string => $record?->updated_at?->diffForHumans() ?? '-'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('menu.name')
                    ->label(__('dishes.menu'))
                    ->searchable()
                    ->sortable(),

                TextColumn::make('name')
                    ->label(__('dishes.name'))
                    ->searchable()
                    ->sortable(),

                TextColumn::make('description')
                    ->label(__('dishes.description')),

                TextColumn::make('price')
                    ->label(__('dishes.price'))
                    ->searchable()
                    ->sortable(),

                ImageColumn::make('image_url')
                    ->label(__('dishes.image')),
            ])
            ->filters([

            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDishes::route('/'),
            'create' => Pages\CreateDish::route('/create'),
            'edit' => Pages\EditDish::route('/{record}/edit'),
        ];
    }

    public static function getGlobalSearchEloquentQuery(): Builder
    {
        return parent::getGlobalSearchEloquentQuery()->with(['menu']);
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'menu.name'];
    }

    public static function getGlobalSearchResultDetails(Model $record): array
    {
        $details = [];

        if ($record->menu) {
            $details['Menu'] = $record->menu->name;
        }

        return $details;
    }
}
