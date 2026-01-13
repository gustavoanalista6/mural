<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>
        {{ 'Detalhes do curso' }} | Mural Digital
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- CSS do projeto --}}
    <link rel="stylesheet" href="{{ asset('css/mural.css') }}">
</head>

<body>

    <header class="mural-header py-4">
        <div class="container d-flex justify-content-evenly align-items-center">
            <img src="{{ asset('img/big_logo.png') }}" alt="Logo" height="60">
            <h1 class="m-0">Mural Digital</h1>
            <p class="m-0">Faculdade Atenas – {{ isset($filial) ? ucfirst($filial) : '' }}</p>
        </div>
    </header>

    <main class="container">

        {{-- TÍTULO DA SEÇÃO --}}
        <div class="section-wrap mt-4">
            <div class="section-line"></div>
            <div class="section-title">
                <h2> Detalhes do curso </h2>

            </div>
        </div>

        {{-- LISTA DE CARDS --}}
        <div class="row justify-content-center mt-4">
            @forelse($detalhesCurso as $detalhe)
            <div class="col-12 col-md-6 col-lg-4 mb-4">

                {{-- AÇÃO: PDF --}}
                @php
                // Corrige um possível "loclhost" => "localhost"
                $pdfUrl = $detalhe->url_pdf ?? null;
                if ($pdfUrl && str_starts_with($pdfUrl, 'http://loclhost')) {
                $pdfUrl = str_replace('http://loclhost', 'http://localhost', $pdfUrl);
                }
                @endphp

                @if(!empty($pdfUrl))


                @else
                <p class="text-muted mb-0">
                    Nenhum material disponível no momento.
                </p>
                @endif
                <a href="{{ $pdfUrl }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="w-100" style="text-decoration: none; color: black;">

                    <div class="mural-card text-center p-4 h-100" >

                        {{-- ÍCONE / FALLBACK --}}
                        <div class="mural-icon mx-auto mb-3 d-flex align-items-center justify-content-center"
                            style="background-color: white; border-radius: 5px; width: 90px; height: 90px;">
                            @if(!empty($detalhe->icon))
                            <img src="{{ asset('img/cursos/' . $detalhe->icon) }}"
                                alt="{{ $detalhe->title }}"
                                style="max-width: 85px; max-height: 85px;">
                            @else
                            <div class="mural-fallback fw-bold fs-2">
                                {{ mb_substr($detalhe->title ?? '—', 0, 1) }}
                            </div>
                            @endif
                        </div>

                        {{-- TÍTULO --}}
                        <h4 class="mural-title mb-3">
                            {{ $detalhe->title ?? 'Título não informado' }}
                        </h4>



                        {{-- METADADOS (opcional) --}}
                        <div class="mt-3 small text-muted">
                            @if(!empty($detalhe->filial_id))


                            @endif
                            @if(!empty($detalhe->curso_id))


                            @endif
                        </div>

                    </div>
                </a>
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-secondary text-center" role="alert">
                    Nenhum detalhe encontrado para este curso.
                </div>
            </div>
            @endforelse
        </div>

        {{-- VOLTAR --}}
        <div class="text-center mt-2">
            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">
                ← Voltar
            </a>
        </div>

        <footer class="mural-footer mt-5 text-center">
            © {{ date('Y') }} Faculdade Atenas · Mural Digital
        </footer>

    </main>

    {{-- Bootstrap JS (opcional) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>