    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Moulo De Atencion</th>
            <th>Total De Personas Atendidas</th>
        </tr>
    </thead>
    <tbody>
        @foreach($results as $result)
            @if($result->user->type_id == 2)
            <tr>
                <td>{{ $result->id }}</td>
                <td>{{ $result->user->full_name }}</td>
                <td>{{ $result->user->module }}</td>
                <td>{{ $result->total_calls }}</td>
            </tr>
            @endif
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Moulo De Atencion</th>
            <th>Total De Personas Atendidas</th>
        </tr>
    </tfoot>