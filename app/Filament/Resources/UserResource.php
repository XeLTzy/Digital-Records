<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Patient;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = Patient::class;
    protected static ?string $modelLabel = 'Patient';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Full Name')
                    ->schema([
                        Forms\Components\TextInput::make('firstname')
                            ->minLength(3)
                            ->maxLength(255)
                            ->required(),
                        Forms\Components\TextInput::make('middlename')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('lastname')
                            ->minLength(2)
                            ->maxLength(50)
                            ->required(),
                        Forms\Components\TextInput::make('suffix')
                            ->maxLength(255),
                    ])
                    ->columns(4),
                Forms\Components\Section::make('Contact Information')
                    ->schema([
                        Forms\Components\TextInput::make('number')
                            ->numeric()
                            ->minValue(11)
                            ->required()
                            ->unique(table: Patient::class, ignoreRecord: true),
                        Forms\Components\Group::make()
                            ->relationship('user')
                            ->schema([
                                Forms\Components\TextInput::make('email')
                                    ->maxLength(255)
                                    ->minLength(4)
                                    ->email()
                                    ->required()
                                    ->unique(table: User::class, ignoreRecord: true)
                            ]),

                    ])
                    ->columns(2),
                Forms\Components\Section::make('Birthday & Gender')
                    ->schema([
                        Forms\Components\DatePicker::make('birthday')
                            ->required()
                            ->maxDate(now()),
                        Forms\Components\Radio::make('gender')
                            ->options([
                                'Male' => 'Male',
                                'Female' => 'Female'
                            ])
                            ->required()
                    ])
                    ->columns(2),
                // Forms\Components\Section::make('Requirements Status')
                // ->description('Optional for walk in patient')
                // ->relationship('user')
                // ->schema([
                //     Forms\Components\TextInput::make('email')
                //     ->maxLength(255)
                //     ->minLength(4)
                //     ->email()
                //     ->required()
                //     ->unique(table: User::class)
                // ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->searchable()
                    ->searchable(['firstname', 'middlename', 'lastname', 'suffix'])
                    ->sortable([
                        'firstname',
                        'middlename',
                        'lastname',
                        'suffix',
                    ]),
                Tables\Columns\TextColumn::make('number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.email')
                    ->label('Email')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('full_name', 'asce')
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
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make()
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
