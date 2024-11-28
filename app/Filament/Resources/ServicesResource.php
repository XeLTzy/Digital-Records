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
use pxlrbt\FilamentExcel\Columns\Column;
use App\Filament\Exports\ProductExporter;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use App\Filament\Resources\ServicesResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
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
            ->headerActions([
                // Action::make('Services List Avail')
                //     ->form([
                //         DatePicker::make('from')
                //             ->label('From')
                //             ->required(),
                //         DatePicker::make('to')
                //             ->label('To')
                //             ->required(),
                //     ])
                //     ->label('Generate Report')
                //     ->action(function (array $data) {
                //         // Redirect to the PDF download route with the date range as query parameters
                //         return redirect()->route('services.pdf.download', [
                //             'from' => $data['from']->format('Y-m-d'),
                //             'to' => $data['to']->format('Y-m-d'),
                //         ]);
                //     }),
                // Action::make('updateAuthor')
                //     ->form([
                //         DatePicker::make('created_at')
                //             ->label('From')
                //             ->required(),
                //             DatePicker::make('created_at')
                //             ->label('To')
                //             ->required(),
                //     ])
                //     ->label('Report')
                // })
                // Tables\Actions\Action::make('pdf')
                //     ->label('Download PDF')
                //     ->color('success')
                //     ->icon('heroicon-o-folder')
                //     ->url(fn(Booking $record) => route('booking.pdf.download', ['order' => $record->id]))
                //     ->openUrlInNewTab();
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                    ExportBulkAction::make()->exports([
                        ExcelExport::make('table')->fromTable(),
                        ExcelExport::make('form')->fromForm(),
                    ])
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
