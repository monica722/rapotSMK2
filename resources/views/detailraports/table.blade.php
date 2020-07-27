<div class="table-responsive">
    <table class="table" id="detailraports-table">
        <thead>
            <tr>
                <th>Idrapot</th>
        <th>Bobotnilai</th>
        <th>Kodenilai</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($detailraports as $detailraport)
            <tr>
                <td>{{ $detailraport->idrapot }}</td>
            <td>{{ $detailraport->bobotnilai }}</td>
            <td>{{ $detailraport->kodenilai }}</td>
                <td>
                    {!! Form::open(['route' => ['detailraports.destroy', $detailraport->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('detailraports.show', [$detailraport->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('detailraports.edit', [$detailraport->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
