<div class="bg-gray-100 p-4">
    @foreach ($modulos as $modulo)
        <div class="bg-white shadow-md rounded-md p-4 mb-4">
            <h2 class="text-xl font-bold">{{ $modulo->nome }}</h2>
            @if ($modulo->filhos->isNotEmpty())
                <div class="mt-4 flex flex-wrap">
                    @foreach ($modulo->filhos as $filho)
                        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 p-2">
                        <a href="{{ url($filho->rota) }}">                            <div class="bg-gray-200 p-4 rounded-md shadow-sm">
                                <div class="flex flex-col items-center justify-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                    <h3 class="text-lg font-semibold">{{ $filho->nome }}</h3>
                                </div>
                            </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500">Nenhum módulo filho encontrado.</p>
            @endif
        </div>
    @endforeach
</div>
