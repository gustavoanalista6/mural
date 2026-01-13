<button @click="modalCreate = true" id="btn-create">Criar</button>

<div
    x-show="modalCreate"
    x-transition
    @click.self="modalCreate = false"
    class="fixed inset-0 bg-black/50 flex items-center justify-center"
    x-cloak
>
    <div class="bg-white p-4 rounded">
        {{-- formulário --}}
        <button @click="modalCreate = false">Fechar</button>
    </div>
</div>
