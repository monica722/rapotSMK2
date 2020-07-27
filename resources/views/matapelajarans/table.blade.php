<div class="table-responsive">
    <table class="table" id="matapelajarans-table">
        <thead>
            <tr>
                <th>Nama</th>
        <th>Semester</th>
        <th>Idguru</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($matapelajarans as $matapelajaran)
            <tr>
                <td>{{ $matapelajaran->nama }}</td>
            <td>{{ $matapelajaran->semester }}</td>
            <td>{{ $matapelajaran->idguru }}</td>
                <td>
                    {!! Form::open(['route' => ['matapelajarans.destroy', $matapelajaran->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('matapelajarans.show', [$matapelajaran->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('matapelajarans.edit', [$matapelajaran->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>