<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $setting = null;
        try {
            if (\Illuminate\Support\Facades\Schema::hasTable('settings')) {
                $setting = \App\Models\Setting::first();
                if ($setting) {
                    $defaults = [
                        'name' => 'NJ CONSTRUCTEC',
                        'phone' => '+51 900 000 000',
                        'whatsapp_phone' => '+51900000000',
                        'email' => 'contacto@njconstructec.com',
                        'address' => 'Lima, Perú',
                        'maps_iframe' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.8653634591433!2d-77.0368565!3d-12.046374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8a5a5a5a5a5%3a0x5a5a5a5a5a5a5a5a!2sLima!5e0!3m2!1ses!2spe!4v1650000000000!5m2!1ses!2spe" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                        'facebook_url' => 'https://facebook.com',
                        'instagram_url' => 'https://instagram.com',
                        'tiktok_url' => 'https://tiktok.com',
                        'youtube_url' => 'https://youtube.com',
                    ];
                    foreach ($defaults as $key => $val) {
                        if (is_null($setting->{$key}) || $setting->{$key} === '' || $setting->{$key} === 'Mi Empresa') {
                            $setting->{$key} = $val;
                        }
                    }
                }
            }
        } catch (\Throwable $e) {
            // Ignore database/migration errors during setup
        }

        view()->share('setting', $setting ?? new \App\Models\Setting([
            'name' => 'NJ CONSTRUCTEC',
            'phone' => '+51 900 000 000',
            'whatsapp_phone' => '+51900000000',
            'email' => 'contacto@njconstructec.com',
            'address' => 'Lima, Perú',
            'maps_iframe' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.8653634591433!2d-77.0368565!3d-12.046374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8a5a5a5a5a5%3a0x5a5a5a5a5a5a5a5a!2sLima!5e0!3m2!1ses!2spe!4v1650000000000!5m2!1ses!2spe" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'facebook_url' => 'https://facebook.com',
            'instagram_url' => 'https://instagram.com',
            'tiktok_url' => 'https://tiktok.com',
            'youtube_url' => 'https://youtube.com',
        ]));
    }
}
