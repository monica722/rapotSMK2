<div class="table-responsive">
    <table class="table" id="kelas-table">
        <thead>
            <tr>
                <th>Nama</th>
        <th>Idprodi</th>
        <th>Idwali Kelas</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($kelas as $kelas)
            <tr>
                <td>{{ $kelas->nama }}</td>
            <td>{{ $kelas->idprodi }}</td>
            <td>{{ $kelas->idwali_kelas }}</td>
                <td>
                    {!! Form::open(['route' => ['kelas.destroy', $kelas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('kelas.show', [$kelas->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('kelas.edit', [$kelas->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
