@extends('layouts.app')

@section('title', 'Libro de Reclamaciones | ' . $setting->name)

@section('content')
<style>
    .form-section-title {
        border-left: 4px solid #135f99;
        padding-left: 12px;
        margin-bottom: 24px;
    }
</style>

<main class="py-12 px-4 md:px-margin-desktop max-w-4xl mx-auto">
    <!-- Header Section -->
    <header class="mb-12 text-center md:text-left">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 border-b border-border-gray pb-8">
            <div>
                <h1 class="font-headline-lg text-3xl md:text-headline-lg text-slate-gray mb-2 font-bold">Libro de Reclamaciones</h1>
                <p class="text-on-surface-variant font-body-md">Conforme a lo establecido en el Código de Protección y Defensa del Consumidor del Perú.</p>
            </div>
            <div class="bg-off-white border border-border-gray p-4 rounded-lg inline-block text-right">
                <p class="text-xs font-label-bold font-semibold text-outline uppercase">Hoja de Reclamación</p>
                <p class="text-xl md:text-headline-md font-headline-md text-primary font-bold">{{ $claimNumber }}</p>
            </div>
        </div>
    </header>

    @if(session('success_claim'))
        <div class="bg-green-50 border border-green-200 text-green-700 p-6 rounded-lg shadow-sm border-l-4 border-l-green-600 mb-8 transition-all duration-300">
            <div class="flex items-start gap-4">
                <span class="material-symbols-outlined text-green-600 text-3xl">check_circle</span>
                <div>
                    <h3 class="font-bold text-lg text-green-800">¡Registro Exitoso!</h3>
                    <p class="mt-1 text-sm leading-relaxed">{{ session('success_claim') }}</p>
                    <p class="mt-2 text-xs text-green-600 font-medium">Nos pondremos en contacto con usted en un plazo no mayor a quince (15) días hábiles.</p>
                </div>
            </div>
        </div>
    @endif

    @if ($errors->any())
        <div class="bg-red-50 border border-red-200 text-red-700 p-4 rounded-lg shadow-sm border-l-4 border-l-red-600 mb-8">
            <div class="flex items-start gap-3">
                <span class="material-symbols-outlined text-red-600 text-2xl">error</span>
                <div>
                    <h3 class="font-bold text-red-800">Por favor corrija los siguientes errores:</h3>
                    <ul class="list-disc pl-5 mt-2 space-y-1 text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    <!-- Main Form Container -->
    <form action="{{ route('complaints.submit') }}" method="POST" class="space-y-12">
        @csrf
        <!-- Honeypot field for security -->
        <div class="hidden">
            <input type="text" name="website_hp" value="" autocomplete="off" />
        </div>

        <!-- Section 1: Consumer Data -->
        <section class="bg-white p-6 md:p-10 border border-border-gray rounded shadow-sm">
            <div class="form-section-title">
                <h2 class="font-headline-md text-xl md:text-headline-md font-bold text-slate-gray">1. Identificación del Consumidor</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex flex-col gap-2">
                    <label class="font-label-bold text-body-sm text-slate-gray font-bold">Nombres y Apellidos</label>
                    <input class="w-full bg-off-white border-border-gray border rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                           name="full_name" placeholder="Ej: Juan Pérez" type="text" value="{{ old('full_name') }}" required />
                </div>
                
                <div class="grid grid-cols-3 gap-2">
                    <div class="flex flex-col gap-2 col-span-1">
                        <label class="font-label-bold text-body-sm text-slate-gray font-bold">Tipo Doc.</label>
                        <select class="w-full bg-off-white border-border-gray border rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                                name="document_type" required>
                            <option value="DNI" {{ old('document_type') == 'DNI' ? 'selected' : '' }}>DNI</option>
                            <option value="CE" {{ old('document_type') == 'CE' ? 'selected' : '' }}>CE</option>
                            <option value="RUC" {{ old('document_type') == 'RUC' ? 'selected' : '' }}>RUC</option>
                            <option value="Pasaporte" {{ old('document_type') == 'Pasaporte' ? 'selected' : '' }}>Pasaporte</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2 col-span-2">
                        <label class="font-label-bold text-body-sm text-slate-gray font-bold">Nro. Documento</label>
                        <input class="w-full bg-off-white border-border-gray border rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                               name="document_number" placeholder="Número" type="text" value="{{ old('document_number') }}" required />
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <label class="font-label-bold text-body-sm text-slate-gray font-bold">Correo Electrónico</label>
                    <input class="w-full bg-off-white border-border-gray border rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                           name="email" placeholder="correo@ejemplo.com" type="email" value="{{ old('email') }}" required />
                </div>
                <div class="flex flex-col gap-2">
                    <label class="font-label-bold text-body-sm text-slate-gray font-bold">Teléfono / Celular</label>
                    <input class="w-full bg-off-white border-border-gray border rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                           name="phone" placeholder="Ej: 999999999" type="tel" value="{{ old('phone') }}" required />
                </div>
                <div class="md:col-span-2 flex flex-col gap-2">
                    <label class="font-label-bold text-body-sm text-slate-gray font-bold">Dirección de Domicilio</label>
                    <input class="w-full bg-off-white border-border-gray border rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                           name="address" placeholder="Av. Principal 123, Urb. Los Jardines" type="text" value="{{ old('address') }}" required />
                </div>

                <div class="grid grid-cols-3 gap-4 md:col-span-2">
                    <div class="flex flex-col gap-2">
                        <label class="font-label-bold text-body-sm text-slate-gray font-bold">Departamento</label>
                        <input class="w-full bg-off-white border-border-gray border rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                               name="department" placeholder="Lima" type="text" value="{{ old('department') }}" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="font-label-bold text-body-sm text-slate-gray font-bold">Provincia</label>
                        <input class="w-full bg-off-white border-border-gray border rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                               name="province" placeholder="Lima" type="text" value="{{ old('province') }}" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="font-label-bold text-body-sm text-slate-gray font-bold">Distrito</label>
                        <input class="w-full bg-off-white border-border-gray border rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                               name="district" placeholder="Miraflores" type="text" value="{{ old('district') }}" />
                    </div>
                </div>

                <div class="md:col-span-2 flex flex-col gap-2">
                    <label class="font-label-bold text-body-sm text-slate-gray font-bold">Tipo de Consumidor</label>
                    <div class="flex gap-6 mt-1">
                        <label class="flex items-center gap-2 cursor-pointer group">
                            <input class="text-primary focus:ring-primary border-outline-variant w-5 h-5" 
                                   name="client_type" type="radio" value="Titular" {{ old('client_type', 'Titular') == 'Titular' ? 'checked' : '' }} />
                            <span class="font-body-md group-hover:text-primary">Titular</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer group">
                            <input class="text-primary focus:ring-primary border-outline-variant w-5 h-5" 
                                   name="client_type" type="radio" value="Representante" {{ old('client_type') == 'Representante' ? 'checked' : '' }} />
                            <span class="font-body-md group-hover:text-primary">Representante (Padre/Tutor/Apoderado)</span>
                        </label>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Product/Service Details -->
        <section class="bg-white p-6 md:p-10 border border-border-gray rounded shadow-sm">
            <div class="form-section-title">
                <h2 class="font-headline-md text-xl md:text-headline-md font-bold text-slate-gray">2. Detalle del Bien Contratado</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex flex-col gap-2">
                    <label class="font-label-bold text-body-sm text-slate-gray font-bold">Tipo de Bien</label>
                    <div class="flex gap-6 mt-2">
                        <label class="flex items-center gap-2 cursor-pointer group">
                            <input class="text-primary focus:ring-primary border-outline-variant w-5 h-5" 
                                   name="good_type" type="radio" value="Producto" {{ old('good_type') == 'Producto' ? 'checked' : '' }} required />
                            <span class="font-body-md group-hover:text-primary">Producto</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer group">
                            <input class="text-primary focus:ring-primary border-outline-variant w-5 h-5" 
                                   name="good_type" type="radio" value="Servicio" {{ old('good_type', 'Servicio') == 'Servicio' ? 'checked' : '' }} required />
                            <span class="font-body-md group-hover:text-primary">Servicio</span>
                        </label>
                    </div>
                </div>
                
                <div class="flex flex-col gap-2">
                    <label class="font-label-bold text-body-sm text-slate-gray font-bold">Monto Reclamado (S/. - Opcional)</label>
                    <input class="w-full bg-off-white border-border-gray border rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                           name="claimed_amount" placeholder="0.00" step="0.01" type="number" value="{{ old('claimed_amount') }}" />
                </div>
                
                <div class="md:col-span-2 flex flex-col gap-2">
                    <label class="font-label-bold text-body-sm text-slate-gray font-bold">Descripción del Bien Contratado</label>
                    <input class="w-full bg-off-white border-border-gray border rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                           name="good_description" placeholder="Ej: Obra de instalaciones sanitarias de agua fría / Compra de llaves térmicas" type="text" value="{{ old('good_description') }}" required />
                </div>
            </div>
        </section>

        <!-- Section 3: Complaint Detail -->
        <section class="bg-white p-6 md:p-10 border border-border-gray rounded shadow-sm">
            <div class="form-section-title">
                <h2 class="font-headline-md text-xl md:text-headline-md font-bold text-slate-gray">3. Detalle de la Reclamación</h2>
            </div>
            <div class="space-y-6">
                <div class="flex flex-col gap-4">
                    <label class="font-label-bold text-body-sm text-slate-gray font-bold">Tipo de Disconformidad</label>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="border border-border-gray p-4 rounded hover:border-primary transition-colors cursor-pointer relative">
                            <input class="absolute right-4 top-4 text-primary focus:ring-primary" 
                                   id="reclamacion_reclamo" name="claim_type" type="radio" value="Reclamo" {{ old('claim_type', 'Reclamo') == 'Reclamo' ? 'checked' : '' }} required />
                            <label class="block cursor-pointer" for="reclamacion_reclamo">
                                <span class="block font-label-bold text-slate-gray text-body-md font-bold mb-1">Reclamo</span>
                                <span class="block text-xs text-on-surface-variant leading-relaxed">Disconformidad relacionada directamente a los productos o servicios contratados.</span>
                            </label>
                        </div>
                        <div class="border border-border-gray p-4 rounded hover:border-primary transition-colors cursor-pointer relative">
                            <input class="absolute right-4 top-4 text-primary focus:ring-primary" 
                                   id="reclamacion_queja" name="claim_type" type="radio" value="Queja" {{ old('claim_type') == 'Queja' ? 'checked' : '' }} required />
                            <label class="block cursor-pointer" for="reclamacion_queja">
                                <span class="block font-label-bold text-slate-gray text-body-md font-bold mb-1">Queja</span>
                                <span class="block text-xs text-on-surface-variant leading-relaxed">Malestar o descontento respecto a la atención al cliente o aspectos no relacionados directamente al servicio.</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <label class="font-label-bold text-body-sm text-slate-gray font-bold">Detalle del Reclamo o Queja (Descripción del Suceso)</label>
                    <textarea class="w-full bg-off-white border-border-gray border rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                              name="incident_description" placeholder="Describa detalladamente lo sucedido con el servicio o producto..." rows="5" required>{{ old('incident_description') }}</textarea>
                </div>
                
                <div class="flex flex-col gap-2">
                    <label class="font-label-bold text-body-sm text-slate-gray font-bold">Pedido del Consumidor (Solicitud o Pedido)</label>
                    <textarea class="w-full bg-off-white border-border-gray border rounded p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" 
                              name="request" placeholder="Escriba de forma clara qué es lo que solicita para solucionar este inconveniente..." rows="3" required>{{ old('request') }}</textarea>
                </div>
            </div>
        </section>

        <!-- Submit & Legal -->
        <div class="space-y-6">
            <div class="flex items-start gap-3 bg-surface-container-low p-4 rounded border border-primary-container">
                <span class="material-symbols-outlined text-primary mt-1">info</span>
                <p class="text-xs text-on-surface-variant leading-relaxed">
                    La formulación del reclamo en este Libro de Reclamaciones no impide acudir a otras vías de solución de controversias ni es requisito previo para interponer una denuncia ante el INDECOPI. El proveedor deberá dar respuesta al reclamo o queja en un plazo no mayor a quince (15) días hábiles improrrogables.
                </p>
            </div>
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <label class="flex items-center gap-3 cursor-pointer">
                    <input class="rounded text-primary focus:ring-primary border-outline-variant w-5 h-5" type="checkbox" required />
                    <span class="text-xs text-slate-gray">Acepto los <a class="text-primary underline hover:opacity-85" href="#">Términos de Privacidad</a> y el tratamiento de mis datos personales.</span>
                </label>
                <button class="w-full md:w-auto bg-primary text-on-primary px-12 py-4 rounded font-label-bold text-body-md font-bold hover:opacity-95 transition-all shadow-md active:scale-95" type="submit">
                    Enviar Reclamación
                </button>
            </div>
        </div>
    </form>
</main>
@endsection
