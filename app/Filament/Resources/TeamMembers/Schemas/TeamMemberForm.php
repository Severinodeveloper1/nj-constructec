<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Datos del Integrante')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nombre Completo')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('role')
                            ->label('Cargo / Puesto')
                            ->required()
                            ->maxLength(255),
                        Textarea::make('description')
                            ->label('Descripción / Trayectoria')
                            ->rows(3)
                            ->columnSpanFull(),
                        FileUpload::make('photo_path')
                            ->label('Foto Profesional')
                            ->image()
                            ->directory('team')
                            ->disk('public')
                            ->maxSize(2048),
                        TextInput::make('order')
                            ->label('Orden de Aparición')
                            ->numeric()
                            ->default(0)
                            ->required(),
                        Toggle::make('is_active')
                            ->label('Activo')
                            ->default(true),
                    ])->columns(2)
            ])->columns(1);
    }
}
