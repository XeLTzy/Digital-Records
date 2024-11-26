<?php

namespace App\Filament\Resources;

use DateTime;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use App\Models\Booking;
use Filament\Forms\Form;
use App\Mail\AcceptedMail;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Group;
use Illuminate\Support\Facades\Mail;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Filters\Indicator;
use Filament\Tables\Columns\TextColumn;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\ActionGroup;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\TextEntry;
use App\Filament\Resources\BookingResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BookingResource\RelationManagers;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $modelLabel = 'Schedule';
    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    // public static function form(Form $form): Form
    // {
    //     return $form
    //         ->schema([
    //             Section::make('Schedule')
    //                 ->schema([
    //                     Select::make('status')
    //                         ->options([
    //                             'Pending' => 'Pending',
    //                             'Accepted' => 'Accepted',
    //                             'Rejected' => 'Rejected',
    //                         ])
    //                         ->default('Accepted'),
    //                     DatePicker::make('date')
    //                         ->default(now()) // Sets the default value to the current date and time
    //                         ->minDate(now()) // Restricts selection to today or earlier
    //                         ->label('Select Date'),
    //                     Select::make('start_time')
    //                         ->options([
    //                             '09:00 AM' => '9:00 AM',
    //                             '09:30 AM' => '9:30 AM',
    //                             '10:00 AM' => '10:00 AM',
    //                             '10:30 AM' => '10:30 AM',
    //                             '11:00 AM' => '11:00 AM',
    //                             '11:30 AM' => '11:30 AM',
    //                             '12:00 PM' => '12:00 PM',
    //                             '12:30 PM' => '12:30 PM',
    //                             '1:00 PM' => '1:00 PM',
    //                             '1:30 PM' => '1:30 PM',
    //                             '2:00 PM' => '2:00 PM',
    //                             '2:30 PM' => '2:30 PM',
    //                             '3:00 PM' => '3:00 PM',
    //                             '3:30 PM' => '3:30 PM',
    //                             '4:00 PM' => '4:00 PM',
    //                             '4:30 PM' => '4:30 PM',
    //                         ])
    //                         ->label('Start time'),
    //                 ])
    //                 ->columns(4)
    //                 ->collapsible()
    //                 ->persistCollapsed(),
    //             Section::make('Select Patient & Services Availed')
    //                 ->schema([
    //                     Group::make()
    //                         ->schema([
    //                             Select::make('patient_id')
    //                                 ->relationship('patient', 'full_name')
    //                                 ->searchable(['firstname', 'middlename', 'lastname', 'suffix'])
    //                                 ->getOptionLabelFromRecordUsing(fn($record) => $record->full_name) // Use the full name accessor
    //                                 ->required()
    //                                 ->preload()
    //                                 ->label('Patient option'),
    //                         ]),
    //                     Group::make()
    //                         ->schema([
    //                             Select::make('services_id')
    //                                 ->relationship('services', 'name')
    //                                 ->searchable(['category', 'name', 'description', 'price'])
    //                                 ->multiple()
    //                                 ->required()
    //                                 ->preload()
    //                                 ->label('Services option'),
    //                         ]),
    //                 ])
    //                 ->columns(2),
    //         ]);
    // }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Schedule')
                    ->schema([
                        Select::make('status')
                            ->options([
                                'Pending' => 'Pending',
                                'Accepted' => 'Accepted',
                                'Rejected' => 'Rejected',
                            ])
                            ->default('Accepted'),
                        Forms\Components\DatePicker::make('date')
                            ->default(now())
                            ->minDate(now())
                            ->label('Select Date'),
                        Select::make('start_time')
                            ->options([
                                '09:00 AM' => '9:00 AM',
                                '09:30 AM' => '9:30 AM',
                                '10:00 AM' => '10:00 AM',
                                '10:30 AM' => '10:30 AM',
                                '11:00 AM' => '11:00 AM',
                                '11:30 AM' => '11:30 AM',
                                '12:00 AM' => '12:00 PM',
                                '12:30 AM' => '12:30 PM',
                                '1:00 AM' => '1:00 PM',
                                '1:30 AM' => '1:30 PM',
                                '2:00 AM' => '2:00 PM',
                                '2:30 AM' => '2:30 PM',
                                '3:00 AM' => '3:00 PM',
                                '3:30 AM' => '3:30 PM',
                                '4:00 AM' => '4:00 PM',
                                '4:30 AM' => '4:30 PM',
                            ])
                            ->label('Start time'),
                    ])
                    ->columns(4)
                    ->collapsible()
                    ->persistCollapsed(),
                Section::make('Select Patient & Services Availed')
                    ->schema([
                        Forms\Components\Group::make()
                            ->schema([
                                Select::make('patient_id')
                                    ->relationship('patient', 'full_name')
                                    ->searchable(['firstname', 'middlename', 'lastname', 'suffix'])
                                    ->getOptionLabelFromRecordUsing(fn($record) => $record->full_name)
                                    ->required()
                                    ->preload()
                                    ->label('Patient option'),
                            ]),
                        Forms\Components\Group::make()
                            ->schema([
                                Select::make('services_id')
                                    ->relationship('services', 'name')
                                    ->searchable(['category', 'name', 'description', 'price'])
                                    ->multiple()
                                    ->required()
                                    ->preload()
                                    ->label('Services option'),
                            ]),
                    ])
                    ->columns(2),
            ])
            ->extraAttributes(['x-on:submit.prevent' => 'form.request()']);
    }

    protected function actions(): array
    {
        return [
            Forms\Components\Actions\Action::make('save')
                ->label('Save')
                ->action(function ($data, $record) {
                    $countAccepted = Booking::where('date', $data['date'])
                        ->where('start_time', $data['start_time'])
                        ->where('status', 'Accepted')
                        ->count();

                    if ($countAccepted >= 2 && $data['status'] === 'Accepted') {
                        Notification::make()
                            ->title('Error')
                            ->body('Cannot accept more than two bookings for this time slot.')
                            ->danger()
                            ->send();

                        return;
                    }

                    $record->fill($data);
                    $record->save();

                    Notification::make()
                        ->title('Booking saved successfully!')
                        ->success()
                        ->send();
                })
        ];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('status'),
                TextColumn::make('date')
                    ->sortable()
                    ->date(),
                TextColumn::make('start_time')
                    ->label('Time'),
                TextColumn::make('patient.full_name')
                    ->label('Patient')
                    ->searchable(['firstname', 'middlename', 'lastname', 'suffix'])
                    ->sortable([
                        'firstname',
                        'middlename',
                        'lastname',
                        'suffix',
                    ]),
                TextColumn::make('patient.user.email')
                    ->sortable()
                // TextColumn::make('end_time')

            ])
            ->defaultSort('date', 'asce')
            ->deferLoading()
            ->defaultPaginationPageOption(5)
            ->searchPlaceholder('Search')
            ->persistSortInSession()
            ->persistSearchInSession()
            ->persistFiltersInSession()
            ->filters([
                Filter::make('date')
                    ->form([
                        DatePicker::make('date')
                            ->label('From'),
                        DatePicker::make('until')
                            ->label('To'),
                    ])
                    ->indicateUsing(function (array $data): array {
                        $indicators = [];

                        if (!empty($data['date'])) {
                            $indicators[] = Indicator::make('Created from ' . Carbon::parse($data['date'])->toFormattedDateString())
                                ->removeField('date');
                        }

                        if (!empty($data['until'])) {
                            $indicators[] = Indicator::make('Created until ' . Carbon::parse($data['until'])->toFormattedDateString())
                                ->removeField('until');
                        }

                        return $indicators;
                    })
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['date'],
                                fn(Builder $query, $date): Builder => $query->whereDate('date', '>=', $date),
                            )
                            ->when(
                                $data['until'],
                                fn(Builder $query, $until): Builder => $query->whereDate('date', '<=', $until),
                            );
                    })

            ])
            ->filtersTriggerAction(
                fn(Action $action) => $action
                    ->button()
                    ->label('Filter'),
            )
            ->actions([
                // Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
                ActionGroup::make([
                    Tables\Actions\Action::make('Accept')
                        ->label('Accept')
                        ->icon('heroicon-o-check-circle') // Optional icon
                        ->color('success') // Optional color
                        ->disabled(fn(Booking $record): bool => $record->status === 'Accepted') // Disable if status is 'accepted'
                        ->action(function (Booking $record) {

                            $countAccepted = Booking::where('date', $record->date)
                                ->where('start_time', $record->start_time)
                                ->where('status', 'Accepted')
                                ->count();

                            if ($countAccepted >= 2) {
                                Notification::make()
                                    ->title('Schedule Conflict!')
                                    ->body('There are already two accepted bookings for this time slot.')
                                    ->danger()
                                    ->send();
                                return;
                            }
                            // Update the booking status
                            $record->status = 'Accepted';
                            $record->save();

                            // Send the email
                            $patient = $record->patient;
                            $data = [
                                'firstname' => $patient->firstname,
                                'middlename' => $patient->middlename,
                                'lastname' => $patient->lastname,
                                'suffix' => $patient->suffix,
                                'date' => $record->date,
                                'start_time' => $record->start_time,
                            ];

                            Mail::to($patient->user->email)->send(new AcceptedMail(
                                $data['firstname'],
                                $data['middlename'],
                                $data['lastname'],
                                $data['suffix'],
                                $data['date'],
                                $data['start_time']
                            ));

                            Notification::make()
                                ->title('Schedule accepted successfully and email sent!')
                                ->success()
                                ->send();
                        }),
                    // Action::make('Accept')
                    //     ->label('Accept')
                    //     ->icon('heroicon-o-check-circle') // Optional icon
                    //     ->color('success') // Optional color
                    //     ->disabled(fn(Booking $record): bool => $record->status === 'Accepted') // Disable if already accepted
                    //     ->action(function (Booking $record) {
                    //         // Check if there are already two accepted bookings for the same date and time
                    //         $countAccepted = Booking::where('date', $record->date)
                    //             ->where('start_time', $record->start_time)
                    //             ->where('status', 'Accepted')
                    //             ->count();

                    //         if ($countAccepted >= 2) {
                    //             Notification::make()
                    //                 ->title('Schedule Conflict!')
                    //                 ->body('There are already two accepted bookings for this time slot.')
                    //                 ->danger()
                    //                 ->send();
                    //             return;
                    //         }

                    //         // Update the booking status to 'Accepted'
                    //         $record->status = 'Accepted';
                    //         $record->save();

                    //         // Send the email
                    //         $patient = $record->patient;
                    //         $data = [
                    //             'firstname' => $patient->firstname,
                    //             'middlename' => $patient->middlename,
                    //             'lastname' => $patient->lastname,
                    //             'suffix' => $patient->suffix,
                    //             'date' => $record->date,
                    //             'start_time' => $record->start_time,
                    //         ];

                    //         Mail::to($patient->user->email)->send(new AcceptedMail(
                    //             $data['firstname'],
                    //             $data['middlename'],
                    //             $data['lastname'],
                    //             $data['suffix'],
                    //             $data['date'],
                    //             $data['start_time']
                    //         ));

                    //         Notification::make()
                    //             ->title('Schedule accepted successfully and email sent!')
                    //             ->success()
                    //             ->send();
                    //     }),

                    Tables\Actions\Action::make('Rejected')
                        ->label('Reject')
                        ->icon('heroicon-o-x-circle') // Optional icon
                        ->color('danger') // Optional color
                        ->disabled(fn(Booking $record): bool => $record->status === 'Rejected') // Disable if status is 'accepted'
                        ->action(function (Booking $record) {
                            // Custom logic when the "Accept" button is clicked
                            $record->status = 'Rejected';
                            $record->save();

                            Notification::make()
                                ->title('Schedule Rejected successfully!')
                                ->success()
                                ->send();
                        }),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                ])
                    ->button()
                    ->label('Actions')
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                \Filament\Infolists\Components\Section::make('Schedule') // Use the correct Section class
                    ->schema([
                        TextEntry::make('status'),
                        TextEntry::make('date'),
                        TextEntry::make('start_time')
                            ->label('Time'),
                    ])
                    ->columns(3),
                \Filament\Infolists\Components\Section::make('Patient') // Use the correct Section class
                    ->relationship('patient')
                    ->schema([
                        TextEntry::make('full_name')
                            ->label('Full Name'),
                        TextEntry::make('user.email')
                            ->label('Email'),
                        TextEntry::make('number')
                            ->label('Contact Number')
                    ])
                    ->columns(3),

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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'view' => Pages\ViewBooking::route('/{record}'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
