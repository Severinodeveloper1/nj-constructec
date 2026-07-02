<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use BackedEnum;


use Filament\Pages\Page;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
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

                Section::make('Nosotros (Quiénes Somos)')
                    ->description('Historia, Misión, Visión y Valores de la empresa.')
                    ->schema([
                        Textarea::make('about_history')
                            ->label('Historia de la Empresa')
                            ->rows(5)
                            ->columnSpanFull(),
                        Textarea::make('about_mission')
                            ->label('Misión')
                            ->rows(3),
                        Textarea::make('about_vision')
                            ->label('Visión')
                            ->rows(3),
                        Repeater::make('about_values')
                            ->label('Valores de la Empresa')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Nombre del Valor')
                                    ->required()
                                    ->maxLength(100),
                                Textarea::make('description')
                                    ->label('Descripción')
                                    ->required()
                                    ->rows(2),
                                TextInput::make('icon')
                                    ->label('Icono (Material Symbols)')
                                    ->placeholder('Ej: checked, lock, handshake')
                                    ->maxLength(100),
                            ])
                            ->columns(3)
                            ->columnSpanFull(),
                    ])->columns(2),

                Section::make('Recursos y Configuración de Contactos')
                    ->description('Configuración de Brochure PDF y cuenta de destino de correos.')
                    ->schema([
                        FileUpload::make('brochure_path')
                            ->label('Brochure Corporativo (PDF)')
                            ->acceptedFileTypes(['application/pdf'])
                            ->directory('brochures')
                            ->disk('public')
                            ->maxSize(10240),
                        TextInput::make('contact_email_receiver')
                            ->label('Correo Destino de Notificaciones')
                            ->email()
                            ->placeholder('Ej: notificaciones@njconstructec.com')
                            ->maxLength(255),
                    ])->columns(2),

                Section::make('Pilares de la Empresa (Página de Inicio)')
                    ->description('Configure los 3 pilares principales mostrados en el Home.')
                    ->schema([
                        TextInput::make('pilar_1_title')
                            ->label('Pilar 1: Título')
                            ->maxLength(255),
                        Textarea::make('pilar_1_desc')
                            ->label('Pilar 1: Descripción')
                            ->rows(2),
                        TextInput::make('pilar_2_title')
                            ->label('Pilar 2: Título')
                            ->maxLength(255),
                        Textarea::make('pilar_2_desc')
                            ->label('Pilar 2: Descripción')
                            ->rows(2),
                        TextInput::make('pilar_3_title')
                            ->label('Pilar 3: Título')
                            ->maxLength(255),
                        Textarea::make('pilar_3_desc')
                            ->label('Pilar 3: Descripción')
                            ->rows(2),
                    ])->columns(3),
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
