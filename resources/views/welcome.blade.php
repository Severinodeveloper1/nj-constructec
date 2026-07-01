@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative h-[85vh] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="w-full h-full bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD3R1hPMT2YcnJ7ICiWCfdhu4mVzfmCcsb0wcqcCknR-EHLsXackNM1FvgxC1GisIVtiNFgCzsnIPL3pvg3-SYY5gRCm5cyWWqypmXc-NyeXzCFMGvgtcOY2e0gazDWeCEL_n0Y34b8LKEMScw6ckwB74jXZ0D4PEwmHIRWisrgNcUoNPwulEDivbMDQ6t903vY1CgPwtIy9uMO-h-UM-8FIWbQlvCJkwMxTEEFrfnyvuK4j_TqT41G4OhI3gddl4sN1RVCS9ti8cd8')"></div>
        <div class="absolute inset-0 bg-slate-gray/60 mix-blend-multiply"></div>
    </div>
    <div class="relative z-10 w-full max-w-container-max mx-auto px-4 md:px-margin-desktop">
        <div class="max-w-3xl">
            <h1 class="font-display-lg text-4xl md:text-5xl lg:text-display-lg text-white mb-6 font-bold leading-tight">
                Más de 18 años de Excelencia en Ingeniería y Construcción
            </h1>
            <p class="font-body-lg text-lg text-off-white mb-10 border-l-4 border-secondary-container pl-6 leading-relaxed">
                Expertos peruanos en instalaciones sanitarias, eléctricas y sistemas de bombeo para proyectos residenciales y edificaciones. Soluciones técnicas con garantía real y compromiso de calidad.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="{{ url('/proyectos') }}" class="bg-primary text-white px-8 py-4 rounded font-label-bold text-lg hover:opacity-90 transition-all flex items-center gap-2">
                    Ver Nuestros Proyectos
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
                <a href="{{ url('/nosotros') }}" class="bg-transparent border border-white text-white px-8 py-4 rounded font-label-bold text-lg hover:bg-white hover:text-slate-gray transition-all">
                    Quiénes Somos
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-24 blueprint-pattern">
    <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop">
        <div class="mb-16">
            <span class="font-label-bold text-primary uppercase tracking-widest text-sm font-semibold">Nuestras Capacidades</span>
            <h2 class="font-headline-lg text-3xl md:text-headline-lg text-slate-gray mt-2 font-bold">Servicios Especializados</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
            <!-- Instalaciones Sanitarias -->
            <div class="bg-white border border-border-gray p-8 group hover:border-primary transition-all duration-300 rounded flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 bg-surface-container flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <span class="material-symbols-outlined text-primary group-hover:text-white">plumbing</span>
                    </div>
                    <h3 class="font-headline-md text-xl font-bold text-slate-gray mb-4">Instalaciones Sanitarias</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-6">Diseño de redes nuevas, reparaciones de fugas, mantenimiento preventivo y desatoro de desagües con tecnología de presión.</p>
                </div>
                <a class="font-label-bold text-primary flex items-center gap-2 group-hover:translate-x-2 transition-all mt-auto" href="{{ url('/servicios#sanitarias') }}">
                    Ver Detalle <span class="material-symbols-outlined text-sm">chevron_right</span>
                </a>
            </div>
            <!-- Instalaciones Eléctricas -->
            <div class="bg-white border border-border-gray p-8 group hover:border-primary transition-all duration-300 rounded flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 bg-surface-container flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <span class="material-symbols-outlined text-primary group-hover:text-white">bolt</span>
                    </div>
                    <h3 class="font-headline-md text-xl font-bold text-slate-gray mb-4">Instalaciones Eléctricas</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-6">Cableado integral para viviendas y oficinas, tableros eléctricos, puesta a tierra y sistemas de iluminación con certificación técnica.</p>
                </div>
                <a class="font-label-bold text-primary flex items-center gap-2 group-hover:translate-x-2 transition-all mt-auto" href="{{ url('/servicios#electricas') }}">
                    Ver Detalle <span class="material-symbols-outlined text-sm">chevron_right</span>
                </a>
            </div>
            <!-- Equipos de Bombeo -->
            <div class="bg-white border border-border-gray p-8 group hover:border-primary transition-all duration-300 rounded flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 bg-surface-container flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <span class="material-symbols-outlined text-primary group-hover:text-white">water_drop</span>
                    </div>
                    <h3 class="font-headline-md text-xl font-bold text-slate-gray mb-4">Equipos de Bombeo</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-6">Instalación y automatización de bombas centrífugas, sumergibles y sistemas de presión constante para cisternas y tanques.</p>
                </div>
                <a class="font-label-bold text-primary flex items-center gap-2 group-hover:translate-x-2 transition-all mt-auto" href="{{ url('/servicios#bombeo') }}">
                    Ver Detalle <span class="material-symbols-outlined text-sm">chevron_right</span>
                </a>
            </div>
            <!-- Bridas Rompeagua -->
            <div class="bg-white border border-border-gray p-8 group hover:border-primary transition-all duration-300 rounded flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 bg-surface-container flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <span class="material-symbols-outlined text-primary group-hover:text-white">settings_input_component</span>
                    </div>
                    <h3 class="font-headline-md text-xl font-bold text-slate-gray mb-4">Bridas Rompeagua</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-6">Fabricación e instalación especializada para obras de saneamiento y cisternas, garantizando impermeabilidad total en juntas.</p>
                </div>
                <a class="font-label-bold text-primary flex items-center gap-2 group-hover:translate-x-2 transition-all mt-auto" href="{{ url('/servicios#bridas') }}">
                    Ver Detalle <span class="material-symbols-outlined text-sm">chevron_right</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Company Info Section (About) -->
