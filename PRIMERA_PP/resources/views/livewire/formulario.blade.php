<div>
    <div class="bg-white shadow rounded-lg p-5 ">

        <form wire:submit="save">
            <div class="mb-4">
                <x-label> Nombre </x-label>
                <x-input class="w-full" wire:model="title" required> </x-input>
            </div>

            <div>
                <x-label>
                    Contenido
                </x-label>
                <x-textarea class="w-full" wire:model="content" required> </x-textarea>

            </div>

            <div class="mb-4">
                <x-label>
                    categoria
                </x-label>

                <x-select class="w-full" wire:model="category_id">

                    <option value="" disabled> Seleccione una Categoria</option>

                    @foreach ($categories as $categori)
                        <option value="{{ $categori->id }}">{{ $categori->name }}</option>
                    @endforeach
                </x-select>

            </div>

            <div class="mb-4">
                <x-label>
                    etiquetas
                </x-label>


                <ul>
                    @foreach ($tags as $tag)
                        <li>
                            <label>
                                <x-checkbox wire:model="selectedTags" value="{{ $tag->id }}" />
                                {{ $tag->name }}
                            </label>

                        </li>
                    @endforeach
                </ul>

            </div>
            <div class="flex justify-end">

                <x-button>
                    crear
                </x-button>
            </div>
        </form>
    </div>



    <div class="bg-white shadow rounded-lg p-8 ">

        <ul class="list-disc list-inside space-y-2">
            @foreach ($posts as $post)
                <li class="flex justify-between" wire:key="pos-{{$post->id}}}">

                    {{ $post->title }}


                    <div>
                        <x-button wire:click="edit({{$post->id}})"> Editar</x-button>
                        <x-danger-button>Eliminar</x-danger-button>
                    </div>

                </li>
            @endforeach
        </ul>

    </div>

    @if ($open)
        <div class="bg-gray-800 bg-opacity-25 fixed top-0 left-0 inset-0">
            <div class="py-12">
                <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white shadow rounded-lg p-5 ">

                        <form wire:submit="update">
                            <div class="mb-4">
                                <x-label> Nombre </x-label>
                                <x-input class="w-full"
                                wire:model="pos_edith.title"

                                required> </x-input>
                            </div>

                            <div>
                                <x-label>
                                    Contenido
                                </x-label>
                                <x-textarea class="w-full"
                                wire:model="pos_edith.content"
                                 required> </x-textarea>

                            </div>

                            <div class="mb-4">
                                <x-label>
                                    categoria
                                </x-label>

                                <x-select class="w-full"


                                wire:model="pos_edith.category_id">

                                    <option value="" disabled> Seleccione una Categoria</option>

                                    @foreach ($categories as $categori)
                                        <option value="{{ $categori->id }}">{{ $categori->name }}</option>
                                    @endforeach
                                </x-select>

                            </div>

                            <div class="mb-4">
                                <x-label>
                                    etiquetas
                                </x-label>


                                <ul>
                                    @foreach ($tags as $tag)
                                        <li>
                                            <label>
                                                <x-checkbox wire:model="pos_edith.tags" value="{{ $tag->id }}" />
                                                {{ $tag->name }}
                                            </label>

                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                            <div class="flex justify-end">
                                <x-danger-button class="mr-2"
                                wire:click="$set('open',false)"
                                >cancelar</x-danger-button>

                                <x-button>
                                    actualizar
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>
