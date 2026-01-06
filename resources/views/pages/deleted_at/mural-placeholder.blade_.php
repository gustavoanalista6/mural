<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>{{ $title }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">
  <div class="card shadow p-4 text-center">
    <h1 class="h4">{{ $title }}</h1>
    <p class="text-muted mb-3">Página de exemplo</p>
    <a href="{{ route('mural.index') }}" class="btn btn-warning">
      Voltar ao Mural
    </a>
  </div>
</body>
</html>
