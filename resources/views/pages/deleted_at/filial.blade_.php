<div id="content-filial" class="hidden">
    <div class="max-w-7xl mx-auto px-4 py-8">

        <!-- HEADER -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
            <h1 class="text-3xl font-bold border-l-4 border-orange-500 pl-4">
                Filiais
            </h1>

<button
    id="btn-nova-filial"
    class="flex items-center gap-2 bg-orange-600 text-white px-5 py-2 rounded-lg
    hover:bg-orange-700 transition shadow">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
         viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 4v16m8-8H4" />
    </svg>
    Nova filial
</button>

        </div>

        <!-- TABELA -->
        <div class="overflow-x-auto bg-white rounded-xl shadow border">
            <table class="w-full text-sm">
                <thead>
                    <tr class="bg-gray-100 text-gray-700 uppercase text-xs tracking-wider">
                        <th class="py-4 px-6 text-left">ID</th>
                        <th class="py-4 px-6 text-left">Filial</th>
                        <th class="py-4 px-6 text-left">Foto</th>
                        <th class="py-4 px-6 text-center">Ações</th>
                    </tr>
                </thead>

                <tbody class="divide-y">

                    <!-- LINHA -->
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-4 px-6">1</td>
                        <td class="py-4 px-6 font-medium text-gray-800">
                            Matriz São Paulo
                        </td>
                        <td class="py-4 px-6 text-gray-600">
                            foto_sp.jpg
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-3">

                                <!-- EDITAR -->
                                <button
                                    class="action-btn p-2 rounded-md text-blue-600 hover:bg-blue-50 transition"
                                    data-action="edit"
                                    data-id="1"
                                    data-filial="Matriz São Paulo"
                                    data-foto="foto_sp.jpg"
                                    title="Editar filial">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15.232 5.232l3.536 3.536M9 11l6-6m2 2l-6 6m-4 4h4l10-10a2.5 2.5 0 00-4-4L7 13v4z" />
                                    </svg>
                                </button>

                                <!-- EXCLUIR -->
                                <button
                                    class="action-btn p-2 rounded-md text-red-600 hover:bg-red-50 transition"
                                    data-action="delete"
                                    data-id="1"
                                    title="Excluir filial">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>

                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    const btnNovaFilial = document.getElementById('btn-nova-filial');

    btnNovaFilial.addEventListener('click', openCreateModal);

    function openCreateModal() {
        // Evita abrir dois modais
        if (document.getElementById('modal-create')) return;

        const modal = document.createElement('div');
        modal.id = 'modal-create';
        modal.className =
            'fixed inset-0 bg-black/50 flex items-center justify-center z-50';

        modal.innerHTML = `
            <div class="bg-white w-full max-w-md rounded-xl shadow-lg p-6 relative animate-fade-in">

                <button class="btn-close absolute top-4 right-4 text-gray-500 hover:text-gray-800">
                    ✕
                </button>

                <h2 class="text-xl font-bold mb-6 border-l-4 border-orange-500 pl-3">
                    Nova Filial
                </h2>

                <form id="form-create-filial" class="space-y-4">

                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Nome da filial
                        </label>
                        <input type="text"
                               name="filial"
                               class="w-full mt-1 border rounded-lg px-3 py-2 focus:ring focus:ring-orange-200"
                               placeholder="Ex: Filial São Paulo"
                               required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Foto
                        </label>
                        <input type="file"
                               name="foto"
                               class="w-full mt-1 border rounded-lg px-3 py-2">
                    </div>

                    <div class="flex justify-end gap-3 pt-4">
                        <button type="button"
                                class="btn-cancel px-4 py-2 rounded-lg border hover:bg-gray-100">
                            Cancelar
                        </button>

                        <button type="submit"
                                class="px-4 py-2 rounded-lg bg-orange-600 text-white hover:bg-orange-700">
                            Salvar
                        </button>
                    </div>
                </form>
            </div>
        `;

        document.body.appendChild(modal);

        // Fechar modal
        modal.querySelector('.btn-close').onclick = () => closeModal(modal);
        modal.querySelector('.btn-cancel').onclick = () => closeModal(modal);

        // Fechar clicando fora
        modal.addEventListener('click', e => {
            if (e.target === modal) closeModal(modal);
        });

        // Submit (exemplo)
        modal.querySelector('#form-create-filial').addEventListener('submit', e => {
            e.preventDefault();

            const formData = new FormData(e.target);

            console.log('Nome:', formData.get('filial'));
            console.log('Foto:', formData.get('foto'));

            // Aqui você pode fazer fetch / axios / Laravel
            closeModal(modal);
        });
    }

    function closeModal(modal) {
        modal.classList.add('opacity-0');
        setTimeout(() => modal.remove(), 150);
    }
</script>
