<?php

namespace App\Filament\Resources\Contacts\Pages;

use App\Filament\Resources\Contacts\ContactResource;
use Filament\Resources\Pages\ViewRecord;

class ViewContact extends ViewRecord
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        if (! $this->record->is_read) {
            $this->record->update([
                'is_read' => true,
                'read_at' => now(),
            ]);
            $data['is_read'] = true;
            $data['read_at'] = now()->toDateTimeString();
        }

        return $data;
    }
}
