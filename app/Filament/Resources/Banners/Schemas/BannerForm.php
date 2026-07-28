<?php

namespace App\Filament\Resources\Banners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detalles del Banner')
                    ->schema([
                        TextInput::make('title')
                            ->label('Título Principal')
                            ->maxLength(255)
                            ->placeholder('Ej: Más de 18 años de Excelencia'),
                        TextInput::make('subtitle')
                            ->label('Subtítulo')
                            ->maxLength(500)
                            ->placeholder('Ej: Expertos peruanos en instalaciones...'),
                        FileUpload::make('image_path')
                            ->label('Imagen de Fondo')
                            ->image()
                            ->directory('banners')
                            ->disk('public')
                            ->maxSize(10240)
                            ->helperText('Dimensiones sugeridas: 1920x1080 px (16:9). Formatos: JPG, PNG, WEBP. Tamaño máximo: 10 MB.')
                            ->required(),
                        TextInput::make('link_url')
                            ->label('Enlace / URL de Botón')
                            ->url()
                            ->maxLength(255)
                            ->placeholder('Ej: /proyectos o /contacto'),
                        TextInput::make('order')
                            ->label('Orden de Visualización')
                            ->numeric()
                            ->default(0)
                            ->required(),
                        Toggle::make('is_active')
                            ->label('Activo')
                            ->default(true),
                    ])->columns(2),
            ])->columns(1);
    }
}
