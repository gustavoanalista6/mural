<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="text-heading bg-transparent box-border border border-transparent hover:bg-neutral-secondary-medium focus:ring-4 focus:ring-neutral-tertiary font-medium leading-5 rounded-base ms-3 mt-3 text-sm p-2 focus:outline-none inline-flex sm:hidden">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10" />
    </svg>
</button>

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-full transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-neutral-primary-soft border-e border-default">
        <ul class="space-y-2 font-medium">

            <li id="btn-profile">
                <a href="#"
                    class="flex items-center px-2 py-1.5 text-body rounded-base
                        hover:bg-neutral-tertiary hover:text-fg-brand group">

                    <svg class="w-5 h-5 transition duration-75 group-hover:text-fg-brand"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z" />
                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            d="M6 20a6 6 0 0 1 12 0" />
                    </svg>

                    <span class="ms-3">Perfil</span>
                </a>
            </li>

            <li id="btn-user">
                <a href="" class="flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">
                    <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-fg-brand" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Usuários</span>
                </a>
            </li>
            <li id="btn-filial">
                <a href="#" class="flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">
                    <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-fg-brand" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M4 21V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v18M9 21V9h10a1 1 0 0 1 1 1v11M7 6h2M7 10h2M7 14h2M13 13h2M13 17h2" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Filiais</span>
                </a>
            </li>
            <li id="btn-curso">
                <a href="#" class="flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">
                    <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-fg-brand"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v14M20 6v14a1 1 0 0 1-1 1h-6V5h6a1 1 0 0 1 1 1ZM4 6v14a1 1 0 0 0 1 1h6V5H5a1 1 0 0 0-1 1Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Cursos</span>
                </a>
            </li>

            <li id="btn-servico">
                <a href="#" class="flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">
                    <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-fg-brand"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v14M20 6v14a1 1 0 0 1-1 1h-6V5h6a1 1 0 0 1 1 1ZM4 6v14a1 1 0 0 0 1 1h6V5H5a1 1 0 0 0-1 1Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Serviços</span>
                </a>
            </li>


            <li class="px-2">
                <a href="#"
                    class="flex items-center px-3 py-2 rounded-full bg-green-700 text-white hover:bg-orange-600 hover:bg-neutral-800 hover:text-orange-300 transition group">
                    <svg class="shrink-0 w-5 h-5 group-hover:text-orange-300 transition"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2" />
                    </svg>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="flex-1 ms-3 whitespace-nowrap">
                            Sair
                        </button>
                    </form>
                </a>
            </li>
        </ul>
    </div>
</aside>