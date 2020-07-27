<div class="table-responsive">
    <table class="table" id="siswas-table">
        <thead>
            <tr>
                <th>Nis</th>
        <th>Iduser</th>
        <th>Idkelas</th>
        <th>Idprodi</th>
        <th>Tanggal Masuk</th>
        <th>Angkatan Thn</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($siswas as $siswas)
            <tr>
                <td>{{ $siswas->nis }}</td>
            <td>{{ $siswas->iduser }}</td>
            <td>{{ $siswas->idkelas }}</td>
            <td>{{ $siswas->idprodi }}</td>
            <td>{{ $siswas->tanggal_masuk }}</td>
            <td>{{ $siswas->angkatan_thn }}</td>
                <td>
                    {!! Form::open(['route' => ['siswas.destroy', $siswas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('siswas.show', [$siswas->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('siswas.edit', [$siswas->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
