<div id="modal-delete" class="fixed inset-0 hidden bg-black/50 z-50 flex items-center justify-center">
    <div class="bg-white rounded-2xl w-full max-w-sm p-6 shadow-xl text-center">

        <h2 class="text-lg font-bold mb-3 text-red-600">
            Excluir filial
        </h2>

        <p class="text-gray-600 mb-6">
            Esta ação não pode ser desfeita.
        </p>

        <input type="hidden" id="delete-id">

        <div class="flex justify-center gap-4">
            <button class="btn-close px-4 py-2 rounded-lg bg-gray-200">
                Cancelar
            </button>
            <button id="confirm-delete"
                    class="px-4 py-2 rounded-lg bg-red-600 text-white hover:bg-red-700">
                Excluir
            </button>
        </div>
    </div>
</div>
