<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Services;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ServicesResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ServicesResource\RelationManagers;

class ServicesResource extends Resource
{
    protected static ?string $model = Services::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Categories & Name')
                    ->schema([
                        Forms\Components\Select::make('category')
                            ->options([
                                'Oral Examination' => 'Oral Examination',
                                'Restorative Dentistry' => 'Restorative Dentistry',
                                'Oral Surgery' => 'Oral Surgery',
                                'Cosmetics Dentistry' => 'Cosmetics Dentistry',
                            ]),
                        Forms\Components\TextInput::make('name')
                            ->minLength(5)
                            ->maxLength(255)
                            ->required()
                    ])
                    ->columns(2),
                Forms\Components\Section::make('Price & Description')
                    ->schema([
                        Forms\Components\TextInput::make('description')
                            ->maxLength(255),
                        // Forms\Components\TextInput::make('price')
                        //     ->numeric()
                        //     ->minValue(100)
                        //     ->prefix('₱')
                        //     ->required(),
                    ])
                    ->columns(2),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->placeholder('No description')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                // Tables\Columns\TextColumn::make('price')
                //     ->prefix('₱')
                //     ->sortable(),
            ])
            ->defaultSort('name', 'asce')
            ->deferLoading()
            ->defaultPaginationPageOption(5)
            ->searchPlaceholder('Search')
            ->persistSortInSession()
            ->persistSearchInSession()
            ->persistFiltersInSession()
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Action::make('View'),
                    Action::make('Edit')
                ])
                    ->button()
                    ->label('Actions')
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateServices::route('/create'),
            'view' => Pages\ViewServices::route('/{record}'),
            'edit' => Pages\EditServices::route('/{record}/edit'),
        ];
    }
}
