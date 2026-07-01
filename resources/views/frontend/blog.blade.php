@extends('layouts.app')

@section('title', 'Blog y Noticias | ' . $setting->name)

@section('content')
<!-- Hero Section -->
<section class="py-20 blueprint-pattern border-b border-gray">
    <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop text-center md:text-left">
        <span class="font-label-bold text-primary uppercase tracking-widest text-sm font-semibold">Artículos y Consejos</span>
        <h1 class="font-display-lg text-4xl md:text-display-lg font-bold text-slate-gray mt-2 mb-6">Blog de Ingeniería y Saneamiento</h1>
        <p class="font-body-lg text-lg text-on-surface-variant max-w-3xl leading-relaxed">
            Consejos prácticos, normativas vigentes y mejores prácticas para el mantenimiento preventivo y de ingeniería en su edificación.
        </p>
    </div>
</section>

<!-- Blog Grid -->
<section class="py-24 bg-white">
    <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop space-y-16">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Article 1 -->
            <article class="bg-off-white border border-border-gray p-8 rounded-lg hover:border-primary transition-colors flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <span class="text-[10px] font-mono text-primary font-bold uppercase tracking-wider">Mantenimiento Preventivo</span>
                    <h2 class="font-headline-md text-xl font-bold text-slate-gray">Cómo evitar aniegos en sótanos mediante el correcto mantenimiento de bombas</h2>
                    <p class="font-body-sm text-on-surface-variant text-justify leading-relaxed">
                        El mantenimiento de bombas sumergibles y sensores de nivel electrónicos es crucial para evitar inundaciones catastróficas. Aquí le mostramos cómo programar sus chequeos preventivos.
                    </p>
                </div>
                <div class="border-t border-border-gray pt-4 flex justify-between items-center text-xs text-outline">
                    <span>Por: Ing. David Jara</span>
                    <span>15 Jun 2026</span>
                </div>
            </article>

            <!-- Article 2 -->
            <article class="bg-off-white border border-border-gray p-8 rounded-lg hover:border-primary transition-colors flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <span class="text-[10px] font-mono text-primary font-bold uppercase tracking-wider">Normas Técnicas</span>
                    <h2 class="font-headline-md text-xl font-bold text-slate-gray">Importancia de las bridas rompeagua en el vaciado de cisternas de concreto</h2>
                    <p class="font-body-sm text-on-surface-variant text-justify leading-relaxed">
                        Las filtraciones de agua comprometen la cimentación de un edificio. Conozca cómo el correcto alineamiento de las bridas rompeagua previene el paso de humedad por las juntas estructurales.
                    </p>
                </div>
                <div class="border-t border-border-gray pt-4 flex justify-between items-center text-xs text-outline">
                    <span>Por: Ing. Walter Silva</span>
                    <span>02 Jun 2026</span>
                </div>
            </article>

            <!-- Article 3 -->
            <article class="bg-off-white border border-border-gray p-8 rounded-lg hover:border-primary transition-colors flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <span class="text-[10px] font-mono text-primary font-bold uppercase tracking-wider">Seguridad Eléctrica</span>
                    <h2 class="font-headline-md text-xl font-bold text-slate-gray">Pozos a tierra y llaves diferenciales: Elementos clave para la seguridad en el hogar</h2>
                    <p class="font-body-sm text-on-surface-variant text-justify leading-relaxed">
                        Las descargas eléctricas accidentales ocurren por fallas de aislamiento en los artefactos. Le explicamos la importancia del pozo a tierra y el mantenimiento periódico de sus tableros eléctricos.
                    </p>
                </div>
                <div class="border-t border-border-gray pt-4 flex justify-between items-center text-xs text-outline">
                    <span>Por: Técnico Electricista Carlos R.</span>
                    <span>22 May 2026</span>
                </div>
            </article>
        </div>

    </div>
</section>
@endsection
