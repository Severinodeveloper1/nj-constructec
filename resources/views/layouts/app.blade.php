<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta name="description" content="@yield('meta_description', 'Expertos peruanos en instalaciones sanitarias, eléctricas y sistemas de bombeo con más de 18 años de experiencia.')" />
    <meta name="keywords" content="@yield('meta_keywords', 'ingenieria, construccion, sanitarias, electricas, bombeo, peru, constructec')" />
    
    <title>@yield('title', $setting->name . ' | Expertos en Instalaciones y Construcción')</title>
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Inter:wght@400;600&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body { font-family: 'Inter', sans-serif; }
        .blueprint-pattern {
            background-color: #f9f9ff;
            background-image: radial-gradient(#d1d5db 0.5px, transparent 0.5px);
            background-size: 24px 24px;
        }
        .map-container iframe {
            width: 100% !important;
            height: 100% !important;
            border: 0 !important;
        }
    </style>
</head>
<body class="bg-background text-on-background selection:bg-primary-container selection:text-on-primary-container min-h-screen flex flex-col">

    <!-- Floating WhatsApp Button -->
    @if($setting->whatsapp_phone)
        <a aria-label="WhatsApp" 
           class="fixed bottom-6 right-6 z-[100] bg-[#25D366] text-white p-4 rounded-full shadow-lg hover:scale-110 transition-all flex items-center justify-center animate-bounce group" 
           href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $setting->whatsapp_phone) }}" 
           target="_blank">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"></path>
            </svg>
            <span class="absolute right-full mr-4 bg-slate-gray text-white text-xs py-1 px-3 rounded whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none shadow-md">
                ¡Hablemos por WhatsApp!
            </span>
        </a>
    @endif

    <!-- Top Navigation Bar -->
    <header class="fixed top-0 left-0 w-full z-50 bg-surface border-b border-gray transition-all duration-300 h-16 shadow-sm">
        <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop h-full flex justify-between items-center">
            <a href="{{ url('/') }}" class="flex items-center gap-2">
                @if($setting->logo_path)
                    <img alt="{{ $setting->name }} Logo" class="h-10 w-auto object-contain" src="{{ asset('storage/' . $setting->logo_path) }}" />
                @else
                    <img alt="NJ CONSTRUCTEC Logo" class="h-10 w-auto object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbAlui0vuijjBiab9iVXnQ3wGPKVX02Oj3SUEgPWYOY0d5jtlPBSGlS6QyucLOLmw8TurjoXY3KuQZpQKhwWIhZADuoE97bE3K2lyivgS9LzzDibtDmbIs0m_Me3U6UT7IzG9l4zNkiwOexzZUSRUNPMh75pwIeQC1PSqGZS_jkrUystNo5UKaNZnPkm0jfD3wd4LXQ-85CrIgg7QtOvql5v7ou3y0L9EZ-cn1bLPWhrfP94gUyKeHDpQc_n0Af43b20btCf-Gfwal"/>
                @endif
                <span class="font-headline-md text-xl md:text-headline-md font-bold text-slate-gray">{{ $setting->name }}</span>
            </a>
            
            <nav class="hidden md:flex items-center gap-8">
                <a class="font-label-bold text-label-bold {{ Request::is('servicios*') ? 'text-primary border-b-2 border-primary pb-1' : 'text-on-surface-variant hover:text-primary' }} transition-all" href="{{ url('/servicios') }}">Servicios</a>
                <a class="font-label-bold text-label-bold {{ Request::is('nosotros*') ? 'text-primary border-b-2 border-primary pb-1' : 'text-on-surface-variant hover:text-primary' }} transition-all" href="{{ url('/nosotros') }}">Quiénes Somos</a>
                <a class="font-label-bold text-label-bold {{ Request::is('proyectos*') ? 'text-primary border-b-2 border-primary pb-1' : 'text-on-surface-variant hover:text-primary' }} transition-all" href="{{ url('/proyectos') }}">Proyectos</a>
                <a class="font-label-bold text-label-bold {{ Request::is('blog*') ? 'text-primary border-b-2 border-primary pb-1' : 'text-on-surface-variant hover:text-primary' }} transition-all" href="{{ url('/blog') }}">Insights</a>
                <a class="font-label-bold text-label-bold {{ Request::is('contacto*') ? 'text-primary border-b-2 border-primary pb-1' : 'text-on-surface-variant hover:text-primary' }} transition-all" href="{{ url('/contacto') }}">Contacto</a>
            </nav>

            <div class="flex items-center gap-4">
                <a href="{{ url('/contacto') }}" class="hidden lg:inline-block bg-primary text-on-primary px-6 py-2 rounded font-label-bold text-label-bold hover:opacity-90 transition-opacity duration-200">
                    Cotizar Proyecto
                </a>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-slate-gray hover:text-primary focus:outline-none">
                    <span class="material-symbols-outlined text-3xl">menu</span>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer Menu -->
        <div id="mobile-drawer" class="fixed inset-y-0 right-0 z-50 w-64 bg-surface border-l border-gray shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out md:hidden flex flex-col">
            <div class="h-16 flex items-center justify-between px-6 border-b border-gray">
                <span class="font-headline-md font-bold text-slate-gray">Menú</span>
                <button id="mobile-menu-close" class="text-slate-gray hover:text-primary focus:outline-none">
                    <span class="material-symbols-outlined text-3xl">close</span>
                </button>
            </div>
            <nav class="flex flex-col gap-6 p-6">
                <a class="font-label-bold text-lg {{ Request::is('servicios*') ? 'text-primary font-bold' : 'text-on-surface-variant' }}" href="{{ url('/servicios') }}">Servicios</a>
                <a class="font-label-bold text-lg {{ Request::is('nosotros*') ? 'text-primary font-bold' : 'text-on-surface-variant' }}" href="{{ url('/nosotros') }}">Quiénes Somos</a>
                <a class="font-label-bold text-lg {{ Request::is('proyectos*') ? 'text-primary font-bold' : 'text-on-surface-variant' }}" href="{{ url('/proyectos') }}">Proyectos</a>
                <a class="font-label-bold text-lg {{ Request::is('blog*') ? 'text-primary font-bold' : 'text-on-surface-variant' }}" href="{{ url('/blog') }}">Insights</a>
                <a class="font-label-bold text-lg {{ Request::is('contacto*') ? 'text-primary font-bold' : 'text-on-surface-variant' }}" href="{{ url('/contacto') }}">Contacto</a>
                @if($setting->brochure_path)
                    <a href="{{ asset('storage/' . $setting->brochure_path) }}" target="_blank" download class="font-label-bold text-lg text-primary flex items-center gap-1">
                        Descargar Brochure <span class="material-symbols-outlined text-sm">download</span>
                    </a>
                @endif
                <a href="{{ url('/contacto') }}" class="bg-primary text-on-primary text-center py-3 rounded font-label-bold mt-4">
                    Cotizar Proyecto
                </a>
            </nav>
        </div>
    </header>

    <main class="pt-16 flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="w-full py-12 bg-slate-gray text-off-white border-t border-outline mt-auto">
        <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop grid grid-cols-1 md:grid-cols-4 gap-gutter">
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-2">
                    @if($setting->logo_path)
                        <img alt="{{ $setting->name }} Logo" class="h-8 w-auto invert grayscale object-contain" src="{{ asset('storage/' . $setting->logo_path) }}"/>
                    @else
                        <img alt="NJ Logo White" class="h-8 w-auto invert grayscale" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbAlui0vuijjBiab9iVXnQ3wGPKVX02Oj3SUEgPWYOY0d5jtlPBSGlS6QyucLOLmw8TurjoXY3KuQZpQKhwWIhZADuoE97bE3K2lyivgS9LzzDibtDmbIs0m_Me3U6UT7IzG9l4zNkiwOexzZUSRUNPMh75pwIeQC1PSqGZS_jkrUystNo5UKaNZnPkm0jfD3wd4LXQ-85CrIgg7QtOvql5v7ou3y0L9EZ-cn1bLPWhrfP94gUyKeHDpQc_n0Af43b20btCf-Gfwal"/>
                    @endif
                    <span class="font-headline-md text-xl text-off-white font-bold">{{ $setting->name }}</span>
                </div>
                <p class="font-body-sm text-body-sm text-outline-variant">Especialistas en instalaciones sanitarias, eléctricas y equipos de bombeo con más de 18 años de experiencia en Perú.</p>
                
                <!-- Social media -->
                <div class="flex gap-4 mt-3">
                    @if($setting->facebook_url)
                        <a class="text-outline-variant hover:text-white transition-colors" href="{{ $setting->facebook_url }}" target="_blank" aria-label="Facebook">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8H7v3h2v9h3v-9h3l.5-3H12V6c0-.5.5-1 1-1h2V2h-3C9.5 2 8 3.5 8 5.5V8z"/></svg>
                        </a>
                    @endif
                    @if($setting->instagram_url)
                        <a class="text-outline-variant hover:text-white transition-colors" href="{{ $setting->instagram_url }}" target="_blank" aria-label="Instagram">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                    @endif
                    @if($setting->tiktok_url)
                        <a class="text-outline-variant hover:text-white transition-colors" href="{{ $setting->tiktok_url }}" target="_blank" aria-label="TikTok">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31.03 2.61.12 3.9.28.05.73.23 1.44.52 2.11.51.99 1.34 1.77 2.34 2.22.67.28 1.39.45 2.12.52v3.9c-.83-.02-1.65-.21-2.42-.56-.9-.39-1.68-.99-2.28-1.76-.05 1.5-.13 3-.24 4.5-.17 1.9-.84 3.73-1.95 5.25-1.39 1.78-3.48 2.92-5.74 3.12-2.31.23-4.66-.46-6.44-1.93-1.74-1.5-2.73-3.67-2.72-5.96.06-2.45 1.25-4.75 3.23-6.09 1.71-1.07 3.74-1.46 5.71-1.09.09-.76.32-1.5.68-2.17C9.97 2.11 11.23 1 12.72.31c.26-.1.53-.18.8-.25v-.04zm-3.8 19.38c1.33.15 2.69-.21 3.75-1.02 1.1-1 1.71-2.44 1.68-3.92.05-1.85.07-3.7.07-5.55h-2c0 1.5.01 3.01.01 4.51-.01.81-.32 1.58-.87 2.17-.61.6-1.46.91-2.32.84-.7-.04-1.36-.39-1.78-.96-.46-.66-.6-1.5-.38-2.29.23-.74.8-1.33 1.53-1.59.57-.18 1.18-.18 1.75-.01V8.5c-1.33-.21-2.72.06-3.86.77-1.4 1-2.18 2.68-2.09 4.41.13 1.83 1.2 3.49 2.82 4.3 1.14.54 2.42.66 3.65.34l-.13-.92z"/></svg>
                        </a>
                    @endif
                    @if($setting->youtube_url)
                        <a class="text-outline-variant hover:text-white transition-colors" href="{{ $setting->youtube_url }}" target="_blank" aria-label="YouTube">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.163a3.003 3.003 0 00-2.11-2.11C19.517 3.545 12 3.545 12 3.545s-7.517 0-9.388.507a3.003 3.003 0 00-2.11 2.11C0 8.033 0 12 0 12s0 3.967.502 5.837a3.003 3.003 0 002.11 2.11c1.871.507 9.388.507 9.388.507s7.517 0 9.388-.507a3.003 3.003 0 002.11-2.11C24 15.967 24 12 24 12s0-3.967-.502-5.837zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                    @endif
                </div>
            </div>
            
            <div class="flex flex-col gap-4">
                <span class="font-label-bold text-label-bold text-white uppercase">Compañía</span>
                <ul class="space-y-2">
                    <li><a class="font-body-sm text-outline-variant hover:text-off-white transition-colors" href="{{ url('/nosotros') }}">Quiénes Somos</a></li>
                    <li><a class="font-body-sm text-outline-variant hover:text-off-white transition-colors" href="{{ url('/nosotros#mision-vision') }}">Misión y Visión</a></li>
                    <li><a class="font-body-sm text-outline-variant hover:text-off-white transition-colors" href="{{ url('/nosotros#valores') }}">Nuestros Valores</a></li>
                    @if($setting->brochure_path)
                        <li><a class="font-body-sm text-outline-variant hover:text-off-white transition-colors flex items-center gap-1" href="{{ asset('storage/' . $setting->brochure_path) }}" target="_blank" download>Descargar Brochure <span class="material-symbols-outlined text-xs">download</span></a></li>
                    @endif
                    <li><a class="font-body-sm text-outline-variant hover:text-off-white transition-colors text-yellow-500 font-semibold" href="{{ url('/libro-reclamaciones') }}">📙 Libro de Reclamaciones</a></li>
                </ul>
            </div>
            
            <div class="flex flex-col gap-4">
                <span class="font-label-bold text-label-bold text-white uppercase">Servicios</span>
                <ul class="space-y-2">
                    <li><a class="font-body-sm text-outline-variant hover:text-off-white transition-colors" href="{{ url('/servicios') }}">Instalaciones Sanitarias</a></li>
                    <li><a class="font-body-sm text-outline-variant hover:text-off-white transition-colors" href="{{ url('/servicios') }}">Instalaciones Eléctricas</a></li>
                    <li><a class="font-body-sm text-outline-variant hover:text-off-white transition-colors" href="{{ url('/servicios') }}">Equipos de Bombeo</a></li>
                    <li><a class="font-body-sm text-outline-variant hover:text-off-white transition-colors" href="{{ url('/servicios') }}">Bridas Rompeagua</a></li>
                </ul>
            </div>
            
            <div class="flex flex-col gap-4">
                <span class="font-label-bold text-label-bold text-white uppercase">Contacto</span>
                <p class="font-body-sm text-body-sm text-outline-variant">
                    <strong>Dirección:</strong> {{ $setting->address }}<br>
                    <strong>Teléfono:</strong> {{ $setting->phone }}<br>
                    <strong>Email:</strong> {{ $setting->email }}
                </p>
            </div>
            
            <div class="col-span-1 md:col-span-4 pt-8 mt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="font-body-sm text-body-sm text-outline-variant">© 2026 {{ $setting->name }}. Todos los derechos reservados.</p>
                <div class="flex gap-8">
                    <span class="font-label-bold text-secondary-container">Símbolo de Confianza</span>
                    <span class="font-label-bold text-secondary-container">Garantía Real</span>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Header scroll handler
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('shadow-md', 'h-14');
                header.classList.remove('h-16');
            } else {
                header.classList.remove('shadow-md', 'h-14');
                header.classList.add('h-16');
            }
        });

        // Mobile drawer handlers
        const drawer = document.getElementById('mobile-drawer');
        const openBtn = document.getElementById('mobile-menu-btn');
        const closeBtn = document.getElementById('mobile-menu-close');

        openBtn.addEventListener('click', () => {
            drawer.classList.remove('translate-x-full');
        });
        closeBtn.addEventListener('click', () => {
            drawer.classList.add('translate-x-full');
        });
    </script>
</body>
</html>
