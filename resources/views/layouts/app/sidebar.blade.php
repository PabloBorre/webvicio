<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.auth-head')
        <style>
            /* Fondo general */
            body { background-color: #270233 !important; }

            /* Sidebar */
            [data-flux-sidebar] { background-color: #270233 !important; border-color: #BF9BC8 !important; }

            /* Header del sidebar */
            [data-flux-sidebar-header] { border-color: #BF9BC8 !important; }

            /* Items del sidebar */
            [data-flux-sidebar-item] { color: #BF9BC8 !important; }
            [data-flux-sidebar-item]:hover { background-color: rgba(191,155,200,0.15) !important; color: #EECBE2 !important; }
            [data-flux-sidebar-item][aria-current] { background-color: rgba(191,155,200,0.2) !important; color: #EECBE2 !important; }
            [data-flux-sidebar-item] svg { color: #BF9BC8 !important; }
            [data-flux-sidebar-item][aria-current] svg { color: #EECBE2 !important; }

            /* Heading grupo Platform */
            [data-flux-sidebar-group] [data-flux-sidebar-group-heading] { color: #BF9BC8 !important; opacity: 0.5; }

            /* Separadores */
            [data-flux-sidebar] hr,
            [data-flux-sidebar] [data-flux-separator] { border-color: rgba(191,155,200,0.3) !important; }

            /* User menu desktop */
            [data-flux-sidebar] [data-flux-menu-item] { color: #BF9BC8 !important; }
            [data-flux-sidebar] [data-flux-menu-item]:hover { color: #EECBE2 !important; }

            /* Mobile header */
            [data-flux-header] { background-color: #270233 !important; border-color: #BF9BC8 !important; }

            /* Área de contenido principal */
            [data-flux-main] { background-color: #270233 !important; }

            /* Títulos y textos en el contenido */
            [data-flux-main] h1 { color: #EECBE2 !important; }
            [data-flux-main] h2 { color: #EECBE2 !important; }
            [data-flux-main] h3 { color: #EECBE2 !important; }
            [data-flux-main] p  { color: #BF9BC8 !important; }

            /* Tabla */
            [data-flux-main] table thead tr { background-color: rgba(191,155,200,0.08) !important; }
            [data-flux-main] table th { color: #BF9BC8 !important; border-color: rgba(191,155,200,0.2) !important; }
            [data-flux-main] table td { color: #EECBE2 !important; border-color: rgba(191,155,200,0.2) !important; }
            [data-flux-main] table tbody tr { background-color: rgba(39,2,51,0.6) !important; }

            /* Bordes de contenedores */
            [data-flux-main] .border,
            [data-flux-main] .border-zinc-200,
            [data-flux-main] .border-zinc-700 { border-color: rgba(191,155,200,0.3) !important; }
            [data-flux-main] .border-dashed { border-color: rgba(191,155,200,0.3) !important; }

            /* Botón primario */
            [data-flux-main] .bg-zinc-900 { background-color: #BF9BC8 !important; color: #270233 !important; }
            [data-flux-main] .bg-zinc-900:hover { background-color: #EECBE2 !important; }

            /* Botón secundario */
            [data-flux-main] .border-zinc-300 { border-color: #BF9BC8 !important; color: #BF9BC8 !important; }
            [data-flux-main] .border-zinc-300:hover { background-color: rgba(191,155,200,0.1) !important; color: #EECBE2 !important; }

            /* Botón danger */
            [data-flux-main] .border-red-300 { border-color: #e05c5c !important; color: #e05c5c !important; }

            /* Inputs y selects del formulario */
            [data-flux-main] input[type="text"],
            [data-flux-main] input[type="date"],
            [data-flux-main] input[type="checkbox"],
            [data-flux-main] select {
                background-color: rgba(39,2,51,0.8) !important;
                border-color: #BF9BC8 !important;
                color: #EECBE2 !important;
            }
            [data-flux-main] label { color: #BF9BC8 !important; }

            /* Fondo del formulario */
            [data-flux-main] .bg-zinc-50 { background-color: rgba(191,155,200,0.05) !important; }
            [data-flux-main] .bg-zinc-900 { background-color: rgba(39,2,51,0.8) !important; }

            /* Fondo tabla header */
            [data-flux-main] .bg-zinc-50 { background-color: rgba(191,155,200,0.08) !important; }

            /* Texto zinc genérico */
            [data-flux-main] .text-zinc-500,
            [data-flux-main] .text-zinc-400 { color: #BF9BC8 !important; opacity: 0.7; }
            [data-flux-main] .text-zinc-700,
            [data-flux-main] .text-zinc-300 { color: #BF9BC8 !important; }
            [data-flux-main] .text-zinc-900,
            [data-flux-main] .text-zinc-100 { color: #EECBE2 !important; }
        </style>
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:sidebar sticky collapsible="mobile" class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.header>
                <x-app-logo :sidebar="true" href="{{ route('dashboard') }}" wire:navigate />
                <flux:sidebar.collapse class="lg:hidden" />
            </flux:sidebar.header>

            <flux:sidebar.nav>
                <flux:sidebar.group :heading="__('Platform')" class="grid">
                    <flux:sidebar.item icon="calendar" :href="route('events.index')" :current="request()->routeIs('events.index')" wire:navigate>
                        Eventos
                    </flux:sidebar.item>
                </flux:sidebar.group>
            </flux:sidebar.nav>

            <flux:spacer />

            <x-desktop-user-menu class="hidden lg:block" :name="auth()->user()->name" />
        </flux:sidebar>

        <!-- Mobile User Menu -->
        <flux:header class="lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:spacer />

            <flux:dropdown position="top" align="end">
                <flux:profile
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevron-down"
                />

                <flux:menu>
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <flux:avatar
                                    :name="auth()->user()->name"
                                    :initials="auth()->user()->initials()"
                                />

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <flux:heading class="truncate">{{ auth()->user()->name }}</flux:heading>
                                    <flux:text class="truncate">{{ auth()->user()->email }}</flux:text>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('profile.edit')" icon="cog" wire:navigate>
                            {{ __('Settings') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item
                            as="button"
                            type="submit"
                            icon="arrow-right-start-on-rectangle"
                            class="w-full cursor-pointer"
                            data-test="logout-button"
                        >
                            {{ __('Log out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:header>

        {{ $slot }}

        @fluxScripts
    </body>
</html>