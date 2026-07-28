<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Información General')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nombre del Servicio')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn($set, $state) => $set('slug', Str::slug($state)))
                            ->maxLength(255),
                        TextInput::make('slug')
                            ->label('Slug / URL')
                            ->required()
                            ->maxLength(255)
                            ->unique(table: 'services', column: 'slug', ignoreRecord: true),
                        TextInput::make('icon')
                            ->label('Icono (Material Symbols)')
                            ->placeholder('Ej: plumbing, bolt, water_drop')
                            ->maxLength(100),
                        TextInput::make('order')
                            ->label('Orden')
                            ->numeric()
                            ->default(0)
                            ->required(),
                        Textarea::make('short_description')
                            ->label('Descripción Corta (Listados)')
                            ->rows(2)
                            ->columnSpanFull(),
                        Toggle::make('is_active')
                            ->label('Activo')
                            ->default(true),
                    ])->columns(2),

                Section::make('Contenido Detallado')
                    ->schema([
                        RichEditor::make('description')
                            ->label('Descripción Completa')
                            ->required()
                            ->columnSpanFull(),
                        RichEditor::make('technical_specs')
                            ->label('Especificaciones Técnicas y Normas')
                            ->placeholder('Uso de materiales, normativas vigentes (Ej: IS.010, CNE)...')
                            ->columnSpanFull(),
                    ]),

                Section::make('Multimedia y Adjuntos')
                    ->schema([
                        FileUpload::make('gallery')
                            ->label('Galería de Imágenes')
                            ->image()
                            ->multiple()
                            ->reorderable()
                            ->directory('services/gallery')
                            ->disk('public')
                            ->maxFiles(8)
                            ->maxSize(10240)
                            ->helperText('Formato: JPG, PNG, WEBP. Tamaño máximo por imagen: 10 MB.')
                            ->columnSpanFull(),

                        Repeater::make('attachments')
                            ->label('Archivos Descargables (Fichas, Catálogos)')
                            ->schema([
                                TextInput::make('name')
                                    ->label('Texto del Botón')
                                    ->required()
                                    ->placeholder('Ej: Descargar Brochure Técnico'),
                                FileUpload::make('file_path')
                                    ->label('Archivo')
                                    ->directory('services/attachments')
                                    ->disk('public')
                                    ->maxSize(10240)
                                    ->helperText('Formato: PDF, ZIP. Tamaño máximo: 10 MB.')
                                    ->required(),
                            ])
                            ->columns(2),
                    ]),
            ])->columns(1);
    }
}
