    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>CR</th>
            <th>IC</th>
            <th>VM</th>
            <th>RC</th>
            <th>OV</th>
            <th>IRT</th>
            <th>ED</th>
            <th>DR</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reports as $report)
            @if($report->user_id <> $id)
                <tr>
                    <td>{{ $id = $report->user_id }}</td>
                    <td>{{ $report->full_name }}</td>
                    @foreach($reports as $report)
                        @if($report->user_id == $id)
                            <td>{{ $report->total_calls_category}}</td>
                        @endif
                    @endforeach
                </tr>
            @endif
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>CR</th>
            <th>IC</th>
            <th>VM</th>
            <th>RC</th>
            <th>OV</th>
            <th>IRT</th>
            <th>ED</th>
            <th>DR</th>
        </tr>
    </tfoot>