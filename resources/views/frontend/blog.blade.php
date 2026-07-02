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
        @if(isset($posts) && $posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
                    <article class="bg-off-white border border-border-gray rounded-lg hover:border-primary transition-all duration-300 flex flex-col group overflow-hidden shadow-sm hover:shadow-md">
                        <!-- Image -->
                        <div class="aspect-[16/10] overflow-hidden relative bg-slate-200">
                            @if($post->image_path)
                                <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-102 transition-transform duration-500">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-slate-300">
                                    <span class="material-symbols-outlined text-4xl text-white">article</span>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Content -->
                        <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                            <div class="space-y-3">
                                <span class="text-[10px] font-mono text-primary font-bold uppercase tracking-wider">
                                    {{ $post->meta_keywords ? head(explode(',', $post->meta_keywords)) : 'Artículo Técnico' }}
                                </span>
                                <h2 class="font-headline-md text-lg font-bold text-slate-gray group-hover:text-primary transition-colors line-clamp-2">
                                    <a href="{{ route('blog.post', $post->slug) }}">{{ $post->title }}</a>
                                </h2>
                                <p class="text-xs text-on-surface-variant line-clamp-3 text-justify">
                                    {{ $post->meta_description ?? strip_tags($post->content) }}
                                </p>
                            </div>
                            
                            <div class="border-t border-border-gray/50 pt-4 flex justify-between items-center text-[11px] text-outline font-mono mt-auto">
                                <span>{{ $post->published_at ? $post->published_at->format('d M, Y') : $post->created_at->format('d M, Y') }}</span>
                                <a href="{{ route('blog.post', $post->slug) }}" class="text-primary hover:underline font-label-bold flex items-center gap-1">
                                    Leer Más <span class="material-symbols-outlined text-xs">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
            
            <!-- Pagination -->
            <div class="pt-6">
                {{ $posts->links() }}
            </div>
        @else
            <p class="text-center text-outline">No hay artículos publicados en el blog en este momento.</p>
        @endif
    </div>
</section>
@endsection
