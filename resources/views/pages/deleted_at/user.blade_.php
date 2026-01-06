<div id="content-user" class="hidden">
    <div class="max-w-7xl mx-auto px-4 py-8">

        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8 gap-4">
            <h1 class="text-3xl font-bold border-l-4 border-orange-500 pl-4">
                Usuários
            </h1>

            <button
                class="flex items-center gap-2 bg-orange-600 text-white px-5 py-2 rounded-lg
                hover:bg-orange-700 transition duration-200 shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4v16m8-8H4" />
                </svg>
                Novo usuário
            </button>
        </div>

        <!-- Tabela -->
        <div class="overflow-x-auto bg-white rounded-xl shadow-sm border">

            <table class="w-full text-sm">
                <thead>
                    <tr class="bg-gray-100 text-gray-700 uppercase text-xs tracking-wider">
                        <th class="py-4 px-6 text-left">ID</th>
                        <th class="py-4 px-6 text-left">Nome</th>
                        <th class="py-4 px-6 text-left">Email</th>
                        <th class="py-4 px-6 text-left">Permissão</th>
                        <th class="py-4 px-6 text-center">Ações</th>
                    </tr>
                </thead>

                <tbody class="divide-y">
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-4 px-6">1</td>
                        <td class="py-4 px-6 font-medium text-gray-800">
                            Abhiraj K
                        </td>
                        <td class="py-4 px-6 text-gray-600">
                            abhi@kerala.com
                        </td>
                        <td class="py-4 px-6">
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full text-xs
                                bg-green-100 text-green-700 font-medium">
                                Admin
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-3">

                                <!-- Editar -->
                             
                          <button
                            class="p-2 rounded-md hover:bg-blue-50 text-blue-600 transition btn-edit"
                            data-id="1"
                            data-name="Abhiraj K"
                            data-email="abhi@kerala.com"
                            data-role="Admin"
                            title="Editar">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15.232 5.232l3.536 3.536M9 11l6-6m2 2l-6 6m-4 4h4l10-10a2.5 2.5 0 00-4-4L7 13v4z" />
                                    </svg>
                                </button>

                                <!-- Excluir -->
                                <button
                                    class="p-2 rounded-md hover:bg-red-50 text-red-600 transition"
                                    title="Excluir"
                                    data-id="1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
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
    const btnNovoUsuario = document.querySelector('#content-user button');

    btnNovoUsuario.addEventListener('click', openCreateUserModal);

    function openCreateUserModal() {
        // Evita duplicar modal
        if (document.getElementById('modal-create-user')) return;

        const modal = document.createElement('div');
        modal.id = 'modal-create-user';
        modal.className =
            'fixed inset-0 bg-black/50 flex items-center justify-center z-50';

        modal.innerHTML = `
            <div class="bg-white w-full max-w-md rounded-xl shadow-lg p-6 relative animate-fade-in">

                <button class="btn-close absolute top-4 right-4 text-gray-500 hover:text-gray-800">
                    ✕
                </button>

                <h2 class="text-xl font-bold mb-6 border-l-4 border-orange-500 pl-3">
                    Novo Usuário
                </h2>

                <form id="form-create-user" class="space-y-4">

                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Nome
                        </label>
                        <input type="text"
                               name="name"
                               class="w-full mt-1 border rounded-lg px-3 py-2 focus:ring focus:ring-orange-200"
                               placeholder="Nome completo"
                               required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Email
                        </label>
                        <input type="email"
                               name="email"
                               class="w-full mt-1 border rounded-lg px-3 py-2 focus:ring focus:ring-orange-200"
                               placeholder="email@exemplo.com"
                               required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Senha
                        </label>
                        <input type="password"
                               name="password"
                               class="w-full mt-1 border rounded-lg px-3 py-2 focus:ring focus:ring-orange-200"
                               required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Permissão
                        </label>
                        <select name="role"
                                class="w-full mt-1 border rounded-lg px-3 py-2 focus:ring focus:ring-orange-200"
                                required>
                            <option value="">Selecione</option>
                            <option value="Admin">Admin</option>
                            <option value="User">Usuário</option>
                        </select>
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
        modal.querySelector('.btn-close').onclick = () => closeUserModal(modal);
        modal.querySelector('.btn-cancel').onclick = () => closeUserModal(modal);

        // Fechar clicando fora
        modal.addEventListener('click', e => {
            if (e.target === modal) closeUserModal(modal);
        });

        // Submit (exemplo)
        modal.querySelector('#form-create-user').addEventListener('submit', e => {
            e.preventDefault();

            const formData = new FormData(e.target);

            console.log('Nome:', formData.get('name'));
            console.log('Email:', formData.get('email'));
            console.log('Senha:', formData.get('password'));
            console.log('Permissão:', formData.get('role'));

            // Aqui entra fetch / axios / Laravel
            closeUserModal(modal);
        });
    }

    function closeUserModal(modal) {
        modal.classList.add('opacity-0');
        setTimeout(() => modal.remove(), 150);
    }
</script>
