<div class="table-responsive">
    <table class="table" id="gurus-table">
        <thead>
            <tr>
                <th>Nip</th>
                <th>Nama</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($gurus as $guru)
            <tr>
                <td>{{ $guru->nip }}</td>
            <td>{{ $guru->userguru->name }}</td>
                <td>
                    {!! Form::open(['route' => ['gurus.destroy', $guru->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('gurus.show', [$guru->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('gurus.edit', [$guru->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
