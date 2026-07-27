@extends('layouts.app')

@section('title', 'Quiénes Somos | ' . $setting->name)

@section('content')
    <!-- Hero Section: Quiénes Somos -->
    <section class="relative min-h-[500px] md:min-h-[614px] flex items-center bg-slate-gray overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-40">
            <div class="w-full h-full bg-cover bg-center"
                style="background-image: url('{{ $setting->about_banner_path ? asset('storage/' . $setting->about_banner_path) : 'https://lh3.googleusercontent.com/aida-public/AB6AXuAzhJtCmjgsb2GKOmhjtf20OJkFTduccX1JVKOts0uAQe-4HUnRg-YLQF9geFbVlg5MPgFUUaxaPlbuMyl3yXX_tx_f79UmiXO4wgYNhub1ZJjp5sTUN5aChKdSoMyh_RmJqmfALegWPC7suH1q3GSTv2FjVrOJZ-ZQE71l_Ww4oSU50vNOpeU_vAvrjuMEeWV_s6LatGn68g-siZvaEafzZWjr9etNBcSZ-qO7YSUDDa5E6V1UbWgzRMwaqzHIsOiFLvcmIwVmCl7s' }}');"
                data-alt="Fotografía profesional de un sitio de construcción moderno al atardecer, destacando vigas de acero estructural, cimientos de concreto y equipos de ingeniería precisos.">
            </div>
        </div>
        <div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-20 w-full">
            <div class="max-w-2xl text-left">
                <span
                    class="inline-block px-3 py-1 bg-primary text-on-primary font-label-bold text-label-bold mb-6 rounded-sm">
                    {{ $setting->about_banner_badge ?? 'ESTABLECIDOS EN 2006' }}
                </span>
                <h1 class="font-display-lg text-display-lg text-off-white mb-6 leading-tight font-bold">
                    {{ $setting->about_banner_title ?? 'Expertos en instalaciones y mantenimiento para los sectores residencial, comercial e industrial.' }}
                </h1>
                <div class="flex flex-wrap gap-6">
                    <div class="flex items-center gap-2 text-off-white">
                        <span class="material-symbols-outlined text-primary">verified</span>
                        <span class="font-label-bold text-label-bold">Garantía Real</span>
                    </div>
                    <div class="flex items-center gap-2 text-off-white">
                        <span class="material-symbols-outlined text-primary">engineering</span>
                        <span class="font-label-bold text-label-bold">Técnicos Capacitados</span>
                    </div>
                    <div class="flex items-center gap-2 text-off-white">
                        <span class="material-symbols-outlined text-primary">timer</span>
                        <span class="font-label-bold text-label-bold">Puntualidad</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Overview -->
    <section class="py-24 bg-white">
        <div
            class="max-w-container-max mx-auto px-4 md:px-margin-desktop grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <h2 class="font-headline-lg text-2xl md:text-headline-lg font-bold text-slate-gray">Trayectoria que genera
                    Confianza</h2>
                <div class="font-body-md text-on-surface-variant leading-relaxed text-justify space-y-4">
                    @if ($setting->about_history)
                        {!! nl2br(e($setting->about_history)) !!}
                    @else
                        <p>
                            A lo largo de casi dos décadas, hemos desarrollado y ejecutado soluciones eficientes y
                            duraderas, ganándonos la confianza de nuestros clientes gracias a nuestro compromiso con la
                            calidad, la puntualidad y el buen trabajo. Nos destacamos por ofrecer una garantía real en cada
                            uno de nuestros trabajos y una atención personalizada.
                        </p>
                        <p>
                            Utilizamos materiales de primera calidad y cumplimos estrictamente con las normativas técnicas
                            vigentes para garantizar la máxima seguridad y durabilidad.
                        </p>
                    @endif
                </div>
                <div class="pt-4">
                    <a href="{{ url('/contacto') }}"
                        class="inline-block bg-primary text-white px-8 py-3 rounded font-label-bold hover:opacity-90 transition-opacity">
                        Trabaja con Nosotros
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="p-6 bg-off-white border border-border-gray rounded flex flex-col justify-between">
                    <span class="material-symbols-outlined text-primary text-4xl mb-4">history</span>
                    <div>
                        <h3 class="font-headline-md text-3xl font-bold text-slate-gray mb-1">{{ $setting->about_metric_1_value ?? '18+' }}</h3>
                        <p class="text-xs font-bold text-outline uppercase tracking-wider">{{ $setting->about_metric_1_label ?? 'Años de Trayectoria' }}</p>
                    </div>
                </div>
                <div class="p-6 bg-off-white border border-border-gray rounded flex flex-col justify-between">
                    <span class="material-symbols-outlined text-primary text-4xl mb-4">task_alt</span>
                    <div>
                        <h3 class="font-headline-md text-3xl font-bold text-slate-gray mb-1">{{ $setting->about_metric_2_value ?? '100%' }}</h3>
                        <p class="text-xs font-bold text-outline uppercase tracking-wider">{{ $setting->about_metric_2_label ?? 'Garantía Real' }}</p>
                    </div>
                </div>
                <div class="p-6 bg-off-white border border-border-gray rounded flex flex-col justify-between">
                    <span class="material-symbols-outlined text-primary text-4xl mb-4">engineering</span>
                    <div>
                        <h3 class="font-headline-md text-3xl font-bold text-slate-gray mb-1">{{ $setting->about_metric_3_value ?? '20+' }}</h3>
                        <p class="text-xs font-bold text-outline uppercase tracking-wider">{{ $setting->about_metric_3_label ?? 'Técnicos Capacitados' }}</p>
                    </div>
                </div>
                <div class="p-6 bg-off-white border border-border-gray rounded flex flex-col justify-between">
                    <span class="material-symbols-outlined text-primary text-4xl mb-4">thumb_up</span>
                    <div>
                        <h3 class="font-headline-md text-3xl font-bold text-slate-gray mb-1">{{ $setting->about_metric_4_value ?? '1k+' }}</h3>
                        <p class="text-xs font-bold text-outline uppercase tracking-wider">{{ $setting->about_metric_4_label ?? 'Clientes Satisfechos' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section id="mision-vision" class="py-24 bg-slate-gray text-off-white relative">
        <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="bg-white/5 border border-white/10 p-8 rounded-lg backdrop-blur-sm flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 bg-primary flex items-center justify-center mb-6 rounded">
                        <span class="material-symbols-outlined text-white text-3xl">tour</span>
                    </div>
                    <h2 class="font-headline-lg text-2xl font-bold mb-4 text-white">Misión</h2>
                    <p class="font-body-md text-surface-variant leading-relaxed text-justify">
                        {{ $setting->about_mission ?? 'Brindar servicios con altos estándares de calidad, utilizando materiales confiables, personal capacitado y tecnología adecuada. Nos comprometemos a ofrecer soluciones eficientes, seguras y puntuales, que satisfagan plenamente las necesidades de nuestros clientes.' }}
                    </p>
                </div>
            </div>

            <div class="bg-white/5 border border-white/10 p-8 rounded-lg backdrop-blur-sm flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 bg-primary flex items-center justify-center mb-6 rounded">
                        <span class="material-symbols-outlined text-white text-3xl">visibility</span>
                    </div>
                    <h2 class="font-headline-lg text-2xl font-bold mb-4 text-white">Visión</h2>
                    <p class="font-body-md text-surface-variant leading-relaxed text-justify">
                        {{ $setting->about_vision ?? 'Ser reconocidos a nivel nacional como una empresa líder destacando por nuestra trayectoria, responsabilidad, innovación constante y compromiso con la satisfacción del cliente.' }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section id="valores" class="py-24 bg-white">
        <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop">
            <div class="mb-16 text-center">
                <span class="font-label-bold text-primary uppercase tracking-widest text-sm font-semibold">Nuestra
                    Cultura</span>
                <h2 class="font-headline-lg text-3xl md:text-headline-lg text-slate-gray mt-2 font-bold">Valores
                    Fundamentales</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @if (isset($setting->about_values) && is_array($setting->about_values) && count($setting->about_values) > 0)
                    @foreach ($setting->about_values as $val)
                        <div
                            class="p-6 bg-off-white border border-border-gray rounded-lg hover:border-primary transition-all">
                            <span class="material-symbols-outlined text-primary text-3xl mb-4">
                                {{ $val['icon'] ?? 'star' }}
                            </span>
                            <h3 class="font-headline-md text-lg font-bold text-slate-gray mb-2">
                                {{ $val['title'] }}
                            </h3>
                            <p class="text-xs text-on-surface-variant">
                                {{ $val['description'] }}
                            </p>
                        </div>
                    @endforeach
                @else
                    <!-- Fallback 7 values -->
                    <div class="p-6 bg-off-white border border-border-gray rounded-lg hover:border-primary transition-all">
                        <span class="material-symbols-outlined text-primary text-3xl mb-4">assignment_turned_in</span>
                        <h3 class="font-headline-md text-lg font-bold text-slate-gray mb-2">Responsabilidad</h3>
                        <p class="text-xs text-on-surface-variant">Cumplimos rigurosamente con nuestros compromisos y plazos
                            pactados en cada obra.</p>
                    </div>
                    <div class="p-6 bg-off-white border border-border-gray rounded-lg hover:border-primary transition-all">
                        <span class="material-symbols-outlined text-primary text-3xl mb-4">gavel</span>
                        <h3 class="font-headline-md text-lg font-bold text-slate-gray mb-2">Honestidad</h3>
                        <p class="text-xs text-on-surface-variant">Presupuestos transparentes y relaciones de confianza
                            duraderas con el cliente.</p>
                    </div>
                    <div class="p-6 bg-off-white border border-border-gray rounded-lg hover:border-primary transition-all">
                        <span class="material-symbols-outlined text-primary text-3xl mb-4">workspace_premium</span>
                        <h3 class="font-headline-md text-lg font-bold text-slate-gray mb-2">Calidad</h3>
                        <p class="text-xs text-on-surface-variant">Utilizamos insumos garantizados y aplicamos altos
                            estándares en cada detalle.</p>
                    </div>
                    <div class="p-6 bg-off-white border border-border-gray rounded-lg hover:border-primary transition-all">
                        <span class="material-symbols-outlined text-primary text-3xl mb-4">handshake</span>
                        <h3 class="font-headline-md text-lg font-bold text-slate-gray mb-2">Compromiso</h3>
                        <p class="text-xs text-on-surface-variant">Nos involucramos al 100% para superar las expectativas de
                            nuestros socios.</p>
                    </div>
                    <div class="p-6 bg-off-white border border-border-gray rounded-lg hover:border-primary transition-all">
                        <span class="material-symbols-outlined text-primary text-3xl mb-4">health_and_safety</span>
                        <h3 class="font-headline-md text-lg font-bold text-slate-gray mb-2">Seguridad</h3>
                        <p class="text-xs text-on-surface-variant">Respetamos de forma estricta las normas de prevención de
                            riesgos (SST).</p>
                    </div>
                    <div class="p-6 bg-off-white border border-border-gray rounded-lg hover:border-primary transition-all">
                        <span class="material-symbols-outlined text-primary text-3xl mb-4">groups</span>
                        <h3 class="font-headline-md text-lg font-bold text-slate-gray mb-2">Trabajo en Equipo</h3>
                        <p class="text-xs text-on-surface-variant">Sinergia entre ingenieros, técnicos y operarios para el
                            éxito del proyecto.</p>
                    </div>
                    <div class="p-6 bg-off-white border border-border-gray rounded-lg hover:border-primary transition-all">
                        <span class="material-symbols-outlined text-primary text-3xl mb-4">lightbulb</span>
                        <h3 class="font-headline-md text-lg font-bold text-slate-gray mb-2">Innovación</h3>
                        <p class="text-xs text-on-surface-variant">Búsqueda continua de mejores tecnologías hidráulicas y de
                            construcción.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Nuestro Equipo Section -->
    @if($team->isNotEmpty())
    <section class="py-20 bg-off-white">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="mb-12">
                <h2 class="font-headline-lg text-3xl font-bold text-slate-gray mb-2">Nuestro Equipo</h2>
                <p class="font-body-md text-on-surface-variant">Liderazgo técnico y profesional con visión de futuro.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-gutter">
                @foreach($team as $member)
                    <div class="bg-white border border-gray overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 rounded">
                        <div class="w-full h-80 bg-cover bg-center"
                             style="background-image: url('{{ $member->photo_path ? asset('storage/' . $member->photo_path) : 'https://ui-avatars.com/api/?name=' . urlencode($member->name) . '&background=135f99&color=fff&size=512' }}');"
                             alt="{{ $member->name }}">
                        </div>
                        <div class="p-6">
                            <span class="text-primary font-label-bold text-xs uppercase tracking-wider font-semibold">{{ $member->role }}</span>
                            <h4 class="font-headline-md text-xl font-bold text-slate-gray mt-1">{{ $member->name }}</h4>
                            @if($member->description)
                                <p class="font-body-sm text-sm text-on-surface-variant mt-2 leading-relaxed">{{ $member->description }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Empresas Aliadas Section -->
    @if($partners->isNotEmpty())
    <section class="py-16 bg-surface border-t border-gray">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <h3 class="font-label-bold text-sm text-center text-on-surface-variant uppercase tracking-widest mb-10 font-semibold">
                Confían en nosotros & Empresas Aliadas
            </h3>
            <div class="flex flex-wrap justify-center items-center gap-12 opacity-80 hover:opacity-100 transition-opacity duration-300">
                @foreach($partners as $partner)
                    @if($partner->link_url)
                        <a href="{{ $partner->link_url }}" target="_blank" class="grayscale hover:grayscale-0 transition-all duration-500 flex items-center justify-center border border-dashed border-gray p-2 bg-white rounded min-w-[140px] min-h-[60px]">
                    @else
                        <div class="grayscale hover:grayscale-0 transition-all duration-500 flex items-center justify-center border border-dashed border-gray p-2 bg-white rounded min-w-[140px] min-h-[60px]">
                    @endif

                    @if($partner->logo_path)
                        <img src="{{ asset('storage/' . $partner->logo_path) }}" alt="{{ $partner->name }}" class="h-10 w-auto object-contain max-w-[120px]">
                    @else
                        <span class="font-bold text-sm text-slate-gray">{{ $partner->name }}</span>
                    @endif

                    @if($partner->link_url)
                        </a>
                    @else
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    @endif
@endsection
