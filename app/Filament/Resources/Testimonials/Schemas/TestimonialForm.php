<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Información del Cliente / Empresa')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nombre del Cliente')
                            ->placeholder('Ej: Ing. Carlos Mendoza o Constructora Lima S.A.')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('company')
                            ->label('Empresa / Cargo (Opcional)')
                            ->placeholder('Ej: Gerente General / Inmobiliaria S.A.')
                            ->maxLength(255),
                        Select::make('service_id')
                            ->label('Servicio al que pertenece')
                            ->options(fn() => \App\Models\Service::pluck('name', 'id')->toArray())
                            ->placeholder('Seleccione un servicio (Opcional)')
                            ->nullable(),
                        Select::make('rating')
                            ->label('Calificación (Estrellas)')
                            ->options([
                                5 => '⭐⭐⭐⭐⭐ (5 Estrellas)',
                                4 => '⭐⭐⭐⭐ (4 Estrellas)',
                                3 => '⭐⭐⭐ (3 Estrellas)',
                                2 => '⭐⭐ (2 Estrellas)',
                                1 => '⭐ (1 Estrella)',
                            ])
                            ->default(5)
                            ->required(),
                        TextInput::make('order')
                            ->label('Orden de Visualización')
                            ->numeric()
                            ->default(0)
                            ->required(),
                        Toggle::make('is_active')
                            ->label('Activo (Mostrar en la Web)')
                            ->default(true)
                            ->required(),
                    ])->columns(2),

                Section::make('Comentario y Fotografía')
                    ->schema([
                        Textarea::make('comment')
                            ->label('Testimonio / Comentario')
                            ->placeholder('Escriba aquí la opinión o testimonio del cliente sobre nuestro servicio...')
                            ->rows(4)
                            ->maxLength(300)
                            ->helperText("Máximo 300 caracteres")
                            ->required()
                            ->columnSpanFull(),
                        FileUpload::make('avatar_path')
                            ->label('Fotografía del Cliente o Logo de Empresa')
                            ->image()
                            ->directory('testimonials')
                            ->disk('public')
                            ->maxSize(10240)
                            ->helperText('Formato: JPG, PNG, WEBP. Tamaño máximo: 10 MB.')
                            ->columnSpanFull(),
                    ])->columns(1),
            ])->columns(1);
    }
}