<section class="py-24 bg-slate-gray text-off-white overflow-hidden relative">
    <div class="absolute right-0 top-0 w-1/3 h-full opacity-10 pointer-events-none">
        <span class="material-symbols-outlined text-[400px]" style="font-variation-settings: 'wght' 100;">handyman</span>
    </div>
    <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop grid grid-cols-1 lg:grid-cols-2 gap-gutter items-center">
        <div>
            <span class="font-label-bold text-secondary-container uppercase tracking-widest text-sm font-semibold">Quiénes Somos</span>
            <h2 class="font-display-lg text-3xl md:text-display-lg mb-8 font-bold mt-2">Compromiso con la Calidad y la Seguridad</h2>
            <p class="font-body-lg text-lg text-surface-variant mb-8 leading-relaxed">
                Nuestra misión es brindar servicios con altos estándares de calidad, utilizando materiales confiables y tecnología adecuada. Nos guían valores fundamentales como la <span class="text-secondary-container font-bold">Responsabilidad, Honestidad y Calidad</span>.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="flex items-start gap-4">
                    <div class="bg-primary p-2 rounded">
                        <span class="material-symbols-outlined text-white">verified</span>
                    </div>
                    <div>
                        <h4 class="font-headline-md text-white text-lg font-bold">Garantía Real</h4>
                        <p class="font-body-sm text-body-sm text-surface-variant">Respaldo total en cada ejecución técnica realizada.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="bg-primary p-2 rounded">
                        <span class="material-symbols-outlined text-white">groups</span>
                    </div>
                    <div>
                        <h4 class="font-headline-md text-white text-lg font-bold">Técnicos Expertos</h4>
                        <p class="font-body-sm text-body-sm text-surface-variant">Personal altamente calificado y en constante capacitación.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative">
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 p-8 rounded shadow-2xl">
                <div class="flex items-center gap-4 mb-8">
                    <div class="flex gap-1.5">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    </div>
                    <div class="h-px flex-1 bg-white/20"></div>
                    <span class="text-[10px] text-white/40 font-mono">INTERNAL_OPS</span>
                </div>
                <div class="space-y-6">
                    <div class="border-l-2 border-primary pl-4">
                        <p class="text-xs text-white/60 uppercase">Nuestra Visión</p>
                        <p class="text-sm italic">"Ser reconocidos a nivel nacional como empresa líder por nuestra trayectoria e innovación constante."</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white/5 p-4 rounded border border-white/10 flex flex-col items-center">
                            <span class="material-symbols-outlined text-secondary-container mb-2 text-3xl">fact_check</span>
                            <p class="text-xs font-bold uppercase text-white">Calidad</p>
                        </div>
                        <div class="bg-white/5 p-4 rounded border border-white/10 flex flex-col items-center">
                            <span class="material-symbols-outlined text-secondary-container mb-2 text-3xl">lock</span>
                            <p class="text-xs font-bold uppercase text-white">Seguridad</p>
                        </div>
                    </div>
                </div>
                <p class="mt-8 text-center font-label-bold text-[10px] text-white/40 uppercase tracking-widest">NJ CONSTRUCTEC SAC - GESTIÓN INTERNA</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-24 bg-white">
    <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-gutter">
            <div class="space-y-12">
                <div>
                    <span class="font-label-bold text-primary uppercase tracking-widest text-sm font-semibold">Contacto</span>
                    <h2 class="font-headline-lg text-3xl md:text-headline-lg text-slate-gray mt-2 font-bold">Hablemos de su requerimiento</h2>
                    <p class="mt-4 text-on-surface-variant font-body-md">Atención personalizada y presupuestos justos para su hogar o proyecto residencial.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center gap-3 text-primary">
                            <span class="material-symbols-outlined">call</span>
                            <span class="font-label-bold">Teléfono</span>
                        </div>
                        <p class="font-body-md text-slate-gray">{{ $setting->phone }}</p>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center gap-3 text-primary">
                            <span class="material-symbols-outlined">mail</span>
                            <span class="font-label-bold">Email</span>
                        </div>
                        <p class="font-body-md text-slate-gray">{{ $setting->email }}</p>
                    </div>
                </div>
                
                @if(session('success'))
                    <div class="bg-green-50 border border-green-200 text-green-700 p-4 rounded-lg flex items-center gap-3 shadow-sm border-l-4 border-l-green-600 transition-all duration-300">
                        <span class="material-symbols-outlined text-green-600 text-2xl">check_circle</span>
                        <p class="text-sm font-medium">{{ session('success') }}</p>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 text-red-700 p-4 rounded-lg shadow-sm border-l-4 border-l-red-600">
                        <ul class="list-disc pl-5 space-y-1 text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <!-- Honeypot Field for Spam Security -->
                    <div class="hidden">
                        <input type="text" name="website_hp" value="" autocomplete="off" />
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex flex-col gap-1">
                            <input class="w-full bg-off-white border border-border-gray rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                                   name="full_name" placeholder="Nombre completo" type="text" value="{{ old('full_name') }}" required />
                        </div>
                        <div class="flex flex-col gap-1">
                            <input class="w-full bg-off-white border border-border-gray rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                                   name="email" placeholder="Correo electrónico" type="email" value="{{ old('email') }}" required />
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <input class="w-full bg-off-white border border-border-gray rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                               name="subject" placeholder="Asunto" type="text" value="{{ old('subject') }}" required />
                    </div>
                    <div class="flex flex-col gap-1">
                        <textarea class="w-full bg-off-white border border-border-gray rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                                  name="message" placeholder="Detalle su consulta técnica o requerimiento" rows="4" required>{{ old('message') }}</textarea>
                    </div>
                    <button class="w-full bg-primary text-white py-4 font-label-bold rounded hover:opacity-90 transition-all active:scale-[0.98]" type="submit">
                        Enviar Mensaje
                    </button>
                </form>
            </div>
            
            <div class="h-full min-h-[450px] bg-surface-container relative rounded overflow-hidden border border-border-gray shadow-inner">
                @if($setting->maps_iframe)
                    <div class="w-full h-full">
                        {!! $setting->maps_iframe !!}
                    </div>
                @else
                    <div class="w-full h-full flex items-center justify-center bg-blueprint-bg">
                        <div class="absolute inset-0 blueprint-pattern opacity-50"></div>
                        <div class="relative text-center p-6">
                            <span class="material-symbols-outlined text-primary text-6xl" style="font-variation-settings: 'FILL' 1;">location_on</span>
                            <p class="mt-4 font-label-bold text-slate-gray uppercase font-bold">{{ $setting->address }}</p>
                            <p class="text-xs text-outline mt-2">Instalaciones Sanitarias y Eléctricas a Nivel Nacional</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
