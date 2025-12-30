<div id="modal-edit" class="fixed inset-0 hidden bg-black/50 z-50 flex items-center justify-center">
    <div class="bg-white rounded-2xl w-full max-w-md p-6 shadow-xl">

        <h2 class="text-xl font-bold mb-6 border-l-4 border-orange-500 pl-3">
            Editar filial
        </h2>

        <form class="space-y-5">
            <input type="hidden" id="edit-id">

            <div>
                <label class="text-sm text-gray-600">Nome da filial</label>
                <input id="edit-filial"
                       class="w-full mt-1 border rounded-lg px-3 py-2 focus:ring-2 focus:ring-orange-500">
            </div>

            <div>
                <label class="text-sm text-gray-600">Foto</label>
                <input id="edit-foto"
                       class="w-full mt-1 border rounded-lg px-3 py-2 focus:ring-2 focus:ring-orange-500">
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <button type="button"
                        class="btn-close px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300">
                    Cancelar
                </button>
                <button
                    class="px-4 py-2 rounded-lg bg-orange-600 text-white hover:bg-orange-700">
                    Salvar
                </button>
            </div>
        </form>
    </div>
</div>
