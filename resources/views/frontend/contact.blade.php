@extends('layouts.app')

@section('title', 'Contacto | ' . $setting->name)

@section('content')
<!-- Hero Section -->
<section class="py-20 blueprint-pattern border-b border-gray">
    <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop text-center md:text-left">
        <span class="font-label-bold text-primary uppercase tracking-widest text-sm font-semibold">Ubicación e Informes</span>
        <h1 class="font-display-lg text-4xl md:text-display-lg font-bold text-slate-gray mt-2 mb-6">Contáctenos</h1>
        <p class="font-body-lg text-lg text-on-surface-variant max-w-3xl leading-relaxed">
            Consulte presupuestos, programaciones de mantenimiento o solicite visitas técnicas a domicilio para su proyecto.
        </p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-24 bg-white">
    <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-gutter">
            
            <div class="space-y-8">
                <div>
                    <h2 class="font-headline-lg text-2xl md:text-headline-lg text-slate-gray font-bold">Hablemos de su requerimiento</h2>
                    <p class="mt-4 text-on-surface-variant font-body-md">Nuestro equipo técnico le responderá a la brevedad con soluciones garantizadas y precios justos.</p>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 border-t border-border-gray pt-8">
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center gap-2 text-primary">
                            <span class="material-symbols-outlined">call</span>
                            <span class="font-label-bold">Teléfono</span>
                        </div>
                        <p class="font-body-md text-slate-gray">{{ $setting->phone }}</p>
                    </div>
                    
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center gap-2 text-primary">
                            <span class="material-symbols-outlined">mail</span>
                            <span class="font-label-bold">Email de Contacto</span>
                        </div>
                        <p class="font-body-md text-slate-gray">{{ $setting->email }}</p>
                    </div>
                </div>

                <div class="flex flex-col gap-3 border-t border-border-gray pt-8">
                    <div class="flex items-center gap-2 text-primary">
                        <span class="material-symbols-outlined">location_on</span>
                        <span class="font-label-bold">Dirección Central</span>
                    </div>
                    <p class="font-body-md text-slate-gray">{{ $setting->address }}</p>
                </div>

                @if($setting->brochure_path)
                    <div class="bg-surface-container border border-border-gray p-6 rounded-lg flex items-center justify-between gap-4 mt-6">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary text-4xl">download_for_offline</span>
                            <div>
                                <h4 class="font-bold text-slate-gray text-sm">Brochure Corporativo</h4>
                                <p class="text-[11px] text-on-surface-variant">Conozca nuestra trayectoria y capacidades.</p>
                            </div>
                        </div>
                        <a href="{{ asset('storage/' . $setting->brochure_path) }}" target="_blank" download class="bg-primary text-white px-4 py-2.5 rounded font-label-bold text-xs hover:opacity-90 transition-opacity flex items-center gap-1">
                            Descargar
                            <span class="material-symbols-outlined text-sm">download</span>
                        </a>
                    </div>
                @endif

                @if($setting->maps_iframe)
                    <div class="min-h-[300px] bg-blueprint-bg rounded border border-border-gray overflow-hidden">
                        {!! $setting->maps_iframe !!}
                    </div>
                @endif
            </div>

            <div class="bg-off-white border border-border-gray p-8 rounded-lg">
                <h3 class="font-headline-md text-xl font-bold text-slate-gray mb-6">Formulario de Contacto</h3>
                
                @if(session('success'))
                    <div class="bg-green-50 border border-green-200 text-green-700 p-4 rounded-lg flex items-center gap-3 shadow-sm border-l-4 border-l-green-600 mb-6 transition-all duration-300 animate-pulse">
                        <span class="material-symbols-outlined text-green-600 text-2xl">check_circle</span>
                        <p class="text-sm font-medium">{{ session('success') }}</p>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 text-red-700 p-4 rounded-lg shadow-sm border-l-4 border-l-red-600 mb-6">
                        <ul class="list-disc pl-5 space-y-1 text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    <!-- Honeypot Field for Bot Prevention -->
                    <div class="hidden">
                        <input type="text" name="website_hp" value="" autocomplete="off" />
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="font-label-bold text-body-sm text-slate-gray font-bold">Nombres y Apellidos</label>
                        <input class="w-full bg-white border border-border-gray rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                               name="full_name" placeholder="Ingrese su nombre completo" type="text" value="{{ old('full_name') }}" required />
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex flex-col gap-2">
                            <label class="font-label-bold text-body-sm text-slate-gray font-bold">Correo Electrónico</label>
                            <input class="w-full bg-white border border-border-gray rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                                   name="email" placeholder="correo@ejemplo.com" type="email" value="{{ old('email') }}" required />
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="font-label-bold text-body-sm text-slate-gray font-bold">Teléfono / Celular</label>
                            <input class="w-full bg-white border border-border-gray rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                                   name="phone" placeholder="Ej: 999999999" type="text" value="{{ old('phone') }}" />
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="font-label-bold text-body-sm text-slate-gray font-bold">Asunto</label>
                        <input class="w-full bg-white border border-border-gray rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                               name="subject" placeholder="Ej: Cotización de servicios sanitarios / Consulta" type="text" value="{{ old('subject') }}" required />
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="font-label-bold text-body-sm text-slate-gray font-bold">Mensaje</label>
                        <textarea class="w-full bg-white border border-border-gray rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                                  name="message" placeholder="Escriba aquí los detalles de su consulta técnica o solicitud de cotización..." rows="5" required>{{ old('message') }}</textarea>
                    </div>

                    <button class="w-full bg-primary text-white py-4 font-label-bold rounded hover:opacity-90 transition-all shadow-md active:scale-95" type="submit">
                        Enviar Mensaje
                    </button>
                </form>
            </div>
            
        </div>
    </div>
</section>
@endsection
