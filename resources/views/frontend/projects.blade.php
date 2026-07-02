@extends('layouts.app')

@section('title', 'Proyectos Ejecutados | ' . $setting->name)

@section('content')
<!-- Hero Section -->
<section class="py-20 blueprint-pattern border-b border-gray">
    <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop text-center md:text-left">
        <span class="font-label-bold text-primary uppercase tracking-widest text-sm font-semibold">Portafolio de Obras</span>
        <h1 class="font-display-lg text-4xl md:text-display-lg font-bold text-slate-gray mt-2 mb-6">Proyectos Ejecutados</h1>
        <p class="font-body-lg text-lg text-on-surface-variant max-w-3xl leading-relaxed">
            Explora algunos de nuestros proyectos más destacados en instalaciones sanitarias, eléctricas e hidráulicas a nivel residencial y comercial en Perú.
        </p>
    </div>
</section>

<!-- Projects Gallery -->
<section class="py-24 bg-white">
    <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop space-y-12">
        
        <!-- Filters (Dynamic from categories in projects) -->
        @if(isset($projects) && $projects->count() > 0)
            <div class="flex flex-wrap gap-4 border-b border-border-gray pb-6">
                <button class="px-5 py-2 bg-primary text-white font-label-bold text-xs rounded transition-all filter-btn" onclick="filterProjects('all')">Todos</button>
                @foreach($projects->pluck('service_type')->unique() as $type)
                    @if(filled($type))
                        <button class="px-5 py-2 bg-off-white border border-border-gray hover:border-primary text-slate-gray font-label-bold text-xs rounded transition-all filter-btn" onclick="filterProjects('{{ $type }}')">
                            {{ $type }}
                        </button>
                    @endif
                @endforeach
            </div>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projects-grid">
                @foreach($projects as $project)
                    <div class="border border-border-gray rounded overflow-hidden hover:border-primary transition-all duration-300 group project-card" data-type="{{ $project->service_type }}">
                        <div class="h-64 bg-slate-200 relative overflow-hidden">
                            @if($project->image_path)
                                <img src="{{ asset('storage/' . $project->image_path) }}" 
                                     alt="{{ $project->title }}" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                            @else
                                <div class="w-full h-full bg-slate-300 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-4xl text-white">image</span>
                                </div>
                            @endif
                            <span class="absolute top-4 left-4 bg-primary text-white text-[10px] uppercase font-bold px-3 py-1 rounded">
                                {{ $project->service_type }}
                            </span>
                        </div>
                        <div class="p-6 space-y-4">
                            <h3 class="font-display text-lg font-bold text-slate-gray group-hover:text-primary transition-colors line-clamp-1">
                                {{ $project->title }}
                            </h3>
                            <p class="text-xs text-on-surface-variant leading-relaxed line-clamp-3">
                                {{ $project->description }}
                            </p>
                            
                            @if($project->gallery && is_array($project->gallery) && count($project->gallery) > 0)
                                <div class="grid grid-cols-4 gap-1.5 pt-2">
                                    @foreach($project->gallery as $galleryImg)
                                        <a href="{{ asset('storage/' . $galleryImg) }}" target="_blank" class="aspect-square rounded overflow-hidden border border-border-gray/50 block">
                                            <img src="{{ asset('storage/' . $galleryImg) }}" class="w-full h-full object-cover">
                                        </a>
                                    @endforeach
                                </div>
                            @endif

                            <div class="border-t border-border-gray pt-4 flex justify-between text-[11px] text-outline font-mono">
                                <span>Lugar: {{ $project->location ?? 'Perú' }}</span>
                                <span>{{ $project->created_at->format('Y') }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-outline">No hay proyectos registrados en el portafolio.</p>
        @endif
    </div>
</section>

<!-- Client side filtering script -->
<script>
    function filterProjects(type) {
        const cards = document.querySelectorAll('.project-card');
        const buttons = document.querySelectorAll('.filter-btn');
        
        buttons.forEach(btn => {
            btn.classList.remove('bg-primary', 'text-white');
            btn.classList.add('bg-off-white', 'text-slate-gray', 'border');
        });
        
        event.currentTarget.classList.add('bg-primary', 'text-white');
        event.currentTarget.classList.remove('bg-off-white', 'text-slate-gray', 'border');

        cards.forEach(card => {
            if (type === 'all' || card.getAttribute('data-type') === type) {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });
    }
</script>
@endsection
