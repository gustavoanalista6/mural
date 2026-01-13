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
            <h1>Mural Digital</h1>
            <p>Faculdade Atenas – {{ ucfirst($filial->nome_filial) }}</p>
        </div>
    </header>

    <main class="container">

        {{-- PUBLICAÇÕES --}}
        <div class="section-wrap">
            <div class="section-line"></div>
            <div class="section-title">
                <h2>NORMATIVAS</h2>
                <span>{{ $documentos->count() }} itens disponíveis</span>
            </div>
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
                            <a href="{{ $pdfUrl }}" target="_blank" rel="noopener noreferrer" style="color:black; text-decoration:none;">
                                <strong>{{ $item->title ?? $item->titulo ?? 'Sem título' }}</strong>
                            </a>
                        </td>
                        <td class="text-center">


                            @if($pdfUrl)
                            <a
                                href="{{ $pdfUrl }}"
                                target="_blank"
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