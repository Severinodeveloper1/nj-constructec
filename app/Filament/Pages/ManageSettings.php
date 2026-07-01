<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use BackedEnum;


use Filament\Pages\Page;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ManageSettings extends Page
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static ?string $navigationLabel = 'Configuración';

    protected static ?string $title = 'Información de la Empresa';

    protected static ?string $slug = 'manage-settings';

    protected string $view = 'filament.pages.manage-settings';

    public ?array $data = [];

    public function mount(): void
    {
        $setting = Setting::firstOrCreate([], [
            'name' => 'Mi Empresa',
        ]);

        $this->form->fill($setting->toArray());
    }

    public function form(Schema $form): Schema
    {
        return $form
            ->schema([
                Section::make('Información Básica')
                    ->description('Nombre comercial y logo principal de la empresa.')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nombre de la Empresa')
                            ->required()
                            ->maxLength(255),
                        FileUpload::make('logo_path')
                            ->label('Logo de la Empresa')
                            ->image()
                            ->directory('company')
                            ->disk('public')
                            ->maxSize(2048),
                    ])->columns(2),

                Section::make('Contacto')
                    ->description('Canales de comunicación oficiales.')
                    ->schema([
                        TextInput::make('phone')
                            ->label('Teléfono Fijo / Móvil')
                            ->tel()
                            ->maxLength(30),
                        TextInput::make('whatsapp_phone')
                            ->label('WhatsApp (incluir código de país)')
                            ->tel()
                            ->maxLength(30),
                        TextInput::make('email')
                            ->label('Correo Electrónico')
                            ->email()
                            ->maxLength(255),
                        TextInput::make('address')
                            ->label('Dirección Física')
                            ->maxLength(255),
                    ])->columns(2),

                Section::make('Presencia Digital y Ubicación')
                    ->description('Redes sociales oficiales y mapa interactivo.')
                    ->schema([
                        TextInput::make('facebook_url')
                            ->label('URL de Facebook')
                            ->url()
                            ->maxLength(255),
                        TextInput::make('instagram_url')
                            ->label('URL de Instagram')
                            ->url()
                            ->maxLength(255),
                        TextInput::make('tiktok_url')
                            ->label('URL de TikTok')
                            ->url()
                            ->maxLength(255),
                        TextInput::make('youtube_url')
                            ->label('URL de YouTube')
                            ->url()
                            ->maxLength(255),
                        Textarea::make('maps_iframe')
                            ->label('Iframe de Google Maps')
                            ->placeholder('<iframe src="https://www.google.com/maps/embed?..." ...></iframe>')
                            ->rows(4)
                            ->columnSpanFull(),
                    ])->columns(2),
            ])
            ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Guardar Cambios')
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $setting = Setting::first();
        if ($setting) {
            $setting->update($data);
        }

        Notification::make()
            ->title('Configuración guardada correctamente.')
            ->success()
            ->send();
    }
}
