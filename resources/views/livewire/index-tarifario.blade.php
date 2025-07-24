<div>
    <table class="table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Fecha Cargue</th>
                <th class="px-4 py-2">Agente</th>
                <th class="px-4 py-2">Origen</th>
                <th class="px-4 py-2">Destino</th>
                <th class="px-4 py-2">Flete20</th>
                <th class="px-4 py-2">Flete40st</th>
                <th class="px-4 py-2">Gastos Destino</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tarifario as $key => $item)
                @php
                    $i = $key + 1;
                @endphp
                <tr>
                    <td class="border px-4 py-2">{{ $i }}</td>
                    <td class="border px-4 py-2">{{ $this->getFechasCargue($item['agenteId'])->fecha }}</td>
                    <td class="border px-4 py-2">{{ $item['agente'] }}</td>
                    <td class="border px-4 py-2">{{ $item['origen'] }}</td>
                    <td class="border px-4 py-2">{{ $item['destino'] }}</td>
                    <td class="border px-4 py-2">{{ number_format($item['flete20'], 2, ',', '.') }}</td>
                    <td class="border px-4 py-2">{{ number_format($item['flete40st'], 2, ',', '.') }}</td>
                    <td class="border px-4 py-2">{{ number_format($item['gastosdest'], 2, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
