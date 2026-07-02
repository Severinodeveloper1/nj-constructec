@extends('layouts.app')

@section('title', $post->meta_title ?? ($post->title . ' | Blog'))

@section('meta_description', $post->meta_description ?? Str::limit(strip_tags($post->content), 150))
@section('meta_keywords', $post->meta_keywords ?? 'blog, ingenieria, construccion')

@section('content')
<!-- Blog Details Section -->
<section class="py-20 bg-white">
    <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Main Content -->
            <article class="lg:col-span-8 space-y-8">
                <!-- Meta Info -->
                <div class="space-y-4">
                    <span class="text-xs font-mono text-primary font-bold uppercase tracking-wider">
                        {{ $post->meta_keywords ? head(explode(',', $post->meta_keywords)) : 'Artículo Técnico' }}
                    </span>
                    <h1 class="font-display-lg text-3xl md:text-display-lg font-bold text-slate-gray leading-tight">
                        {{ $post->title }}
                    </h1>
                    <div class="flex items-center gap-4 text-xs text-outline font-mono">
                        <span class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">calendar_month</span>
                            {{ $post->published_at ? $post->published_at->format('d M, Y') : $post->created_at->format('d M, Y') }}
                        </span>
                        <span>•</span>
                        <span>Autor: Dirección Técnica</span>
                    </div>
                </div>

                <!-- Cover Image -->
                @if($post->image_path)
                    <div class="aspect-[21/9] rounded-lg overflow-hidden border border-border-gray bg-slate-200">
                        <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                    </div>
                @endif

                <!-- Content Body -->
                <div class="prose prose-slate max-w-none text-on-surface-variant leading-relaxed text-justify space-y-6">
                    {!! $post->content !!}
                </div>

                <!-- Back to Blog Button -->
                <div class="border-t border-border-gray pt-6 mt-12">
                    <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 font-label-bold text-primary hover:opacity-85 transition-opacity">
                        <span class="material-symbols-outlined">arrow_back</span> Volver a todas las publicaciones
                    </a>
                </div>
            </article>

            <!-- Sidebar -->
            <aside class="lg:col-span-4 space-y-8">
                <!-- Recent Posts Widget -->
                <div class="bg-off-white border border-border-gray p-6 rounded-lg space-y-6">
                    <h3 class="font-headline-md text-base font-bold text-slate-gray border-b border-border-gray pb-3">
                        Artículos Recientes
                    </h3>
                    
                    @if(isset($recentPosts) && $recentPosts->count() > 0)
                        <div class="space-y-4">
                            @foreach($recentPosts as $recent)
                                <div class="flex gap-4 items-start group">
                                    @if($recent->image_path)
                                        <div class="w-16 h-16 rounded overflow-hidden bg-slate-200 shrink-0">
                                            <img src="{{ asset('storage/' . $recent->image_path) }}" alt="{{ $recent->title }}" class="w-full h-full object-cover">
                                        </div>
                                    @endif
                                    <div class="space-y-1">
                                        <h4 class="font-bold text-xs text-slate-gray group-hover:text-primary transition-colors line-clamp-2">
                                            <a href="{{ route('blog.post', $recent->slug) }}">{{ $recent->title }}</a>
                                        </h4>
                                        <p class="text-[10px] text-outline font-mono">
                                            {{ $recent->published_at ? $recent->published_at->format('d M, Y') : $recent->created_at->format('d M, Y') }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-xs text-outline">No hay otros artículos recientes.</p>
                    @endif
                </div>

                <!-- Technical Assistance Call-to-action -->
                <div class="bg-primary text-white p-6 rounded-lg space-y-4">
                    <h3 class="font-headline-md text-lg font-bold">¿Necesita Asistencia Técnica?</h3>
                    <p class="text-xs text-off-white leading-relaxed">
                        Brindamos inspección a domicilio y presupuestos de ingeniería para proyectos residenciales y comerciales.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-block bg-white text-primary px-6 py-2.5 rounded font-label-bold text-xs hover:bg-off-white transition-colors w-full text-center">
                        Contáctenos
                    </a>
                </div>
            </aside>

        </div>
    </div>
</section>
@endsection
