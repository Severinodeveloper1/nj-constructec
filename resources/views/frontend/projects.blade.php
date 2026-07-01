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
        
        <!-- Filters -->
        <div class="flex flex-wrap gap-4 border-b border-border-gray pb-6">
            <button class="px-5 py-2 bg-primary text-white font-label-bold text-xs rounded transition-all">Todos</button>
            <button class="px-5 py-2 bg-off-white border border-border-gray hover:border-primary text-slate-gray font-label-bold text-xs rounded transition-all">Instalaciones Sanitarias</button>
            <button class="px-5 py-2 bg-off-white border border-border-gray hover:border-primary text-slate-gray font-label-bold text-xs rounded transition-all">Instalaciones Eléctricas</button>
            <button class="px-5 py-2 bg-off-white border border-border-gray hover:border-primary text-slate-gray font-label-bold text-xs rounded transition-all">Sistemas de Abastecimiento</button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="border border-border-gray rounded overflow-hidden hover:border-primary transition-all duration-300 group">
                <div class="h-64 bg-slate-200 relative overflow-hidden">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuD3R1hPMT2YcnJ7ICiWCfdhu4mVzfmCcsb0wcqcCknR-EHLsXackNM1FvgxC1GisIVtiNFgCzsnIPL3pvg3-SYY5gRCm5cyWWqypmXc-NyeXzCFMGvgtcOY2e0gazDWeCEL_n0Y34b8LKEMScw6ckwB74jXZ0D4PEwmHIRWisrgNcUoNPwulEDivbMDQ6t903vY1CgPwtIy9uMO-h-UM-8FIWbQlvCJkwMxTEEFrfnyvuK4j_TqT41G4OhI3gddl4sN1RVCS9ti8cd8" 
                         alt="Instalación Hidráulica Condominio El Polo" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <span class="absolute top-4 left-4 bg-primary text-white text-[10px] uppercase font-bold px-3 py-1 rounded">Instalación Hidráulica</span>
                </div>
                <div class="p-6 space-y-4">
                    <h3 class="font-headline-md text-lg font-bold text-slate-gray group-hover:text-primary transition-colors">Sistema de Presión Constante - Condominio El Polo</h3>
                    <p class="text-xs text-on-surface-variant leading-relaxed">
                        Instalación completa de un sistema de bombeo de presión constante con variadores de velocidad para abastecer a 48 departamentos.
                    </p>
                    <div class="border-t border-border-gray pt-4 flex justify-between text-[11px] text-outline font-mono">
                        <span>Lugar: Surco, Lima</span>
                        <span>Año: 2024</span>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="border border-border-gray rounded overflow-hidden hover:border-primary transition-all duration-300 group">
                <div class="h-64 bg-slate-200 relative overflow-hidden">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuD3R1hPMT2YcnJ7ICiWCfdhu4mVzfmCcsb0wcqcCknR-EHLsXackNM1FvgxC1GisIVtiNFgCzsnIPL3pvg3-SYY5gRCm5cyWWqypmXc-NyeXzCFMGvgtcOY2e0gazDWeCEL_n0Y34b8LKEMScw6ckwB74jXZ0D4PEwmHIRWisrgNcUoNPwulEDivbMDQ6t903vY1CgPwtIy9uMO-h-UM-8FIWbQlvCJkwMxTEEFrfnyvuK4j_TqT41G4OhI3gddl4sN1RVCS9ti8cd8" 
                         alt="Instalaciones Sanitarias Residencial Las Gardenias" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <span class="absolute top-4 left-4 bg-primary text-white text-[10px] uppercase font-bold px-3 py-1 rounded">Sanitaria</span>
                </div>
                <div class="p-6 space-y-4">
                    <h3 class="font-headline-md text-lg font-bold text-slate-gray group-hover:text-primary transition-colors">Instalaciones Sanitarias de Agua y Desagüe - Residencial Las Gardenias</h3>
                    <p class="text-xs text-on-surface-variant leading-relaxed">
                        Tendido completo de tuberías de PPR y cajas de registro para 12 residencias premium de tres niveles en Miraflores.
                    </p>
                    <div class="border-t border-border-gray pt-4 flex justify-between text-[11px] text-outline font-mono">
                        <span>Lugar: Miraflores, Lima</span>
                        <span>Año: 2023</span>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="border border-border-gray rounded overflow-hidden hover:border-primary transition-all duration-300 group">
                <div class="h-64 bg-slate-200 relative overflow-hidden">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuD3R1hPMT2YcnJ7ICiWCfdhu4mVzfmCcsb0wcqcCknR-EHLsXackNM1FvgxC1GisIVtiNFgCzsnIPL3pvg3-SYY5gRCm5cyWWqypmXc-NyeXzCFMGvgtcOY2e0gazDWeCEL_n0Y34b8LKEMScw6ckwB74jXZ0D4PEwmHIRWisrgNcUoNPwulEDivbMDQ6t903vY1CgPwtIy9uMO-h-UM-8FIWbQlvCJkwMxTEEFrfnyvuK4j_TqT41G4OhI3gddl4sN1RVCS9ti8cd8" 
                         alt="Instalaciones Eléctricas de Oficinas San Isidro" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <span class="absolute top-4 left-4 bg-primary text-white text-[10px] uppercase font-bold px-3 py-1 rounded">Eléctrica</span>
                </div>
                <div class="p-6 space-y-4">
                    <h3 class="font-headline-md text-lg font-bold text-slate-gray group-hover:text-primary transition-colors">Sistema Eléctrico y Tableros Generales - Edificio Corporativo</h3>
                    <p class="text-xs text-on-surface-variant leading-relaxed">
                        Cableado integral estructurado, tableros eléctricos automatizados y pozo a tierra para oficinas comerciales en San Isidro.
                    </p>
                    <div class="border-t border-border-gray pt-4 flex justify-between text-[11px] text-outline font-mono">
                        <span>Lugar: San Isidro, Lima</span>
                        <span>Año: 2023</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
