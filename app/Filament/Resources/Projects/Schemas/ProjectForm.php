<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detalles del Proyecto')
                    ->schema([
                        FileUpload::make('image_path')
                            ->label('Foto Portada / Principal')
                            ->image()
                            ->directory('projects')
                            ->disk('public')
                            ->maxSize(10240)
                            ->helperText('Formato: JPG, PNG, WEBP. Tamaño máximo: 10 MB.')
                            ->required(),
                        TextInput::make('title')
                            ->label('Nombre del Proyecto')
                            ->required()
                            ->maxLength(255),
                        Select::make('service_type')
                            ->label('Línea de Negocio / Servicio')
                            ->options(fn() => \App\Models\Service::pluck('name', 'name')->toArray() + [
                                'Instalaciones Sanitarias' => 'Instalaciones Sanitarias',
                                'Instalaciones Eléctricas' => 'Instalaciones Eléctricas',
                                'Equipos de Bombeo' => 'Equipos de Bombeo',
                                'Bridas Rompeagua' => 'Bridas Rompeagua'
                            ])
                            ->required(),
                        TextInput::make('location')
                            ->label('Ubicación')
                            ->placeholder('Ej: San Isidro, Lima')
                            ->maxLength(255),
                        TextInput::make('order')
                            ->label('Orden de Visualización')
                            ->numeric()
                            ->default(0)
                            ->required(),
                        Textarea::make('description')
                            ->label('Descripción Breve del Proyecto / Trabajo Técnico')
                            ->rows(3)
                            ->columnSpanFull(),
                        Toggle::make('is_featured')
                            ->label('Destacar en Home')
                            ->default(false),
                        Toggle::make('is_active')
                            ->label('Activo')
                            ->default(true),
                    ])->columns(2),
 
                Section::make('Galería de Imágenes')
                    ->description('Suba las fotografías del trabajo técnico.')
                    ->schema([
                        FileUpload::make('gallery')
                            ->label('Fotos Secundarias (Galería)')
                            ->image()
                            ->multiple()
                            ->reorderable()
                            ->maxFiles(8)
                            ->maxSize(10240)
                            ->helperText("Formatos: JPG, PNG, WEBP. Máximo 8 imágenes de hasta 10 MB cada una.")
                            ->directory('projects/gallery')
                            ->disk('public'),
                    ])->columns(1),
            ])->columns(1);
    }
}
