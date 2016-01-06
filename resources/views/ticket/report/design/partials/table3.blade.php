    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Catagoria</th>
            <th>Cantidad</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reports as $report)
            <tr>
                <td>{{ $id = $report->user_id }}</td>
                <td>{{ $report->full_name }}</td>
                <td>{{ $report->description }}</td>
                <td>{{ $report->total_calls_category}}</td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Catagoria</th>
            <th>Cantidad</th>
        </tr>
    </tfoot>