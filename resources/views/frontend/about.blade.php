@extends('layouts.app')

@section('title', 'Quiénes Somos | ' . $setting->name)

@section('content')
<!-- Hero Section -->
<section class="py-20 blueprint-pattern border-b border-gray">
    <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop text-center md:text-left">
        <span class="font-label-bold text-primary uppercase tracking-widest text-sm font-semibold">Nuestra Historia</span>
        <h1 class="font-display-lg text-4xl md:text-display-lg font-bold text-slate-gray mt-2 mb-6">Quiénes Somos</h1>
        <p class="font-body-lg text-lg text-on-surface-variant max-w-3xl leading-relaxed">
            En <strong>{{ $setting->name }}</strong> somos una empresa peruana con más de 18 años de experiencia brindando soluciones especializadas en ingeniería y construcción en edificaciones residenciales.
        </p>
    </div>
</section>

<!-- Company Overview -->
<section class="py-24 bg-white">
    <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div class="space-y-6">
            <h2 class="font-headline-lg text-2xl md:text-headline-lg font-bold text-slate-gray">Trayectoria que genera Confianza</h2>
            <p class="font-body-md text-on-surface-variant leading-relaxed text-justify">
                A lo largo de casi dos décadas, hemos desarrollado y ejecutado soluciones eficientes y duraderas, ganándonos la confianza de nuestros clientes gracias a nuestro compromiso con la calidad, la puntualidad y el buen trabajo. Nos destacamos por ofrecer una garantía real en cada uno de nuestros trabajos y una atención personalizada.
            </p>
            <p class="font-body-md text-on-surface-variant leading-relaxed text-justify">
                Utilizamos materiales de primera calidad y cumplimos estrictamente con las normativas técnicas vigentes para garantizar la máxima seguridad y durabilidad.
            </p>
            <div class="pt-4">
                <a href="{{ url('/contacto') }}" class="inline-block bg-primary text-white px-8 py-3 rounded font-label-bold hover:opacity-90 transition-opacity">
                    Trabaja con Nosotros
                </a>
            </div>
        </div>
        
        <div class="grid grid-cols-2 gap-4">
            <div class="p-6 bg-off-white border border-border-gray rounded flex flex-col justify-between">
                <span class="material-symbols-outlined text-primary text-4xl mb-4">history</span>
                <div>
                    <h3 class="font-headline-md text-3xl font-bold text-slate-gray mb-1">18+</h3>
                    <p class="text-xs font-bold text-outline uppercase tracking-wider">Años de Trayectoria</p>
                </div>
            </div>
            <div class="p-6 bg-off-white border border-border-gray rounded flex flex-col justify-between">
                <span class="material-symbols-outlined text-primary text-4xl mb-4">task_alt</span>
                <div>
                    <h3 class="font-headline-md text-3xl font-bold text-slate-gray mb-1">100%</h3>
                    <p class="text-xs font-bold text-outline uppercase tracking-wider">Garantía Real</p>
                </div>
            </div>
            <div class="p-6 bg-off-white border border-border-gray rounded flex flex-col justify-between">
                <span class="material-symbols-outlined text-primary text-4xl mb-4">engineering</span>
                <div>
                    <h3 class="font-headline-md text-3xl font-bold text-slate-gray mb-1">20+</h3>
                    <p class="text-xs font-bold text-outline uppercase tracking-wider">Técnicos Capacitados</p>
                </div>
            </div>
            <div class="p-6 bg-off-white border border-border-gray rounded flex flex-col justify-between">
                <span class="material-symbols-outlined text-primary text-4xl mb-4">thumb_up</span>
                <div>
                    <h3 class="font-headline-md text-3xl font-bold text-slate-gray mb-1">1k+</h3>
                    <p class="text-xs font-bold text-outline uppercase tracking-wider">Clientes Satisfechos</p>
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
                    Brindar servicios con altos estándares de calidad, utilizando materiales confiables, personal capacitado y tecnología adecuada. Nos comprometemos a ofrecer soluciones eficientes, seguras y puntuales, que satisfagan plenamente las necesidades de nuestros clientes, manteniendo precios justos y competitivos en el mercado.
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
                    Ser reconocidos a nivel nacional como una empresa líder destacando por nuestra trayectoria, responsabilidad, innovación constante y compromiso con la satisfacción del cliente. Aspiramos a seguir creciendo de manera sostenible, consolidando nuestra reputación como símbolo de confianza, calidad y eficiencia en el sector de la construcción.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section id="valores" class="py-24 bg-white">
    <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop">
        <div class="mb-16 text-center">
            <span class="font-label-bold text-primary uppercase tracking-widest text-sm font-semibold">Nuestra Cultura</span>
            <h2 class="font-headline-lg text-3xl md:text-headline-lg text-slate-gray mt-2 font-bold">Valores Fundamentales</h2>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Responsabilidad -->
            <div class="p-6 bg-off-white border border-border-gray rounded-lg hover:border-primary transition-all">
                <span class="material-symbols-outlined text-primary text-3xl mb-4">assignment_turned_in</span>
                <h3 class="font-headline-md text-lg font-bold text-slate-gray mb-2">Responsabilidad</h3>
                <p class="text-xs text-on-surface-variant">Cumplimos rigurosamente con nuestros compromisos y plazos pactados en cada obra.</p>
            </div>
            <!-- Honestidad -->
            <div class="p-6 bg-off-white border border-border-gray rounded-lg hover:border-primary transition-all">
                <span class="material-symbols-outlined text-primary text-3xl mb-4">gavel</span>
                <h3 class="font-headline-md text-lg font-bold text-slate-gray mb-2">Honestidad</h3>
                <p class="text-xs text-on-surface-variant">Presupuestos transparentes y relaciones de confianza duraderas con el cliente.</p>
            </div>
            <!-- Calidad -->
            <div class="p-6 bg-off-white border border-border-gray rounded-lg hover:border-primary transition-all">
                <span class="material-symbols-outlined text-primary text-3xl mb-4">workspace_premium</span>
                <h3 class="font-headline-md text-lg font-bold text-slate-gray mb-2">Calidad</h3>
                <p class="text-xs text-on-surface-variant">Utilizamos insumos garantizados y aplicamos altos estándares en cada detalle.</p>
            </div>
            <!-- Compromiso -->
            <div class="p-6 bg-off-white border border-border-gray rounded-lg hover:border-primary transition-all">
                <span class="material-symbols-outlined text-primary text-3xl mb-4">handshake</span>
                <h3 class="font-headline-md text-lg font-bold text-slate-gray mb-2">Compromiso</h3>
                <p class="text-xs text-on-surface-variant">Nos involucramos al 100% para superar las expectativas de nuestros socios.</p>
            </div>
            <!-- Seguridad -->
            <div class="p-6 bg-off-white border border-border-gray rounded-lg hover:border-primary transition-all">
                <span class="material-symbols-outlined text-primary text-3xl mb-4">health_and_safety</span>
                <h3 class="font-headline-md text-lg font-bold text-slate-gray mb-2">Seguridad</h3>
                <p class="text-xs text-on-surface-variant">Respetamos de forma estricta las normas de prevención de riesgos (SST).</p>
            </div>
            <!-- Trabajo en equipo -->
            <div class="p-6 bg-off-white border border-border-gray rounded-lg hover:border-primary transition-all">
                <span class="material-symbols-outlined text-primary text-3xl mb-4">groups</span>
                <h3 class="font-headline-md text-lg font-bold text-slate-gray mb-2">Trabajo en Equipo</h3>
                <p class="text-xs text-on-surface-variant">Sinergia entre ingenieros, técnicos y operarios para el éxito del proyecto.</p>
            </div>
            <!-- Innovación -->
            <div class="p-6 bg-off-white border border-border-gray rounded-lg hover:border-primary transition-all">
                <span class="material-symbols-outlined text-primary text-3xl mb-4">lightbulb</span>
                <h3 class="font-headline-md text-lg font-bold text-slate-gray mb-2">Innovación</h3>
                <p class="text-xs text-on-surface-variant">Búsqueda continua de mejores tecnologías hidráulicas y de construcción.</p>
            </div>
        </div>
    </div>
</section>
@endsection
