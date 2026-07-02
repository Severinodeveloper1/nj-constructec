<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Contenido del Artículo')
                    ->schema([
                        TextInput::make('title')
                            ->label('Título del Artículo')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn($set, $state) => $set('slug', Str::slug($state)))
                            ->maxLength(255),
                        TextInput::make('slug')
                            ->label('Slug / URL')
                            ->required()
                            ->maxLength(255)
                            ->unique(table: 'posts', column: 'slug', ignoreRecord: true),
                        FileUpload::make('image_path')
                            ->label('Imagen de Portada')
                            ->image()
                            ->directory('blog')
                            ->disk('public'),
                        RichEditor::make('content')
                            ->label('Contenido')
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(2),

                Section::make('Publicación y SEO (Simple)')
                    ->schema([
                        Toggle::make('is_published')
                            ->label('Publicado')
                            ->default(false),
                        DateTimePicker::make('published_at')
                            ->label('Fecha de Publicación')
                            ->default(now()),
                        TextInput::make('meta_title')
                            ->label('Meta Título (SEO)')
                            ->maxLength(255)
                            ->placeholder('Ej: Mantenimiento Preventivo de Tanques'),
                        TextInput::make('meta_keywords')
                            ->label('Meta Keywords (SEO)')
                            ->maxLength(255)
                            ->placeholder('Ej: ingenieria, tanques, mantenimiento'),
                        Textarea::make('meta_description')
                            ->label('Meta Descripción (SEO)')
                            ->rows(3)
                            ->columnSpanFull()
                            ->placeholder('Ej: Aprenda sobre la importancia del mantenimiento preventivo...'),
                    ])->columns(2),
            ])->columns(1);
    }
}
