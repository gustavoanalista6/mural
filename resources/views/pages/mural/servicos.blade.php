
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Mural Digital – Serviços e Cursos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap e CSS do mural --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mural.css') }}">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        body { background-color: #f8f9fa; } /* Cinza claro do Bootstrap */
        .section-wrap { margin-top: 1rem; margin-bottom: 0.5rem; }
        .section-line { height: 2px; background: #dee2e6; margin-bottom: .5rem; }
        .section-title h2 { margin: 0; font-weight: 700; letter-spacing: .5px; }
        .section-title span { color: #6c757d; font-size: .95rem; }

        /* Banner customizado para cursos por mensalidade */
        .mural-banner {
            background: #e9f2ff;
            border: 1px solid #bcd3ff;
            border-left: 4px solid #0d6efd;
            padding: .75rem 1rem;
            border-radius: .5rem;
            margin-bottom: 1rem;
        }
        .mural-header img { max-height: 48px; }
        .mural-footer { color: #6c757d; font-size: .9rem; }
    </style>
</head>

<body>
    <header class="mural-header py-4">
        <div class="container d-flex justify-content-evenly align-items-center">
            <img src="{{ asset('img/big_logo.png') }}" alt="Logo">
            <h1>Mural Digital</h1>
            <h5>Faculdade Atenas – {{ ucfirst($filial->nome_filial) }}</h5>
        </div>
    </header>

<main class="container">
    {{-- Normalização e particionamento dos itens --}}
    @php
        // Garante que temos uma Collection
        $servicos = collect($servicos ?? []);

        // Particiona: itens mensais (cursos) e demais serviços
        [$cursos, $servicosOutros] = $servicos->partition(function($s) {
            return (bool) ($s->is_monthly ?? false);
        });

        // Banner: aparece se existir qualquer item com isenção da primeira taxa (duas grafias suportadas)
        $haIsencaoPrimeiraVia = $servicos->contains(function($s) {
            return (bool) ($s->first_fee_exemption ?? $s->first_free_exemption ?? false);
        });
    @endphp

    {{-- ===== Seção CURSOS (mensalidade) ===== --}}
    <div class="section-wrap">
        
        <div class="section-line"></div>
        <div class="d-flex justify-content-between align-items-center mb-3" style="width: 100%;">
            <div class="section-title d-flex align-items-baseline gap-3">
                
                <h2 class="m-0">CURSOS</h2>
                <span>{{ $cursos->count() }} itens disponíveis</span>
            </div>
            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary back-btn">← Voltar ao mural</a>
        </div>

    </div>

   

    {{-- Tabela de CURSOS (is_monthly = true) --}}
    @forelse($cursos as $item)
        @if($loop->first)
            <div class="table-responsive">
                <table class="table table-sm align-middle">
                    <thead>
                    <tr>
       
                        <th scope="col">Título</th>
                        <th scope="col" class="text-end text-nowrap">Valor</th>
                       
                    </tr>
                    </thead>
                    <tbody>
        @endif

        @php
            // Formata valor em BRL: R$ X.XXX,YY
            $valor = isset($item->value) ? number_format((float) $item->value, 2, ',', '.') : '0,00';

            // Isenção da primeira taxa (suporta duas grafias)
            $isento = (bool) ($item->first_fee_exemption ?? $item->first_free_exemption ?? false);

            // Ordenação fallback: order / ordem / id / posição do loop


            // Título fallback
            $titulo = $item->title ?? $item->titulo ?? 'Sem título';
        @endphp

        <tr>
   

            {{-- Título + badge "Mensal" --}}
            <td>
                <strong class="text-dark">{{ $titulo }}</strong>
                <span class="badge bg-primary ms-2" title="Curso por mensalidade">Mensal</span>
            </td>

            {{-- Valor (BRL) --}}
            <td class="text-end">
                <span class="fw-semibold">R$ {{ $valor }}</span>
            </td>

        </tr>

        @if($loop->last)
                    </tbody>
                </table>
            </div>
        @endif
    @empty
        <p class="text-muted">Nenhum curso disponível.</p>
    @endforelse

    {{-- ===== Seção SERVIÇOS (não mensais) ===== --}}
    <div class="section-wrap mt-4">
        <div class="section-line"></div>
        <div class="section-title d-flex align-items-baseline gap-3">
            <h2 class="m-0">SERVIÇOS</h2>
            <span>{{ $servicosOutros->count() }} itens disponíveis</span>
        </div>
    </div>

    {{-- Tabela de SERVIÇOS (is_monthly != true) --}}
    @forelse($servicosOutros as $item)
        @if($loop->first)
            <div class="table-responsive">
                <table class="table table-sm align-middle">
                    <thead>
                    <tr>
          
                        <th scope="col">Título</th>
                        <th scope="col" class="text-end text-nowrap">Valor</th>
                        <th scope="col" class="text-center text-nowrap">Isento 1ª via</th>
                    </tr>
                    </thead>
                    <tbody>
        @endif

        @php
            $valor = isset($item->value) ? number_format((float) $item->value, 2, ',', '.') : '0,00';
            $isento = (bool) ($item->first_fee_exemption ?? $item->first_free_exemption ?? false);
          
            $titulo = $item->title ?? $item->titulo ?? 'Sem título';
        @endphp

        <tr>


            {{-- Título --}}
            <td>
                <strong class="text-dark">{{ $titulo }}</strong>
            </td>

            {{-- Valor (BRL) --}}
            <td class="text-end">
                <span class="fw-semibold">R$ {{ $valor }}</span>
            </td>

            {{-- Isento (badge) --}}
            <td class="text-center">
                @if($isento)
                    <span class="badge bg-success d-inline-flex align-items-center gap-1" title="Primeira taxa isenta">
                        <i class="bi bi-check-circle"></i> Isento
                    </span>
                @else
                    <span class="badge bg-secondary d-inline-flex align-items-center gap-1" title="Não isento">
                        <i class="bi bi-x-circle"></i> Não isento
                    </span>
                @endif
            </td>
        </tr>

        @if($loop->last)
                    </tbody>
                </table>
            </div>
        @endif
    @empty
        <p class="text-muted">Nenhum serviço disponível.</p>
    @endforelse

    <footer class="mural-footer mt-5">
        © {{ date('Y') }} Faculdade Atenas · Mural Digital
    </footer>
</main>

</body>
</html>
