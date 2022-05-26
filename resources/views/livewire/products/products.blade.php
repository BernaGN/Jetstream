<x-slot name="header">
    <h1 class="text-gray-900">Productos</h1>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lgpx-8">
        <div class="bg-white overflow-hidden shadow-xl sm-rounded-lg px-4py-4">
            @if (session()->has('message'))
                <x-messeges.messege />
            @endif
            <x-buttons.button text="Nuevo" class="font-bold my-3" />
            @if ($modal)
                @include('livewire.products.form')
            @endif
            <x-tables.table :headers="['ID', 'Descripcion', 'Categoria', 'Cantidad', 'Acciones']">
                @foreach ($products as $product)
                    <tr>
                        <x-tables.td :text="$product->id" />
                        <x-tables.td :text="$product->description" />
                        <x-tables.td :text="$product->category->name" />
                        <x-tables.td :text="$product->amount" />
                        <x-tables.td>
                            <x-buttons.button text="Editar" route="edit({{ $product->id }})" bgColor="blue-500"
                                hover="blue-600" />
                            <x-buttons.button text="Borrar" route="destroy({{ $product->id }})" bgColor="red-500"
                                hover="red-600" />
                        </x-tables.td>
                    </tr>
                @endforeach
            </x-tables.table>
        </div>
    </div>
</div>
