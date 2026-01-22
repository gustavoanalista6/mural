<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Mural Digital – Publicações</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap e CSS do mural --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mural.css') }}">

    {{-- Bootstrap Icons para o ícone de PDF --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
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

        {{-- PUBLICAÇÕES --}}
        <div class="section-line"></div>
        <div class="section-wrap" style="display:flex; justify-content:space-between">
            
            <div class="section-title">
                <h2>NORMATIVAS</h2>
                <span>{{ $documentos->count() }} itens disponíveis</span>
            </div>

            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary back-btn">← Voltar ao mural</a>
        </div>

        @forelse($documentos as $item)
        {{-- Você pode usar uma lista simples no mesmo estilo dos "Dirigentes",
             mas aqui vai uma tabela compacta que mantém a hierarquia visual do mural. --}}
        @if($loop->first)
        <div class="table-responsive">
            <table class="table table-sm align-middle">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap">Ordem</th>
                        <th scope="col">Título</th>
                        <th scope="col" class="text-center text-nowrap">PDF</th>
                    </tr>
                </thead>
                <tbody>
                    @endif

                    <tr>
                        @php
                        // Ajuste conforme seu app: pode ser $item->url, Storage::url($item->path), route('pdf.show', $item->id), etc.
                        $pdfUrl = $item->url
                        ?? (isset($item->path) ? Storage::url($item->path) : null)
                        ?? (isset($item->arquivo) ? Storage::url($item->arquivo) : null);
                        @endphp
                        <td class="text-muted">{{ $item->order ?? $item->ordem ?? $loop->iteration }}</td>
                        <td>
                            {{-- Exibe title ou fallback --}}
                            <a href="?url={{ $pdfUrl }}"  rel="noopener noreferrer" style="color:black; text-decoration:none;">
                                <strong>{{ $item->title ?? $item->titulo ?? 'Sem título' }}</strong>
                            </a>
                        </td>
                        <td class="text-center">


                            @if($pdfUrl)
                            <a
                                href="?url={{ $pdfUrl }}"
                            
                                rel="noopener noreferrer"
                                class="btn btn-link p-0"
                                aria-label="Abrir PDF de {{ $item->title ?? $item->titulo ?? 'documento' }} em nova aba"
                                title="Visualizar PDF">
                                <i class="bi bi-file-earmark-pdf fs-5 text-danger"></i>
                            </a>
                            @else
                            <span class="text-muted" title="PDF indisponível">
                                <i class="bi bi-file-earmark-x fs-5"></i>
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
        <p class="text-muted">Nenhuma publicação disponível.</p>
        @endforelse
        
        <div style="text-align:center">
            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary back-btn">← Voltar ao mural</a>
        </div>
        <footer class="mural-footer mt-5">
            © {{ date('Y') }} Faculdade Atenas · Mural Digital
        </footer>

    </main>

</body>

</html>
<STYLE>
    body {
        background-color: #f8f9fa;
        /* Cinza claro do Bootstrap */
    }
</STYLE>