<?php

namespace App\Filament\Resources\Complaints\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ComplaintsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('claim_number')
                    ->label('Nro. Reclamo')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('full_name')
                    ->label('Cliente')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('document_number')
                    ->label('Nro. Doc')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('claim_type')
                    ->label('Tipo')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Reclamo' => 'danger',
                        'Queja' => 'warning',
                        default => 'gray',
                    })
                    ->sortable(),
                TextColumn::make('good_type')
                    ->label('Bien')
                    ->toggleable(),
                TextColumn::make('status')
                    ->label('Estado')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Pendiente' => 'danger',
                        'En proceso' => 'warning',
                        'Respondido' => 'success',
                        'Cerrado' => 'gray',
                        default => 'info',
                    })
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Fecha Registro')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Estado')
                    ->options([
                        'Pendiente' => 'Pendiente',
                        'En proceso' => 'En proceso',
                        'Respondido' => 'Respondido',
                        'Cerrado' => 'Cerrado',
                    ]),
                SelectFilter::make('claim_type')
                    ->label('Tipo de reclamo')
                    ->options([
                        'Reclamo' => 'Reclamo',
                        'Queja' => 'Queja',
                    ]),
                SelectFilter::make('good_type')
                    ->label('Tipo de bien')
                    ->options([
                        'Producto' => 'Producto',
                        'Servicio' => 'Servicio',
                    ]),
            ])
            ->recordActions([
                EditAction::make()
                    ->label('Responder')
                    ->icon('heroicon-o-chat-bubble-left-right'),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
