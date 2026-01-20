<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Mural Digital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mural.css') }}">
</head>

<body>

    <header class="mural-header py-4">
        <div class="container d-flex justify-content-evenly align-items-center">
            <img src="{{ asset('img/big_logo.png') }}" alt="Logo">
            <h1>Mural Digital</h1>
            {{-- Usando diretiva Blade para formatar texto --}}
            <h5>Faculdade Atenas – {{ ucfirst($filial->nome_filial) }}</h5>
        </div>
    </header>

    <main class="container">

        {{-- SEÇÃO: CURSOS --}}
        <div class="section-wrap">
            <div class="section-line"></div>
            <div class="section-title">
                <h2>Informações de Cursos</h2>
                <span>{{ $courses->count() }} itens disponíveis</span>
            </div>
        </div>

        <div class="row g-4">
            @forelse($courses as $item)
            <div class="col-6 col-md-3">
                {{-- Link formatado com Blade e Helper url() --}}
                <a href="{{ url("/mural/{$filial->nome_filial}/{$item->route}") }}" class="mural-card">

                    <div class="mural-icon" style="background-color:white; border-radius: 5px;">
                        @if($item->icon)
                            <img src="{{ asset('img/cursos/' . $item->icon) }}" alt="{{ $item->title }}">
                        @else
                            <div class="mural-fallback">
                                {{ mb_substr($item->title, 0, 1) }}
                            </div>
                        @endif
                    </div>

                    <p class="mural-title">{{ $item->title }}</p>

                    @if($item->subtitle)
                        <p class="mural-sub">{{ $item->subtitle }}</p>
                    @endif
                </a>
            </div>
            @empty
                <p class="text-muted">Nenhum curso disponível.</p>
            @endforelse
        </div>

        {{-- SEÇÃO: GERAIS --}}
        <div class="section-wrap mt-5">
            <div class="section-line"></div>
            <div class="section-title">
                <h2>Informações Gerais</h2>
                <span>{{ $generalLinks->count() }} itens disponíveis</span>
            </div>
        </div>

        <div class="row g-4">
            @foreach($generalLinks as $item)
            <div class="col-6 col-md-3">
                <a 
                    {{-- Condição para o target _blank --}}
                    @if($item->url_pdf) target="_blank" @endif

                    {{-- Lógica do link centralizada no href --}}
                    href="{{ $item->url_pdf ? '?url=' . $item->url_pdf : url("/mural/{$filial->nome_filial}/{$item->route}") }}" 
                    
                    class="mural-card"
                >
                    <div class="mural-icon" style="background-color: white;">
                        @if(!empty($item['icon']))
                            <img src="{{ asset('img/icons/' . $item['icon']) }}" alt="{{ $item['title'] }}">
                        @else
                            <div class="mural-fallback">
                                {{ mb_substr($item['title'], 0, 1) }}
                            </div>
                        @endif
                    </div>

                    <p class="mural-title">{{ $item['title'] }}</p>

                    @if(!empty($item['subtitle']))
                        <p class="mural-sub">{{ $item['subtitle'] }}</p>
                    @endif
                </a>
            </div>
            @endforeach
        </div>

        <footer class="mural-footer mt-5">
            © {{ date('Y') }} Faculdade Atenas · Mural Digital
        </footer>

    </main>

</body>
</html>