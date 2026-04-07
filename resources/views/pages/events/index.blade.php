<?php

use App\Models\Event;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Eventos')] class extends Component {

    public $events = [];

    public ?int $editingId = null;
    public string $venue = 'bro';
    public string $event_date = '';
    public string $label = '';
    public bool $active = true;

    public bool $showForm = false;

    public function mount(): void
    {
        $this->loadEvents();
    }

    public function loadEvents(): void
    {
        $this->events = Event::orderBy('event_date', 'desc')->get()->toArray();
    }

    public function openCreate(): void
    {
        $this->resetForm();
        $this->showForm = true;
    }

    public function openEdit(int $id): void
    {
        $event = Event::findOrFail($id);
        $this->editingId  = $event->id;
        $this->venue      = $event->venue;
        $this->event_date = $event->event_date->format('Y-m-d');
        $this->label      = $event->label ?? '';
        $this->active     = $event->active;
        $this->showForm   = true;
    }

    public function save(): void
    {
        $this->validate([
            'venue'      => 'required|in:bro,playa_aruba',
            'event_date' => 'required|date',
            'label'      => 'nullable|string|max:100',
            'active'     => 'boolean',
        ]);

        $data = [
            'venue'      => $this->venue,
            'event_date' => $this->event_date,
            'label'      => $this->label ?: null,
            'active'     => $this->active,
        ];

        if ($this->editingId) {
            Event::findOrFail($this->editingId)->update($data);
        } else {
            Event::create($data);
        }

        $this->resetForm();
        $this->showForm = false;
        $this->loadEvents();
    }

    public function toggleActive(int $id): void
    {
        $event = Event::findOrFail($id);
        $event->update(['active' => !$event->active]);
        $this->loadEvents();
    }

    public function delete(int $id): void
    {
        Event::findOrFail($id)->delete();
        $this->loadEvents();
    }

    public function cancel(): void
    {
        $this->resetForm();
        $this->showForm = false;
    }

    private function resetForm(): void
    {
        $this->editingId  = null;
        $this->venue      = 'bro';
        $this->event_date = '';
        $this->label      = '';
        $this->active     = true;
    }
}; ?>

