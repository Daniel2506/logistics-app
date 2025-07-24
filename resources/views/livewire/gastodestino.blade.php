<div>
    <table>
        <thead>
            <tr>
                <th class="px-4 py-2">Agente</th>
                <th class="px-4 py-2">Valor</th>
                <th class="px-4 py-2">Descripción</th>
                <th class="px-4 py-2">Activo</th>
                <th class="px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agentesDestino as $item)
                <tr>
                    <td class="border px-4 py-2">{{ $item->agent->nombre }}</td>
                    <td class="border px-4 py-2">{{ number_format($item->gastodestino, 2, ',', '.') }}</td>
                    <td class="border px-4 py-2">{{ $item->descripcion }}</td>
                    <td class="border px-4 py-2">{{ $item->activo ? 'SI' : 'NO' }}</td>
                    <td class="border px-4 py-2">
                        <a  class="btn btn-green ml-2">  Editar
                            {{-- href="{{ route('gastosdestino.edit', $item->id) }}"> --}}
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
