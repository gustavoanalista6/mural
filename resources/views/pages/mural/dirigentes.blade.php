
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Mural Digital – Dirigentes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap e CSS do mural --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mural.css') }}">
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

    {{-- DIRIGENTES --}}
    <div class="section-wrap">
        <div class="section-line"></div>
        <div class="section-title">
            <h2>Dirigentes</h2>
            <span>{{ $dirigentes->count() }} itens disponíveis</span>
        </div>
    </div>

    @forelse($dirigentes as $item)
        <p>
            <strong>{{ $item->position ?? $item->role }}:</strong>
             {{ $item->name ?? $item->nome }}
        </p>
    @empty
        <p class="text-muted">Nenhum dirigente disponível.</p>
    @endforelse

    <footer class="mural-footer mt-5">
        © {{ date('Y') }} Faculdade Atenas · Mural Digital
    </footer>

</main>

</body>
</html>
