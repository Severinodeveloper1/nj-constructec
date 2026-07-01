@extends('layouts.app')

@section('title', 'Servicios Especializados | ' . $setting->name)

@section('content')
<!-- Hero Section -->
<section class="py-20 blueprint-pattern border-b border-gray">
    <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop text-center md:text-left">
        <span class="font-label-bold text-primary uppercase tracking-widest text-sm font-semibold">Nuestras Soluciones</span>
        <h1 class="font-display-lg text-4xl md:text-display-lg font-bold text-slate-gray mt-2 mb-6">Servicios Especializados</h1>
        <p class="font-body-lg text-lg text-on-surface-variant max-w-3xl leading-relaxed">
            Brindamos soluciones integrales con altos estándares de calidad, materiales de primera línea y técnicos certificados en Perú.
        </p>
    </div>
</section>

<!-- Services Grid/Details -->
<section class="py-24 bg-white">
    <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop space-y-24">
        
        <!-- 1. Instalaciones Sanitarias -->
        <div id="sanitarias" class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start scroll-mt-24">
            <div class="lg:col-span-5 space-y-6">
                <div class="w-16 h-16 bg-surface-container flex items-center justify-center rounded">
                    <span class="material-symbols-outlined text-primary text-4xl">plumbing</span>
                </div>
                <h2 class="font-headline-lg text-3xl font-bold text-slate-gray">Instalaciones Sanitarias</h2>
                <p class="font-body-md text-on-surface-variant leading-relaxed">
                    Diseño, instalación y mantenimiento preventivo y correctivo de sistemas de agua fría, caliente y desagües residenciales e industriales.
                </p>
                <div class="border-t border-border-gray pt-6">
                    <a href="{{ url('/contacto') }}" class="inline-flex items-center gap-2 font-label-bold text-primary hover:opacity-80 transition-opacity">
                        Solicitar cotización de sanitarias <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>
            <div class="lg:col-span-7 bg-off-white border border-border-gray p-8 rounded-lg">
                <h3 class="font-label-bold text-slate-gray uppercase tracking-wider mb-6 text-sm">Nuestro servicio incluye:</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-gray flex items-center gap-2 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Redes Nuevas</h4>
                        <p class="text-xs text-on-surface-variant">Agua fría/caliente y desagües empotrados en PPR, PVC, CPVC, HDPE.</p>
                    </div>
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-gray flex items-center gap-2 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Reparación de Fugas</h4>
                        <p class="text-xs text-on-surface-variant">Detección y reparación oportuna de fugas invisibles y cambio de tuberías.</p>
                    </div>
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-gray flex items-center gap-2 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Aparatos Sanitarios</h4>
                        <p class="text-xs text-on-surface-variant">Instalación fina de inodoros, griferías de alta gama, termas a gas y eléctricas.</p>
                    </div>
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-gray flex items-center gap-2 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Mantenimiento</h4>
                        <p class="text-xs text-on-surface-variant">Limpieza técnica y desinfección de tanques elevados, cisternas y desagües.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Instalaciones Eléctricas -->
        <div id="electricas" class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start scroll-mt-24">
            <div class="lg:col-span-5 space-y-6 lg:order-last">
                <div class="w-16 h-16 bg-surface-container flex items-center justify-center rounded">
                    <span class="material-symbols-outlined text-primary text-4xl">bolt</span>
                </div>
                <h2 class="font-headline-lg text-3xl font-bold text-slate-gray">Instalaciones Eléctricas</h2>
                <p class="font-body-md text-on-surface-variant leading-relaxed">
                    Instalación de redes eléctricas seguras que garanticen el flujo de energía y protejan los artefactos y edificaciones de sobrecargas.
                </p>
                <div class="border-t border-border-gray pt-6">
                    <a href="{{ url('/contacto') }}" class="inline-flex items-center gap-2 font-label-bold text-primary hover:opacity-80 transition-opacity">
                        Solicitar cotización de eléctricas <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>
            <div class="lg:col-span-7 bg-off-white border border-border-gray p-8 rounded-lg">
                <h3 class="font-label-bold text-slate-gray uppercase tracking-wider mb-6 text-sm">Nuestro servicio incluye:</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-gray flex items-center gap-2 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Cableado General</h4>
                        <p class="text-xs text-on-surface-variant">Tendido e instalación de redes internas/externas para hogares y oficinas.</p>
                    </div>
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-gray flex items-center gap-2 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Tableros Eléctricos</h4>
                        <p class="text-xs text-on-surface-variant">Montaje y ordenamiento de llaves térmicas y diferenciales de protección.</p>
                    </div>
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-gray flex items-center gap-2 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Puestas a Tierra</h4>
                        <p class="text-xs text-on-surface-variant">Diseño e instalación de pozos a tierra certificados bajo normativa vigente.</p>
                    </div>
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-gray flex items-center gap-2 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Iluminación</h4>
                        <p class="text-xs text-on-surface-variant">Montaje de luminarias LED, reflectores de alta potencia y automatización.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Equipos de Bombeo -->
        <div id="bombeo" class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start scroll-mt-24">
            <div class="lg:col-span-5 space-y-6">
                <div class="w-16 h-16 bg-surface-container flex items-center justify-center rounded">
                    <span class="material-symbols-outlined text-primary text-4xl">water_drop</span>
                </div>
                <h2 class="font-headline-lg text-3xl font-bold text-slate-gray">Equipos de Bombeo</h2>
                <p class="font-body-md text-on-surface-variant leading-relaxed">
                    Soluciones integrales de bombeo que aseguren la presión y caudal idóneos para el abastecimiento continuo de agua potable.
                </p>
                <div class="border-t border-border-gray pt-6">
                    <a href="{{ url('/contacto') }}" class="inline-flex items-center gap-2 font-label-bold text-primary hover:opacity-80 transition-opacity">
                        Solicitar cotización de bombeo <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>
            <div class="lg:col-span-7 bg-off-white border border-border-gray p-8 rounded-lg">
                <h3 class="font-label-bold text-slate-gray uppercase tracking-wider mb-6 text-sm">Nuestro servicio incluye:</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-gray flex items-center gap-2 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Electrobombas</h4>
                        <p class="text-xs text-on-surface-variant">Instalación y mantenimiento de bombas sumergibles y centrífugas.</p>
                    </div>
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-gray flex items-center gap-2 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Presión Constante</h4>
                        <p class="text-xs text-on-surface-variant">Sistemas modernos con variadores de velocidad para optimizar el consumo de energía.</p>
                    </div>
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-gray flex items-center gap-2 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Tableros de Control</h4>
                        <p class="text-xs text-on-surface-variant">Fabricación e instalación de tableros eléctricos para alternancia de bombas.</p>
                    </div>
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-gray flex items-center gap-2 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Automatización</h4>
                        <p class="text-xs text-on-surface-variant">Sensores de nivel electrónicos que previenen el funcionamiento en seco de las bombas.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Bridas Rompeagua -->
        <div id="bridas" class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start scroll-mt-24">
            <div class="lg:col-span-5 space-y-6 lg:order-last">
                <div class="w-16 h-16 bg-surface-container flex items-center justify-center rounded">
                    <span class="material-symbols-outlined text-primary text-4xl">settings_input_component</span>
                </div>
                <h2 class="font-headline-lg text-3xl font-bold text-slate-gray">Bridas Rompeagua</h2>
                <p class="font-body-md text-on-surface-variant leading-relaxed">
                    Servicio especializado de fabricación e instalación de bridas rompeagua para proyectos de saneamiento y almacenamiento hidráulico.
                </p>
                <div class="border-t border-border-gray pt-6">
                    <a href="{{ url('/contacto') }}" class="inline-flex items-center gap-2 font-label-bold text-primary hover:opacity-80 transition-opacity">
                        Solicitar cotización de bridas <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>
            <div class="lg:col-span-7 bg-off-white border border-border-gray p-8 rounded-lg">
                <h3 class="font-label-bold text-slate-gray uppercase tracking-wider mb-6 text-sm">Nuestro servicio incluye:</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-gray flex items-center gap-2 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Evaluación de Diseño</h4>
                        <p class="text-xs text-on-surface-variant">Estudio técnico de presiones y espesores de muros para dimensionamiento.</p>
                    </div>
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-gray flex items-center gap-2 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Fabricación de Bridas</h4>
                        <p class="text-xs text-on-surface-variant">Estructuras de acero de alta calidad con recubrimiento anticorrosivo.</p>
                    </div>
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-gray flex items-center gap-2 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Alineamiento</h4>
                        <p class="text-xs text-on-surface-variant">Fijación de los elementos de pase previo al vaciado de concreto estructural.</p>
                    </div>
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-gray flex items-center gap-2 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Soldadura Especializada</h4>
                        <p class="text-xs text-on-surface-variant">Juntas con soldadura hermética y pruebas rigurosas de estanqueidad.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
