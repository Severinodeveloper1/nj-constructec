@extends('layouts.app')

@section('content')
<!-- Hero Section (Banners Dinámicos) -->
<section class="relative h-[80vh] flex items-center overflow-hidden bg-slate-gray">
    @if(isset($banners) && $banners->count() > 0)
        <!-- Slider Container -->
        <div class="absolute inset-0 z-0 w-full h-full" id="hero-slider">
            @foreach($banners as $index => $banner)
                <div class="absolute inset-0 w-full h-full flex items-center relative {{ $index === 0 ? 'block' : 'hidden' }} hero-slide" data-index="{{ $index }}">
                    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('storage/' . $banner->image_path) }}')"></div>
                    <div class="absolute inset-0 bg-slate-gray/60 mix-blend-multiply"></div>
                    
                    <!-- Content -->
                    <div class="relative z-10 w-full max-w-container-max mx-auto px-4 md:px-margin-desktop">
                        <div class="max-w-3xl text-left">
                            <h1 class="font-display-lg text-4xl md:text-5xl lg:text-display-lg text-white mb-6 font-bold leading-tight">
                                {{ $banner->title ?? '18+ Años de Excelencia en Ingeniería' }}
                            </h1>
                            <p class="font-body-lg text-lg text-off-white mb-10 border-l-4 border-primary pl-6 leading-relaxed">
                                {{ $banner->subtitle ?? 'Soluciones duraderas para proyectos residenciales y edificaciones.' }}
                            </p>
                            @if($banner->link_url)
                                <a href="{{ url($banner->link_url) }}" class="inline-flex bg-primary text-white px-8 py-4 rounded font-label-bold text-lg hover:opacity-90 transition-all items-center gap-2">
                                    Saber Más
                                    <span class="material-symbols-outlined">arrow_forward</span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <!-- Slider Controls -->
        @if($banners->count() > 1)
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 z-20 flex gap-2">
                @foreach($banners as $index => $banner)
                    <button class="w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-all slider-dot {{ $index === 0 ? 'bg-white scale-125' : '' }}" onclick="showSlide({{ $index }})"></button>
                @endforeach
            </div>
        @endif
    @else
        <!-- Fallback Banner -->
        <div class="absolute inset-0 z-0">
            <div class="w-full h-full bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD3R1hPMT2YcnJ7ICiWCfdhu4mVzfmCcsb0wcqcCknR-EHLsXackNM1FvgxC1GisIVtiNFgCzsnIPL3pvg3-SYY5gRCm5cyWWqypmXc-NyeXzCFMGvgtcOY2e0gazDWeCEL_n0Y34b8LKEMScw6ckwB74jXZ0D4PEwmHIRWisrgNcUoNPwulEDivbMDQ6t903vY1CgPwtIy9uMO-h-UM-8FIWbQlvCJkwMxTEEFrfnyvuK4j_TqT41G4OhI3gddl4sN1RVCS9ti8cd8')"></div>
            <div class="absolute inset-0 bg-slate-gray/60 mix-blend-multiply"></div>
        </div>
        <div class="relative z-10 w-full max-w-container-max mx-auto px-4 md:px-margin-desktop">
            <div class="max-w-3xl">
                <h1 class="font-display-lg text-4xl md:text-5xl lg:text-display-lg text-white mb-6 font-bold leading-tight">
                    Más de 18 años de Excelencia en Ingeniería y Construcción
                </h1>
                <p class="font-body-lg text-lg text-off-white mb-10 border-l-4 border-primary pl-6 leading-relaxed">
                    Expertos peruanos en instalaciones sanitarias, eléctricas y sistemas de bombeo para proyectos residenciales y edificaciones. Soluciones técnicas con garantía real y compromiso de calidad.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ url('/proyectos') }}" class="bg-primary text-white px-8 py-4 rounded font-label-bold text-lg hover:opacity-90 transition-all flex items-center gap-2">
                        Ver Nuestros Proyectos
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    @endif
</section>

<!-- Services Section (Dinámico) -->
<section class="py-24 blueprint-pattern">
    <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop">
        <div class="mb-16 flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div>
                <span class="font-label-bold text-primary uppercase tracking-widest text-sm font-semibold">Nuestras Capacidades</span>
                <h2 class="font-headline-lg text-3xl md:text-headline-lg text-slate-gray mt-2 font-bold">Servicios Especializados</h2>
            </div>
            <a href="{{ url('/servicios') }}" class="text-primary hover:underline font-label-bold flex items-center gap-2">
                Ver todos los servicios <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
            @if(isset($services) && $services->count() > 0)
                @foreach($services as $service)
                    <div class="bg-white border border-border-gray p-8 group hover:border-primary transition-all duration-300 rounded flex flex-col justify-between shadow-sm hover:shadow-md">
                        <div>
                            <div class="w-12 h-12 bg-surface-container flex items-center justify-center mb-6 group-hover:bg-primary transition-colors rounded">
                                <span class="material-symbols-outlined text-primary group-hover:text-white text-2xl">
                                    {{ $service->icon ?? 'settings' }}
                                </span>
                            </div>
                            <h3 class="font-headline-md text-xl font-bold text-slate-gray mb-4">{{ $service->name }}</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-6 line-clamp-3">
                                {{ $service->short_description }}
                            </p>
                        </div>
                        <a class="font-label-bold text-primary flex items-center gap-2 group-hover:translate-x-2 transition-all mt-auto" href="{{ url('/servicios#' . $service->slug) }}">
                            Ver Detalle <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </a>
                    </div>
                @endforeach
            @else
                <p class="col-span-4 text-center text-outline">No hay servicios registrados.</p>
            @endif
        </div>
    </div>
