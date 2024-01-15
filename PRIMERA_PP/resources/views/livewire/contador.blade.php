<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
   <x-button  wire:click="decrement">
    -
   </x-button>
   <span class="mx-4">
      {{$cout}}
   </span>

    <x-button wire:click="increment(2)">
+
    </x-button>
</div>
