<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Datos del Remitente')
                    ->schema([
                        TextInput::make('full_name')
                            ->label('Nombre Completo')
                            ->disabled(),
                        TextInput::make('email')
                            ->label('Correo Electrónico')
                            ->email()
                            ->disabled(),
                        TextInput::make('phone')
                            ->label('Teléfono')
                            ->disabled(),
                    ])->columns(3),

                Section::make('Contenido')
                    ->schema([
                        TextInput::make('subject')
                            ->label('Asunto')
                            ->disabled(),
                        Textarea::make('message')
                            ->label('Mensaje')
                            ->rows(6)
                            ->disabled(),
                    ])->columns(1),

                Section::make('Estado de Lectura')
                    ->schema([
                        Toggle::make('is_read')
                            ->label('Leído')
                            ->disabled(),
                        DateTimePicker::make('read_at')
                            ->label('Fecha de Lectura')
                            ->disabled(),
                    ])->columns(2),
            ]);
    }
}
