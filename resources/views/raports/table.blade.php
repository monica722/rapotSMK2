<div class="table-responsive">
    <table class="table" id="raports-table">
        <thead>
            <tr>
                <th>Idsiswa</th>
        <th>Idmapel</th>
        <th>Idsemester</th>
        <th>Total Nilai Tugas</th>
        <th>Nilai Uts</th>
        <th>Nilai Uas</th>
        <th>Bobot Nilai</th>
        <th>Predikat</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($raports as $raport)
            <tr>
                <td>{{ $raport->idsiswa }}</td>
            <td>{{ $raport->idmapel }}</td>
            <td>{{ $raport->idsemester }}</td>
            <td>{{ $raport->total_nilai_tugas }}</td>
            <td>{{ $raport->nilai_uts }}</td>
            <td>{{ $raport->nilai_uas }}</td>
            <td>{{ $raport->bobot_nilai }}</td>
            <td>{{ $raport->predikat }}</td>
                <td>
                    {!! Form::open(['route' => ['raports.destroy', $raport->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('raports.show', [$raport->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('raports.edit', [$raport->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
