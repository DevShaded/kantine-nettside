<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\MenuResource\Pages;
use App\Filament\Resources\MenuResource\RelationManagers\DishesRelationManager;
use App\Models\Menu;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $slug = 'menus';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->inlineLabel()
            ->columns(1)
            ->schema([
                Select::make('day_of_week')
                    ->label(__('menu.day_of_week'))
                    ->options([
                        'mandag' => 'Mandag',
                        'tirsdag' => 'Tirsdag',
                        'onsdag' => 'Onsdag',
                        'torsdag' => 'Torsdag',
                        'fredag' => 'Fredag',
                    ])
                    ->required(),

                TextInput::make('name')
                    ->label(__('menu.name'))
                    ->maxLength(255)
                    ->minLength(3)
                    ->required(),

                RichEditor::make('description')
                    ->label(__('menu.description'))
                    ->toolbarButtons(['bold', 'italic', 'underline', 'strikethrough', 'link'])
                    ->placeholder(__('menu.description_placeholder'))
                    ->maxLength(555)
                    ->nullable(),

                Toggle::make('is_published')
                    ->label(__('menu.is_published'))
                    ->default(false),

                Placeholder::make('created_at')
                    ->label(__('Created Date'))
                    ->content(fn(?Menu $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                Placeholder::make('updated_at')
                    ->label(__('Updated At'))
                    ->content(fn(?Menu $record): string => $record?->updated_at?->diffForHumans() ?? '-'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('day_of_week')
                    ->label(__('menu.day_of_week')),

                TextColumn::make('name')
                    ->label(__('menu.name'))
                    ->searchable()
                    ->sortable(),

                TextColumn::make('description')
                    ->limit()
                    ->label(__('menu.description')),

                BooleanColumn::make('is_published') // Sad this is depcriated :(
                    ->label(__('menu.is_published'))
                    ->sortable(),
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
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }

    public static function getRelations(): array
    {
        return [
            DishesRelationManager::class,
        ];
    }
}
