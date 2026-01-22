<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Mural Digital – Dirigentes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap e CSS do mural --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mural.css') }}">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        body { background-color: #f8f9fa; }
        .section-wrap { margin-top: 1rem; margin-bottom: 0.5rem; }
        .section-line { height: 2px; background: #dee2e6; margin-bottom: .5rem; }
        .section-title h2 { margin: 0; font-weight: 700; letter-spacing: .5px; }
        .section-title span { color: #6c757d; font-size: .95rem; }

        .mural-header img { max-height: 48px; }
        .mural-footer { color: #6c757d; font-size: .9rem; }
        
        .table-dirigentes .role-cell { width: 40%; color: #6c757d; }
        .table-dirigentes .name-cell { font-weight: 600; color: #212529; }
    </style>
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
    @php
        // Transforma em coleção para facilitar a manipulação
        $dirigentesCol = collect($dirigentes ?? []);

        // Separa Coordenadores dos demais (considerando 'Coordenador' no cargo/role)
        [$coordenadores, $outrosDirigentes] = $dirigentesCol->partition(function($d) {
            $cargo = strtolower($d->position ?? $d->role ?? '');
            return str_contains($cargo, 'coordenador');
        });
    @endphp

    
    {{-- ===== SEÇÃO DEMAIS DIRIGENTES ===== --}}
    <div style="display: flex; justify-content:space-between">
        <div class="section-wrap mt-5">
            <div class="section-line"></div>
            <div class="section-title d-flex align-items-baseline gap-3 mb-3">
                <h2 class="m-0 text-uppercase">Pró Reitoria</h2>
                <span>{{ $outrosDirigentes->count() }} registro(s)</span>
            </div>
        </div>
        <div style="display:flex; align-items:center"><a href="{{ url()->previous() }}" class="btn btn-outline-secondary back-btn">← Voltar ao mural</a></div>
        
    </div>
    @forelse($outrosDirigentes as $item)
        @if($loop->first)
            <div class="table-responsive">
                <table class="table table-sm align-middle table-dirigentes">
                    <tbody>
        @endif

        <tr>
            <td class="role-cell">
                <i class="bi bi-person-vcard me-2"></i>
                {{ $item->position ?? $item->role }}
            </td>
            <td class="name-cell">
                {{ $item->name ?? $item->nome }}
            </td>
        </tr>

        @if($loop->last)
                    </tbody>
                </table>
            </div>
        @endif
    @empty
        <p class="text-muted ps-2">Nenhum outro dirigente listado.</p>
    @endforelse


    {{-- ===== SEÇÃO COORDENAÇÃO ===== --}}
    <div class="section-wrap">
        <div class="section-line"></div>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="section-title d-flex align-items-baseline gap-3">
                <h2 class="m-0 text-uppercase">Coordenação</h2>
                <span>{{ $coordenadores->count() }} registro(s)</span>
            </div>
        </div>
    </div>

    @forelse($coordenadores as $item)
        @if($loop->first)
            <div class="table-responsive mb-4">
                <table class="table table-sm align-middle table-dirigentes">
                    <tbody>
        @endif

        <tr>
            <td class="role-cell">
                <i class="bi bi-person-badge me-2"></i>
                {{ $item->position ?? $item->role }}
            </td>
            <td class="name-cell">
                {{ $item->name ?? $item->nome }}
            </td>
        </tr>

        @if($loop->last)
                    </tbody>
                </table>
            </div>
        @endif
    @empty
        <p class="text-muted ps-2">Nenhum coordenador listado.</p>
    @endforelse



    <footer class="mural-footer mt-5 pb-4">
        <hr>
        © {{ date('Y') }} Faculdade Atenas · Mural Digital
    </footer>
</main>

</body>
</html>