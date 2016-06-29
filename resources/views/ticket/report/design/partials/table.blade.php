
    <div class="col-xs-3 pull-right">
        {!! Form::model($query, ['route' => 'ticket.report.index', 'method' => 'GET', 'role' => 'search']) !!}
        <div class="input-group input-group-sm">
            {!! Form::date('date', null, ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd']) !!}
            <span class="input-group-btn">
                <button type="submit" class="btn btn-success btn-flat">Filtrar</button>
            </span>
        </div>
        {!! Form::close() !!}
    </div>

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
                <td>{{ $result->user->id }}</td>
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