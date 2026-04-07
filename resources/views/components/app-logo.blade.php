@props([
    'sidebar' => false,
])

@if($sidebar)
    <flux:sidebar.brand name="Vicio" {{ $attributes }}>
        <x-slot name="logo" class="flex aspect-square size-8 items-center justify-center">
            <img src="{{ asset('assets/imgs/LOGO_VICIO.webp') }}" class="size-7 object-contain" alt="Vicio">
        </x-slot>
    </flux:sidebar.brand>
@else
    <flux:brand name="Vicio" {{ $attributes }}>
        <x-slot name="logo" class="flex aspect-square size-8 items-center justify-center">
            <img src="{{ asset('assets/imgs/LOGO_VICIO.webp') }}" class="size-7 object-contain" alt="Vicio">
        </x-slot>
    </flux:brand>
@endif