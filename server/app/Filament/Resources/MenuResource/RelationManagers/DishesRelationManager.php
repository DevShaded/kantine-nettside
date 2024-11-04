<?php

declare(strict_types=1);

namespace App\Filament\Resources\MenuResource\RelationManagers;

use App\Models\Dish;
use Closure;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

final class DishesRelationManager extends RelationManager
{
    protected static string $relationship = 'dishes';

    public function form(Form $form): Form
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
                    ->reactive()
                    ->label(__('dishes.name'))
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (Set $set, $state): void {
                        $set('slug', Str::slug($state));
                    })
                    ->required(),
                TextInput::make('slug')
                    ->afterStateUpdated(function (Closure $set): void {
                        $set('is_slug_changed_manually', true);
                    })
                    ->required(),

                Hidden::make('is_slug_changed_manually')
                    ->default(false)
                    ->dehydrated(false),

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

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
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
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
