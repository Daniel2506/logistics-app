<div>
    <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="origen">
                Origen
            </label>
            <select
                class="bg-gray-150 appearance-none border-2 border-gray-500 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-amber-100 focus:border-blue-500"
                name="origen" id="" wire:model="origen">
                <option selected>Seleccione</option>
                @foreach ($paisOrigen as $item)
                    <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="destino">
                Destino
            </label>
            <select
                class="bg-gray-150 appearance-none border-2 border-gray-500 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-amber-100 focus:border-blue-500"
                name="" id="" wire:model="destino">
                <option selected>Seleccione</option>
                @foreach ($paisDestino as $item)
                    <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-1/3 px-3 mb-3 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                Cantidad 20
            </label>
            <input
                class="bg-gray-150 appearance-none border-2 border-gray-500 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-amber-100 focus:border-blue-500"
                type="number" wire:model="cantidad20">
        </div>

        <div class="w-full md:w-1/3 px-3 mb-3 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                Cantidad 40
            </label>
            <input
                class="bg-gray-150 appearance-none border-2 border-gray-500 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-amber-100 focus:border-blue-500"
                type="number" wire:model="cantidad40">
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-1">
        <div class="w-full md:w-1/3 px-3 mb-3 md:mb-0">
            <button
                class="shadow bg-blue-500 hover:bg-blue-300 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                type="button" wire:click="clickCalcula()">
                Calcula
            </button>
        </div>
    </div>

    @livewire('index-tarifario')

    {{--
    <livewire:index-tarifario :tarifario="$tarifario" /> --}}
</div>
