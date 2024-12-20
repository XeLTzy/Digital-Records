<?php

namespace App\Filament\Resources\BookingResource\Pages;

use Filament\Actions;
use App\Mail\AcceptedMail;
use Illuminate\Support\Facades\Mail;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\BookingResource;


class CreateBooking extends CreateRecord
{
    protected static string $resource = BookingResource::class;

    protected function afterSave(): void
    {
        $record = $this->record;

        // Check if the status is "Accepted"
        if ($record->status === 'Accepted') {
            // Send the email
            $patient = $record->patient;
            if ($patient) {
                try {
                    Mail::to($patient->user->email)->send(new AcceptedMail(
                        $patient->firstname,
                        $patient->middlename,
                        $patient->lastname,
                        $patient->suffix,
                        $record->date,
                        $record->start_time
                    ));

                    Notification::make()
                        ->title('Booking accepted and email sent!')
                        ->success()
                        ->send();
                } catch (\Exception $e) {
                    Notification::make()
                        ->title('Error')
                        ->body('Failed to send email: ' . $e->getMessage())
                        ->danger()
                        ->send();
                }
            }
        }
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $availServices = $data['availServices'] ?? [];
        unset($data['availServices']); // Prevents trying to save this as an attribute
        $this->record->availServices()->delete(); // Clear old services

        foreach ($availServices as $serviceId) {
            $this->record->availServices()->create([
                'service_id' => $serviceId,
                'date' => $this->record->date,
                'time' => $this->record->start_time,
            ]);
        }

        return $data;
    }
}
