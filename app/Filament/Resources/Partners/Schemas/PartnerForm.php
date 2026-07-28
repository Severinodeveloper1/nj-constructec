<?php

namespace App\Filament\Resources\Partners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Datos de la Empresa Aliada')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nombre de la Empresa')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('link_url')
                            ->label('Enlace Web / URL (Opcional)')
                            ->url()
                            ->maxLength(255),
                        FileUpload::make('logo_path')
                            ->label('Logotipo de la Empresa')
                            ->image()
                            ->directory('partners')
                            ->disk('public')
                            ->maxSize(10240)
                            ->helperText('Formato: JPG, PNG, WEBP, SVG. Tamaño máximo: 10 MB.')
                            ->required(),
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
