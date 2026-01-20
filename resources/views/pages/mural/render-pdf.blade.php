<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Mural Digital - PDF</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mural.css') }}">

    <style>
        .pdf-container {
            height: calc(100vh - 160px);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0,0,0,.15);
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .back-btn {
            text-decoration: none;
            font-weight: 500;
        }
    </style>
</head>

<body>

<header class="mural-header py-4">
    <div class="container d-flex justify-content-evenly align-items-center">
        <img src="{{ asset('img/big_logo.png') }}" alt="Logo">
        <h1>Mural Digital</h1>
        <p>Visualização de Documento</p>
    </div>
</header>

<main class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="section-wrap">
            <div class="section-line"></div>
            <div class="section-title">
                <h2>{{$data['title'] }}</h2>
               
            </div>
        </div>

        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary back-btn">
            ← Voltar ao mural
        </a>
    </div>

    <div class="pdf-container">
        <iframe 
            src="{{ $data['url'] }}"
            title="Visualização do PDF">
        </iframe>
    </div>

    <footer class="mural-footer mt-4 text-center">
        © {{ date('Y') }} Faculdade Atenas · Mural Digital
    </footer>

</main>

</body>
</html>
