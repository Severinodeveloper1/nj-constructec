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
        @if(isset($services) && $services->count() > 0)
            @foreach($services as $index => $service)
                <div id="{{ $service->slug }}" class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start scroll-mt-24">
                    <!-- Left/Right layout based on index -->
                    <div class="lg:col-span-6 space-y-6 {{ $index % 2 !== 0 ? 'lg:order-last' : '' }}">
                        <div class="w-16 h-16 bg-surface-container flex items-center justify-center rounded">
                            <span class="material-symbols-outlined text-primary text-4xl">
                                {{ $service->icon ?? 'settings' }}
                            </span>
                        </div>
                        <h2 class="font-headline-lg text-3xl font-bold text-slate-gray">{{ $service->name }}</h2>
                        
                        <div class="font-body-md text-on-surface-variant leading-relaxed text-justify space-y-4">
                            {!! $service->description !!}
                        </div>

                        <!-- Technical Specs and Norms (Valor Agregado) -->
                        @if($service->technical_specs)
                            <div class="border-t border-border-gray pt-6 mt-6">
                                <h4 class="font-label-bold text-slate-gray uppercase tracking-wider mb-4 text-xs font-bold flex items-center gap-2">
                                    <span class="material-symbols-outlined text-sm text-primary">verified</span>
                                    Valor Agregado y Normas Técnicas
                                </h4>
                                <div class="prose prose-sm max-w-none text-on-surface-variant leading-relaxed text-justify">
                                    {!! $service->technical_specs !!}
                                </div>
                            </div>
                        @endif

                        <div class="border-t border-border-gray pt-6 mt-6">
                            <a href="{{ url('/contacto?subject=Consulta sobre ' . urlencode($service->name)) }}" class="inline-flex items-center gap-2 font-label-bold text-primary hover:opacity-80 transition-opacity">
                                Solicitar cotización de {{ strtolower($service->name) }} <span class="material-symbols-outlined">arrow_forward</span>
                            </a>
                        </div>
                    </div>

                    <!-- Right/Left layout (Media & Attachments) -->
                    <div class="lg:col-span-6 bg-off-white border border-border-gray p-8 rounded-lg space-y-6">
                        <!-- Short summary -->
                        @if($service->short_description)
                            <div>
                                <h3 class="font-label-bold text-slate-gray uppercase tracking-wider mb-2 text-xs font-bold">Enfoque Técnico</h3>
                                <p class="text-sm text-on-surface-variant leading-relaxed">{{ $service->short_description }}</p>
                            </div>
                        @endif

                        <!-- Attachments (Buttons/HTML) -->
                        @if($service->attachments && is_array($service->attachments) && count($service->attachments) > 0)
                            <div class="border-t border-border-gray/50 pt-4">
                                <h4 class="font-label-bold text-slate-gray uppercase tracking-wider mb-3 text-xs font-bold">Documentación y Descargas</h4>
                                <div class="flex flex-col gap-2">
                                    @foreach($service->attachments as $attach)
                                        <a href="{{ asset('storage/' . $attach['file_path']) }}" target="_blank" download class="flex items-center justify-between bg-white border border-border-gray hover:border-primary px-4 py-3 rounded text-slate-gray hover:text-primary transition-all shadow-sm">
                                            <span class="font-medium text-sm">{{ $attach['name'] }}</span>
                                            <span class="material-symbols-outlined text-lg">download</span>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Gallery -->
                        @if($service->gallery && is_array($service->gallery) && count($service->gallery) > 0)
                            <div class="border-t border-border-gray/50 pt-4">
                                <h4 class="font-label-bold text-slate-gray uppercase tracking-wider mb-3 text-xs font-bold">Fotografías del Servicio</h4>
                                <div class="grid grid-cols-2 gap-3">
                                    @foreach($service->gallery as $img)
                                        <button type="button" onclick="openImageModal('{{ asset('storage/' . $img) }}')" class="aspect-[4/3] rounded overflow-hidden border border-border-gray block relative group w-full text-left">
                                            <img src="{{ asset('storage/' . $img) }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                                <span class="material-symbols-outlined text-white text-xl">zoom_in</span>
                                            </div>
                                        </button>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-center text-outline">No hay servicios registrados.</p>
        @endif
    </div>
</section>

<!-- Modal for viewing gallery images -->
<div id="imageModal" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/85 backdrop-blur-sm p-4 transition-opacity duration-300 opacity-0" onclick="closeImageModal()">
    <div class="relative max-w-4xl max-h-[85vh] w-full flex items-center justify-center" onclick="event.stopPropagation()">
        <!-- Close Button -->
        <button type="button" class="absolute -top-12 right-0 md:-right-12 text-white hover:text-primary transition-colors flex items-center justify-center p-2" onclick="closeImageModal()">
            <span class="material-symbols-outlined text-3xl">close</span>
        </button>
        <!-- Image element -->
        <img id="modalImage" src="" alt="Vista ampliada" class="max-w-full max-h-[80vh] object-contain rounded border border-white/10 shadow-2xl">
    </div>
</div>

<script>
    function openImageModal(src) {
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');
        if (!modal || !modalImg) return;
        
        modalImg.src = src;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        
        // Trigger reflow for transition
        setTimeout(() => {
            modal.classList.remove('opacity-0');
        }, 10);

        // Prevent body scroll
        document.body.classList.add('overflow-hidden');
    }

    function closeImageModal() {
        const modal = document.getElementById('imageModal');
        if (!modal) return;
        
        modal.classList.add('opacity-0');
        
        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.getElementById('modalImage').src = '';
        }, 300);

        // Restore body scroll
        document.body.classList.remove('overflow-hidden');
    }

    // Close on Escape key press
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeImageModal();
        }
    });
</script>
@endsection
