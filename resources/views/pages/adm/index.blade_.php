<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Mural Digital</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-neutral-100">

<div 
    x-data="{ page: 'dashboard' }"
    class="flex min-h-screen"
>

    @include('components.sidebar')

    <main class="flex-1 p-4 sm:ml-64">

        <template x-if="page === 'dashboard'">
            @include('pages.adm.dashboard')
        </template>

        <template x-if="page === 'usuarios'">
            @include('pages.adm.user')
        </template>

        <template x-if="page === 'cursos'">
            @include('pages.adm.curso')
        </template>

        <template x-if="page === 'filiais'">
            @include('pages.adm.filial')
        </template>

        <template x-if="page === 'perfil'">
            @include('pages.adm.profile')
        </template>

        @include('components.footer')

    </main>
</div>

@include('components.modal-edit')
@include('components.modal-delete')
@include('components.modal-create')

</body>
</html>
