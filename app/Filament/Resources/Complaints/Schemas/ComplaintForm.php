<?php

namespace App\Filament\Resources\Complaints\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ComplaintForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Información del Reclamo')
                    ->description('Detalles del número y estado actual.')
                    ->schema([
                        TextInput::make('claim_number')
                            ->label('Número de Reclamación')
                            ->disabled(),
                        Select::make('status')
                            ->label('Estado')
                            ->options([
                                'Pendiente' => 'Pendiente',
                                'En proceso' => 'En proceso',
                                'Respondido' => 'Respondido',
                                'Cerrado' => 'Cerrado',
                            ])
                            ->required(),
                    ])->columns(2),

                Section::make('Datos del Cliente')
                    ->schema([
                        TextInput::make('full_name')
                            ->label('Nombre Completo')
                            ->disabled(),
                        TextInput::make('document_type')
                            ->label('Tipo de Documento')
                            ->disabled(),
                        TextInput::make('document_number')
                            ->label('Número de Documento')
                            ->disabled(),
                        TextInput::make('email')
                            ->label('Correo Electrónico')
                            ->email()
                            ->disabled(),
                        TextInput::make('phone')
                            ->label('Teléfono / Celular')
                            ->disabled(),
                        TextInput::make('address')
                            ->label('Dirección')
                            ->disabled(),
                    ])->columns(3),

                Section::make('Ubicación Geográfica')
                    ->schema([
                        TextInput::make('department')
                            ->label('Departamento')
                            ->disabled(),
                        TextInput::make('province')
                            ->label('Provincia')
                            ->disabled(),
                        TextInput::make('district')
                            ->label('Distrito')
                            ->disabled(),
                    ])->columns(3),

                Section::make('Detalles del Bien Reclamado')
                    ->schema([
                        TextInput::make('client_type')
                            ->label('Tipo de Cliente')
                            ->disabled(),
                        TextInput::make('claim_type')
                            ->label('Tipo de Reclamo/Queja')
                            ->disabled(),
                        TextInput::make('good_type')
                            ->label('Tipo de Bien')
                            ->disabled(),
                        TextInput::make('claimed_amount')
                            ->label('Monto Reclamado')
                            ->numeric()
                            ->prefix('S/.')
                            ->disabled(),
                        TextInput::make('good_description')
                            ->label('Descripción del Bien')
                            ->disabled()
                            ->columnSpanFull(),
                    ])->columns(4),

                Section::make('Detalle del Incidente')
                    ->schema([
                        Textarea::make('incident_description')
                            ->label('Descripción del Suceso')
                            ->rows(4)
                            ->disabled(),
                        Textarea::make('request')
                            ->label('Pedido o Solicitud')
                            ->rows(4)
                            ->disabled(),
                    ])->columns(2),

                Section::make('Respuesta de la Empresa')
                    ->description('Espacio para registrar el pronunciamiento sobre el caso.')
                    ->schema([
                        Textarea::make('response')
                            ->label('Respuesta Oficial')
                            ->placeholder('Ingrese aquí la respuesta oficial para el cliente...')
                            ->rows(6)
                            ->columnSpanFull(),
                        DateTimePicker::make('responded_at')
                            ->label('Fecha de Respuesta')
                            ->disabled(),
                    ])->columns(1),
            ]);
    }
}
