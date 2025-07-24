<div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-full">
            <select
                class="bg-gray-150 appearance-none border-2 border-gray-500 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-amber-100 focus:border-blue-500"
                name="" id="" wire:model="agente">
                <option selected>Seleccione</option>
                @foreach ($agentes as $item)
                    <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="md:w-full">
            <input
                class= "appearance-none border-2 border-gray-500 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-amber-100 focus:border-blue-500"
                id="file-xls" name="file-xls" type="File" wire:model="fileXls">
        </div>
    </div>
    <div class="md:flex md:items-center">
        <div class="md:w-full">
            <button
                class="shadow bg-blue-500 hover:bg-blue-300 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                type="button" wire:click="clickImport()">
                Importar
            </button>
        </div>
    </div>
</div>
