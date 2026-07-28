@extends('layouts.app')

@section('title', 'Política de Privacidad y Tratamiento de Datos | ' . $setting->name)

@section('content')
<!-- Hero Header Section -->
<section class="py-16 blueprint-pattern border-b border-gray">
    <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop text-center md:text-left">
        <span class="font-label-bold text-primary uppercase tracking-widest text-sm font-semibold">Aspectos Legales</span>
        <h1 class="font-display-lg text-3xl md:text-display-lg font-bold text-slate-gray mt-2 mb-4">Política de Privacidad y Protección de Datos</h1>
        <p class="font-body-lg text-on-surface-variant max-w-3xl leading-relaxed">
            Conozca nuestro compromiso con la confidencialidad, el uso correcto y la protección de sus datos personales de acuerdo con la Ley N° 29733 de la República del Perú.
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 md:px-6">
        <div class="bg-off-white border border-border-gray p-8 md:p-12 rounded-lg shadow-sm space-y-8 text-justify">
            
            <div>
                <h2 class="font-headline-md text-2xl font-bold text-slate-gray mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">security</span>
                    1. Introducción y Marco Legal
                </h2>
                <p class="font-body-md text-on-surface-variant leading-relaxed">
                    En <strong>{{ $setting->name }}</strong> nos tomamos muy en serio la seguridad de su información. El presente documento detalla la manera en que recopilamos, almacenamos y procesamos los datos de los usuarios que interactúan en nuestro sitio web, especialmente a través del formulario de contacto y del Libro de Reclamaciones digital, de absoluta conformidad con la <strong>Ley N° 29733 (Ley de Protección de Datos Personales de Perú)</strong> y su Reglamento aprobado por Decreto Supremo N° 003-2013-JUS.
                </p>
            </div>

            <hr class="border-border-gray" />

            <div>
                <h2 class="font-headline-md text-2xl font-bold text-slate-gray mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">inventory_2</span>
                    2. ¿Qué datos personales recopilamos?
                </h2>
                <p class="font-body-md text-on-surface-variant leading-relaxed mb-3">
                    A través de nuestro portal web, recabamos los siguientes datos necesarios para procesar sus requerimientos comerciales y quejas/reclamos de protección al consumidor:
                </p>
                <ul class="list-disc pl-6 space-y-2 font-body-md text-on-surface-variant leading-relaxed">
                    <li><strong>Datos de Identificación:</strong> Nombres y Apellidos, tipo y número de documento de identidad (DNI, CE, RUC o Pasaporte).</li>
                    <li><strong>Datos de Contacto:</strong> Correo electrónico personal o corporativo, número de teléfono o celular, y dirección de domicilio (incluyendo distrito, provincia y departamento).</li>
                    <li><strong>Información del Servicio o Producto:</strong> Detalles del servicio contratado, monto reclamado e incidente reportado.</li>
                </ul>
            </div>

            <hr class="border-border-gray" />

            <div>
                <h2 class="font-headline-md text-2xl font-bold text-slate-gray mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">settings_suggest</span>
                    3. Finalidad del Tratamiento de Datos
                </h2>
                <p class="font-body-md text-on-surface-variant leading-relaxed mb-3">
                    Sus datos personales son tratados con las siguientes finalidades específicas y necesarias:
                </p>
                <ul class="list-decimal pl-6 space-y-2 font-body-md text-on-surface-variant leading-relaxed">
                    <li><strong>Atención de Requerimientos:</strong> Responder consultas, enviar cotizaciones técnicas de instalaciones sanitarias, eléctricas, equipos de bombeo y visitas a domicilio.</li>
                    <li><strong>Gestión de Reclamos y Quejas:</strong> Tramitar las reclamaciones ingresadas a través del Libro de Reclamaciones Digital conforme a los plazos exigidos por INDECOPI y la normativa de protección al consumidor peruana.</li>
                    <li><strong>Contacto Oficial:</strong> Establecer comunicación directa mediante correo electrónico, llamadas telefónicas o mensajes de WhatsApp oficiales para coordinaciones técnicas y de servicio.</li>
                </ul>
            </div>

            <hr class="border-border-gray" />

            <div>
                <h2 class="font-headline-md text-2xl font-bold text-slate-gray mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">lock</span>
                    4. Medidas de Seguridad y Confidencialidad
                </h2>
                <p class="font-body-md text-on-surface-variant leading-relaxed">
                    <strong>{{ $setting->name }}</strong> implementa medidas de seguridad técnicas, organizativas y legales para proteger sus datos personales contra accesos no autorizados, pérdidas, alteraciones o divulgaciones indebidas. Nos comprometemos a mantener el secreto profesional y estricta confidencialidad respecto a los mismos, no compartiéndolos con terceros sin su consentimiento expreso previo, salvo excepciones dispuestas por ley.
                </p>
            </div>

            <hr class="border-border-gray" />

            <div>
                <h2 class="font-headline-md text-2xl font-bold text-slate-gray mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">manage_accounts</span>
                    5. Derechos ARCO
                </h2>
                <p class="font-body-md text-on-surface-variant leading-relaxed">
                    Como titular de los datos personales, usted tiene derecho a acceder a su información en nuestros registros, rectificarla si es inexacta o incompleta, cancelarla cuando considere que no es necesaria para las finalidades indicadas, u oponerse al tratamiento de la misma (Derechos ARCO). Para ejercer estos derechos, puede remitir una solicitud escrita dirigida a nuestro correo corporativo: <strong>{{ $setting->email }}</strong> adjuntando una copia legible de su documento de identidad.
                </p>
            </div>

            <hr class="border-border-gray" />

            <div class="bg-surface-container-low p-6 rounded-lg border border-primary-container">
                <h3 class="font-bold text-slate-gray text-body-md mb-2 flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-primary text-lg">info</span>
                    Consentimiento Expreso
                </h3>
                <p class="text-xs text-on-surface-variant leading-relaxed">
                    Al interactuar en el sitio web de {{ $setting->name }} y marcar la casilla de aceptación en nuestros formularios, usted otorga su consentimiento previo, expreso, informado e inequívoco para que realicemos el tratamiento de sus datos personales de acuerdo con las condiciones y finalidades establecidas en esta Política de Privacidad.
                </p>
            </div>

        </div>
    </div>
</section>
@endsection
