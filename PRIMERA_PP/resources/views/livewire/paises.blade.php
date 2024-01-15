<div>
    {{-- In work, do what you enjoy. --}}
    <x-button class="mb-4" wire:click="recetear">
        Recetear CONTROLADOR
    </x-button>

    <x-button class="mb-4" wire:click="$toggle('open')">
        mostrar / ocultar
    </x-button>

    <form class="mb-4" wire:submit="save">
        <x-input wire:model="pais" aria-placeholder="agregar pais" wire:keydown.space="incrementer" />

        <x-button>agregar </x-button>
    </form>

    @if ($open)
        <ul class="list-disc list-inside space-y-5">
            @foreach ($paises as $index => $pais)
                <li wire:key="pais-{{ $index }}">
                    <span wire:mouseenter="chanseActive('{{ $pais }}')">
                        [{{ $index }}] {{ $pais }}
                    </span>
                    <x-danger-button wire:click="delete({{ $index }})">
                        x
                    </x-danger-button>
                </li>
            @endforeach
        </ul>
       {{ $active }}

        {{ $count }}

    @endif





</div>
