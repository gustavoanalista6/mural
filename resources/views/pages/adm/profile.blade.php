<div id="content-profile" class="hidden flex justify-center px-4">
    <div class="w-full max-w-lg bg-white rounded-2xl shadow-md p-8">
        
        <!-- Título -->
        <h1 class="text-3xl font-bold text-start mb-10 border-l-4 border-orange-500 pl-4">
            Perfil
        </h1>

        <!-- Form -->
        <form class="space-y-8">

            <!-- Nome -->
            <div class="relative z-0 w-full group">
                <input
                    type="text"
                    name="floating_name"
                     value="{{$usuario->name}}"
                    id="floating_name"
                    class="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                    placeholder=" "
                    required
                />
                <label
                    for="floating_name"
                    class="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]
                    peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0
                    peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:text-orange-500">
                    Nome
                </label>
            </div>

            <!-- Email -->
            <div class="relative z-0 w-full group">
                <input
                    type="email"
                    name="floating_email"
                    id="floating_email"
                    class="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                    placeholder=" "
                    value="{{$usuario->email}}"
                    required
                />
                <label
                    for="floating_email"
                    class="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]
                    peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0
                    peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:text-orange-500">
                    E-mail
                </label>
            </div>

            <!-- Senha -->
            <div class="relative z-0 w-full group">
                <input
                 
                    type="password"
                    name="floating_password"
                    id="floating_password"
                    class="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                    placeholder=" "
                />
                <label
                    for="floating_password"
                    class="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]
                    peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0
                    peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:text-orange-500">
                    Nova senha
                </label>
            </div>

            <!-- Botão -->
            <div class="flex justify-end pt-4">
                <button
                    type="submit"
                    class="flex items-center justify-center px-6 py-2 rounded-lg bg-orange-600 text-white font-medium
                    hover:bg-orange-700 transition-colors duration-200">
                    Salvar alterações
                </button>
            </div>

        </form>
    </div>
</div>