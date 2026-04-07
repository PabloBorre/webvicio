<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.auth-head')
        <style>
            body { background-color: #270233 !important; }
            [data-flux-input] input { background-color: rgba(39,2,51,0.8) !important; border-color: #BF9BC8 !important; color: #EECBE2 !important; }
            [data-flux-input] label { color: #BF9BC8 !important; }
            [data-flux-button][data-variant="primary"] { background-color: #BF9BC8 !important; color: #270233 !important; }
            [data-flux-button][data-variant="primary"]:hover { background-color: #EECBE2 !important; }
            [data-flux-link] { color: #BF9BC8 !important; }
            [data-flux-link]:hover { color: #EECBE2 !important; }
            .text-zinc-600, .text-zinc-400, .dark\:text-zinc-400 { color: #BF9BC8 !important; }
            [data-flux-checkbox] { accent-color: #BF9BC8; }
        </style>
    </head>
    <body class="min-h-screen antialiased" style="background-color: #270233;">
        <div class="flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
            <div class="flex w-full max-w-sm flex-col gap-2">
                <a href="{{ route('home') }}" class="flex flex-col items-center gap-2 font-medium" wire:navigate>
                    <img src="{{ asset('assets/imgs/LOGO_VICIO.webp') }}" class="h-12 object-contain" alt="Vicio">
                </a>
                <div class="flex flex-col gap-6">
                    {{ $slot }}
                </div>
            </div>
        </div>
        @fluxScripts
    </body>
</html>