</section>

<!-- Company Info Section / Pilares (Dinámico) -->
<section class="py-24 bg-slate-gray text-off-white overflow-hidden relative">
    <div class="absolute right-0 top-0 w-1/3 h-full opacity-10 pointer-events-none">
        <span class="material-symbols-outlined text-[400px]" style="font-variation-settings: 'wght' 100;">handyman</span>
    </div>
    <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop grid grid-cols-1 lg:grid-cols-2 gap-gutter items-center">
        <div>
            <span class="font-label-bold text-secondary-container uppercase tracking-widest text-sm font-semibold">Quiénes Somos</span>
            <h2 class="font-display-lg text-3xl md:text-display-lg mb-8 font-bold mt-2">Compromiso con la Calidad y la Seguridad</h2>
            <p class="font-body-lg text-lg text-surface-variant mb-8 leading-relaxed">
                Nuestra misión es brindar servicios con altos estándares de calidad, utilizando materiales confiables y tecnología adecuada. Nos guían valores fundamentales como la Responsabilidad, Honestidad y Calidad.
            </p>
            
            <!-- Pilares Dinámicos -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="flex items-start gap-4">
                    <div class="bg-primary p-2 rounded">
                        <span class="material-symbols-outlined text-white">verified</span>
                    </div>
                    <div>
                        <h4 class="font-headline-md text-white text-lg font-bold">
                            {{ $setting->pilar_1_title ?? 'Garantía Real' }}
                        </h4>
                        <p class="font-body-sm text-body-sm text-surface-variant">
                            {{ $setting->pilar_1_desc ?? 'Respaldo total en cada ejecución técnica realizada.' }}
                        </p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="bg-primary p-2 rounded">
                        <span class="material-symbols-outlined text-white">groups</span>
                    </div>
                    <div>
                        <h4 class="font-headline-md text-white text-lg font-bold">
                            {{ $setting->pilar_2_title ?? 'Atención Personalizada' }}
                        </h4>
                        <p class="font-body-sm text-body-sm text-surface-variant">
                            {{ $setting->pilar_2_desc ?? 'Soluciones técnicas a la medida de sus necesidades.' }}
                        </p>
                    </div>
                </div>
                <div class="flex items-start gap-4 sm:col-span-2">
                    <div class="bg-primary p-2 rounded">
                        <span class="material-symbols-outlined text-white">sell</span>
                    </div>
                    <div>
                        <h4 class="font-headline-md text-white text-lg font-bold">
                            {{ $setting->pilar_3_title ?? 'Precios Competitivos' }}
                        </h4>
                        <p class="font-body-sm text-body-sm text-surface-variant">
                            {{ $setting->pilar_3_desc ?? 'Presupuestos justos sin comprometer los altos estándares de calidad.' }}
                        </p>
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
                    <span class="text-[10px] text-white/40 font-mono">NJ_CONSTRUCTEC</span>
                </div>
                <div class="space-y-6">
                    <div class="border-l-2 border-primary pl-4">
                        <p class="text-xs text-white/60 uppercase">Nuestra Misión</p>
                        <p class="text-sm italic">
                            "{{ $setting->about_mission ?? 'Brindar servicios con altos estándares de calidad, utilizando materiales confiables y tecnología adecuada.' }}"
                        </p>
                    </div>
                    <div class="border-l-2 border-primary pl-4">
                        <p class="text-xs text-white/60 uppercase">Nuestra Visión</p>
                        <p class="text-sm italic">
                            "{{ $setting->about_vision ?? 'Ser reconocidos a nivel nacional como empresa líder por nuestra trayectoria e innovación constante.' }}"
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects Section (Dinámico) -->
@if(isset($featuredProjects) && $featuredProjects->count() > 0)
    <section class="py-24 bg-white">
        <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop">
            <div class="mb-16 flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div>
                    <span class="font-label-bold text-primary uppercase tracking-widest text-sm font-semibold">Portafolio</span>
                    <h2 class="font-headline-lg text-3xl md:text-headline-lg text-slate-gray mt-2 font-bold">Proyectos Destacados</h2>
                </div>
                <a href="{{ url('/proyectos') }}" class="text-primary hover:underline font-label-bold flex items-center gap-2">
                    Ver galería de proyectos <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($featuredProjects as $project)
                    <div class="bg-off-white border border-border-gray rounded overflow-hidden group hover:shadow-md transition-all duration-300">
                        <div class="aspect-[4/3] overflow-hidden relative">
                            <img src="{{ asset('storage/' . $project->image_path) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-4 left-4 bg-primary text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                {{ $project->service_type }}
                            </span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-2 text-outline-variant text-xs mb-2">
                                <span class="material-symbols-outlined text-sm">location_on</span>
                                <span>{{ $project->location }}</span>
                            </div>
                            <h3 class="font-headline-md text-lg font-bold text-slate-gray mb-3">{{ $project->title }}</h3>
                            <p class="font-body-sm text-sm text-on-surface-variant line-clamp-2">{{ $project->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif

<!-- Brochure PDF Download Banner -->
<section class="py-16 bg-primary text-white">
    <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop flex flex-col md:flex-row items-center justify-between gap-8">
        <div class="max-w-2xl">
            <h3 class="font-display-lg text-2xl md:text-3xl font-bold mb-2">Descargue nuestro Brochure Corporativo</h3>
            <p class="text-off-white">Conozca en detalle nuestra capacidad técnica, equipamiento y el catálogo de proyectos desarrollados en ingeniería hidráulica y eléctrica.</p>
        </div>
        <a href="{{ $setting->brochure_path ? asset('storage/' . $setting->brochure_path) : asset('brochure-corporativo.pdf') }}" target="_blank" download class="bg-white text-primary px-8 py-4 rounded font-label-bold text-lg hover:bg-off-white transition-colors flex items-center gap-2 shadow-lg shrink-0">
            Descargar Brochure PDF
            <span class="material-symbols-outlined">download</span>
        </a>
    </div>
</section>

<!-- Contact form section -->
<section class="py-24 bg-off-white">
    <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-gutter">
            <div class="space-y-8">
                <div>
                    <span class="font-label-bold text-primary uppercase tracking-widest text-sm font-semibold">Contacto</span>
                    <h2 class="font-headline-lg text-3xl md:text-headline-lg text-slate-gray mt-2 font-bold">Inicie su Cotización</h2>
                    <p class="mt-4 text-on-surface-variant font-body-md">Solicite presupuesto sin compromiso. Atendemos emergencias de bombeo y sanitarias a nivel residencial e industrial.</p>
                </div>
                <div class="space-y-4">
                    <p><strong>Teléfono:</strong> {{ $setting->phone }}</p>
                    <p><strong>Email:</strong> {{ $setting->email }}</p>
                    <p><strong>Dirección:</strong> {{ $setting->address }}</p>
                </div>
                @if($setting->maps_iframe)
                    <div class="h-64 bg-white border border-border-gray rounded overflow-hidden">
                        {!! $setting->maps_iframe !!}
                    </div>
                @endif
            </div>
            
            <div class="bg-white border border-border-gray p-8 rounded-lg shadow-sm">
                <h3 class="font-headline-md text-xl font-bold text-slate-gray mb-6">Enviar Mensaje</h3>
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="hidden">
                        <input type="text" name="website_hp" value="" autocomplete="off" />
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <input class="w-full bg-off-white border border-border-gray rounded p-3 focus:ring-2 focus:ring-primary outline-none transition-all" 
                               name="full_name" placeholder="Nombre completo" type="text" required />
                        <input class="w-full bg-off-white border border-border-gray rounded p-3 focus:ring-2 focus:ring-primary outline-none transition-all" 
                               name="email" placeholder="Correo electrónico" type="email" required />
                    </div>
                    <input class="w-full bg-off-white border border-border-gray rounded p-3 focus:ring-2 focus:ring-primary outline-none transition-all" 
                           name="subject" placeholder="Asunto / Servicio de Interés" type="text" required />
                    <textarea class="w-full bg-off-white border border-border-gray rounded p-3 focus:ring-2 focus:ring-primary outline-none transition-all" 
                              name="message" placeholder="Detalle su requerimiento o consulta..." rows="4" required></textarea>
                    <button class="w-full bg-primary text-white py-4 font-label-bold rounded hover:opacity-90 transition-all active:scale-[0.98]" type="submit">
                        Enviar Mensaje
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Slider JavaScript -->
@if(isset($banners) && $banners->count() > 1)
<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.slider-dot');
    
    function showSlide(index) {
        slides.forEach(slide => {
            slide.classList.add('hidden');
            slide.classList.remove('block');
        });
        dots.forEach(dot => dot.classList.remove('bg-white', 'scale-125'));
        
        slides[index].classList.remove('hidden');
        slides[index].classList.add('block');
        dots[index].classList.add('bg-white', 'scale-125');
        currentSlide = index;
    }
    
    // Auto slide change every 6 seconds
    setInterval(() => {
        let nextIndex = (currentSlide + 1) % slides.length;
        showSlide(nextIndex);
    }, 6000);
</script>
@endif
@endsection
