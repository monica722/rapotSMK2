<div class="table-responsive">
    <table class="table" id="walikelas-table">
        <thead>
            <tr>
                <th>Idkelas</th>
        <th>Idguru</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($walikelas as $walikelas)
            <tr>
                <td>{{ $walikelas->idkelas }}</td>
            <td>{{ $walikelas->idguru }}</td>
                <td>
                    {!! Form::open(['route' => ['walikelas.destroy', $walikelas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('walikelas.show', [$walikelas->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('walikelas.edit', [$walikelas->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
