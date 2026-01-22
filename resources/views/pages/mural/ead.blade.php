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
        <h1 class="mb-0">MURAL DIGITAL</h1>
        <div class="header-divider"></div>
        <div class="atenas-brand">
            <span class="brand-main">FACULDADE ATENAS</span>
            <span class="brand-sub">{{ ucfirst($filial->nome_filial) }}</span>
        </div>
    </div>
</header>

<main class="container">

    {{-- CURSOS --}}
  <div style="display: flex; justify-content:space-between">
        <div class="section-wrap">
            <div class="section-line"></div>
            <div class="section-title">
                <h2>Informações de Cursos</h2>
                <span>{{ $courses->count() }} itens disponíveis</span>
            </div>
        </div>

         <div style="display:flex; align-items:center"><a href="{{ url()->previous() }}" class="btn btn-outline-secondary back-btn">← Voltar ao mural</a></div>
        
    </div>

    <div class="row g-4">
        @forelse($courses as $item)
            <div class="col-6 col-md-3">
                
                <a href="/mural/<?php echo $filial->nome_filial;?>/ead/<?php echo $item->route;?>" class="mural-card">
             
              

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



    <footer class="mural-footer mt-5">
        © {{ date('Y') }} Faculdade Atenas · Mural Digital
    </footer>

</main>

</body>
</html>