<section class="w-full">

    {{-- Cabecera --}}
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h1 class="text-xl font-semibold text-zinc-900 dark:text-white">Eventos</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Gestiona las próximas fechas de Brø Málaga y Playa Aruba.</p>
        </div>
        @if (!$showForm)
           <button wire:click="openCreate"
            class="inline-flex items-center gap-2 rounded-lg px-4 py-2 text-sm font-medium transition"
            style="background-color: #BF9BC8; color: #270233;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Nuevo evento
            </button>
        @endif
    </div>

    {{-- Formulario --}}
    @if ($showForm)
        <div class="mb-8 rounded-lg border border-zinc-200 bg-zinc-50 p-6 dark:border-zinc-700 dark:bg-zinc-900">
            <h2 class="mb-4 text-base font-semibold text-zinc-900 dark:text-white">
                {{ $editingId ? 'Editar evento' : 'Nuevo evento' }}
            </h2>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                {{-- Sala --}}
                <div>
                    <label class="mb-1 block text-sm font-medium text-zinc-700 dark:text-zinc-300">Sala</label>
                    <select wire:model="venue"
                        class="w-full rounded-lg border border-zinc-300 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm focus:border-zinc-500 focus:outline-none dark:border-zinc-600 dark:bg-zinc-800 dark:text-white">
                        <option value="bro">Brø Málaga</option>
                        <option value="playa_aruba">Playa Aruba</option>
                    </select>
                    @error('venue') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                </div>

                {{-- Fecha --}}
                <div>
                    <label class="mb-1 block text-sm font-medium text-zinc-700 dark:text-zinc-300">Fecha</label>
                    <input wire:model="event_date" type="date"
                        class="w-full rounded-lg border border-zinc-300 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm focus:border-zinc-500 focus:outline-none dark:border-zinc-600 dark:bg-zinc-800 dark:text-white">
                    @error('event_date') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                </div>

                {{-- Etiqueta --}}
                <div class="sm:col-span-2">
                    <label class="mb-1 block text-sm font-medium text-zinc-700 dark:text-zinc-300">Etiqueta <span class="text-zinc-400">(opcional)</span></label>
                    <input wire:model="label" type="text" placeholder="Ej: Coming soon, Temporada verano..."
                        class="w-full rounded-lg border border-zinc-300 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm focus:border-zinc-500 focus:outline-none dark:border-zinc-600 dark:bg-zinc-800 dark:text-white">
                    @error('label') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                </div>

                {{-- Activo --}}
                <div class="sm:col-span-2 flex items-center gap-2">
                    <input wire:model="active" type="checkbox" id="active"
                        class="h-4 w-4 rounded border-zinc-300 text-zinc-900 focus:ring-zinc-500 dark:border-zinc-600 dark:bg-zinc-800">
                    <label for="active" class="text-sm text-zinc-700 dark:text-zinc-300">Activo (visible en portada)</label>
                </div>

            </div>

            <div class="mt-6 flex gap-3">
                <button wire:click="save"
                    class="rounded-lg px-4 py-2 text-sm font-medium transition"
                    style="background-color: #BF9BC8; color: #270233;">
                    {{ $editingId ? 'Guardar cambios' : 'Crear evento' }}
                </button>
                <button wire:click="cancel"
                    class="rounded-lg border border-zinc-300 px-4 py-2 text-sm font-medium text-zinc-700 hover:bg-zinc-100 dark:border-zinc-600 dark:text-zinc-300 dark:hover:bg-zinc-800 transition">
                    Cancelar
                </button>
            </div>
        </div>
    @endif

    {{-- Tabla --}}
    @if (count($events) > 0)
        <div class="overflow-hidden rounded-lg border border-zinc-200 dark:border-zinc-700">
            <table class="w-full text-sm">
                <thead class="bg-zinc-50 dark:bg-zinc-900">
                    <tr>
                        <th class="px-4 py-3 text-left font-medium text-zinc-500 dark:text-zinc-400">Sala</th>
                        <th class="px-4 py-3 text-left font-medium text-zinc-500 dark:text-zinc-400">Fecha</th>
                        <th class="px-4 py-3 text-left font-medium text-zinc-500 dark:text-zinc-400">Etiqueta</th>
                        <th class="px-4 py-3 text-left font-medium text-zinc-500 dark:text-zinc-400">Estado</th>
                        <th class="px-4 py-3 text-right font-medium text-zinc-500 dark:text-zinc-400">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">
                    @foreach ($events as $event)
                        <tr class="bg-white dark:bg-zinc-800">
                            <td class="px-4 py-3 font-medium text-zinc-900 dark:text-zinc-100">
                                {{ $event['venue'] === 'bro' ? 'Brø Málaga' : 'Playa Aruba' }}
                            </td>
                            <td class="px-4 py-3 text-zinc-700 dark:text-zinc-300">
                                {{ \Carbon\Carbon::parse($event['event_date'])->format('d/m/Y') }}
                            </td>
                            <td class="px-4 py-3 text-zinc-500 dark:text-zinc-400">
                                {{ $event['label'] ?? '—' }}
                            </td>
                            <td class="px-4 py-3">
                                <button wire:click="toggleActive({{ $event['id'] }})"
                                    class="inline-flex items-center gap-1.5 rounded-full px-2.5 py-0.5 text-xs font-medium transition
                                        {{ $event['active']
                                            ? 'bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400'
                                            : 'bg-zinc-100 text-zinc-500 dark:bg-zinc-700 dark:text-zinc-400' }}">
                                    {{ $event['active'] ? 'Activo' : 'Inactivo' }}
                                </button>
                            </td>
                            <td class="px-4 py-3 text-right">
                                <div class="flex justify-end gap-2">
                                    <button wire:click="openEdit({{ $event['id'] }})"
                                        class="rounded-lg border border-zinc-300 px-3 py-1.5 text-xs font-medium text-zinc-700 hover:bg-zinc-100 dark:border-zinc-600 dark:text-zinc-300 dark:hover:bg-zinc-800 transition">
                                        Editar
                                    </button>
                                    <button wire:click="delete({{ $event['id'] }})"
                                        wire:confirm="¿Eliminar este evento?"
                                        class="rounded-lg border border-red-300 px-3 py-1.5 text-xs font-medium text-red-600 hover:bg-red-50 dark:border-red-700 dark:text-red-400 dark:hover:bg-red-900/20 transition">
                                        Eliminar
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="rounded-lg border border-dashed border-zinc-300 p-12 text-center dark:border-zinc-600">
            <p class="text-base font-medium text-zinc-400">Sin eventos</p>
            <p class="mt-1 text-sm text-zinc-400">Crea el primer evento con el botón de arriba.</p>
        </div>
    @endif

</section>