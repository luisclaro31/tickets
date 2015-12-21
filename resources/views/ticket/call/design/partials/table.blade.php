<thead>
<tr>
    <th>Turno #</th>
    <th>Nombre de la Persona</th>
    <th>Identificacion</th>
    <th>Tramite</th>
    <th>Llamado Por</th>
    <th>Botones</th>
</tr>
</thead>
<tbody>
@foreach($results as $result)
    <tr data-id="{{ $result->id }}" data-url="{{ route('ticket.student.edit', $result)  }}">
        <td>{{ $result->category->acronym.''.$result->id }} </td>
        <td>{{ $result->full_name }}</td>
        <td>{{ $result->identification }}</td>
        <td>{{ $result->category->description }}</td>
        <td>
            @foreach($result->call as $call)
                {{ $call->user->full_name}}
            @endforeach
        </td>
        <td>
            <a href="{{ route('ticket.call.edit', $result)  }}"><button  type="button" class="btn btn-info btn-sm"> <strong>Atender</strong> </button></a>
        </td>
    </tr>
@endforeach
</tbody>
<tfoot>
<tr>
    <th>Turno #</th>
    <th>Nombre de la Persona</th>
    <th>Identificacion</th>
    <th>Tramite</th>
    <th>Llamado Por</th>
    <th>Botones</th>
</tr>
</tfoot>