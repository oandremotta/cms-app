<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $pageTitle }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <div class="mb-4">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Publicar</button>
                            <button type="button" wire:click="cancelar"
                                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-4">Cancelar</button>
                        </div>
                        <h1 class="text-xl font-bold mb-4">Status Geral</h1>
                        <div class="mb-4">
                            <!-- toggle -->
                            <label class="inline-flex mb-4 items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer" wire:model="status">
                                <div
                                    class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                </div>
                                <span class="ms-3 text-sm font-bold text-gray-900 dark:text-gray-300">
                                    @if ($status)
                                        Ativo
                                    @else
                                        Desativado
                                    @endif
                                </span>
                            </label>
                            <div>
                                <h2 class="font-bold mb-4">Nome</h2>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="mb-4">
                                        <input type="text" id="default-input" wire:model="nome"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h2 class="font-bold mb-4">Tipo</h2>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="mb-4">
                                        <select wire:model="tipo"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            @foreach ($tipos as $tipo)
                                                <option value="$tipo">{{ $tipo }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h2 class="font-bold mb-4">Funcionalidades</h2>
                                <ul>
                                    @foreach ($appFuncionalidades as $funcionalidade)
                                        <li class="mb-2">
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio text-indigo-600"
                                                    wire:model="selectedFuncionalidade"
                                                    value="{{ $funcionalidade->id }}">
                                                <span class="ml-2">{{ $funcionalidade->nome }}</span>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
    <h2 class="font-bold mb-4">Tela Home</h2>
    <!-- Checkbox -->
    <div class="mb-4">
        <label class="inline-flex items-center cursor-pointer">
            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <span class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exibir na tela home?</span>
        </label>
    </div>
    <!-- Radio Group -->
   <div>
   <div>
    <div class="grid grid-cols-2">
        <div>
            <label class="inline-flex items-center cursor-pointer">
                <input type="radio" class="form-radio text-indigo-600" name="block_size" value="pequeno">
                <span class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bloco Pequeno</span>
            </label>
        </div>
        <div class="mb-4">
            <label class="inline-flex items-center cursor-pointer">
                <input type="radio" class="form-radio text-indigo-600" name="block_size" value="grande">
                <span class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bloco Grande</span>
            </label>
        </div>
    </div>
    <div>
    <h2 class="font-bold mb-4">Ordem de exibição</h2>
        <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
</div>

</div>

</div>

            </div>
        </div>
    </div>
</div>
