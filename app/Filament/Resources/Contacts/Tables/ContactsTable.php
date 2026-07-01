<?php

namespace App\Filament\Resources\Contacts\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Collection;

class ContactsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('full_name')
                    ->label('Nombre')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->label('Correo Electrónico')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('phone')
                    ->label('Teléfono')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('subject')
                    ->label('Asunto')
                    ->searchable(),
                IconColumn::make('is_read')
                    ->label('Leído')
                    ->boolean()
                    ->trueIcon('heroicon-o-envelope-open')
                    ->falseIcon('heroicon-o-envelope')
                    ->trueColor('success')
                    ->falseColor('danger')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Recibido')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                TernaryFilter::make('is_read')
                    ->label('Estado de lectura')
                    ->trueLabel('Leídos')
                    ->falseLabel('No leídos')
                    ->placeholder('Todos'),
            ])
            ->recordActions([
                ViewAction::make(),
                Action::make('toggle_read')
                    ->label(fn($record) => $record->is_read ? 'No leído' : 'Leído')
                    ->icon(fn($record) => $record->is_read ? 'heroicon-o-envelope' : 'heroicon-o-envelope-open')
                    ->color(fn($record) => $record->is_read ? 'danger' : 'success')
                    ->action(function ($record) {
                        $record->update([
                            'is_read' => ! $record->is_read,
                            'read_at' => ! $record->is_read ? now() : null,
                        ]);
                    }),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    BulkAction::make('mark_as_read')
                        ->label('Marcar como leídos')
                        ->icon('heroicon-o-envelope-open')
                        ->color('success')
                        ->action(fn(Collection $records) => $records->each(function ($record) {
                            $record->update([
                                'is_read' => true,
                                'read_at' => now(),
                            ]);
                        })),
                ]),
            ]);
    }
}
